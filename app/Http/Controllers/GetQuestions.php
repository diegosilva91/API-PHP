<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResource;
use App\Repository\QuestionRepositoryInterface;
use Illuminate\Http\Request;

class GetQuestions extends Controller
{
    //
    private $questionRepositoryInterface;

    public function __construct(QuestionRepositoryInterface $questionRepositoryInterface)
    {
        $this->questionRepositoryInterface = $questionRepositoryInterface
            ->setResource(QuestionResource::class);
    }

    /**
     *
     */
    public function __invoke(Request $request)
    {
        $result = $this->questionRepositoryInterface->findAll();

        return $result;
    }
}
