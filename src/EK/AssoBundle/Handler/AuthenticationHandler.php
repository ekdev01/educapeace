<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 19/02/2018
 * Time: 21:38
 */

namespace EK\AssoBundle\Handler;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;


class AuthenticationHandler implements AuthenticationFailureHandlerInterface, LogoutSuccessHandlerInterface, AuthenticationSuccessHandlerInterface
{
	
	private $router;
	private $userManager;
	protected $translator;
	protected $container;
	
	public function __construct(RouterInterface $router, $userManager, $translator, Container $container)
	{
		$this->router = $router;
		$this->userManager = $userManager;
		$this->translator = $translator;
		$this->container = $container;
	}
	/**
	 * @param Request        $request
	 * @param TokenInterface $token
	 * @return RedirectResponse|Response
	 */
	public function onAuthenticationSuccess(Request $request, TokenInterface $token)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("AuthenticationHandler->onAuthenticationSuccess()");
		
		if ($request->isXmlHttpRequest()) {
			$targetUrl = $request->getSession()->get('_security.target_path');
			$result = array('success' => true, 'targetUrl' => $targetUrl );
			$response = new Response(json_encode($result));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		}
		else {
			// Create a flash message with the authentication error message
			$request->getSession()->getFlashBag()->set('error', 'Veuillez-vous identifier');
			$url = $this->router->generate('fos_user_security_login');
			
			return new RedirectResponse($url);
		}
	}
	/**
	 * @param Request                 $request
	 * @param AuthenticationException $exception
	 * @return Response
	 */
	public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("AuthenticationHandler->onAuthenticationFailure()");
		
		$result = array(
			'success' => false,
			'function' => 'onAuthenticationFailure',
			'error' => true,
			'message' => $this->translator->trans($exception->getMessage(), array(), 'FOSUserBundle')
		);
		$response = new Response(json_encode($result));
		$response->headers->set('Content-Type', 'application/json');
		
		$logger->var_dump_log($result, "result = ");
		
		return $response;
	}
	/**
	 * @param Request $request
	 */
	public function onLogoutSuccess(Request $request)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("AuthenticationHandler->onLogoutSuccess()");
		
		// TODO: Implement onLogoutSuccess() method.
	}
}
