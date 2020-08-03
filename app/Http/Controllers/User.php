<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
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
    
    public function authenticate(Request $request)
    
    {
        
        $this->validate($request, [
            
            'email' => 'required|email',
            
            'password' => 'required'
            
            ]);
            
            $user = Usuario::where('email', $request->input('email'))->first();
            
            if (Hash::check($request->input('password'), $user->password)) {
                
                $apikey = base64_encode(Str::str_random(40));
                
                Usuario::where('email', $request->input('email'))->update(['api_key' => "$apikey"]);;
                
                return response()->json(['status' => 'success', 'api_key' => $apikey]);
            } else {
                
                return response()->json(['status' => 'fail'], 401);
            }
        } 
    }
    
    
    
    
