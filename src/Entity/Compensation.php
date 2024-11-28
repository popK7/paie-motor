<?php

namespace App\Entity;

use App\Repository\CompensationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompensationRepository::class)]
class Compensation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'compensation')]
    private ?Country $country = null;

    #[ORM\Column]
    private ?float $min_year = null;

    #[ORM\Column]
    private ?float $max_year = null;

    #[ORM\Column]
    private ?float $pay_hours = null;

    #[ORM\Column(enumType: CompensationCategoryEnum::class)]
    private ?CompensationCategoryEnum $category = null;

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

    public function getMinYear(): ?float
    {
        return $this->min_year;
    }

    public function setMinYear(float $min_year): static
    {
        $this->min_year = $min_year;

        return $this;
    }

    public function getMaxYear(): ?float
    {
        return $this->max_year;
    }

    public function setMaxYear(float $max_year): static
    {
        $this->max_year = $max_year;

        return $this;
    }

    public function getPayHours(): ?float
    {
        return $this->pay_hours;
    }

    public function setPayHours(float $pay_hours): static
    {
        $this->pay_hours = $pay_hours;

        return $this;
    }

    public function getCategory(): ?CompensationCategoryEnum
    {
        return $this->category;
    }

    public function setCategory(CompensationCategoryEnum $category): static
    {
        $this->category = $category;

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
