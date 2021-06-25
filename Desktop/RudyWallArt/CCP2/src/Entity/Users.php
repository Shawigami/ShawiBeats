<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ID_users;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Login_users;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pass_Users;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Role_Users;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDUsers(): ?int
    {
        return $this->ID_users;
    }

    public function setIDUsers(int $ID_users): self
    {
        $this->ID_users = $ID_users;

        return $this;
    }

    public function getLoginUsers(): ?string
    {
        return $this->Login_users;
    }

    public function setLoginUsers(string $Login_users): self
    {
        $this->Login_users = $Login_users;

        return $this;
    }

    public function getPassUsers(): ?string
    {
        return $this->Pass_Users;
    }

    public function setPassUsers(string $Pass_Users): self
    {
        $this->Pass_Users = $Pass_Users;

        return $this;
    }

    public function getRoleUsers(): ?string
    {
        return $this->Role_Users;
    }

    public function setRoleUsers(string $Role_Users): self
    {
        $this->Role_Users = $Role_Users;

        return $this;
    }
}
