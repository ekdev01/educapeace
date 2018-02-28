<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 23/02/2018
 * Time: 22:51
 */

namespace EK\AssoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		/** @var \Symfony\Component\Translation\Translator $trans */
		$trans = $options['translator'];
		
		$builder
			->add('email', EmailType::class, array('attr' => array(
				'placeholder' => $trans->trans('form.contact.email')),
                                   'constraints' => array(
                                       new NotBlank(array("message" => $trans->trans('error.contact.email.1'))),
                                       new Email(array("message" => $trans->trans('error.contact.email.2'))),
                                   )
			))
			->add('subject', TextType::class, array('attr' => array(
				'placeholder' => $trans->trans('form.contact.subject')),
	                                'constraints' => array(
	                                    new NotBlank(array("message" => $trans->trans('error.contact.subject'))),
	                                )
			))
			->add('body', TextareaType::class, array('attr' => array(
				'placeholder' => $trans->trans('form.contact.msg')),
                                     'constraints' => array(
                                         new NotBlank(array("message" => $trans->trans('error.contact.msg'))),
                                     )
			))
		;
	}
	
	/**
	 * @param OptionsResolver $resolver
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setRequired('translator');
	}
	
	/**
	 * @param OptionsResolver $resolver
	 */
	public function setDefaultOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'error_bubbling' => true
		));
	}
	
	/**
	 * @return string
	 */
	public function getName()
	{
		return 'contact_form';
	}
}