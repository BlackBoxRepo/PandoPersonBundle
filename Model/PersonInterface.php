<?php
namespace BlackBoxCode\Pando\PersonBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface PersonInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName);

    /**
     * @return ArrayCollection<AddressInterface>
     */
    public function getAddresses();

    /**
     * @param AddressInterface $address
     * @return $this
     */
    public function addAddress(AddressInterface $address);

    /**
     * @param AddressInterface $address
     */
    public function removeAddress(AddressInterface $address);

    /**
     * @return ArrayCollection<PhoneInterface>
     */
    public function getPhones();

    /**
     * @param PhoneInterface $phone
     * @return $this
     */
    public function addPhone(PhoneInterface $phone);

    /**
     * @param PhoneInterface $phone
     */
    public function removePhone(PhoneInterface $phone);

    /**
     * @return TaxIdInterface
     */
    public function getTaxId();

    /**
     * @param TaxIdInterface $taxId
     * @return $this
     */
    public function setTaxId(TaxIdInterface $taxId);

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @param UserInterface $user
     * @return $this
     */
    public function setUser(UserInterface $user);
}
