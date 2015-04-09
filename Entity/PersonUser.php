<?php

namespace BlackBoxCode\Pando\Entity;

use BlackBoxCode\Pando\Bundle\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonUser
 *
 * @ORM\Table(name="User")
 * @ORM\Entity
 */
class PersonUser extends User
{
    /**
     * @var Person
     *
     * @ORM\OneToOne(targetEntity="Person", mappedBy="user")
     */
    protected $person;


    /**
     * Set Person
     *
     * @param Person $person
     * @return PersonUser
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get Person
     *
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }
}
