<?php
namespace BlackBoxCode\Pando\PersonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait UserTrait
{
    /**
     * @var PersonInterface
     *
     * @ORM\OneToOne(targetEntity="Person", mappedBy="user")
     */
    private $person;
    
    
    /**
     * {@inheritdoc}
     */
    public function getPerson()
    {
        return $this->person;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setPerson(PersonInterface $person)
    {
        $this->person = $person;
        
        return $this;
    }
}
