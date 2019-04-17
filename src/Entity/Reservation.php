<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Event")
     * @ORM\JoinColumn(nullable=false)
     */
    private $EventId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Location")
     * @ORM\JoinColumn(nullable=false)
     */
    private $LocationId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $UserId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventId(): ?Event
    {
        return $this->EventId;
    }

    public function setEventId(?Event $EventId): self
    {
        $this->EventId = $EventId;

        return $this;
    }

    public function getLocationId(): ?Location
    {
        return $this->LocationId;
    }

    public function setLocationId(?Location $LocationId): self
    {
        $this->LocationId = $LocationId;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->UserId;
    }

    public function setUserId(?User $UserId): self
    {
        $this->UserId = $UserId;

        return $this;
    }
}
