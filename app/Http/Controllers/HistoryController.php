<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Alternative;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
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
        
        $results = $this->showAll();
        $alternatives = Alternative::all();

        $loop = 0;
        foreach ($alternatives as $alternative) {
            $alt_name[$loop] = $alternative->name;

            $loop++;
        }

        $loop = 0;
        foreach ($results as $result) {

            $result_object[$loop]['created'] = $result->created_at;
            $result_object[$loop]['best'] = $alt_name[$result->best-1];

            $loop++;
        }
        
        return view('page_history', [ 'results' => $result_object ]);
    }

    /**
     * Display al resource from specific user id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll() {

        $user_id = Auth::id();
        $results = Quiz::where('userID', $user_id)
                    ->get();

        return $results;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
