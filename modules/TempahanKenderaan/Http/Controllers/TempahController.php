<?php

namespace Modules\TempahanKenderaan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TempahController extends Controller
{
    public function index()
    {
        return view('tempahan_kenderaan.index');
    }
}
