<?php


namespace App\Repository\Eloquent;


use App\Models\Question;
use App\Repository\External\QuestionRepository as QuestionRepositoryExternal;
use App\Repository\QuestionRepositoryInterface;

class QuestionRepository extends QuestionRepositoryExternal implements QuestionRepositoryInterface
{
    public function __construct(Question $model)
    {
        parent::__construct($model);
    }

    protected function baseModel(): string
    {
        // TODO: Implement baseModel() method.
    }
}

