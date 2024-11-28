<?php

namespace App\Entity;

use App\Repository\SupHourRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupHourRepository::class)]
class SupHour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'supHours')]
    private ?Country $country = null;

    #[ORM\Column(enumType: EmployeeCategoryEnum::class)]
    private ?EmployeeCategoryEnum $category = null;

    #[ORM\Column(nullable: true)]
    private ?int $hour_min = null;

    #[ORM\Column]
    private ?int $hour_max = null;

    #[ORM\Column]
    private ?float $rate = null;

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

    public function getCategory(): ?EmployeeCategoryEnum
    {
        return $this->category;
    }

    public function setCategory(EmployeeCategoryEnum $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getHourMin(): ?int
    {
        return $this->hour_min;
    }

    public function setHourMin(?int $hour_min): static
    {
        $this->hour_min = $hour_min;

        return $this;
    }

    public function getHourMax(): ?int
    {
        return $this->hour_max;
    }

    public function setHourMax(int $hour_max): static
    {
        $this->hour_max = $hour_max;

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
}
