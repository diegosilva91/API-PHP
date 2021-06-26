<?php


namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class QuestionResource extends JsonResource
{
    /**
     * @var mixed
     */
    private $collection;

    public function toArray($request){
        return [
            'text'=>$this->text
        ];
    }
}
