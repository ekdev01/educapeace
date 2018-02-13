<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 13/02/2018
 * Time: 01:32
 */

namespace EduBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ShopController extends Controller
{
	/**
	 * @Route("/shop", name="shop_page")
	 */
	public function indexAction(Request $request)
	{
		$this->container->get('edu.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		return $this->render('EduBundle:Shop:index.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string) $trans->trans('page_title_shop'),
			'theme'      => 'shop'
		));
	}
}