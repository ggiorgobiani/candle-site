<?php

namespace App\Entity;

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

    #[ORM\Column(name: "firstname", type: Types::STRING,length: 60, nullable: false)]
    private ?string $firstname = null;

    #[ORM\Column(name: "lastname", type: Types::STRING,length: 60, nullable: false)]
    private ?string $lastname = null;

    #[ORM\Column(name: "email", type: Types::STRING, length: 255, nullable: false)]
    private ?string $email = null;

    #[ORM\Column(name: "password", type: Types::STRING, length: 255, nullable: false)]
    private ?string $password = null;

    #[ORM\Column(name: "address", type: Types::STRING, length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(name: "phone_number", type: Types::STRING, length: 20, nullable: true)]
    private ?string $phone_number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
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
}
