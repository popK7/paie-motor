<?php

namespace App\Entity;

use App\Repository\TaxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaxRepository::class)]
class Tax
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'taxes')]
    private ?Country $country = null;

    #[ORM\Column]
    private ?float $salary_min = null;

    #[ORM\Column]
    private ?float $salary_max = null;

    #[ORM\Column]
    private ?float $rate = null;

    #[ORM\Column]
    private ?float $total_deduction = null;

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

    public function getSalaryMin(): ?float
    {
        return $this->salary_min;
    }

    public function setSalaryMin(float $salary_min): static
    {
        $this->salary_min = $salary_min;

        return $this;
    }

    public function getSalaryMax(): ?float
    {
        return $this->salary_max;
    }

    public function setSalaryMax(float $salary_max): static
    {
        $this->salary_max = $salary_max;

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

    public function getTotalDeduction(): ?float
    {
        return $this->total_deduction;
    }

    public function setTotalDeduction(float $total_deduction): static
    {
        $this->total_deduction = $total_deduction;

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
