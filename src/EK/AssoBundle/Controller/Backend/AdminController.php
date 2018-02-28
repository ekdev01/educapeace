<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 23/02/2018
 * Time: 02:22
 */

namespace EK\AssoBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
	/**
	 * @Route("/admin/", name="admin_home_page")
	 */
	public function indexAction(Request $request)
	{
		$this->container->get('front.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		return $this->render('AssoBundle:Admin:index.html.twig', array(
			'lang'       => $request->getLocale()
		));
	}
}