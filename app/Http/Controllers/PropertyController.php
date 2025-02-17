<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.portfolio.index",['properties' => Property::all()]);
    }

    public function showInterior($id){
        return view("pages.portfolio.interior",['property' => Property::find($id)]);
    }

    public function showAttraction($id){
        return view("pages.portfolio.attraction",['property' => Property::find($id)]);
    }
}
