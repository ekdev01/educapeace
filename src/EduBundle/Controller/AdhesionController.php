<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 12/02/2018
 * Time: 20:31
 */

namespace EduBundle\Controller;

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
		$this->container->get('edu.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		return $this->render('EduBundle:Adhesion:index.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string) $trans->trans('page_title_adhesion'),
			'theme'      => 'adhesion'
		));
	}
}