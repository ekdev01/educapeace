<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 13/02/2018
 * Time: 00:52
 */
namespace EK\AssoBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Mailer
{
	
	private $container;
	
	public function __construct(Container $container)
	{
		$this->container  = $container;
	}
	/**
	 * @param array $data
	 * @param       $mailTo
	 * @return bool
	 */
	public function sendMailConfirmAdhesion(array $data, $mailTo, $subject)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("Mailer->sendMailConfirmAdhesion()");
		
		$emailBody = $this->container->get('templating')->renderResponse('AssoBundle:Mail:confirmationAdhesion.html.twig', array(
			'data' => $data
		));
		$emailBody = implode("\n", array_slice(explode("\n", $emailBody), 4));
		$message = \Swift_Message::newInstance()
			->setFrom(array('no-reply@educapeace.com' => 'Educapeace'))
			->setSubject("Educapeace - ". $subject)
			->setTo($mailTo)
			->setBody($emailBody);
		
		$message->setContentType("text/html");
		$result = $this->container->get('mailer')->send($message);
		
		$logger->log("Mailer->sendMailConfirmAdhesion() - statut send mail : '". $result ."'");
		
		if($result){
			return true;
		}
		return false;
	}
	/**
	 * @param array $data
	 * @param       $mailTo
	 * @return bool
	 */
	public function sendMailConfirmCommand(array $data, $mailTo, $subject)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("Mailer->sendMailConfirmCommand()");
		
		$emailBody = $this->container->get('templating')->renderResponse('AssoBundle:Mail:confirmationCommand.html.twig', array(
			'data' => $data
		));
		$emailBody = implode("\n", array_slice(explode("\n", $emailBody), 4));
		$message = \Swift_Message::newInstance()
			->setFrom(array('no-reply@educapeace.com' => 'Educapeace'))
			->setSubject("Educapeace - ". $subject)
			->setTo($mailTo)
			->setBody($emailBody);
		
		$message->setContentType("text/html");
		$result = $this->container->get('mailer')->send($message);
		
		$logger->log("Mailer->sendMailConfirmCommand() - statut send mail : '". $result ."'");
		
		if($result){
			return true;
		}
		return false;
	}
	/**
	 * @param array $data
	 * @return bool
	 */
	public function sendMail(array $data)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("Mailer->sendMail()");
		
		$emailBody = $this->container->get('templating')->renderResponse('AssoBundle:Mail:contact.html.twig', array(
			'data' => $data
		));
		$emailBody = implode("\n", array_slice(explode("\n", $emailBody), 4));
		$message = \Swift_Message::newInstance()
			->setFrom(array($data['email'] => 'Conact site'))
			->setSubject("Educapeace - ". $data['subject'])
			->setTo(['morebikin@gmail.com','educapeace@gmai.com'])
			->setBody($emailBody);
		
		$message->setContentType("text/html");
		$result = $this->container->get('mailer')->send($message);
		
		$logger->log("Mailer->sendMail() - statut send mail : '". $result ."'");
		
		if($result){
			return true;
		}
		return false;
	}
}