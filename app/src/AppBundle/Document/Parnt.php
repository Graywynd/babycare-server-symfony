<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(db="babycare", collection="parents",repositoryClass="AppBundle\Repository\ParentRepository") 
 */
class Parnt
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $lastname;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $firstname;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $username;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $gender;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $address;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $Birthdate;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $profilepic;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $joindate;


  public function __construct()
    {
        $this->profilepic = "https://gametize.com/images/core/consumer/game/placeholders/default_avatar.png";
        $this->joindate =  date("Y-m-d H:i:s");
    }
   

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     *
     * @return string $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set birthdate
     *
     * @param string $birthdate
     * @return $this
     */
    public function setBirthdate($birthdate)
    {
        $this->Birthdate = $birthdate;
        return $this;
    }

    /**
     * Get birthdate
     *
     * @return string $birthdate
     */
    public function getBirthdate()
    {
        return $this->Birthdate;
    }

    /**
     * Set profilepic
     *
     * @param string $profilepic
     * @return $this
     */
    public function setProfilepic($profilepic)
    {
        $this->profilepic = $profilepic;
        return $this;
    }

    /**
     * Get profilepic
     *
     * @return string $profilepic
     */
    public function getProfilepic()
    {
        return $this->profilepic;
    }

    /**
     * Set joindate
     *
     * @param string $joindate
     * @return $this
     */
    public function setJoindate($joindate)
    {
        $this->joindate = $joindate;
        return $this;
    }

    /**
     * Get joindate
     *
     * @return string $joindate
     */
    public function getJoindate()
    {
        return $this->joindate;
    }

    public function hashPassword()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }
    public function comparePassword($pass)
    {
        return password_verify($pass, $this->password);
    }
}
