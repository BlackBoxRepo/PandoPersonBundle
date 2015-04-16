<?php
namespace BlackBoxCode\Pando\Bundle\PersonBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\HasIdTrait;
use Doctrine\ORM\Mapping as ORM;

trait PersonTrait
{
    use HasIdTrait;

    /**
     * @ORM\Column(type="string")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string")
     */
    private $lastName;

    /**
     * @ORM\ManyToMany(targetEntity="Address", inversedBy="person")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $addresses;

    /**
     * @ORM\ManyToMany(targetEntity="Phone", inversedBy="person")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $phones;

    /**
     * @ORM\ManyToMany(targetEntity="TaxId", inversedBy="person")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false, unique=true)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $taxId;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="person")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
}
