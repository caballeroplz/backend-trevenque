<?php
namespace App\Application\Category\Commands;

class CreateCategoryCommand
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
