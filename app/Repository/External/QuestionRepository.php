<?php


namespace App\Repository\External;

use App\Models\Question;
use App\Repository\QuestionRepositoryInterface;
use App\Support\Repository\Contracts\CriteriaInterface;
use App\Support\Repository\Contracts\RepositoryInterface;
use App\Support\Repository\ExternalRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\Paginator;

class QuestionRepository extends ExternalRepository implements QuestionRepositoryInterface
{
    public function __construct(Question $model)
    {
        parent::__construct('external_file');
    }

    protected function baseModel(): string
    {
        return Question::class;
    }
    public function findAll(array $columns = ['*'])
    {
        return $this->getContent();
    }
}
