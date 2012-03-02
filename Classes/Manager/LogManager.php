<?php

class Tx_Log4php_Manager_LogManager implements t3lib_Singleton {

	/**
	 * @param $className
	 * @return Logger
	 */
	public function getLoggerForClass($className) {
		$classNameParts = explode('_', $className);
		array_shift($classNameParts);

		$loggerName = 'typo3';
		foreach ($classNameParts as $part) {
			$loggerName .= '.' . strtolower($part);
		}

		return Logger::getLogger($loggerName);
	}
}