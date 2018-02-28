<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 23/02/2018
 * Time: 22:46
 */

namespace EK\AssoBundle\Entity;


class Contact
{
	protected $email;
	protected $subject;
	protected $body;
	
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * @param $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}
	/**
	 * @return mixed
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * @param $subject
	 */
	public function setSubject($subject)
	{
		$this->subject = $subject;
	}
	/**
	 * @return mixed
	 */
	public function getBody()
	{
		return $this->body;
	}
	/**
	 * @param $body
	 */
	public function setBody($body)
	{
		$this->body = $body;
	}
}

