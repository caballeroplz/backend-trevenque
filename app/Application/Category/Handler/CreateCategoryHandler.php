<?php
namespace App\Application\Category\Handler;

use App\Domain\Category\Services\CategoryService;
use App\Application\Category\Commands\CreateCategoryCommand;


class CreateCategoryHandler
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function handle(CreateCategoryCommand $command)
    {
        $this->categoryService->createCategory($command->name);
    }
}