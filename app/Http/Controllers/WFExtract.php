<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Http\Repository\CurrentRepository;
use Jenssegers\Agent\Agent;

class WFExtract extends Controller
{
    public function getRequest()
    {
        //$client = new \GuzzleHttp\Client();

        //$response = $client->get('https://swd.weatherflow.com/swd/rest/observations/station/35990?token=e30894fa-1a63-4b9a-8408-82008e2bc3b5');
       $response = Http::get('https://swd.weatherflow.com/swd/rest/observations/station/35990?token=e30894fa-1a63-4b9a-8408-82008e2bc3b5');
       $response = json_decode($response->getBody(), true);
    //    echo "Station Pressure: ".($response["obs"][0]["station_pressure"])."<br />";
    //    echo "Sea Level Pressure: ".($response["obs"][0]["sea_level_pressure"])."<br />";
    //    $difference = $response["obs"][0]["sea_level_pressure"] - $response["obs"][0]["station_pressure"];
//        echo "Difference: ".$difference;
        //echo $response[sea_level_pressure];
//        dd($response);

        $data = array(
           'title' => 'Welcome to Belgrave!',
           "timestamp" => $response["obs"][0]["station_pressure"],
           "air_temperature" => $response["obs"][0]["timestamp"],
           "barometric_pressure" => $response["obs"][0]["barometric_pressure"],
           "station_pressure" => $response["obs"][0]["station_pressure"],
           "sea_level_pressure" => $response["obs"][0]["sea_level_pressure"],
           "relative_humidity" => $response["obs"][0]["relative_humidity"],
           "precip" => $response["obs"][0]["precip"],
           "precip_accum_last_1hr" => $response["obs"][0]["precip_accum_last_1hr"],
           "precip_accum_local_day" => $response["obs"][0]["precip_accum_local_day"],
           "precip_accum_local_yesterday" => $response["obs"][0]["precip_accum_local_yesterday"],
           "precip_minutes_local_day" => $response["obs"][0]["precip_minutes_local_day"],
           "precip_minutes_local_yesterday" => $response["obs"][0]["precip_minutes_local_yesterday"],
           "wind_avg" => $response["obs"][0]["wind_avg"],
           "wind_direction" => $response["obs"][0]["wind_direction"],
           "wind_gust" => $response["obs"][0]["wind_gust"],
           "wind_lull" => $response["obs"][0]["wind_lull"],
           "solar_radiation" => $response["obs"][0]["solar_radiation"],
           "uv" => $response["obs"][0]["uv"],
           "brightness" => $response["obs"][0]["brightness"],
           "lightning_strike_last_epoch" => $response["obs"][0]["lightning_strike_last_epoch"],
           "lightning_strike_last_distance" => $response["obs"][0]["lightning_strike_last_distance"],
           "lightning_strike_count" => $response["obs"][0]["lightning_strike_count"],
           "lightning_strike_count_last_1hr" => $response["obs"][0]["lightning_strike_count_last_1hr"],
           "lightning_strike_count_last_3hr" => $response["obs"][0]["lightning_strike_count_last_3hr"],
           "feels_like" => $response["obs"][0]["feels_like"],
           "heat_index" => $response["obs"][0]["heat_index"],
           "wind_chill" => $response["obs"][0]["wind_chill"],
           "dew_point" => $response["obs"][0]["dew_point"],
           "wet_bulb_temperature" => $response["obs"][0]["wet_bulb_temperature"],
           "delta_t" => $response["obs"][0]["delta_t"],
           "air_density" => $response["obs"][0]["air_density"],
           "pressure_trend" => $response["obs"][0]["pressure_trend"]
       );
        //return view('pages.wfextract')->with($data);
        $title = "WFData";

        $currentlist = $current->getCurrentList();

        return view('pages.wfextract')->with($data)->with(compact('currentlist','title'));


    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
