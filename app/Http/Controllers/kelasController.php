<?php
namespace App\Http\Controllers;
use DB;
class kelasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index(){
        $results = app('db')->select("SELECT * FROM tb_kelas");

        return response()->json($results);
    }
}
