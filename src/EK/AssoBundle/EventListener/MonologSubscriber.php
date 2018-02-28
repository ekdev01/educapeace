<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 16/02/2018
 * Time: 19:20
 */

namespace EK\AssoBundle\EventListener;

use FrontBundle\Controller\MonologLoggerController;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MonologSubscriber implements EventSubscriberInterface
{
	/**
	 * @var Logger
	 */
	private $log;
	protected $container;
	
	public function __construct(Container $container)
	{
		// create a log channel
		$this->log = new Logger('file_stream');
		$this->container = $container;
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
		
		if ( $controller[0] instanceof MonologLoggerController )
		{
			$this->log->pushHandler(new StreamHandler('file_stream', Logger::WARNING));
			$this->container->set('logger', $this->log);
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