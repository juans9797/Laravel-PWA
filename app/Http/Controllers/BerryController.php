<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class BerryController extends Controller
{
    private $pokiBerryUrl = "https://pokeapi.co/api/v2/berry";
    private $client;

    public function __construct()
    {
        $this->client = $client = new Client();
    }

    /**
     * @throws GuzzleException
     */
    public function getAllBerries()
    {
        $data = $this->client->get($this->pokiBerryUrl)->getBody();
        $decodedData = json_decode($data);
        //dd($decodedData);
        return view('berries')->with('data',$decodedData);
    }

    /**
     * @throws GuzzleException
     */
    public function getDetails(Request $request)
    {
        $data = $this->client->get($request->url)->getBody();
        $decodedData = json_decode($data,true);
        //dd($decodedData);
        return view('berryDetails')->with('data',$decodedData);
    }

    /**
     * @throws GuzzleException
     */
    public function berryPagination(Request $request)
    {
        $data = $this->client->get($request->url)->getBody();
        $decodedData = json_decode($data);
        return view('berryContent')->with('data',$decodedData);
    }
}
