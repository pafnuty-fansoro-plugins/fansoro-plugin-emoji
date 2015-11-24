<?php

/**
 *  Emoji plugin for Morfy
 *
 * @package    Morfy
 * @subpackage Plugins
 * @author     Pavel Belousov / pafnuty
 * @version    1.0.0
 * @license    https://github.com/pafnuty-morfy-plugins/morfy-plugin-emoji/blob/master/LICENSE MIT
 *
 */


Action::add(
	'theme_header', function () {
		echo '<link rel="stylesheet" href="' . Url::getBase() . '/plugins/emoji/assets/css/emoji.css">';
}
);
Action::add(
	'theme_footer', function () {
		echo '<script src="' . Url::getBase() . '/plugins/emoji/assets/js/emojify.min.js"></script>';
		echo '<script src="' . Url::getBase() . '/plugins/emoji/assets/js/emoji.js"></script>';
}
);