
	/**
	 * @var Logger
	 */
	protected $logger;

	/**
	 * @param Tx_Log4php_Manager_LogManager $logManager
	 * @return void
	 */
	public function injectLogger(Tx_Log4php_Manager_LogManager $logManager) {
		$this->logger = $logManager->getLoggerForClass(get_called_class());
	}