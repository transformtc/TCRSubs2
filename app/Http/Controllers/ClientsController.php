<?php
/**
 * Created by PhpStorm.
 * User: benmills
 * Date: 8/8/18
 * Time: 12:08 AM
 */

namespace App\Http\Controllers;

use App\Client;

class ClientsController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }

}