/**********************************************************************
 * Copyright (c) 2005, 2006 IBM Corporation and others. All rights reserved.   This
 * program and the accompanying materials are made available under the terms of
 * the Common Public License v1.0 which accompanies this distribution, and is
 * available at http://www.eclipse.org/legal/cpl-v10.html
 * 
 * Contributors: 
 * IBM - Initial API and implementation
 * Tianchao Li (lit@in.tum.de) - Partially fix bug #137878
 **********************************************************************/
package org.eclipse.core.internal.filesystem.ftp;

import java.net.MalformedURLException;
import java.net.URI;
import org.eclipse.core.filesystem.IFileStore;
import org.eclipse.core.filesystem.IFileSystem;
import org.eclipse.core.filesystem.provider.FileSystem;
import org.eclipse.core.runtime.Path;

/**
 * File system implementation for the "ftp" URI scheme.
 */
public class FTPFileSystem extends FileSystem {
	private static IFileSystem instance;

	public static IFileSystem getInstance() {
		return instance;
	}

	public FTPFileSystem() {
		super();
		instance = this;
	}

	public IFileStore getStore(URI uri) {
		try {
			return new FTPFile(uri.toURL(), Path.EMPTY);
		} catch (MalformedURLException e) {
			throw new IllegalArgumentException(e.getMessage());
		}
	}
}
