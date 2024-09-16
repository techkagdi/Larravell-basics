<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PhpParser\Node\Expr\FuncCall;
use App\Models\Login;
class Logins extends Controller
{
    public function index(){
        return view('index');
    }
    public function create(){
        return view('create');
    }

    public function insert(Request $request){
        $request -> validate([
'email' => 'required|max:255|string',
'password' => 'required|max:255|string  '
        ]);

        $Login = new Login;
        $Login->email = $request -> input('email');
        $Login->password = $request -> input('password');
        $Login->status = $request -> input('status');
        $Login->save();
//         Login::create([
//             'email' => $request->email,
//             'password' => $request->password
//         ]);

//         $post = new Post;
// $post->title = $request->input('title');
// $post->body = $request->input('body');
// $post->save();
   
    
    return redirect('/create')->with('status','categories created');
    }

}
