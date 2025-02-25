<?php
namespace App\Http\Controllers\Category;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Application\Category\Handler\CreateCategoryHandler;
use App\Application\Category\Commands\CreateCategoryCommand;




class CreateCategoryController extends Controller
{
    private $createCategoryHandler;

    public function __construct(CreateCategoryHandler $createCategorydHandler)
    {
        $this->createCategoryHandler = $createCategorydHandler;
    }

    public function store(CreateCategoryRequest $request): JsonResponse
    {
        try {
            $command = new CreateCategoryCommand(
                $request->input('name')
            );
            $this->createCategoryHandler->handle($command);

            return response()->json(['message' => 'Category created successfully'], 201);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }
}