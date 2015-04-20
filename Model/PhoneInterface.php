<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

interface PhoneInterface extends \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\PhoneInterface
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
