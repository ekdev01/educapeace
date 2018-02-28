<?php
/**
 * Created by PhpStorm.
 * User: ekdevcenter
 * Date: 16/02/2018
 * Time: 15:22
 */

namespace EK\AssoBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Users
 * @package AssoBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="`users`")
 */
class Users extends BaseUser
{
	/**
	 * @var integer
	 *
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @var string
	 * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
	 */
	protected $firstname;
	
	/**
	 * @var string
	 * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
	 */
	protected $lastname;
	
	/**
	 * @var string
	 * @ORM\Column(name="address", type="string", length=255, nullable=false)
	 */
	protected $address;
	
	/**
	 * @var string
	 * @ORM\Column(name="zipcode", type="string", length=255, nullable=true)
	 */
	protected $zipCode;
	
	/**
	 * @var string
	 * @ORM\Column(name="city", type="string", length=255, nullable=false)
	 */
	protected $city;
	
	/**
	 * @var string
	 * @ORM\Column(name="country", type="string", length=255, nullable=false)
	 */
	protected $country;
	
	/**
	 * @var string
	 * @ORM\Column(name="phone", type="string", length=20, nullable=true)
	 */
	protected $phone;
	
	/**
	 * @var string
	 * @ORM\Column(name="ipconnexion", type="string", length=255, nullable=true)
	 */
	protected $ipconnexion;
	
	/**
	 * @var \DateTime
	 * @ORM\Column(name="datecreation", type="datetime", nullable=false)
	 */
	protected $datecreation;
	
	public function __construct()
	{
		parent::__construct();
	}
}