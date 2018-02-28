<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 16/02/2018
 * Time: 19:58
 */
namespace EK\AssoBundle\Utils;

interface UtilsLogInterface
{
	public function var_dump_log($object=null);
	public function log($log);
	public function active_error_log();
}