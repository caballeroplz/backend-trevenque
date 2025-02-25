<?php
namespace App\Infrastructure\Persistence\Eloquent\Category;


use App\Domain\Category\ValueObjects\CategoryName;
use App\Domain\Category\Entities\Category as DomainCategory;
use App\Domain\Category\Repositories\CategoryRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Category\Category as EloquentCategory;

class EloquentCategoryRepository implements CategoryRepositoryInterface
{
    public function save(DomainCategory $category): DomainCategory
    {
        $eloquentCategory = new EloquentCategory();
        $eloquentCategory->name = $category->getName()->getValue();
        $eloquentCategory->save();

        $category->setId($eloquentCategory->id);
        return $category;
    }

    public function all(): array
    {
        $eloquentCategories = EloquentCategory::all();
        $categories = [];

        foreach ($eloquentCategories as $eloquentCategory) {
            $categories[] = new DomainCategory(
                new CategoryName($eloquentCategory->name)
            );
        }

        return $categories;
    }

    public function delete($id) : bool
    {
        $eloquentCategory = EloquentCategory::find($id);
        $eloquentCategory->delete();
        return true;
    }

    public function update(DomainCategory $category): ?DomainCategory
    {
        $eloquentCategory = EloquentCategory::find($category->getId());
        $eloquentCategory->name = $category->getName()->getValue();
        $eloquentCategory->save();
        return $category;
    }

}