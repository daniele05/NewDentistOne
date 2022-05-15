<?php

class Patient
{
    private $photo;
    private $idPatient;
    private $irstName;
    private $lastName;
    private $birthDate;
    private $sex;
    private $tel;
    private $email;
    private $address;
    private $dateInscriptionPatient;
    private $idSoinsDentaires;
    private $idOrdonnance;


    public function __construct($photo, $idPatient, $irstName, $lastName, $birthDate, $sex, $tel, $email, $address, $dateInscriptionPatient, $idSoinsDentaires, $idOrdonnance)
    {

        $this->photo = $photo;
        $this->idPatient = $idPatient;
        $this->irstName = $irstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->sex = $sex;
        $this->tel = $tel;
        $this->email = $email;
        $this->address = $address;
        $this->dateInscriptionPatient = $dateInscriptionPatient;
        $this->idSoinsDentaires;
        $this->idOrdonnance = $idOrdonnance;
    }

    // construction des getter and setter

    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getIdPatient()
    {
        return $this->idPatient;
    }
    public function setIdPatient($idPatient)
    {
        $this->idPatient = $idPatient;
    }

    public function getIrstName()
    {
        return $this->irstName;
    }
    public function setIrstName($irstName)
    {
        $this->irstName = $irstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getSex()
    {
        return $this->sex;
    }
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getDateIncriptionPatient()
    {
        return $this->dateInscriptionPatient;
    }
    public function setDateInscriptionPatient($dateInscriptionPatient)
    {
        $this->dateInscriptionPatient = $dateInscriptionPatient;
    }
    public function getIdSoinsDentaires()
    {
        return $this->idSoinsDentaires;
    }
    public function setIdSoinsDentaires($idSoinsDentaires)
    {
        $this->idSoinsDentaires = $idSoinsDentaires;
    }
    public function getIdOrdonnance()
    {
        return $this->idOrdonnance;
    }
    public function setIdOrdonnance($idOrdonnance)
    {
        $this->idOrdonnance = $idOrdonnance;
    }
}