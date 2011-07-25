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
                xmlns:plan="http://www.eclipse.org/project/plan"
                xmlns:html="http://www.w3.org/1999/xhtml"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:bz="http://www.bugzilla.org/rdf#"
                xmlns:nc="http://home.netscape.com/NC-rdf#"
                xmlns="http://www.w3.org/1999/xhtml"
    exclude-result-prefixes="html plan rdf bz nc" >
    <xsl:output method="xml" indent="yes" encoding="UTF-8" omit-xml-declaration="yes" />
    <xsl:param name="projectName"> 
        <xsl:text>Orion Project</xsl:text>
    </xsl:param>
    <xsl:param name="projectId" select="/plan:plan/plan:release/@projectid"/>
    
    <xsl:include href="project-plan-bugzilla.xsl"/>
    <xsl:include href="url-encode.xsl"/>
    
    <xsl:template match="/plan:plan">
    	<div id="rendered-plan">
                <xsl:apply-templates select="." mode="plan"/>
        </div>
    </xsl:template>
    
    <!-- Start processing the Project Plan -->
    <xsl:template match="plan:plan" mode="plan">
        <div id="maincontent">
            <div id="midcolumn">
                <h1>
                    <span style="font-size: 140%">Project Plan For
                        <a href="http://www.eclipse.org/projects/project_summary.php?projectid={$projectId}">
                            <xsl:value-of select="$projectName"/> 
                        </a>
                    </span>
                    <xsl:text>, version </xsl:text>
                    <xsl:value-of select="plan:release/@version"/>
                </h1>
                
               <div id="toc">
                  <p><a name="toc"><strong>Table of Contents</strong></a></p>
                  <xsl:call-template name="generate-toc"/>
               </div>
                
                <xsl:apply-templates select="plan:*"/>
            </div>
        </div>            
    </xsl:template>
    
    <xsl:template name="generate-toc">
        <ul>
            <li><a href="#introduction">Introduction</a></li>
            <xsl:if test="plan:release_deliverables">
                <li>
                    <a href="#release_deliverables">
                       Release Deliverables
                    </a>
                </li>
            </xsl:if>
            <xsl:if test="plan:release_milestones">
                <li>
                    <a href="#release_milestones">
                       Release Milestones
                    </a>
                </li>
            </xsl:if>
            <xsl:if test="plan:target_environments">
                <li>
                    <a href="#target_environments">
                        Target Environments
                    </a>
                </li>
            </xsl:if>
            <xsl:if test="plan:compatibility_with_previous_releases">
                <li>
                    <a href="#compatibility">
                        Compatibility with Previous Releases
                    </a>
                </li>
            </xsl:if>
            <xsl:if test="plan:themes_and_priorities">
                <li>
                    <a href="#compatibility">
                        Themes and Priorities
                    </a>
                </li>
            </xsl:if>
            <xsl:if test="plan:appendix">
                <li>
                    <a href="#appendix">
                        Appendix
                    </a>
                </li>
            </xsl:if>
        </ul>
    
    </xsl:template>
    
    <xsl:template match="plan:introduction">
        <h2><a name="introduction">Introduction</a></h2>
        <xsl:call-template name="copyNodeorCData">
            <xsl:with-param name="node" select="."/>
        </xsl:call-template>
    </xsl:template>
    
    <xsl:template match="plan:release_deliverables">
        <h2><a name="release_deliverables">Release Deliverables</a></h2>
        <xsl:call-template name="copyNodeorCData">
            <xsl:with-param name="node" select="."/>
        </xsl:call-template>
        <p><a href="#toc">Table of Contents</a></p>
    </xsl:template>
    
    <xsl:template match="plan:release_milestones">
        <h2><a name="release_milestones">Release Milestones</a></h2>
        <xsl:apply-templates select="plan:preamble"/>
        <table border="1" align="center">
            <xsl:apply-templates select="plan:milestone"/>
        </table>
        <xsl:apply-templates select="plan:postamble"/>
        <p><a href="#toc">Table of Contents</a></p>
    </xsl:template>
    
    <xsl:template match="plan:milestone">
        <tr>
            <td>
                <b>
                    <xsl:value-of select="@milestone"/>
                </b>
            </td>
            <td>
                <xsl:value-of select="@date"/>
            </td>
            <td>
                <xsl:call-template name="copyNodeorCData">
                    <xsl:with-param name="node" select="."/>
                </xsl:call-template>
            </td>
        </tr>
    </xsl:template>
    
    <xsl:template match="plan:preamble | plan:postamble">
        <xsl:call-template name="copyNodeorCData">
            <xsl:with-param name="node" select="."/>
        </xsl:call-template>
    </xsl:template>
    
    <xsl:template match="plan:target_environments">
        <h2><a name="target_environments">Target Environments</a></h2>
        <xsl:call-template name="copyNodeorCData">
            <xsl:with-param name="node" select="."/>
        </xsl:call-template>
        <xsl:if test="plan:internationalization">
            <h3>Internationalization</h3>
            <xsl:apply-templates select="plan:internationalization"/>
        </xsl:if>
        <p><a href="#toc">Table of Contents</a></p>
        
    </xsl:template>
    
    <xsl:template match="plan:themes_and_priorities">
        <h2><a name="themes_and_priorities">Themes and Priorities</a></h2>
        <xsl:apply-templates select="plan:theme"/>
        <p><a href="#toc">Table of Contents</a></p>
        
    </xsl:template>
    
    <xsl:template match="plan:theme">
        <h3><xsl:value-of select="@name"/></h3>
        <xsl:if test="plan:description">
            <xsl:apply-templates select="plan:description"/>
        </xsl:if>
        <xsl:if test="plan:committed">
            <ul>
               <xsl:apply-templates select="plan:committed"/>
            </ul>
        </xsl:if>
        <xsl:if test="plan:proposed">
            <ul>
                <xsl:apply-templates select="plan:proposed"/>
            </ul>
        </xsl:if>
        <xsl:if test="plan:deferred">
            <ul>
                <xsl:apply-templates select="plan:deferred"/>
            </ul>
        </xsl:if>
        
    </xsl:template>
    
    <xsl:template match="plan:description">
        <xsl:call-template name="copyNodeorCData">
            <xsl:with-param name="node" select="."/>
        </xsl:call-template>
    </xsl:template>
    
    <xsl:template match="plan:committed">
        <xsl:call-template name="ThemeBugzilla">
            <xsl:with-param name="node" select="."/>
            <xsl:with-param name="section">Committed</xsl:with-param>
        </xsl:call-template>
    </xsl:template>
    
    <xsl:template match="@bugzilla">
        <xsl:variable name="url">https://bugs.eclipse.org/</xsl:variable>
        <xsl:variable name="rdf"><xsl:text>&amp;ctype=rdf&amp;columnlist=bug_id,short_desc,target_milestone,bug_status</xsl:text></xsl:variable>
        <xsl:variable name="actualurl">
            <xsl:call-template name="replaceCharsInString">
                <xsl:with-param name="stringIn">
                    <xsl:call-template name="replaceCharsInString">
                        <xsl:with-param name="stringIn" select="normalize-space(.)"/>
                        <xsl:with-param name="charsIn">%5D</xsl:with-param>
                        <xsl:with-param name="charsOut">]</xsl:with-param>             
                    </xsl:call-template>
                </xsl:with-param>
                <xsl:with-param name="charsIn">%5B</xsl:with-param>
                <xsl:with-param name="charsOut">[</xsl:with-param>             
            </xsl:call-template>
        </xsl:variable>
        <xsl:variable name="test">
            <xsl:value-of select="substring($actualurl, 1, 25)"/>
        </xsl:variable>
        
        <xsl:variable name="bugzillaURL">
            <xsl:choose>
                <xsl:when test="substring($actualurl, 1, 25) = 'https://bugs.eclipse.org/'">
                    <xsl:value-of select="$url"/>
                    <xsl:call-template name="replaceCharsInString">
                        <xsl:with-param name="stringIn">
                            <xsl:call-template name="replaceCharsInString">
                                <xsl:with-param name="stringIn">
                                    <xsl:call-template name="url-encode">
                                        <xsl:with-param name="str" select="substring($actualurl,26)"/>
                                    </xsl:call-template>
                                </xsl:with-param>
                                <xsl:with-param name="charsIn">%265B</xsl:with-param>
                                <xsl:with-param name="charsOut">[</xsl:with-param>             
                            </xsl:call-template>
                        </xsl:with-param>
                        <xsl:with-param name="charsIn">%265D</xsl:with-param>
                        <xsl:with-param name="charsOut">]</xsl:with-param>             
                    </xsl:call-template> 
                    <xsl:value-of select="$rdf"/>
                </xsl:when>
                <xsl:when test="substring($actualurl, 1, 24) = 'http://bugs.eclipse.org/'">
                    <xsl:value-of select="$url"/>
                    <xsl:call-template name="replaceCharsInString">
                        <xsl:with-param name="stringIn">
                            <xsl:call-template name="replaceCharsInString">
                                <xsl:with-param name="stringIn">
                                    <xsl:call-template name="url-encode">
                                        <xsl:with-param name="str" select="substring($actualurl,25)"/>
                                    </xsl:call-template>
                                </xsl:with-param>
                                <xsl:with-param name="charsIn">%265B</xsl:with-param>
                                <xsl:with-param name="charsOut">[</xsl:with-param>             
                            </xsl:call-template>
                        </xsl:with-param>
                        <xsl:with-param name="charsIn">%265D</xsl:with-param>
                        <xsl:with-param name="charsOut">]</xsl:with-param>             
                    </xsl:call-template> 
                    <xsl:value-of select="$rdf"/>
                </xsl:when>
            </xsl:choose>
        </xsl:variable>
        <xsl:choose>
            <xsl:when test="string-length($bugzillaURL) > 0">
                <xsl:apply-templates select="document($bugzillaURL)//bz:bugs"/>
            </xsl:when>
            <xsl:otherwise>
                <html:ul>
                    <html:li>
                        <html:span style="background-color: #FFCCCC; font-weight: bold; font-size: 150%;">
                            Error: url is not a bugs.eclipse.org url
                        </html:span>
                    </html:li>
                </html:ul>                
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
    
    <xsl:template match="plan:proposed">
        <xsl:call-template name="ThemeBugzilla">
            <xsl:with-param name="node" select="."/>
            <xsl:with-param name="section">Proposed</xsl:with-param>
        </xsl:call-template>
    </xsl:template>
    
    <xsl:template match="plan:deferred">
        <xsl:call-template name="ThemeBugzilla">
            <xsl:with-param name="node" select="."/>
            <xsl:with-param name="section">Deferred</xsl:with-param>
        </xsl:call-template>
    </xsl:template>
    
    <xsl:template match="plan:appendix">
        <h2><a name="appendix">Appendix <xsl:value-of select="@name"/></a></h2>
        <xsl:call-template name="copyNodeorCData">
            <xsl:with-param name="node" select="."/>
        </xsl:call-template>
        <p><a href="#toc">Table of Contents</a></p>
        
    </xsl:template>
    
    <xsl:template name="ThemeBugzilla">
        <xsl:param name="node"/>
        <xsl:param name="section"/>

        <li>
            <b><xsl:value-of select="$section"/></b>
                    <xsl:choose>
                        <xsl:when test="@bugzilla">
                            <xsl:apply-templates select="@bugzilla"/>
                        </xsl:when>
                        <xsl:otherwise>
                            <xsl:call-template name="copyNodeorCData">
                                <xsl:with-param name="node" select="."/>
                            </xsl:call-template>
                        </xsl:otherwise>
                    </xsl:choose>
        </li>
    </xsl:template>
    
    <!-- Called Templates these are common routines used by other templates -->
    
    <xsl:template name="copyNodeorCData">
        <xsl:param name="node"/>
        <xsl:apply-templates select="$node/html:*"/>
    </xsl:template>
    
    
    <xsl:template match=" html:a | html:b | html:big | html:body | html:br | html:caption | 
        html:cite | html:code | html:col | html:colgroup | html:dd | html:div | html:dl | html:dt | html:em | html:font | 
        html:form | html:head | html:h1 | html:h2 | html:h3 | html:h4 | html:h5 | html:h6 | html:hr | 
        html:i | html:img | html:link | html:li | html:ol | 
        html:p | html:param | html:pre | html:s | html:small | html:span | html:strong | html:style | 
        html:sub | html:sup | html:td | html:th | html:title | html:tr | html:tt | html:ul | html:var | html:table">
        <xsl:element name="{local-name()}">
            <xsl:copy-of select="@*"/>
            <xsl:apply-templates/>
        </xsl:element>
    </xsl:template>

    <!-- This routine from http://www.dpawson.co.uk/xsl/sect2/replace.html#d9550e61 -->    
    <xsl:template name="replaceCharsInString">
      <xsl:param name="stringIn"/>
      <xsl:param name="charsIn"/>
      <xsl:param name="charsOut"/>
      <xsl:choose>
        <xsl:when test="contains($stringIn,$charsIn)">
          <xsl:value-of select="concat(substring-before($stringIn,$charsIn),$charsOut)"/>
          <xsl:call-template name="replaceCharsInString">
            <xsl:with-param name="stringIn" select="substring-after($stringIn,$charsIn)"/>
            <xsl:with-param name="charsIn" select="$charsIn"/>
            <xsl:with-param name="charsOut" select="$charsOut"/>
          </xsl:call-template>
        </xsl:when>
        <xsl:otherwise>
          <xsl:value-of select="$stringIn"/>
        </xsl:otherwise>
      </xsl:choose>
    </xsl:template>
    
    
</xsl:stylesheet>