<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Slang;
class SlangController extends Controller {
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        
    }
    /**  
    * 
    */
    public  function getSlangById($id)
    {
        
        $data = ['id' => $id];
        try {
            $validator = Validator::make($data, [
                'id' => 'required|integer'
                ]);
                if ($validator->fails()) {
                    throw  new \Dotenv\Exception\ValidationException('HTTP_BAD_REQUEST', 400, null);
                    
                }
            } catch (\Dotenv\Exception\ValidationException $th) {
                throw $th;
            }
            
            $slang = Slang::find($id);
            if(!$slang == null){
                return response()->json([
                    'sucess' => true,
                    'status' => 200,
                    'data' => ['slang'=> $slang->fresh(['categories', 'translations'])->toArray()]
                ], 200);
            }
            
        }
        public  function getSlangByName(Request $request)
        {
        }
        
        
        
        public  function porCategoria(String $category){
            $user = DB::table('categories')->where('nome', $category)->first();
            echo $user->nome;
        }
        public  function todasCategorias(Request $request)
        {
            return $request->all();
        }
    }
