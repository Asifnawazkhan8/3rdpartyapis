<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    public function fetchInsert()
{
    $client = new \GuzzleHttp\Client([
        'verify' => false, // Disable SSL verification
    ]);

    $response = $client->get('https://quizapi.io/api/v1/questions', [
        'query' => [
            'apiKey' => 'qyXoB9Y0bpoKsOoFQixHSta1u8S8rP1OkIX5ox6V',
            'limit' => 10,
        ],
    ]);
    $questions=json_decode($response->getBody());
    foreach($questions as $q){
        $question = new Question();
        $question->question=$q->question;
        $question->answer_a=$q->answers->answer_a;
        $question->answer_b=$q->answers->answer_b;
        $question->answer_c=$q->answers->answer_c;
        if ($question->save()) {
            return "Data saved successfully";
        } else {
            return "Error saving data";
        }
    }
    return "Data Fetched from and Saved in Database";
}

    public function show(){
         $data['questions']= Question::all();
        return view('welcome',$data);
    }
}
