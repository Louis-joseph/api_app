<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Foyc::class, mappedBy="Category")
     */
    private $foycs;

    public function __construct()
    {
        $this->foycs = new ArrayCollection();
    }

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

    /**
     * @return Collection|Foyc[]
     */
    public function getFoycs(): Collection
    {
        return $this->foycs;
    }

    public function addFoyc(Foyc $foyc): self
    {
        if (!$this->foycs->contains($foyc)) {
            $this->foycs[] = $foyc;
            $foyc->setCategory($this);
        }

        return $this;
    }

    public function removeFoyc(Foyc $foyc): self
    {
        if ($this->foycs->removeElement($foyc)) {
            // set the owning side to null (unless already changed)
            if ($foyc->getCategory() === $this) {
                $foyc->setCategory(null);
            }
        }

        return $this;
    }
}
