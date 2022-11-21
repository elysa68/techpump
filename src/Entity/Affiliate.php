<?php

namespace App\Entity;

use App\Repository\AffiliateRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffiliateRepository::class)]
#[ORM\Table(name: '`affiliate`')]
class Affiliate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $web = null;

    #[ORM\Column(length: 255)]
    private ?string $natsCode = null;

    #[ORM\Column(length: 255)]
    private ?string $cssFolder = null;

    #[ORM\Column(length: 255)]
    private ?string $googleAnalytics = null;

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

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(string $web): self
    {
        $this->web = $web;

        return $this;
    }

    public function getNatsCode(): ?string
    {
        return $this->natsCode;
    }

    public function setNatsCode(string $natsCode): self
    {
        $this->natsCode = $natsCode;

        return $this;
    }

    public function getCssFolder(): ?string
    {
        return $this->cssFolder;
    }

    public function setCssFolder(string $cssFolder): self
    {
        $this->cssFolder = $cssFolder;

        return $this;
    }

    public function getGoogleAnalytics(): ?string
    {
        return $this->googleAnalytics;
    }

    public function setGoogleAnalytics(string $googleAnalytics): self
    {
        $this->googleAnalytics = $googleAnalytics;

        return $this;
    }
}
