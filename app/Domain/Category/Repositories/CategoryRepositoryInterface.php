<?php
namespace App\Domain\Category\Repositories;

use App\Domain\Category\Entities\Category;
use App\Domain\Category\ValueObjects\CategoryName;

interface CategoryRepositoryInterface
{
    public function showAll(): array;
    public function save(Category $brand);
    public function update($id, CategoryName $name): ?Category;
    public function delete($id): bool;
}