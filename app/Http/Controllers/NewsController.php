<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class NewsController extends Controller
{
public function getData(){
 $client = new Client();
 $request = $client->get('https://newsapi.org/v2/top-headlines?country=id&apiKey=2323b0c0152e41269a06530617df3097');
 $response = $request->getBody();
 $result = json_decode($response);
 return view('news',['artikel'=>$result->articles]);
}
public function searchData(Request $request){
    $client = new Client();
    $query = $request->keyword;
    $req = $client->get('https://newsapi.org/v2/top-headlines?country=id&apiKey=2323b0c0152e41269a06530617df3097&q='.$query);
    $response = $req->getBody();
    $result = json_decode($response);
    return view('news',['artikel'=>$result->articles]);
   }
   
}