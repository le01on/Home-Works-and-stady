<?php

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=45, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=200, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=false)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=150, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=15, nullable=true, options={"default"="USER"})
     */
    private $role = 'USER';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=true, options={"default"="NEW"})
     */
    private $status = 'NEW';

    /**
     * @var string|null
     *
     * @ORM\Column(name="identific_code", type="string", length=45, nullable=true)
     */
    private $identificCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_registration", type="datetime", nullable=false)
     */
    private $dateRegistration;

    /**
     * @var ArrayCollection Order[]
     *
     * @ORM\OneToMany(targetEntity="Order", mappedBy="user")
     *
     */
    private $orders;

    /**
     * @var BidHistory[]
     *
     * @ORM\OneToMany(targetEntity="BidHistory", mappedBy="user")
     */
    private $bitHistories;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string|null $role
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getIdentificCode(): ?string
    {
        return $this->identificCode;
    }

    /**
     * @param string|null $identificCode
     */
    public function setIdentificCode(?string $identificCode): void
    {
        $this->identificCode = $identificCode;
    }

    /**
     * @return \DateTime
     */
    public function getDateRegistration(): ?\DateTime
    {
        return $this->dateRegistration;
    }

    /**
     * @param \DateTime $dateRegistration
     */
    public function setDateRegistration(\DateTime $dateRegistration): void
    {
        $this->dateRegistration = $dateRegistration;
    }

    /**
     * @return Order[]|null
     */
    public function getOrders(): ?PersistentCollection
    {
        return $this->orders;
    }

    /**
     * @param Order[] $orders|null
     */
    public function setOrders(?ArrayCollection $orders): void
    {
        $this->orders = $orders;
    }

    /**
     * @return BidHistory[]
     */
    public function getBitHistories(): ?array
    {
        return array($this->bitHistories);
    }

    /**
     * @param BidHistory[] $bitHistories
     */
    public function setBitHistories(array $bitHistories): void
    {
        $this->bitHistories = $bitHistories;
    }
    public function __toString(): string
    {
        return (string)$this->id;
    }
}
