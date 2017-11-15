<?php

/**
 * @defgroup plugins_themes_human
 */

/**
 * @file plugins/themes/human/index.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_human
 * @brief Wrapper for "human" theme plugin.
 *
 */

require_once('humanThemePlugin.inc.php');

return new humanThemePlugin();

?>
