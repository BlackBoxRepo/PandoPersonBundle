<?php
namespace BlackBoxCode\Pando\PersonBundle\Model;

interface AddressInterface extends \BlackBoxCode\Pando\ContactInfoBundle\Model\AddressInterface
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
