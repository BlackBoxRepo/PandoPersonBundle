<?php
namespace BlackBoxCode\Pando\PersonBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait PersonTrait
{
    use IdTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $lastName;

    /**
     * @var ArrayCollection<AddressInterface>
     *
     * @ORM\ManyToMany(targetEntity="Address", inversedBy="persons")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $addresses;

    /**
     * @var ArrayCollection<PhoneInterface>
     *
     * @ORM\ManyToMany(targetEntity="Phone", inversedBy="persons")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $phones;

    /**
     * @var ArrayCollection<TaxIdInterface>
     *
     * @ORM\ManyToMany(targetEntity="TaxId", inversedBy="persons")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false, unique=true)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $taxIds;

    /**
     * @var UserInterface
     *
     * @ORM\OneToOne(targetEntity="User", inversedBy="person")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


    /**
     * {@inheritdoc}
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * {@inheritdoc}
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddresses()
    {
        if (is_null($this->addresses)) $this->addresses = new ArrayCollection();

        return $this->addresses;
    }

    /**
     * {@inheritdoc}
     */
    public function addAddress(AddressInterface $address)
    {
        if (is_null($this->addresses)) $this->addresses = new ArrayCollection();
        $this->addresses->add($address);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAddress(AddressInterface $address)
    {
        if (is_null($this->addresses)) $this->addresses = new ArrayCollection();
        $this->addresses->removeElement($address);
    }

    /**
     * {@inheritdoc}
     */
    public function getPhones()
    {
        if (is_null($this->phones)) $this->phones = new ArrayCollection();

        return $this->phones;
    }

    /**
     * {@inheritdoc}
     */
    public function addPhone(PhoneInterface $phone)
    {
        if (is_null($this->phones)) $this->phones = new ArrayCollection();
        $this->phones->add($phone);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removePhone(PhoneInterface $phone)
    {
        if (is_null($this->phones)) $this->phones = new ArrayCollection();
        $this->phones->removeElement($phone);
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxId()
    {
        if (is_null($this->taxIds)) $this->taxIds = new ArrayCollection();

        return $this->taxIds->first() ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxId(TaxIdInterface $taxId)
    {
        if (is_null($this->taxIds)) $this->taxIds = new ArrayCollection();
        $this->taxIds->clear();
        $this->taxIds->add($taxId);

        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;
        
        return $this;
    }
}
