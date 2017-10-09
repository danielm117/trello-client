<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class BoardController extends Controller
{
    private $token = "a5da84e9ff815e4e828c40e825a5eb0a0c2ef3d00fae53c3fbd9cf2eebdfac0e";
   
    private $key = "8ca1273dba5f29780127f5a0373f81df";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->getTokenFromUrl();

        $client = new Client();

        $url = "https://trello.com/1/member/me/boards?key=$this->key&token=$this->token";

        $response = $client->get($url);
        // $response = $boards->send();
        $boards = json_decode(($response->getBody()->getContents()));
        // echo "<pre>";
        // print_r($boards);
        // echo "</pre>";

        return view("trello.boards", ['boards' => $boards]);
  

        
    }

    private function getTokenFromUrl(){
        // echo "token";
        // $actual_link = $_SERVER["REQUEST_URI"];
        // print_r($actual_link);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = "https://trello.com/1/boards/$id/cards?key=$this->key&token=$this->token";
        
        $client = new Client();
        $response = $client->get($url);
        // $response = $boards->send();
        $cards = json_decode(($response->getBody()->getContents()));
        // echo "<pre>";
        // print_r($cards);
        // echo "</pre>";
        return view("trello.board", ['cards' => $cards]);

        // dd($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
