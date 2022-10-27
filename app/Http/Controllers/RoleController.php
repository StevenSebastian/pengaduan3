<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function store(Request $request){

        return "submit ok";
        }
    public function create(){
        return view ('role.create');
        }
}
