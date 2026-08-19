<?php

declare(strict_types=1);

namespace Danilocgsilva\GroceriesMemory\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroceryItem
 */
#[ORM\Entity(repositoryClass: 'App\Repository\GroceryItemRepository')]
class GroceryItem
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
}