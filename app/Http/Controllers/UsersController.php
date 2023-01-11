<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username','password');

        if (Auth::attempt($credentials)) {
            $session_username = strtolower($credentials['username']);
            $request->session()->put('session_name', $session_username);
            request()->session()->regenerate();
            if (Auth::user()['type']=='admin') {
                return redirect()->route('admin-tickets');
            }else{
                return redirect()->route('register-ticket-view');
            }
        }else{
            return $credentials;
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function store(Request $request)
    {

        $words = array(
            'trapecio','patio','cuadrado','tutor','periodista','actor','cena','pancarta','suburbio','radio','prensa','redes','lobo','calle','camino','casa','padre','guitarra','cine','silencio','onda','estrella','avance','brillo','oficina','producto'
        );

        $user = new User;
        
        $word = $words[rand(0,count($words)-1)];
        $number = rand(1000,9999);
        $pass = $word . $number;
        
        $user->user_id = uniqid();
        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->temp_password = $pass;
        $user->password = bcrypt($pass);
        $user->type = $request['type'];
        $user->credential_state = "unchanged";
        $user->belongs_to_company = $request['belongs_to_company'];
        

        $user->save();

        return redirect()->route('add-user-view')->with("success","Paquetero agregado con éxito.");
        
    }

    public function index()
    {
        $users = User::all();

        return view('admin.users',['users'=>$users]);
    }

}
