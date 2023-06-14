<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
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

    #[ORM\Column(name: "firstname", type: Types::STRING,length: 60, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(name: "lastname", type: Types::STRING,length: 60, nullable: true)]
    private ?string $lastname = null;


    #[ORM\Column(length: 81)]
    private ?string $fullname = null;

    #[ORM\Column(name: "phone_number", type: Types::STRING, length: 20, nullable: true)]
    private ?string $phone_number = null;

    // #[ORM\Column(length: 255, type: Types::STRING, nullable: false)]
    // private ?string $city = null;

    // #[ORM\Column(length: 10 , nullable: false )]
    // private ?string $zip = null;

    // #[ORM\Column(length: 80, type: Types::STRING, nullable: false)]
    // private ?string $country = null;

  



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
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

    public function setRoles(array $roles): static
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

    public function setPassword(string $password): static
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
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

  

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(?string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }
    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    // NOTE: Automatiosation de la génération du "fullname"
    // public function setFullname(string $fullname): self
    // {
    //     $this->fullname = $fullname;
    //     return $this;
    // }
    #[ORM\PrePersist]
    public function setFullname(): self
    {
        // Concaténation de "firstname lastname" => "John DOE"
        $this->fullname = $this->firstname;               // John
        $this->fullname.= " ";                            // espace
        $this->fullname.= $this->lastname;                // DOE

        return $this;
    }
    // public function getCity(): ?string
    // {
    //     return $this->city;
    // }

    // public function setCity(string $city): self
    // {
    //     $this->city = $city;

    //     return $this;
    // }

    // public function getZip(): ?string
    // {
    //     return $this->zip;
    // }

    // public function setZip(string $zip): self
    // {
    //     $this->zip = $zip;

    //     return $this;
    // }

    // public function getCountry(): ?string
    // {
    //     return $this->country;
    // }

    // public function setCountry(string $country): self
    // {
    //     $this->country = $country;

    //     return $this;
    // }
}
