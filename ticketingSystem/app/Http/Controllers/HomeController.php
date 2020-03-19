<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function insert(Request $request){
        $ticket_number = $request->input('ticket_number');
        $description = $request->input('description');
        $importance = $request->input('importance');

        $data=array('ticket_number'=>$ticket_number,"description"=>$description,"importance"=>$importance);
        DB::table('client_page')->insert($data);
        echo "Record inserted successfully.<br/>";

    }
}
