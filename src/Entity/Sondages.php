<?php

namespace App\Entity;

use App\Repository\SondagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SondagesRepository::class)]
class Sondages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $name;

    #[ORM\Column(type: 'date')]
    private $creationDate;

    #[ORM\Column(type: 'string', length: 75)]
    private $creationUsername;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getCreationUsername(): ?string
    {
        return $this->creationUsername;
    }

    public function setCreationUsername(string $creationUsername): self
    {
        $this->creationUsername = $creationUsername;

        return $this;
    }
}
