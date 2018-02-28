<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 23/02/2018
 * Time: 23:11
 */

namespace EK\AssoBundle\Service;


class Utiles
{
	/**
	 * @param $code
	 * @param null $ip
	 * @return bool
	 */
	public function isRecaptchaValid($code, $secret, $ip = null) {
		if (empty($code)) {
			return false;// Si aucun code n'est entré, on ne cherche pas plus loin
		}
		$params = [
			'secret'   => $secret,
			'response' => $code
		];
		if ($ip) {
			$params['remoteip'] = $ip;
		}
		$url = "https://www.google.com/recaptcha/api/siteverify?".http_build_query($params);
		if (function_exists('curl_version')) {
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 1);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);// Evite les problèmes, si le ser
			$response = curl_exec($curl);
		} else {
			// Si curl n'est pas dispo, un bon vieux file_get_contents
			$response = file_get_contents($url);
		}
		
		if (empty($response) || is_null($response)) {
			return false;
		}
		
		$json = json_decode($response);
		return $json->success;
	}
	
	public function get_ip() {
		// IP si internet partagé
		if (isset($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		}
		// IP derrière un proxy
		elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		// Sinon : IP normale
		else {
			return (isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'');
		}
	}
}