<?php
namespace BlackBoxCode\Pando\PersonBundle\Model;

interface UserInterface extends \BlackBoxCode\Pando\UserBundle\Model\UserInterface
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
