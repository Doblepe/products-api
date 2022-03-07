<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;


/**
 * A manufacterer
 * @ORM\Entity
 */
#[ApiResource]
class Manufacturer
{
    /** The id of the manudacterer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private ?int $id = null;
    /** The name of the manudacterer
     * @ORM\Column
     */
    private string $name = '';
    /** The description of the manudacterer
     * @ORM\Column(type="text")
     */
    private string $description = '';
    /** The country that manufacterer came from
     * @ORM\Column(length=3)
     */
    private string $countryCode = '';
    /** The date thath manufacterer was listed
     * @ORM\Column(type="datetime")
     */
    private ?\DateTimeInterface $listDate = null;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getListDate(): ?\DateTimeInterface
    {
        return $this->listDate;
    }

    /**
     * @param \DateTimeInterface|null $listDate
     */
    public function setListDate(?\DateTimeInterface $listDate): void
    {
        $this->listDate = $listDate;
    }


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}