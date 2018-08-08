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
    protected $primaryKey = 'client_id';

    public function index()
    {
        $clients = Client::all();
        return view('welcome', compact('clients'));
    }

    public function show($id)
    {
        $clients = Client::find($id);
        return view('welcome', compact('clients'));
    }

}