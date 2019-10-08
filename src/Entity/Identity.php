<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IdentityRepository")
 */
class Identity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nama;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $jabatan;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $perusahaan;

    /**
     * @ORM\Column(type="integer")
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $phoneOffice;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $emailOffice;

    /**
     * @ORM\Column(type="integer")
     */
    private $Nik;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getJabatan(): ?string
    {
        return $this->jabatan;
    }

    public function setJabatan(string $jabatan): self
    {
        $this->jabatan = $jabatan;

        return $this;
    }

    public function getPerusahaan(): ?string
    {
        return $this->perusahaan;
    }

    public function setPerusahaan(string $perusahaan): self
    {
        $this->perusahaan = $perusahaan;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneOffice(): ?int
    {
        return $this->phoneOffice;
    }

    public function setPhoneOffice(int $phoneOffice): self
    {
        $this->phoneOffice = $phoneOffice;

        return $this;
    }

    public function getEmailOffice(): ?string
    {
        return $this->emailOffice;
    }

    public function setEmailOffice(string $emailOffice): self
    {
        $this->emailOffice = $emailOffice;

        return $this;
    }

    public function getNik(): ?int
    {
        return $this->Nik;
    }

    public function setNik(int $Nik): self
    {
        $this->Nik = $Nik;

        return $this;
    }
}
