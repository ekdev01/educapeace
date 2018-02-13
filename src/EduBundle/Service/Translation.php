<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 13/02/2018
 * Time: 00:46
 */
namespace EduBundle\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\Translator;

class Translation
{
	private $trans;
	
	public function __construct(Translator $translator)
	{
		$this->trans = $translator;
	}
	/**
	 * @param Request $request
	 */
	public function changeLanguage(Request $request)
	{
		$session = $request->getSession();
		
		if (isset($_GET['lg'])) {
			
			switch ($_GET['lg']) {
				case 'fr':
					$request->setLocale('fr');
					$this->trans->setLocale('fr');
					$session->set('language', 'fr');
					break;
				case 'en':
					$request->setLocale('en');
					$this->trans->setLocale('en');
					$session->set('language', 'en');
					break;
				default:
					$request->setLocale('fr');
					$this->trans->setLocale('fr');
					$session->set('language', 'fr');
					break;
			}
		}
		else {
			$request->setLocale((string)$session->get('language'));
			$this->trans->setLocale((string)$session->get('language'));
		}
	}
	
}