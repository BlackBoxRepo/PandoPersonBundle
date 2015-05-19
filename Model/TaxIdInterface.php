<?php
namespace BlackBoxCode\Pando\PersonBundle\Model;

interface TaxIdInterface extends \BlackBoxCode\Pando\ContactInfoBundle\Model\TaxIdInterface
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
