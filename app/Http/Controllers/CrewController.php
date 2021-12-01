<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{

    public function index()
    {
        $crews = Crew::all();
        return (view('crew.index', ['crews' => $crews]));
    }

    public function detail($id)
    {
        $crew = Crew::find($id);
        return (view('crew.detail', ['crew' => $crew]));
    }
    //
}
