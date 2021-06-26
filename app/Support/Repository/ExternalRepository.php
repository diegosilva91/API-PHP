<?php


namespace App\Support\Repository;


use App\Support\Repository\Contracts\CriteriaInterface;
use App\Support\Repository\Contracts\RepositoryInterface;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

abstract class ExternalRepository implements RepositoryInterface
{
    /**
     * @var mixed
     */
    private $base_model;
    private $content;

    public function __construct($connection)
    {
        $base_model       = $this->baseModel();
        $this->base_model = with(new $base_model);
        $this->base_model->setConnection($connection);
        $this->path=storage_path('app/questions.json');
        $this->init();
    }
    protected function init()
    {

        $this->query          = '';
        $this->query_cache    = null;
        $this->extension= File::extension($this->path);
        switch ($this->extension){
            case 'json':$this->content=json_decode( File::get($this->path),true);
                break;
        }
        $this->processData($this->content);
        return $this;
    }

    /**
     * @return string
     */
    abstract protected function baseModel(): string;

    private function processData($content)
    {
        if(count($content) !== count($content, COUNT_RECURSIVE)){
            $this->columns=array_keys($content[0]);
        }
    }
    public function findOneBy($value = null, $field = 'id', array $columns = ['*'])
    {
        // TODO: Implement findOneBy() method.
    }

    public function findAll(array $columns = ['*'])
    {
        return $this->content;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function findAllBy($value = null, $field = null, array $columns = ['*'])
    {
        // TODO: Implement findAllBy() method.
    }

    public function findAllWhereIn(array $value, $field, array $columns = ['*'])
    {
        // TODO: Implement findAllWhereIn() method.
    }

    public function with($relations)
    {
        // TODO: Implement with() method.
    }

    public function addCriteria(CriteriaInterface $criteria)
    {
        // TODO: Implement addCriteria() method.
    }

    public function skipCriteria($status = true)
    {
        // TODO: Implement skipCriteria() method.
    }

    public function setResource($resource)
    {
        if (is_object($resource)) {
            $resource = get_class($resource);
        }

        $this->resource = $resource;

        return $this;
    }

    public function setValidator(array $rules, array $messages = [])
    {
        // TODO: Implement setValidator() method.
    }

    public function respondWithResource($result)
    {
        // TODO: Implement respondWithResource() method.
    }

    public function paginate($perPage, array $columns = ['*'])
    {
        // TODO: Implement paginate() method.
    }

    public function setCurrentPage($page)
    {
        // TODO: Implement setCurrentPage() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function updateBy(array $data, $value = null, $field = 'id')
    {
        // TODO: Implement updateBy() method.
    }

    public function delete($value = null, $field = 'id')
    {
        // TODO: Implement delete() method.
    }

    public function count()
    {
        // TODO: Implement count() method.
    }

    public function resetScope()
    {
        // TODO: Implement resetScope() method.
    }

    public function destroy($value = null, $field = 'id')
    {
        // TODO: Implement destroy() method.
    }
}
