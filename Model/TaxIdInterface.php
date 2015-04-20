<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

interface TaxIdInterface extends \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\TaxIdInterface
{
    /**
     * @return PersonInterface
     */
    public function getPerson();

    /**
     * @param PersonInterface $person
     * @return $this
     */
    public function setPerson(PersonInterface $person);
}
