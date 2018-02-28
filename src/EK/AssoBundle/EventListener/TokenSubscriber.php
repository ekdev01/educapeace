<?php
/**
 * Created by PhpStorm.
 * Classe ecouteur d'evenement
 * User: ekdevcenter
 * Date: 16/02/2018
 * Time: 16:41
 */

namespace EK\AssoBundle\EventListener;

use FrontBundle\Controller\TokenAuthenticatedController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\HttpKernel\KernelEvents;

class TokenSubscriber implements EventSubscriberInterface
{
	
	/**
	 * @var TokenStorage
	 */
	private $tokenStorage;
	
	public function __construct(TokenStorage $tokenStorage)
	{
		$this->tokenStorage = $tokenStorage;
	}
	/**
	 * What we do once the event is captured
	 * @param FilterControllerEvent $event
	 */
	public function onKernelController(FilterControllerEvent $event)
	{
		$controller = $event->getController();
		
		/*
		 * $controller passed can be either a class or a Closure.
		 * This is not usual in Symfony but it may happen.
		 * If it is a class, it comes in array format
		 */
		if (!is_array($controller)) {
			return ;
		}
		
		if ( $controller[0] instanceof TokenAuthenticatedController )
		{
			$token = $event->getRequest()->query->get( 'token');
			
			if(!($token == $this->tokenStorage->getToken()))
			{
				// Or redirection to page log in
				throw new AccessDeniedHttpException ( 'This action needs a valid token!' );
			}
		}
	}
	/**
	 * We declare the event we wish to follow or capture
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		return array(
			KernelEvents::CONTROLLER => 'onKernelController',
		);
	}
}