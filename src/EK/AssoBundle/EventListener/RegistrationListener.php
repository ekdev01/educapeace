<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 21/02/2018
 * Time: 02:50
 */

namespace EK\AssoBundle\EventListener;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\Container;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Form;

class RegistrationListener implements EventSubscriberInterface
{
	private $router;
	protected $translator;
	protected $container;
	
	public function __construct(RouterInterface $router, Container $container, $translator)
	{
		$this->router     = $router;
		$this->translator = $translator;
		$this->container  = $container;
	}
	
	public static function getSubscribedEvents()
	{
		return [
			FOSUserEvents::REGISTRATION_SUCCESS   => 'onRegistrationSuccess',
			FOSUserEvents::REGISTRATION_CONFIRMED => 'onRegistrationConfirmed',
			FOSUserEvents::REGISTRATION_CONFIRM   => 'onRegistrationConfirm',
			FOSUserEvents::REGISTRATION_FAILURE   => 'onRegistrationFailure'
		];
	}
	/**
	 * @param FormEvent $event
	 */
	public function onRegistrationSuccess(FormEvent $event)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("RegistrationListener->onRegistrationSuccess()");
		
		$roles = [
			'ROLE_USER'
		];
		
		// Before the persistance
		$user = $event->getForm()->getData();
		$user->setRoles($roles);
	}
	/**
	 * @param FormEvent $event
	 * @return RedirectResponse
	 */
	public function onRegistrationConfirmed(FormEvent $event)
	{
		$mailer = $this->container->get('front.mailer');
		$logger = $this->container->get('front.util_logger');
		
		$logger->log("RegistrationListener->onRegistrationConfirmed()");
		
		$user = $event->getForm()->getData();
		
		// Send mail confirmation
		$subject = $this->translator->trans('label.subject.confirm.adhesion');
		$data    = [
			'firstname' => 'Ouasiré',
			'login'     => $user->getUsername(),
			'password'  => $user->getPlainPassword()
		];
		$mailer->sendMailConfirmAdhesion($data, $user->getEmail(), $subject);
		
		$logger->log("RegistrationListener->onRegistrationConfirmed() - Email = ". $user->getEmail());
		$logger->log("RegistrationListener->onRegistrationConfirmed() - Redirection to home");
		
		// Redirection to home
		$url = $this->container->get('router')->generate('home_page', array('data' => $data));
		return new RedirectResponse($url);
	}
	/**
	 * @param FormEvent $event
	 * @return RedirectResponse
	 */
	public function onRegistrationConfirm(FormEvent $event)
	{
		$mailer = $this->container->get('front.mailer');
		$logger = $this->container->get('front.util_logger');
		
		$logger->log("RegistrationListener->onRegistrationConfirm()");
		
		$user = $event->getForm()->getData();
		
		// Send mail confirmation
		$subject = $this->translator->trans('label.subject.confirm.adhesion');
		$data    = [
			'firstname' => 'Ouasiré',
			'login'     => $user->getUsername(),
			'password'  => $user->getPlainPassword()
		];
		$mailer->sendMailConfirmAdhesion($data, $user->getEmail(), $subject);
		
		$logger->log("RegistrationListener->onRegistrationConfirm() - Email = ". $user->getEmail());
		$logger->log("RegistrationListener->onRegistrationConfirm() - Redirection to home");
		
		// Redirection to home
		$url = $this->container->get('router')->generate('home_page', array('data' => $data));
		return new RedirectResponse($url);
	}
	/**
	 * @param FormEvent $event
	 * @return Response
	 */
	public function onRegistrationFailure(FormEvent $event)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("RegistrationListener->onRegistrationFailure()");
		
		//$str_errors = (string) $event->getForm()->getErrors(true, false);
		$errors = $this->getErrorMessages($event->getForm());
		
		$result = array(
			'success'  => false,
			'function' => 'onRegistrationFailure',
			'error'    => true,
			'message'  => $this->translator->trans((string)$errors[0], array(), 'FOSUserBundle'),
		);
		
		$logger->var_dump_log($result, "result = ");
		
		$response = new Response(json_encode($result));
		$response->headers->set('Content-Type', 'application/json');
		
		return $response;
	}
	/**
	 * @param Form $form
	 * @return array|null
	 */
	private function getErrorMessages(Form $form) {
		$logger = $this->container->get('front.util_logger');
		$logger->log("RegistrationListener->getErrorMessages()");
		$errors = array();
		try{
			if ($form->isValid()) {
				foreach ($form->all() as $child) {
					if (!$child->isValid()) {
						$errors[$child->getName()] = $this->getErrorMessages($child);
					}
				}
			} else {
				foreach ($form->getErrors() as $key => $error) {
					$errors[] = $error->getMessage();
				}
			}
			$logger->var_dump_log($errors, "errors = ");
			return $errors;
		}
		catch (Exception $e) {
			$msgError = $e->getMessage();
			$logger->var_dump_log($msgError, "msgError = ");
			return null;
		}
	}
}