<?php

namespace App\api\model;
class StorageInputModel
{

    private string $designation;

    public function __construct()
    {

    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation)
    {
        $this->designation = $designation;
    }

}
