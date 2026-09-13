<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use GuzzleHttp\Client;

use App\Http\Services\ModuleService;

class HomeController extends Controller
{

 protected $moduleService;


 public function __construct(ModuleService $moduleService){

  $this->moduleService = $moduleService;  

}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // echo "test";

       return view('welcome');

      //   return view('home', [          
      //     'products' => $product,
      //     'categorys' => $category,
      //     'subcategorys' => $subcategory,
      //     'maincategorys' => $maincategory      
      // ]);
        //
   }

   public function getDataTest()
   {

    $client = new Client();


    // $response = $client->request('GET', 'https://earthquake.usgs.gov/fdsnws/event/1/application.json');

    $starttime = date("Y-m-d");

    $magnitude = rand(5, 7);

    // return response()->json($starttime);

    $totalnow = $client->request('GET', 'https://earthquake.usgs.gov/fdsnws/event/1/count?format=geojson&starttime='.$starttime);

    // $response = $client->request('GET', 'https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=2026-07-19&limit='.$totalnow->count);

    $response = $client->request('GET', 'https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime='.$starttime.'&minmagnitude='.$magnitude);

    // Processing the response
$statusCode = $response->getStatusCode(); // Returns 200
$bodyString = $response->getBody()->getContents(); // Gets raw body string
$data = json_decode($bodyString, true); // Manual JSON decoding

// $data = json_decode($response->getBody()->getContents());


return response()->json($data);

  // return response()->json([$data->features[0]->properties,$data->features[0]->geometry]);

    // return response()->json("json format");

}

public function getData()
{


    $starttime = date("Y-m-d");

    $magnitude = rand(5, 7);
    

    $totalnow = $this->moduleService->responseGet('/fdsnws/event/1/count?format=geojson&starttime='.$starttime);

    $data = $this->moduleService->responseGet('/fdsnws/event/1/query?format=geojson&starttime=2026-07-02&limit='.$totalnow->count);

      

    return response()->json($data->features);




}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
