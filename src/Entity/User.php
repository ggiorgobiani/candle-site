<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name: "firstname", type: Types::STRING,length: 60, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(name: "lastname", type: Types::STRING,length: 60, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(name: "email", type: Types::STRING, length: 255, nullable: false)]
    private ?string $email = null;

    #[ORM\Column(name: "password", type: Types::STRING, length: 255, nullable: false)]
    private ?string $password = null;

    #[ORM\Column(name: "address", type: Types::STRING, length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(name: "phone_number", type: Types::STRING, length: 20, nullable: true)]
    private ?string $phone_number = null;

    #[ORM\Column(name: "username", length: 40, type: Types::STRING, nullable: false)]
    private ?string $username = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: orderProduct::class)]
    private Collection $order_product;

    #[ORM\OneToMany(mappedBy: 'User', targetEntity: OrderProduct::class)]
    private Collection $orderProducts;

    public function __construct()
    {
        $this->order_product = new ArrayCollection();
        $this->orderProducts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(?string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return Collection<int, orderProduct>
     */
    public function getOrderProduct(): Collection
    {
        return $this->order_product;
    }

    public function addOrderProduct(orderProduct $orderProduct): static
    {
        if (!$this->order_product->contains($orderProduct)) {
            $this->order_product->add($orderProduct);
            $orderProduct->setUser($this);
        }

        return $this;
    }

    public function removeOrderProduct(orderProduct $orderProduct): static
    {
        if ($this->order_product->removeElement($orderProduct)) {
            // set the owning side to null (unless already changed)
            if ($orderProduct->getUser() === $this) {
                $orderProduct->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, OrderProduct>
     */
    public function getOrderProducts(): Collection
    {
        return $this->orderProducts;
    }
    }

