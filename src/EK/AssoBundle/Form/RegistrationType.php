<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 02/03/2018
 * Time: 18:28
 */

namespace EK\AssoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('lastname')
			->add('firstname');
	}
	
	public function getParent()
	{
		return 'fos_user_registration';
	}
	
	public function getName()
	{
		return 'ek_user_registration';
	}
}