<?php
namespace App\Domain\Category\Entities;

use App\Domain\Category\ValueObjects\CategoryName;

class Category
{
    private $id;
    private $name;

    public function __construct(CategoryName $name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): CategoryName
    {
        return $this->name;
    }

    public function setName(CategoryName $name)
    {
        $this->name = $name;
    }

}