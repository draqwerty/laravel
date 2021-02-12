<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\CurrentRepository;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Agent;

class PagesController extends Controller
{

    public function index(CurrentRepository $current)
    {
        $title = 'Here';
        $currentlist = $current->getCurrentList();

        $menuList = (new MenuController)->getMenu();

        $response = Http::get('https://swd.weatherflow.com/swd/rest/better_forecast?station_id=35990&token=e30894fa-1a63-4b9a-8408-82008e2bc3b5&lat=-37.90115&lon=145.35545');
        $response = json_decode($response->getBody(), true);

        $wfforecast = [
           'day_num0' => $response['forecast']['daily'][0]['day_num'],
           'month_num0' => $response['forecast']['daily'][0]['month_num'],
           'conditions0' => $response['forecast']['daily'][0]['conditions'],
           'icon0' => $response['forecast']['daily'][0]['icon'],
           'air_temp_high0' => $response['forecast']['daily'][0]['air_temp_high'],
           'air_temp_low0' => $response['forecast']['daily'][0]['air_temp_low'],
           'precip_probability0' => $response['forecast']['daily'][0]['precip_probability'],

           'day_num1' => $response['forecast']['daily'][1]['day_num'],
           'month_num1' => $response['forecast']['daily'][1]['month_num'],
           'conditions1' => $response['forecast']['daily'][1]['conditions'],
           'icon1' => $response['forecast']['daily'][1]['icon'],
           'air_temp_high1' => $response['forecast']['daily'][1]['air_temp_high'],
           'air_temp_low1' => $response['forecast']['daily'][1]['air_temp_low'],
           'precip_probability1' => $response['forecast']['daily'][1]['precip_probability'],

           'day_num2' => $response['forecast']['daily'][2]['day_num'],
           'month_num2' => $response['forecast']['daily'][2]['month_num'],
           'conditions2' => $response['forecast']['daily'][2]['conditions'],
           'icon2' => $response['forecast']['daily'][2]['icon'],
           'air_temp_high2' => $response['forecast']['daily'][2]['air_temp_high'],
           'air_temp_low2' => $response['forecast']['daily'][2]['air_temp_low'],
           'precip_probability2' => $response['forecast']['daily'][2]['precip_probability'],

           'day_num3' => $response['forecast']['daily'][3]['day_num'],
           'month_num3' => $response['forecast']['daily'][3]['month_num'],
           'conditions3' => $response['forecast']['daily'][3]['conditions'],
           'icon3' => $response['forecast']['daily'][3]['icon'],
           'air_temp_high3' => $response['forecast']['daily'][3]['air_temp_high'],
           'air_temp_low3' => $response['forecast']['daily'][3]['air_temp_low'],
           'precip_probability3' => $response['forecast']['daily'][3]['precip_probability'],

           'day_num4' => $response['forecast']['daily'][4]['day_num'],
           'month_num4' => $response['forecast']['daily'][4]['month_num'],
           'conditions4' => $response['forecast']['daily'][4]['conditions'],
           'icon4' => $response['forecast']['daily'][4]['icon'],
           'air_temp_high4' => $response['forecast']['daily'][4]['air_temp_high'],
           'air_temp_low4' => $response['forecast']['daily'][4]['air_temp_low'],
           'precip_probability4' => $response['forecast']['daily'][4]['precip_probability'],

           'day_num5' => $response['forecast']['daily'][5]['day_num'],
           'month_num5' => $response['forecast']['daily'][5]['month_num'],
           'conditions5' => $response['forecast']['daily'][5]['conditions'],
           'icon5' => $response['forecast']['daily'][5]['icon'],
           'air_temp_high5' => $response['forecast']['daily'][5]['air_temp_high'],
           'air_temp_low5' => $response['forecast']['daily'][5]['air_temp_low'],
           'precip_probability5' => $response['forecast']['daily'][5]['precip_probability'],

           'day_num6' => $response['forecast']['daily'][6]['day_num'],
           'month_num6' => $response['forecast']['daily'][6]['month_num'],
           'conditions6' => $response['forecast']['daily'][6]['conditions'],
           'icon6' => $response['forecast']['daily'][6]['icon'],
           'air_temp_high6' => $response['forecast']['daily'][6]['air_temp_high'],
           'air_temp_low6' => $response['forecast']['daily'][6]['air_temp_low'],
           'precip_probability6' => $response['forecast']['daily'][6]['precip_probability'],

           'day_num7' => $response['forecast']['daily'][7]['day_num'],
           'month_num7' => $response['forecast']['daily'][7]['month_num'],
           'conditions7' => $response['forecast']['daily'][7]['conditions'],
           'icon7' => $response['forecast']['daily'][7]['icon'],
           'air_temp_high7' => $response['forecast']['daily'][7]['air_temp_high'],
           'air_temp_low7' => $response['forecast']['daily'][7]['air_temp_low'],
           'precip_probability7' => $response['forecast']['daily'][7]['precip_probability'],

           'day_num8' => $response['forecast']['daily'][8]['day_num'],
           'month_num8' => $response['forecast']['daily'][8]['month_num'],
           'conditions8' => $response['forecast']['daily'][8]['conditions'],
           'icon8' => $response['forecast']['daily'][8]['icon'],
           'air_temp_high8' => $response['forecast']['daily'][8]['air_temp_high'],
           'air_temp_low8' => $response['forecast']['daily'][8]['air_temp_low'],
           'precip_probability8' => $response['forecast']['daily'][8]['precip_probability'],

           'day_num9' => $response['forecast']['daily'][9]['day_num'],
           'month_num9' => $response['forecast']['daily'][9]['month_num'],
           'conditions9' => $response['forecast']['daily'][9]['conditions'],
           'icon9' => $response['forecast']['daily'][9]['icon'],
           'air_temp_high9' => $response['forecast']['daily'][9]['air_temp_high'],
           'air_temp_low9' => $response['forecast']['daily'][9]['air_temp_low'],
           'precip_probability9' => $response['forecast']['daily'][9]['precip_probability'],

       ];

        return view('pages.index')->with(compact('currentlist','title'))
                    ->with($wfforecast)
                    ->with('menulist', $menuList);
    }

    public function getWF(CurrentRepository $current)
    {
        $currentlist = $current->getCurrentList();

        $menuList = (new MenuController)->getMenu();

        $response = Http::get('https://swd.weatherflow.com/swd/rest/observations/station/35990?token=e30894fa-1a63-4b9a-8408-82008e2bc3b5');
        $response = json_decode($response->getBody(), true);

        $wfdata = [
           'timestamp' => $response['obs'][0]['timestamp'],
           'air_temperature' => $response['obs'][0]['air_temperature'],
           'barometric_pressure' => $response['obs'][0]['barometric_pressure'],
           'station_pressure' => $response['obs'][0]['station_pressure'],
           'sea_level_pressure' => $response['obs'][0]['sea_level_pressure'],
           'relative_humidity' => $response['obs'][0]['relative_humidity'],
           'precip' => $response['obs'][0]['precip'],
           'precip_accum_last_1hr' => $response['obs'][0]['precip_accum_last_1hr'],
           'precip_accum_local_day' => $response['obs'][0]['precip_accum_local_day'],
           'precip_accum_local_yesterday' => $response['obs'][0]['precip_accum_local_yesterday'],
           'precip_minutes_local_day' => $response['obs'][0]['precip_minutes_local_day'],
           'precip_minutes_local_yesterday' => $response['obs'][0]['precip_minutes_local_yesterday'],
           'wind_avg' => $response['obs'][0]['wind_avg'],
           'wind_direction' => $response['obs'][0]['wind_direction'],
           'wind_gust' => $response['obs'][0]['wind_gust'],
           'wind_lull' => $response['obs'][0]['wind_lull'],
           'solar_radiation' => $response['obs'][0]['solar_radiation'],
           'uv' => $response['obs'][0]['uv'],
           'brightness' => $response['obs'][0]['brightness'],
           'lightning_strike_last_epoch' => $response['obs'][0]['lightning_strike_last_epoch'],
           'lightning_strike_last_distance' => $response['obs'][0]['lightning_strike_last_distance'],
           'lightning_strike_count' => $response['obs'][0]['lightning_strike_count'],
           'lightning_strike_count_last_1hr' => $response['obs'][0]['lightning_strike_count_last_1hr'],
           'lightning_strike_count_last_3hr' => $response['obs'][0]['lightning_strike_count_last_3hr'],
           'feels_like' => $response['obs'][0]['feels_like'],
           'heat_index' => $response['obs'][0]['heat_index'],
           'wind_chill' => $response['obs'][0]['wind_chill'],
           'dew_point' => $response['obs'][0]['dew_point'],
           'wet_bulb_temperature' => $response['obs'][0]['wet_bulb_temperature'],
           'delta_t' => $response['obs'][0]['delta_t'],
           'air_density' => $response['obs'][0]['air_density'],
           'pressure_trend' => $response['obs'][0]['pressure_trend']
       ];

        $title = 'WFData';

        return view('pages.wfextract')->with(compact('currentlist','title'))
                                      ->with($wfdata)
                                      ->with('menulist', $menuList);
    }


    public function graphMtd(CurrentRepository $current)
    {
        $title = 'to date graphs';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.graph.mtd')->with(compact('currentlist','title'))
                                      ->with('menulist', $menuList);
    }

    public function graphCurrent(CurrentRepository $current)
    {
        $title = 'to date graphs';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.graph.current')->with(compact('currentlist','title'))
                                          ->with('menulist', $menuList);
    }

    public function graphLast(CurrentRepository $current)
    {
        $title = 'last graphs (from midnight)';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.graph.last')->with(compact('currentlist','title'))
                                       ->with('menulist', $menuList);
    }

    public function moon(CurrentRepository $current)
    {
        $title = 'moon details';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.moon')->with(compact('currentlist','title'))
                                 ->with('menulist', $menuList);
    }

    public function recordsAll(CurrentRepository $current)
    {
        $title = 'all time records';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.records.alltime')->with(compact('currentlist','title'))
                                            ->with('menulist', $menuList);
    }

    public function records2021(CurrentRepository $current)
    {
        $title = '2021 records';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.records.2021')->with(compact('currentlist','title'))
                                         ->with('menulist', $menuList);
    }

    public function recordsMonth(CurrentRepository $current)
    {
        $title = 'current month records';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.records.currentmonth')->with(compact('currentlist','title'))
                                               ->with('menulist', $menuList);
    }

    public function recordsYear(CurrentRepository $current)
    {
        $title = 'current year records';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.records.currentyear')->with(compact('currentlist','title'))
                                                ->with('menulist', $menuList);
    }

    public function wdLive(CurrentRepository $current)
    {
        $title = 'weather data live';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.wdlive')->with(compact('currentlist','title'))
                                   ->with('menulist', $menuList);
    }


}
