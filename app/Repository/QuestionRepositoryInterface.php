<?php


namespace App\Repository;


use App\Support\Repository\Contracts\RepositoryInterface;

interface QuestionRepositoryInterface extends RepositoryInterface
{
    public function findAll(array $columns = ['*']);
}
