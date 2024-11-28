<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CountryRepository::class)]
class Country
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $code = null;

    /**
     * @var Collection<int, Holliday>
     */
    #[ORM\OneToMany(targetEntity: Holliday::class, mappedBy: 'country')]
    private Collection $hollidays;

    /**
     * @var Collection<int, SupHour>
     */
    #[ORM\OneToMany(targetEntity: SupHour::class, mappedBy: 'country')]
    private Collection $supHours;

    /**
     * @var Collection<int, Absence>
     */
    #[ORM\OneToMany(targetEntity: Absence::class, mappedBy: 'country')]
    private Collection $absences;

    /**
     * @var Collection<int, Seniority>
     */
    #[ORM\OneToMany(targetEntity: Seniority::class, mappedBy: 'country')]
    private Collection $seniorities;

    /**
     * @var Collection<int, Compensation>
     */
    #[ORM\OneToMany(targetEntity: Compensation::class, mappedBy: 'country')]
    private Collection $compensation;

    /**
     * @var Collection<int, Contribution>
     */
    #[ORM\OneToMany(targetEntity: Contribution::class, mappedBy: 'country')]
    private Collection $contributions;

    /**
     * @var Collection<int, SmingSetting>
     */
    #[ORM\OneToMany(targetEntity: SmingSetting::class, mappedBy: 'country')]
    private Collection $smingSettings;

    /**
     * @var Collection<int, Smig>
     */
    #[ORM\OneToMany(targetEntity: Smig::class, mappedBy: 'country')]
    private Collection $smigs;

    /**
     * @var Collection<int, Notice>
     */
    #[ORM\OneToMany(targetEntity: Notice::class, mappedBy: 'country')]
    private Collection $notices;

    /**
     * @var Collection<int, Tax>
     */
    #[ORM\OneToMany(targetEntity: Tax::class, mappedBy: 'country')]
    private Collection $taxes;

    /**
     * @var Collection<int, FamilyAllowance>
     */
    #[ORM\OneToMany(targetEntity: FamilyAllowance::class, mappedBy: 'country')]
    private Collection $familyAllowances;

    public function __construct()
    {
        $this->hollidays = new ArrayCollection();
        $this->supHours = new ArrayCollection();
        $this->absences = new ArrayCollection();
        $this->seniorities = new ArrayCollection();
        $this->compensation = new ArrayCollection();
        $this->contributions = new ArrayCollection();
        $this->smingSettings = new ArrayCollection();
        $this->smigs = new ArrayCollection();
        $this->notices = new ArrayCollection();
        $this->taxes = new ArrayCollection();
        $this->familyAllowances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return Collection<int, Holliday>
     */
    public function getHollidays(): Collection
    {
        return $this->hollidays;
    }

    public function addHolliday(Holliday $holliday): static
    {
        if (!$this->hollidays->contains($holliday)) {
            $this->hollidays->add($holliday);
            $holliday->setCountry($this);
        }

        return $this;
    }

    public function removeHolliday(Holliday $holliday): static
    {
        if ($this->hollidays->removeElement($holliday)) {
            // set the owning side to null (unless already changed)
            if ($holliday->getCountry() === $this) {
                $holliday->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SupHour>
     */
    public function getSupHours(): Collection
    {
        return $this->supHours;
    }

    public function addSupHour(SupHour $supHour): static
    {
        if (!$this->supHours->contains($supHour)) {
            $this->supHours->add($supHour);
            $supHour->setCountry($this);
        }

        return $this;
    }

    public function removeSupHour(SupHour $supHour): static
    {
        if ($this->supHours->removeElement($supHour)) {
            // set the owning side to null (unless already changed)
            if ($supHour->getCountry() === $this) {
                $supHour->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Absence>
     */
    public function getAbsences(): Collection
    {
        return $this->absences;
    }

    public function addAbsence(Absence $absence): static
    {
        if (!$this->absences->contains($absence)) {
            $this->absences->add($absence);
            $absence->setCountry($this);
        }

        return $this;
    }

    public function removeAbsence(Absence $absence): static
    {
        if ($this->absences->removeElement($absence)) {
            // set the owning side to null (unless already changed)
            if ($absence->getCountry() === $this) {
                $absence->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Seniority>
     */
    public function getSeniorities(): Collection
    {
        return $this->seniorities;
    }

    public function addSeniority(Seniority $seniority): static
    {
        if (!$this->seniorities->contains($seniority)) {
            $this->seniorities->add($seniority);
            $seniority->setCountry($this);
        }

        return $this;
    }

    public function removeSeniority(Seniority $seniority): static
    {
        if ($this->seniorities->removeElement($seniority)) {
            // set the owning side to null (unless already changed)
            if ($seniority->getCountry() === $this) {
                $seniority->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Compensation>
     */
    public function getCompensation(): Collection
    {
        return $this->compensation;
    }

    public function addCompensation(Compensation $compensation): static
    {
        if (!$this->compensation->contains($compensation)) {
            $this->compensation->add($compensation);
            $compensation->setCountry($this);
        }

        return $this;
    }

    public function removeCompensation(Compensation $compensation): static
    {
        if ($this->compensation->removeElement($compensation)) {
            // set the owning side to null (unless already changed)
            if ($compensation->getCountry() === $this) {
                $compensation->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contribution>
     */
    public function getContributions(): Collection
    {
        return $this->contributions;
    }

    public function addContribution(Contribution $contribution): static
    {
        if (!$this->contributions->contains($contribution)) {
            $this->contributions->add($contribution);
            $contribution->setCountry($this);
        }

        return $this;
    }

    public function removeContribution(Contribution $contribution): static
    {
        if ($this->contributions->removeElement($contribution)) {
            // set the owning side to null (unless already changed)
            if ($contribution->getCountry() === $this) {
                $contribution->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SmingSetting>
     */
    public function getSmingSettings(): Collection
    {
        return $this->smingSettings;
    }

    public function addSmingSetting(SmingSetting $smingSetting): static
    {
        if (!$this->smingSettings->contains($smingSetting)) {
            $this->smingSettings->add($smingSetting);
            $smingSetting->setCountry($this);
        }

        return $this;
    }

    public function removeSmingSetting(SmingSetting $smingSetting): static
    {
        if ($this->smingSettings->removeElement($smingSetting)) {
            // set the owning side to null (unless already changed)
            if ($smingSetting->getCountry() === $this) {
                $smingSetting->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Smig>
     */
    public function getSmigs(): Collection
    {
        return $this->smigs;
    }

    public function addSmig(Smig $smig): static
    {
        if (!$this->smigs->contains($smig)) {
            $this->smigs->add($smig);
            $smig->setCountry($this);
        }

        return $this;
    }

    public function removeSmig(Smig $smig): static
    {
        if ($this->smigs->removeElement($smig)) {
            // set the owning side to null (unless already changed)
            if ($smig->getCountry() === $this) {
                $smig->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Notice>
     */
    public function getNotices(): Collection
    {
        return $this->notices;
    }

    public function addNotice(Notice $notice): static
    {
        if (!$this->notices->contains($notice)) {
            $this->notices->add($notice);
            $notice->setCountry($this);
        }

        return $this;
    }

    public function removeNotice(Notice $notice): static
    {
        if ($this->notices->removeElement($notice)) {
            // set the owning side to null (unless already changed)
            if ($notice->getCountry() === $this) {
                $notice->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tax>
     */
    public function getTaxes(): Collection
    {
        return $this->taxes;
    }

    public function addTax(Tax $tax): static
    {
        if (!$this->taxes->contains($tax)) {
            $this->taxes->add($tax);
            $tax->setCountry($this);
        }

        return $this;
    }

    public function removeTax(Tax $tax): static
    {
        if ($this->taxes->removeElement($tax)) {
            // set the owning side to null (unless already changed)
            if ($tax->getCountry() === $this) {
                $tax->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, FamilyAllowance>
     */
    public function getFamilyAllowances(): Collection
    {
        return $this->familyAllowances;
    }

    public function addFamilyAllowance(FamilyAllowance $familyAllowance): static
    {
        if (!$this->familyAllowances->contains($familyAllowance)) {
            $this->familyAllowances->add($familyAllowance);
            $familyAllowance->setCountry($this);
        }

        return $this;
    }

    public function removeFamilyAllowance(FamilyAllowance $familyAllowance): static
    {
        if ($this->familyAllowances->removeElement($familyAllowance)) {
            // set the owning side to null (unless already changed)
            if ($familyAllowance->getCountry() === $this) {
                $familyAllowance->setCountry(null);
            }
        }

        return $this;
    }
}
