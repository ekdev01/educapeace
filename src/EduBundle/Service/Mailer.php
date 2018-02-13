<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 13/02/2018
 * Time: 00:52
 */
namespace EduBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Mailer
{
	
	private $container;
	
	public function __construct(Container $container)
	{
		$this->container = $container;
	}
	/**
	 * @param array $data
	 * @param       $mailTo
	 * @return bool
	 */
	public function sendMailConfirmAdhesion(array $data, $mailTo)
	{
		
		$emailBody = $this->container->get('templating')->renderResponse('EduBundle:Mail:confirmationAdhesion.html.twig', array(
			'data' => $data
		));
		$emailBody = implode("\n", array_slice(explode("\n", $emailBody), 4));
		$message = \Swift_Message::newInstance()
			->setFrom(array('no-reply@educapeace.com' => 'Educapeace'))
			->setSubject("Educapeace - Confimation adhésion")
			->setTo($mailTo)
			->setBody($emailBody);
		
		$message->setContentType("text/html");
		$result = $this->container->get('mailer')->send($message);
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
	public function sendMailConfirmCommand(array $data, $mailTo)
	{
		$emailBody = $this->container->get('templating')->renderResponse('EduBundle:Mail:confirmationCommand.html.twig', array(
			'data' => $data
		));
		$emailBody = implode("\n", array_slice(explode("\n", $emailBody), 4));
		$message = \Swift_Message::newInstance()
			->setFrom(array('no-reply@educapeace.com' => 'Educapeace'))
			->setSubject("Educapeace - Confimation commande")
			->setTo($mailTo)
			->setBody($emailBody);
		
		$message->setContentType("text/html");
		$result = $this->container->get('mailer')->send($message);
		if($result){
			return true;
		}
		return false;
	}
}