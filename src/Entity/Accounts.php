<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccountsRepository")
 */

class Accounts
{
    /**
     * Class Accounts
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy= "user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return Accounts
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $accounts_id;

        /**
     * @ORM\Column(type="integer")
     */
    private $table_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $flatware;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $total_order;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_time;

    public function getAccountsId(): ?int
    {
        return $this->accounts_id;
    }

    public function setAccountsId(int $accounts_id): self
    {
        $this->accounts_id = $accounts_id;

        return $this;
    }

    public function getTableNumber(): ?int
    {
        return $this->table_number;
    }

    public function setTableNumber(int $table_number): self
    {
        $this->table_number = $table_number;

        return $this;
    }

    public function getFlatware(): ?int
    {
        return $this->flatware;
    }

    public function setFlatware(int $flatware): self
    {
        $this->flatware = $flatware;

        return $this;
    }

    public function getTotalOrder()
    {
        return $this->total_order;
    }

    public function setTotalOrder($total_order): self
    {
        $this->total_order = $total_order;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->date_time;
    }

    public function setDateTime(\DateTimeInterface $date_time): self
    {
        $this->date_time = $date_time;

        return $this;
    }
}
