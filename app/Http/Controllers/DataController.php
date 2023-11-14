<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        //  Trae todos los posts que sean de STATUS = 2 (publicado)
        $datas = Data::latest('id')->paginate(10);

        return view('data.index', compact('datas'));
    }
}
