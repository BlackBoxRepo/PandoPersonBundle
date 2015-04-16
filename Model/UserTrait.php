<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait UserTrait
{
    /**
     * @ORM\OneToOne(targetEntity="Person", mappedBy="user")
     */
    private $person;
}
