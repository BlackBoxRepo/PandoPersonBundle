<?php
namespace BlackBoxCode\Pando\PersonBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait PhoneTrait
{
    /**
     * @var PersonInterface
     *
     * @ORM\ManyToMany(targetEntity="Person", mappedBy="phones")
     */
    private $persons;


    /**
     * {@inheritdoc}
     */
    public function getPerson()
    {
        if (is_null($this->persons)) $this->persons = new ArrayCollection();

        return $this->persons->first() ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function setPerson(PersonInterface $person)
    {
        if (is_null($this->persons)) $this->persons = new ArrayCollection();
        $this->persons->clear();
        $this->persons->add($person);

        return $this;
    }
}
