<?php

/**
 * @file plugins/themes/human/humanThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class humanThemePlugin
 * @ingroup plugins_themes_human
 *
 * @brief "human" theme plugin
 */

import('classes.plugins.ThemePlugin');

class humanThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'humanThemePlugin';
	}

	function getDisplayName() {
		return 'human Theme';
	}

	function getDescription() {
		return 'Light, plain, spacious layout';
	}

	function getStylesheetFilename() {
		return 'human.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
