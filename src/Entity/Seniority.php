<?php

namespace App\Entity;

use App\Repository\SeniorityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeniorityRepository::class)]
class Seniority
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'seniorities')]
    private ?Country $country = null;

    #[ORM\Column]
    private ?int $min_year = null;

    #[ORM\Column]
    private ?int $max_year = null;

    #[ORM\Column]
    private ?float $rate = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $start_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $end_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getMinYear(): ?int
    {
        return $this->min_year;
    }

    public function setMinYear(int $min_year): static
    {
        $this->min_year = $min_year;

        return $this;
    }

    public function getMaxYear(): ?int
    {
        return $this->max_year;
    }

    public function setMaxYear(int $max_year): static
    {
        $this->max_year = $max_year;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(float $rate): static
    {
        $this->rate = $rate;

        return $this;
    }

    public function getStartAt(): ?\DateTimeImmutable
    {
        return $this->start_at;
    }

    public function setStartAt(\DateTimeImmutable $start_at): static
    {
        $this->start_at = $start_at;

        return $this;
    }

    public function getEndAt(): ?\DateTimeImmutable
    {
        return $this->end_at;
    }

    public function setEndAt(\DateTimeImmutable $end_at): static
    {
        $this->end_at = $end_at;

        return $this;
    }
}
