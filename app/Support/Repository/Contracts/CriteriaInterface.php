<?php

namespace App\Support\Repository\Contracts;

interface CriteriaInterface
{
    /**
     * The criteria to be applied must go inside this method.
     *
     * @param mixed $queryBuilder current query builder
     *
     * @return mixed $queryBuilder current instance of the query builder with the criteria appplied
     */
    public function apply($queryBuilder);
}
