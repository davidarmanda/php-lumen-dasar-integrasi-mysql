<!-- // <?php 

// namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
// use App\Http\Request;
// use Illuminate\Support\Facades\DB;

// class DosenController extends Controller {

//     // private $dbmatkul;
//     // $this->$dbmatkul = DB::table('tb_dosen');

//     public function __construct(){
//        // $this->$dbmk = app('db')->table('dosen');

//        $dbmatkul = DB::table('tb_dosen');

//      // return $this->$dbmatkul;

//     }

//     public function getAll(){
//         $results = DB::select('select * from tb_dosen');
//         return response()->json($results);
//     }

//     public function getOne($id){
//         $getid = DB::table('tb_dosen')->find($id);
//         // $getid = $this->$dbmk->find($id);
//         if(!$getid){
//             return response()->json([
//                 'status' => 'error',
//                 'message' => 'Matkul '.$id.'tidak ditemukan'
//             ], 404);
//         }
//         return response()->json($getid);
//     }

//     public function deleteOne($id){
//         $delmatkul = DB::table('tb_dosen')->where('id', $id)->delete();
//         if($delmatkul == 0){
//             return response()->json([
//                 'status' => 'error',
//                 'message' => '404 Not found'
//             ]);
//         }

//         return response()->json([
//             'status' => 'success',
//             'message' => 'id has been deleted'
//         ]);
//     }

//     public function addOne(Request $request){
//         $ins = DB::table('tb_dosen')->insertGetId([
//             'id' => $request->input('id'),
//             'nama' => $request->input('nama'),
//             'sks' => $request->input('sks'),
//             'dosen' => $request->input('dosen'),
//         ]);
//         return response()->json([
//             'status' => 'success',
//             'message' => 'Successful added matkul',
//             'id' => $ins
//         ]);
//     }

//     public function updateOne(Request $request, $id){
//     $update = [

//     ];
//     DB::table('tb_dosen')->where('id', $id)->update(['id' => $request->input('id'),
//     'nama' => $request->input('nama'),
//     'sks' => $request->input('sks'),
//     'dosen' => $request->input('dosen')]);

//     return redirect ('getAll');
//     }
// }