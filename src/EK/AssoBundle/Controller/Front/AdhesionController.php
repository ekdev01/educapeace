<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 12/02/2018
 * Time: 20:31
 */

namespace EK\AssoBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AdhesionController extends Controller
{
	/**
	 * @Route("/adhesion", name="page_adhesion")
	 */
	public function indexAction(Request $request)
	{
		$this->container->get('front.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		$tag  = $status = null;
		$form = $this->createForm('EK\AssoBundle\Form\ContactType', null, array(
			'action'     => $this->generateUrl('contact_page'),
			'method'     => 'POST',
			'translator' => $trans,
		));
		
		return $this->render('AssoBundle:Adhesion:index.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string) $trans->trans('page_title_adhesion'),
			'theme'      => 'adhesion',
			'form'       => $form->createView(),
			'tag'        => $tag,
			'status'     => $status,
		));
	}
}