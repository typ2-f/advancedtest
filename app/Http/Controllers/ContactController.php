<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from contacts');
        return view('contact', ['items' => $items]);
    }
}
