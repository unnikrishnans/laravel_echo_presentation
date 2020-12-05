<?php namespace App\Http\Controllers;

use App\Events\SendAnswer;
use App\Events\SendQuestion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\PublishName;

class AnniversaryController extends Controller
{
	private $request;

	public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('anniversary');
    }

    public function couple(){
        return view('couple');
    }

    public function submitAnswerForm(){
        $preparedData = array('question_id' => 0, 'status'=>'failed');
        $userId = $this->request->input('user_id', false);
        $userName = $this->request->input('user_name', false);
        $questionId = $this->request->input('question_id', false);
        $answer = $this->request->input('answer', false);
        if($answer){
            $preparedData = array('question_id' => $questionId,
                                  'status'=>'success',
                                  'user_id'=> $userId,
                                  'user_name' => $userName,
                                  'answer' => $answer,
                );
            broadcast(new SendAnswer(
                $preparedData
            ));
        }
        return response()->json($preparedData);
    }

    public function sendQuestionForm(){
        $preparedData = array('question_id' => 0, 'question_text'=>'');
        $question = $this->request->input('question', ['text'=>'', 'id'=>0]);
        if($question['text']){
            $preparedData = array('question_id' => $question['id'],
                                  'question_text'=>$question['text']
            );
            broadcast(new SendQuestion(
                $preparedData
            ));
        }
        return response()->json($preparedData);
    }
}
