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
 * @ORM\Table(name="`ek_users`")
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
	 * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
	 */
	protected $firstname;
	
	/**
	 * @var string
	 * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
	 */
	protected $lastname;
	
	/**
	 * @var string
	 * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
	 */
	protected $companyName;
	
	/**
	 * @var string
	 * @ORM\Column(name="address", type="string", length=255, nullable=false)
	 */
	protected $address;
	
	/**
	 * @var string
	 * @ORM\Column(name="zipcode", type="string", length=255, nullable=false)
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
	 * @var \DateTime
	 * @ORM\Column(name="datecreation", type="datetime", nullable=false)
	 */
	protected $datecreation;
	
	public function __construct()
	{
		parent::__construct();
	}

    /**
     * Set firstname.
     *
     * @param string|null $firstname
     *
     * @return Users
     */
    public function setFirstname($firstname = null)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
     *
     * @param string|null $lastname
     *
     * @return Users
     */
    public function setLastname($lastname = null)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname.
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set companyName.
     *
     * @param string|null $companyName
     *
     * @return Users
     */
    public function setCompanyName($companyName = null)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName.
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set address.
     *
     * @param string $address
     *
     * @return Users
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipCode.
     *
     * @param string $zipCode
     *
     * @return Users
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set city.
     *
     * @param string $city
     *
     * @return Users
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country.
     *
     * @param string $country
     *
     * @return Users
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone.
     *
     * @param string|null $phone
     *
     * @return Users
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set datecreation.
     *
     * @param \DateTime $datecreation
     *
     * @return Users
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation.
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }
}
