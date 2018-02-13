<?php

namespace EduBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
	/**
	 * @Route("/home", name="home_page")
	 */
    public function indexAction(Request $request)
    {
	    $this->container->get('edu.translation')->changeLanguage($request);
	    $trans = $this->get('translator');
	    
        return $this->render('EduBundle:Home:index.html.twig', array(
	        'lang'       => $request->getLocale(),
	        'page_titre' => (string) $trans->trans('page_title_home')
        ));
    }
	/**
	 * @Route("/news", name="news_page")
	 */
	public function newsAction(Request $request)
	{
		$this->container->get('edu.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		return $this->render('EduBundle:Home:news.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string) $trans->trans('page_title_news'),
			'theme'      => 'news'
		));
	}
	/**
	 * @Route("/about", name="about_page")
	 */
	public function aboutAction(Request $request)
	{
		$this->container->get('edu.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		return $this->render('EduBundle:Home:about.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string) $trans->trans('page_title_about'),
			'theme'      => 'about'
		));
	}
}