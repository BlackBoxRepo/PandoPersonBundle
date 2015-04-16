<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PhoneTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="Person", mappedBy="phones")
     */
    private $person;
}
