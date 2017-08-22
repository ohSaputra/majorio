<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Questionnaire;
use App\Result;
use App\Alternative;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page_quiz');
    }

    /**
     * Counting Fuzzy ANP TOPSIS
     *
     * @return \Illuminate\Http\Response
     */
    public function count(Request $request)
    {
        $data = [
            $request->options1, 
            $request->options2, 
            $request->options3, 
            $request->options4, 
            $request->options5, 
            $request->options6, 
            $request->options7, 
            $request->options8, 
            $request->options9, 
            $request->options10, 
        ];

        $alternatives = Alternative::all();

        // initialize quiz model
        $quiz_db = new Quiz;
        $result = $quiz_db->count($data);

        $loop = 0;
        foreach ($alternatives as $alternative) {
            $rank[$loop]['value'] = $result['data'][$loop];
            $rank[$loop]['name'] = $alternative->name;

            $loop++;
        }
        rsort($rank);

        // get user id
        $user_id = Auth::id();
        $quiz_db->userID = $user_id;

        $question_db = new Questionnaire;
        $question_db->C1 = $data[0];
        $question_db->C2 = $data[1];
        $question_db->C3 = $data[2];
        $question_db->C4 = $data[3];
        $question_db->C5 = $data[4];
        $question_db->C6 = $data[5];
        $question_db->C7 = $data[6];
        $question_db->C8 = $data[7];
        $question_db->C9 = $data[8];
        $question_db->C10 = $data[9];

        $result_db = new Result;
        $result_db->A1 = $result['data'][0];
        $result_db->A2 = $result['data'][1];
        $result_db->A3 = $result['data'][2];
        $result_db->A4 = $result['data'][3];
        $result_db->A5 = $result['data'][4];
        $result_db->A6 = $result['data'][5];
        $result_db->A7 = $result['data'][6];
        $result_db->A8 = $result['data'][7];
        $result_db->A9 = $result['data'][8];
        $result_db->A10 = $result['data'][9];

        // store to database
        $quiz_db->save();

        // save to questionnaire
        $quiz_db->questionnaire()->save($question_db);

        // save to result
        $quiz_db->result()->save($result_db);

        return redirect()->route('result')->with(
            [ 
            'rank' => $rank,
            'name' => $rank[0]['name']
            ]
        );
    }
}
