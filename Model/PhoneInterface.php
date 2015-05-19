<?php
namespace BlackBoxCode\Pando\PersonBundle\Model;

interface PhoneInterface extends \BlackBoxCode\Pando\ContactInfoBundle\Model\PhoneInterface
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
