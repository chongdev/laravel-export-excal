<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(15);
        // dd( $users->toArray() );

        return view('users.index', compact('users'));
    }

    public function excel()
    {
        $users = User::all();

        // $list = collect([
        //     [ 'id' => 1, 'name' => 'Jane' ],
        //     [ 'id' => 2, 'name' => 'John' ],
        // ]);

        return (new FastExcel($users))->download('users.xlsx');
    }
}
