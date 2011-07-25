<?xml version="1.0" encoding="UTF-8"?>
<!--
    /*******************************************************************************
     * Copyright (c) 2008 Standards for Technology in Automotive Retail and others
     * All rights reserved. This program and the accompanying materials
     * are made available under the terms of the Eclipse Public License v1.0 
     * which accompanies this distribution, and is available at 
     * http://www.eclipse.org/legal/epl-v10.html
     *
     * Contributors:
     *    David Carver (STAR) - bug 243303 - initial API and implementation
     *******************************************************************************/
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:bz="http://www.bugzilla.org/rdf#"
                xmlns:nc="http://home.netscape.com/NC-rdf#"
                xmlns="http://www.w3.org/1999/xhtml"
                exclude-result-prefixes="rdf bz nc">
    <!-- 
        This process the RDF file returned from the bugzilla query when ctype=rdf is
        specified.    
     -->
     
	<xsl:template match="bz:bugs">
        <xsl:choose>
            <xsl:when test="rdf:Seq/rdf:li/bz:bug">
                <ul>
                    <xsl:apply-templates select="rdf:Seq/rdf:li/bz:bug"/>
                </ul>            
            </xsl:when>
            <xsl:otherwise>
               <ul>
                   <li>
                        <div>
                            <xsl:text>No items.</xsl:text>
                        </div>
                    </li>
               </ul>
            </xsl:otherwise>
        </xsl:choose>
	</xsl:template>
    
    <xsl:template match="bz:bug">
        <li>
            <xsl:value-of select="bz:short_desc"/>
            <xsl:text> [</xsl:text>
            <a href="http://bugs.eclipse.org/{bz:id}">
                <xsl:value-of select="bz:id"/>
            </a>
            <xsl:text>] </xsl:text>
            <xsl:choose>
                <xsl:when test="bz:bug_status = 'RESOLVED' or bz:bug_status = 'VERIFIED' or bz:bug_status = 'CLOSED'">
                    <strike>
                        <xsl:text>(target milestone: </xsl:text>
                        <xsl:value-of select="bz:target_milestone"/>
                        <xsl:text>)</xsl:text>
                    </strike>    
                </xsl:when>
                <xsl:otherwise>
                    <xsl:text>(target milestone: </xsl:text>
                    <xsl:value-of select="bz:target_milestone"/>
                    <xsl:text>)</xsl:text>
                </xsl:otherwise>
            </xsl:choose>
       </li>            
    </xsl:template>
    
</xsl:stylesheet>