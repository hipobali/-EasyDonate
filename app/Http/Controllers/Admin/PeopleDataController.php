<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\People;

class PeopleDataController extends Controller
{
    public function index(){
        $people=People::all();
        return view('admin.people_data.index',compact('people'));
    }
    public function destroy(){

    }
}
