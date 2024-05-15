<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
   
        public function store(Request $request)
        {

  
        $status = $request->input('status'); 
        $correct_answer = $request->input('correct_answer'); 
        $answer = $request->input('selectedOption');

        if( $status ==1){
            if($answer == $correct_answer){
            $marks   = $request->input('marks'); 
            }else{
            $marks = 0;
            $status =2;
            }
        }else{
             $marks = 0;
             $answer = "";
        }

        $data     = new Answer;
        $data->user_id    = session('user_id');
        $data->question_id    = $request->input('question_id'); 
        $data->answer_text   = $answer;
        $data->correct_answer   = $request->input('correct_answer'); 
        $data->marks   = $marks;
        $data->status   = $status; 
        $saveData = $data->save();
        if($saveData){
        return response()->json(['success'=>'Added successfully.']);

        }else{

        return response()->json(['error'=>'Something Went Wrong Please try Again!!']);
        }
        }

    public function results()
    {
        $userId = session('user_id');
        $data['skip_answer'] = DB::table('answers')->where('status',0)->where('user_id',$userId)->count();
        $data['correct_answer'] = DB::table('answers')->where('status',1)->where('user_id',$userId)->count();
        $data['wrong_answer'] = DB::table('answers')->where('status',2)->where('user_id',$userId)->count();
        
        return view('results')->with($data);
    }




    
}
