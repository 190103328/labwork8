<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ApiController extends Controller
{
    /*
    This function return all clients rows
     */
    public function index(Request $request){
        $clients = Client::all();

        return response($clients, 200);
    }
}
