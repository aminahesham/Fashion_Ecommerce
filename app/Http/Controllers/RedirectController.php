<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RoleUser; 
use App\Models\Role;
use Illuminate\Support\Facades\Auth;


class RedirectController extends Controller
{
    /* redirect user to home page and redirect admin to dashboard */

    public function redirect(){

        $role = Auth :: user();

        if($role->hasRole('client')){

            return view('Home');
        }
        else{
            return view('Dashboard');
        }
    }
}
