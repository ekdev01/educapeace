<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 23/02/2018
 * Time: 02:12
 */

namespace EK\AssoBundle\Controller;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the registration.
 *
 * @author Ouasire BIY-NZE <tech@ekdevcenter.com>
 */
class RegistrationController extends Controller
{
	/**
	 * Receive the confirmation token from user email provider, login the user.
	 *
	 * @param Request $request
	 * @param string  $token
	 *
	 * @return Response
	 */
	public function confirmAction(Request $request, $token)
	{
		/** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
		$userManager = $this->get('fos_user.user_manager');
		$user        = $userManager->findUserByConfirmationToken($token);
		
		if (null === $user) {
			throw new NotFoundHttpException(
				sprintf('The user with confirmation token "%s" does not exist', $token)
			);
		}
		
		/** @var $dispatcher EventDispatcherInterface */
		$dispatcher = $this->get('event_dispatcher');
		
		$user->setConfirmationToken(null);
		$user->setEnabled(true);
		
		$event = new GetResponseUserEvent($user, $request);
		$dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, $event);
		
		$userManager->updateUser($user);
		if (null === $response = $event->getResponse()) {
			$url = $this->generateUrl('new_commande');
			$response = new RedirectResponse($url);
		}
		
		$dispatcher->dispatch(
			FOSUserEvents::REGISTRATION_CONFIRMED,
			new FilterUserResponseEvent($user, $request, $response)
		);
		return $response;
	}
	/**
	 * Tell the user his account is now confirmed.
	 * @return Response
	 */
	public function confirmedAction()
	{
		$user = $this->getUser();
		if (!is_object($user) || !$user instanceof UserInterface) {
			throw new AccessDeniedException('This user does not have access to this section.');
		}
		
		return $this->render('@FOSUser/Registration/confirmed.html.twig', array(
			'user' => $user,
			'targetUrl' => $this->getTargetUrlFromSession(),
		));
	}
	/**
	 * @return mixed
	 */
	private function getTargetUrlFromSession()
	{
		$key = sprintf(
			'_security.%s.target_path',
			$this->get('security.token_storage')->getToken()->getProviderKey()
		);
		
		if ($this->get('session')->has($key)) {
			return $this->get('session')->get($key);
		}
	}
}
