/*******************************************************************************
 * Copyright (c) 2005 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 * 
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/
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
			return new FTPFile(uri.toURL(), Path.ROOT);
		} catch (MalformedURLException e) {
			throw new IllegalArgumentException(e.getMessage());
		}
	}
}
