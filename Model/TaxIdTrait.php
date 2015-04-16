<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait TaxIdTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="Person", mappedBy="taxId")
     */
    private $person;
}
