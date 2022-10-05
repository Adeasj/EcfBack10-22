<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $DateCreation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?string
    {
        return $this->DateCreation;
    }

    public function setDateCreation(string $DateCreation): self
    {
        $this->DateCreation = $DateCreation;

        return $this;
    }
}