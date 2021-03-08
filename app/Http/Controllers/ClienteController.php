<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }
    
    public function index()
    {
        return view('customer.index');
    }

    public function delete($id){

        $user = User::findOrFail($id);
        $user->delete();
        
        Session::flush();
        Auth::logout();

        return view('welcome')->with(
            'success', 'Hai cancellato il tuo profilo utente :('
        );
    }
}
