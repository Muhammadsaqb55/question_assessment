<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Option;

use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index()
    {
        return view('questions');
       
    }

    public function index1()
    {
        $userId = session('user_id');
        $data = Question::leftJoin('answers', function($join) use ($userId) {
            $join->on('questions.id', '=', 'answers.question_id')
                 ->where('answers.user_id', '=', $userId);
        })
        ->whereNull('answers.id')
        ->select('questions.*')
        ->first();
        if($data){
            return response()->json($data); 
        }else{
            $data =0;
            return response()->json($data); 
        }
       
    }

    public function option(Request $request)
    {
        $question_id = $request->input('question_id');
        $data['options'] = Option::where('question_id',$question_id)->get();
        return response()->json($data);
    }

  
    
}
