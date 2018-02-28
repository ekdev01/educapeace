<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 16/02/2018
 * Time: 15:40
 */

namespace EK\AssoBundle\Service;

class UtilsLog
{
	/**
	 * @var string
	 */
	private $pathlog;
	
	public function __construct($filelog)
	{
		$this->pathlog = $filelog;
		// Active log
		error_reporting(E_ALL);
		ini_set("log_errors", true);
		ini_set("//error_log", $this->pathlog);
	}
	/**
	 * Log the result of the var_dum in the log file
	 * @param null $object
	 * @param $file
	 */
	public function var_dump_log( $object=null, $msg){
		ob_start();
		var_dump( $object );
		$contents = ob_get_contents();
		ob_end_clean();
		$this->log($msg);
		error_log($contents, 3,  $this->pathlog);
	}
	/**
	 * Log the trace in the log file
	 * @param null $object
	 * @param $file
	 */
	public function log($log){
		error_log($log ."<br>\n", 3,  $this->pathlog);
	}
}
