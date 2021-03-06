<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Auth;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
      return view('Auth.login');
    }

    public function login(){
      $credentials = $this->validate(request(), [
        'email' => 'email|required|string',
        'password' => 'required|string'
      ]);

      if(Auth::attempt($credentials))
      {
        if(Auth::user()->type=='admin') {
          return redirect('/admin/clients');
        } else {
          return redirect()->route('home');
        }
      }

      return back()
        ->withErrors(['email' => trans('auth.failed')])
        ->withInput(request(['email']));
    }

    public function logout()
    {
      Auth::logout();
      return redirect()->route('home');
    }
}
