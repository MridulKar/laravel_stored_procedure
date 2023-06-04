<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function all_users(){
       return $users = DB::select('CALL get_users()');
    }

    public function user_by_id($id){
        return $users = DB::select('CALL get_user_by_id('.$id.')');
    }
}
