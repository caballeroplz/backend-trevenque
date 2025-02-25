<?php
namespace App\Domain\Category\Services;

use App\Domain\Category\Entities\Category;
use App\Domain\Category\ValueObjects\CategoryName;
use App\Domain\Category\Repositories\CategoryRepositoryInterface;


class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory($name)
    {
        $categoryName = new CategoryName($name);
       
        $category = new Category($categoryName);
        $this->categoryRepository->save($category);
    }

    public function getAllCategories(): array
    {
        return $this->categoryRepository->all();
    }

    public function updateCategory($id, $name): ?Category
    {
        $categoryName = new CategoryName($name);
        return $this->categoryRepository->update($id, $categoryName);
    }

    public function deleteCategory($id): bool
    {
        return $this->categoryRepository->delete($id);
    }
}