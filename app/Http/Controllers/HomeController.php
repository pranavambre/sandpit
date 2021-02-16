<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\UserData;


class HomeController extends Controller
{

    public function GetApi($url)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $url, ['query' => [
            'results' => 15,
        ]]);
        $statusCode = $response->getStatusCode();

        $content = json_decode($response->getBody(), true);
        return $content;
    }


    public function PostApi($url,$body) {
        $client = new \GuzzleHttp\Client();
        $response = $client->request("POST", $url, ['form_params'=>$body]);
        $response = $client->send($response);
        return $response;
    }



    public function index(Request $request){


        $items = $this->GetApi('https://randomuser.me/api/');

        $data = $items['results'];


        foreach($data as $d){

            $model[] =  new UserData (array(
            'name' =>   $d['name']['first'],
            'image' =>  $d['picture']['large'],
            'country' => $d['location']['country'],
            ));
        }

        $request->session()->put('userdata', $model);

        // dd($model);

        return view("welcome", compact("model"));
    }

    // public function returnData(Request $request){

    //     $data[] = new UserData;
    //     $data = $request->session()->get('userdata');

    //     // dd($data);

    //     return $data;
    // }
}
