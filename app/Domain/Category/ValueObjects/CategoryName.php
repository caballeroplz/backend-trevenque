<?php
namespace App\Domain\Category\ValueObjects;


class CategoryName
{
    private $value;

    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new \InvalidArgumentException('Category name cannot be empty');
        }

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}