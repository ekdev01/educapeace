<?php

namespace EK\AssoBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
	/**
	 * @Route("/", name="home_page")
	 */
    public function indexAction(Request $request)
    {
	    $logger = $this->container->get('front.util_logger');
	    $logger->log("HomeController->indexAction()");
	
	    $this->container->get('front.translation')->changeLanguage($request);
	    $trans = $this->get('translator');
	
	    $tag  = $status = null;
	    $form = $this->createForm('EK\AssoBundle\Form\ContactType', null, array(
		    'action'     => $this->generateUrl('contact_page'),
		    'method'     => 'POST',
		    'translator' => $trans,
	    ));
	    
	    return $this->render('AssoBundle:Home:index.html.twig', array(
		    'lang'       => $request->getLocale(),
		    'page_titre' => (string)$trans->trans('page_title_home'),
		    'form'       => $form->createView(),
		    'tag'        => $tag,
		    'status'     => $status,
	    ));
    }
	/**
	 * @Route("/news", name="news_page")
	 */
	public function newsAction(Request $request)
	{
		$logger = $this->container->get('front.util_logger');
		$logger->log("HomeController->newsAction()");
		
		$this->container->get('front.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		$status = $tag = null;
		$form   = $this->createForm('EK\AssoBundle\Form\ContactType', null, array(
			'action'     => $this->generateUrl('contact_page'),
			'method'     => 'POST',
			'translator' => $trans,
		));
		
		return $this->render('AssoBundle:Home:news.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string) $trans->trans('page_title_news'),
			'theme'      => 'news',
			'form'       => $form->createView(),
			'tag'        => $tag,
			'status'     => $status,
		));
	}
	/**
	 * @Route("/about", name="about_page")
	 */
	public function aboutAction(Request $request)
	{
		$this->container->get('front.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		$status = $tag = null;
		$form   = $this->createForm('EK\AssoBundle\Form\ContactType', null, array(
			'action'     => $this->generateUrl('contact_page'),
			'method'     => 'POST',
			'translator' => $trans,
		));
		
		return $this->render('AssoBundle:Home:about.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string) $trans->trans('page_title_about'),
			'theme'      => 'about',
			'form'       => $form->createView(),
			'tag'        => $tag,
			'status'     => $status,
		));
	}
	
	/**
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @Route("/contact", name="contact_page")
	 */
	public function contactAction(Request $request)
	{
		$logger = $this->container->get('front.util_logger');
		$utils  = $this->container->get('front.utiles');
		
		$logger->log("HomeController->contactAction()");
		
		$this->container->get('front.translation')->changeLanguage($request);
		$trans = $this->get('translator');
		
		$status = $tag = null;
		$form   = $this->createForm('EK\AssoBundle\Form\ContactType', null, array(
			'action'     => $this->generateUrl('contact_page'),
			'method'     => 'POST',
			'translator' => $trans,
		));
		
		if ($request->isMethod('POST')) {
			// Refill the fields in case the form is not valid.
			$form->handleRequest($request);
			
			$fData = $form->getData();
			
			$user_ip    = $utils->get_ip();
			$response   = $_POST['g-recaptcha-response'];
			$secret     = $this->container->getParameter('google_recaptcha_secret');
			$bRecaptcha = $utils->isRecaptchaValid($response, $secret, $user_ip);
			
			if ($form->isValid() && $bRecaptcha) {
				
				// Send mail
				$mailer = $this->container->get('front.mailer');
				
				if ($mailer->sendMail($fData)) {
					
					// Everything OK, redirect to wherever you want ! :
					$this->addFlash('success', (string) $trans->trans('success.send.mail'));
					$status = (string) $trans->trans('status.op.success');
					$tag = 1;
				} else {
					// An error ocurred, handle
					$this->addFlash('warning', (string) $trans->trans('warning.send.mail'));
					$status = (string) $trans->trans('status.op.error');
					$tag = 0;
				}
				
				$form = $this->createForm('EK\AssoBundle\Form\ContactType', null, array(
					'action'     => $this->generateUrl('contact_page'),
					'method'     => 'POST',
					'translator' => $trans,
				));
				
				return $this->render('AssoBundle:Home:index.html.twig', array(
					'lang'       => $request->getLocale(),
					'page_titre' => (string)$trans->trans('page_title_home'),
					'status'     => $status,
					'form'       => $form->createView(),
					'tag'        => $tag,
				));
			} else {
				$status = (string) $trans->trans('status.op.error');
			}
		}
		return $this->render('AssoBundle:Home:index.html.twig', array(
			'lang'       => $request->getLocale(),
			'page_titre' => (string)$trans->trans('page_title_home'),
			'status'     => $status,
			'form'       => $form->createView(),
			'tag'        => $tag,
		));
	}
}