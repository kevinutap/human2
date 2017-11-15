<?php

/**
 * @file plugins/themes/human2/human2ThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class human2ThemePlugin
 * @ingroup plugins_themes_human2
 *
 * @brief "human2" theme plugin
 */

import('classes.plugins.ThemePlugin');

class human2ThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'human2ThemePlugin';
	}

	function getDisplayName() {
		return 'human2 Theme';
	}

	function getDescription() {
		return 'Light, plain, spacious layout';
	}

	function getStylesheetFilename() {
		return 'human2.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
