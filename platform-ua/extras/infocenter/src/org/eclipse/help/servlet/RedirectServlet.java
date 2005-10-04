/*******************************************************************************
 * Copyright (c) 2000, 2003 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 * 
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/
package org.eclipse.help.servlet;

import java.io.*;
import java.net.*;
import java.util.Enumeration;

import javax.servlet.ServletException;
import javax.servlet.http.*;

/**
 * Servlet to interface client with Eclipse help service
 */
public class RedirectServlet extends HttpServlet {
	private static final String INITPARAM_NAME_URL = "HELP_SERVICE_URL";
	private String helpServiceURL;

	/**
	* @see javax.servlet.http.HttpServlet#void (javax.servlet.http.HttpServletRequest, javax.servlet.http.HttpServletResponse)
	*/
	public void doGet(HttpServletRequest req, HttpServletResponse resp)
		throws ServletException, IOException {

		try {
			String servletPath = req.getServletPath();
			if (servletPath == null) {
				servletPath = "";
			}
			String pathInfo = req.getPathInfo();
			if (pathInfo == null) {
				pathInfo = "";
			}
			String queryString = req.getQueryString();
			String query;
			if (queryString == null) {
				query = "";
			} else {
				query = "?" + queryString;
			}
			String resource = servletPath + pathInfo + query;
			if (resource.startsWith("/control.html")) {
				resp.sendError(resp.SC_FORBIDDEN, "");
				return;
			}
			URL redirectURL = new URL(helpServiceURL + resource);
			HttpURLConnection conn =
				(HttpURLConnection) redirectURL.openConnection();
			conn.setInstanceFollowRedirects(false);
			conn.setUseCaches(false);
			// Pass request headers
			transferRequestHeaders(req, conn);
			// Pass response code
			int respCode = conn.getResponseCode();
			if (respCode == -1) {
				throw new IOException("Invalid HTTP response");
			} else {
				resp.setStatus(respCode);
			}
			// Pass response headers
			transferResponseHeaders(req, conn, resp);
			// Pass contents
			if (200 <= respCode && 204 != respCode) {
				InputStream is = conn.getInputStream();
				OutputStream os = resp.getOutputStream();
				transferContent(is, os);
			}
		} catch (IOException ioe) {
			throw ioe;
		} catch (Exception e) {
			throw new ServletException(e);
		}

	}
	/**
	* @see javax.servlet.http.HttpServlet#void (javax.servlet.http.HttpServletRequest, javax.servlet.http.HttpServletResponse)
	*/
	public void doPost(HttpServletRequest req, HttpServletResponse resp)
		throws ServletException, IOException {
		resp.sendError(resp.SC_FORBIDDEN);
	}

	/**
	* @see javax.servlet.GenericServlet#void ()
	*/
	public void init() throws ServletException {
		super.init();
		helpServiceURL = getInitParameter("HELP_SERVICE_URL");
		if (helpServiceURL == null) {
			throw new ServletException("Init parameter helpServiceURL is missing.");
		}
		try {
			new URL(helpServiceURL);
		} catch (MalformedURLException mue) {
			throw new ServletException("Init parameter helpServiceURL is not valid.");
		}
		if (helpServiceURL.endsWith("/")) {
			helpServiceURL =
				helpServiceURL.substring(0, helpServiceURL.length() - 1);
		}
	}

	private String getHeaderValue(String header, HttpServletRequest req) {
		Enumeration values = req.getHeaders(header);
		StringBuffer value = new StringBuffer();
		while (values.hasMoreElements()) {
			String v = (String) values.nextElement();
			if (value.length() == 0)
				value.append(v);
			else
				value.append(',').append(v);
		}
		return value.toString();
	}
	/**
	 * Write the body to the response
	 */
	private void transferContent(InputStream inputStream, OutputStream out)
		throws IOException {
		// Prepare the input stream for reading
		BufferedInputStream dataStream = new BufferedInputStream(inputStream);

		// Create a fixed sized buffer for reading.
		// We could create one with the size of availabe data...
		byte[] buffer = new byte[4096];
		int len = 0;
		while (true) {
			len = dataStream.read(buffer); // Read file into the byte array
			if (len == -1)
				break;
			out.write(buffer, 0, len);
		}
	}

	/**
	 * Transfers request headers
	 * from HttpServletRequest to HttpURLConnection
	 */
	private void transferRequestHeaders(
		HttpServletRequest req,
		HttpURLConnection conn) {
		Enumeration headers = req.getHeaderNames();
		while (headers.hasMoreElements()) {
			String header = (String) headers.nextElement();
			String value = getHeaderValue(header, req);
			conn.setRequestProperty(header, value);
			//System.out.println("request: "+header+"="+value);
		}

	}
	/**
	 * Transfers selected response headers
	 * from HttpURLConnection to HttpServletResponse
	 */
	private void transferResponseHeaders(
		HttpServletRequest req,
		HttpURLConnection conn,
		HttpServletResponse resp) {
		// Pass response headers
		int i = 1;
		for (String key = conn.getHeaderFieldKey(i);
			key != null;
			key = conn.getHeaderFieldKey(i)) {
			String value = conn.getHeaderField(i);
			//System.out.println("responseold: "+key+"="+value);
			if ("Content-Type".equalsIgnoreCase(key)) {
				resp.setHeader(key, value);
				//System.out.println("responsenew: "+key+"="+value);
			} else if ("Location".equalsIgnoreCase(key)) {
				// change Eclipse webapp context path to this context path
				resp.setHeader(key, translateLocationContext(req, value));
				//System.out.println("responsenew: "+key+"="+translateLocationContext(req, value));
			} else if ("Set-Cookie".equalsIgnoreCase(key)) {
				// change Eclipse webapp context path to this context path
				resp.setHeader(key, translateCookieContext(req, value));
				//System.out.println("responsenew: "+key+"="+translateCookieContext(req, value));
			}
			i++;
		}
	}
	/**
	 * For     Set-Cookie: NAME=VALUE; expires=DATE;path=/help*; domain=DOMAIN_NAME; secure
	 * Returns Set-Cookie: NAME=VALUE; expires=DATE;path=/redirectWar*; domain=DOMAIN_NAME; secure
	 */
	private String translateCookieContext(
		HttpServletRequest req,
		String value) {
		String lowerCaseValue = value.toLowerCase();
		int pathIx = lowerCaseValue.indexOf("path=");
		if (pathIx < 0 || pathIx + "path=".length() + 1 >= value.length()) {
			return value;
		}
		pathIx = pathIx + "path=".length();
		StringBuffer translatedCookie =
			new StringBuffer(value.substring(0, pathIx));

		int semicolonIx = value.indexOf(';', pathIx);
		String path;
		String rest;
		if (semicolonIx >= 0) {
			path = value.substring(pathIx, semicolonIx);
			rest = value.substring(semicolonIx);
		} else {
			path = value.substring(pathIx);
			rest = "";
		}

		if (path.charAt(0) == '/' && path.length() > 1) {
			int slashIx = path.indexOf('/', 1);
			if (slashIx > 0) {
				// /help*
				path = req.getContextPath() + path.indexOf(slashIx);
			} else {
				// /help
				path = req.getContextPath();
			}
		}

		translatedCookie.append(path);
		translatedCookie.append(rest);
		return translatedCookie.toString();
	}
	/**
	 * For     http://host:port/help/path
	 * Returns http://host:port/redirectWar/path
	 */
	private String translateLocationContext(
		HttpServletRequest req,
		String url) {
		int protocolAndHostIx = url.indexOf("http://");
		if (protocolAndHostIx != 0 || url.length() <= "http://".length()) {
			// not http protocol or no host
			return url;
		}
		int contextSlashIx = url.indexOf('/', "http://".length());
		if (contextSlashIx < 0 || contextSlashIx + 1 >= url.length()) {
			// no context or context is /
			return url;
		}
		String translatedHostAndContext =
			url.substring(0, contextSlashIx) + req.getContextPath();
		// http://host[:port]/redirectWar
		int slashAndPathIx = url.indexOf('/', contextSlashIx + 1);
		if (slashAndPathIx < 0) {
			// no path
			return translatedHostAndContext;
		} else {
			return translatedHostAndContext + url.substring(slashAndPathIx);
		}
	}
}
