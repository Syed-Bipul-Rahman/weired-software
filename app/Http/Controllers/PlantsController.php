<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;

class PlantsController extends Controller
{


 //index funtion
 public function index(){


    $animals = Plants::all();

    return response()->json([
        'status' => 'success',
        'message' => 'Animals retrieved successfully',
        'data' => $animals
    ]);
}


}
