<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

interface AddressInterface extends \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\AddressInterface
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
