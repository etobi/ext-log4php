<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

require_once(t3lib_div::getFileAbsFileName('EXT:log4php/Resources/Private/Php/apache-log4php-2.2.1/src/main/php/Logger.php'));

$extConf = unserialize($TYPO3_CONF_VARS['EXT']['extConf'][$_EXTKEY]);
Logger::configure($extConf['configFile']);

/*
$logger = Logger::getLogger("default");
$logger->info('Foobar');
*/

?>
