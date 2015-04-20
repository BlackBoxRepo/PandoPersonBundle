<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

interface UserInterface extends \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserInterface
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
