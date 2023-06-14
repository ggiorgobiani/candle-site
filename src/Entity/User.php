<?php

namespace App\Entity;


use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
#[ORM\HasLifecycleCallbacks()]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;


    
//firstname
    #[ORM\Column(length: 40)]
    private ?string $firstname = null;
//lastname
    #[ORM\Column(length: 40)]
    private ?string $lastname = null;
//phone
    #[ORM\Column(length: 40)]
    private ?string $phone = null;
//street
    #[ORM\Column(length: 40)]
    private ?string $street = null;
//street number
    #[ORM\Column(length: 40)]
    private ?string $streetNumber = null;
//zip code
    #[ORM\Column(length: 40)]
    private ?string $zip = null;
//city
    #[ORM\Column(length: 40)]
    private ?string $city = null;
//country
    #[ORM\Column(length: 40)]
    private ?string $country = null;


    public function getId(): ?int
    {
        return $this->id;
    }
//email 
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
    public function getStreet(): ?string
    {
        return $this->street;
    }
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }
    public function setStreetNumber(string $streetNumber): self
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }
    public function getZip(): ?string
    {
        return $this->zip;
    }
    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }
    public function getCity(): ?string
    {
        return $this->city;
    }
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getConnectionsCounter(): ?int
    {
        return $this->connectionsCounter;
    }

    // NOTE: Automatisation de l'incrémentation
    // public function setConnectionsCounter(int $connectionsCounter): self
    // {
    //     $this->connectionsCounter = $connectionsCounter;
    //     return $this;
    // }
    public function setConnectionsCounter(): self
    {
        // Incrémentation du compteur
        $this->connectionsCounter++;

        return $this;
    }

    public function getRegisterAt(): ?\DateTimeImmutable
    {
        return $this->registerAt;
    }

    // NOTE: Automatisation de l'injection de la donnée
    // public function setRegisterAt(\DateTimeImmutable $registerAt): self
    // {
    //     $this->registerAt = $registerAt;
    //     return $this;
    // }
    #[ORM\PrePersist]
    public function setRegisterAt(): self
    {
        $this->registerAt = new \DateTimeImmutable;

        return $this;
    }


    }

    // Note: Automatisation de l'injection de la donnée
    //xxx->setLastLoginAt(new \DateTime) 
    // public function setLastLoginAt(?\DateTimeInterface $lastLoginAt): self
    // {
    //     $this->lastLoginAt = $lastLoginAt;
    //     return $this;
    // }

    // xxxx->setLastLoginAt()
    // #[ORM\PreUpdate]
    public function setLastLoginAt(): self
    {
        $this->lastLoginAt = new \DateTime;

        return $this;
    }
}