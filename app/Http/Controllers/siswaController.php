<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Request;
// use Illuminate\Support\Facades\DB;

class siswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->$dbsekolah_saja = app('db')->table('tb_siswa');
        // $dbsekolah_saja = DB::table('tb_siswa');
    }
    
    public function index(){
        $results = app('db')->select("SELECT * FROM tb_siswa");

        return response()->json($results);
    }

}