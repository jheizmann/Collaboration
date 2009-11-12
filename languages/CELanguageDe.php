<?php
/*  Copyright 2009, ontoprise GmbH
 *  This file is part of the Collaboration-Extension.
 *
 *   The Collaboration-Extension is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   The Collaboration-Extension is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
/**
 * @author Markus Krötzsch
 * 
 * modified by Benjamin Langguth
 */

global $cegIP;
include_once($cegIP . '/languages/CELanguage.php');

class CELanguageDe extends CELanguage {

	protected $ceUserMessages = array(
		'ce_key' => 'value',
	);

	protected $ceNamespaces = array(
		NS_CE_COMMENT			=> 'Kommentar',
		NS_CE_COMMENT_TALK	=> 'Kommentar_talk', #???
	);

	protected $ceNamespaceAliases = array(
		'Kommentar'			=> NS_CE_COMMENT,
		'Kommentar_talk'	=> NS_CE_COMMENT_TALK, #???
	);
}