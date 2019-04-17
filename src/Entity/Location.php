<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $breedtegrond;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lengtegrond;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBreedtegrond(): ?string
    {
        return $this->breedtegrond;
    }

    public function setBreedtegrond(string $breedtegrond): self
    {
        $this->breedtegrond = $breedtegrond;

        return $this;
    }

    public function getLengtegrond(): ?string
    {
        return $this->lengtegrond;
    }

    public function setLengtegrond(string $lengtegrond): self
    {
        $this->lengtegrond = $lengtegrond;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
