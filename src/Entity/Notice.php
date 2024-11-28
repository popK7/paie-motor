<?php

namespace App\Entity;

use App\Repository\NoticeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoticeRepository::class)]
class Notice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'notices')]
    private ?Country $country = null;

    #[ORM\Column]
    private ?float $min_year = null;

    #[ORM\Column]
    private ?float $max_year = null;

    #[ORM\Column(enumType: EmployeeCategoryEnum::class)]
    private ?EmployeeCategoryEnum $category_user = null;

    #[ORM\Column]
    private ?float $notice_months = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $start_at = null;

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

    public function getCategoryUser(): ?EmployeeCategoryEnum
    {
        return $this->category_user;
    }

    public function setCategoryUser(EmployeeCategoryEnum $category_user): static
    {
        $this->category_user = $category_user;

        return $this;
    }

    public function getNoticeMonths(): ?float
    {
        return $this->notice_months;
    }

    public function setNoticeMonths(float $notice_months): static
    {
        $this->notice_months = $notice_months;

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
}
