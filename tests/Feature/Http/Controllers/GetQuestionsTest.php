<?php

namespace Http\Controllers;

use App\Http\Controllers\GetQuestions;
use Tests\TestCase;

class GetQuestionsTest extends TestCase
{

    public function test__invoke()
    {
        $response=$this->json('GET',route('api.get_questions'),[]);
        $response->assertStatus(200);
    }
}
