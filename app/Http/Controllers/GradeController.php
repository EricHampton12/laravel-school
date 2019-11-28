<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function grades()
    {
        $grades = DB::table('grade_level')->get();

        return view('supply.id', ['grade_level' => $grades]);
    }
}
