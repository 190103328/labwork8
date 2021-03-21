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

    /*
    Return client with clint_id
    */
    public function get_client(Request $request){
        $client = Client::find($request->client_id);

        if($client == null){
            return response(['message' => 'There is no client'], 404);
        }

        return response($client, 200);
    }
}

