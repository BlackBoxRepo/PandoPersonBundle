<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait AddressTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="Person", mappedBy="addresses")
     */
    private $person;
}
