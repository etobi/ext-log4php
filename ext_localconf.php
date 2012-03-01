<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

require_once(t3lib_div::getFileAbsFileName('EXT:log4php/Resources/Private/Php/apache-log4php-2.2.1/src/main/php/Logger.php'));

Logger::configure(array(
		'appenders' => array(
			'default' => array(
				'class' => 'LoggerAppenderFile',
				'layout' => array(
					'class' => 'LoggerLayoutPattern',
					'params' => array(
						'conversionPattern' => '%d{Y-m-d H:i:s.u} %c %-5p %m%n',
					)
				),
				'params' => array(
					'file' => PATH_site . 'typo3temp/log4php.log',
					'append' => false
				),
			),
		),
		'rootLogger' => array(
			'appenders' => array('default'),
		),
	));

$logger = Logger::getLogger("default");
$logger->info('Foobar');

?>
