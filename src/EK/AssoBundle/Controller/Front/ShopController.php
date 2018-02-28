<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 13/02/2018
 * Time: 01:32
 */

namespace EK\AssoBundle\Controller\Front;

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
		$this->container->get('front.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		return $this->render('AssoBundle:Shop:index.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string) $trans->trans('page_title_shop'),
			'theme'      => 'shop'
		));
	}
}