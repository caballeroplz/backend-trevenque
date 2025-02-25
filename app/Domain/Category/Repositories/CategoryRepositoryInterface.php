<?php
namespace App\Domain\Category\Repositories;

use App\Domain\Category\Entities\Category;
use App\Domain\Category\ValueObjects\CategoryName;

interface CategoryRepositoryInterface
{
    public function all(): array;
    public function save(Category $category): ?Category;
    public function update(Category $category): ?Category;
    public function delete($id): bool;
}