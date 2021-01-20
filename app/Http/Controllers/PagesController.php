<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\CurrentRepository;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function index(CurrentRepository $current)
    {
        $title = 'Here';

        $currentlist = $current->getCurrentList();

        return view('pages.index', compact('currentlist','title'));
    }

    public function current()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.current')->with($data);
    }

    public function getWF(CurrentRepository $current)
    {
        $currentlist = $current->getCurrentList();

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
                                      ->with($wfdata);
    }

    public function graphMtd(CurrentRepository $current)
    {
        $title = 'to date graphs';

        $currentlist = $current->getCurrentList();

        return view('pages.graph.mtd', compact('currentlist','title'));
    }

    public function graphCurrent(CurrentRepository $current)
    {
        $title = 'to date graphs';

        $currentlist = $current->getCurrentList();

        return view('pages.graph.current', compact('currentlist','title'));
    }

    public function graphLast(CurrentRepository $current)
    {
        $title = 'last graphs (from midnight)';

        $currentlist = $current->getCurrentList();

        return view('pages.graph.last', compact('currentlist','title'));
    }

    public function moon(CurrentRepository $current)
    {
        $title = 'moon details';

        $currentlist = $current->getCurrentList();

        return view('pages.moon', compact('currentlist','title'));
    }

    public function recordsAll(CurrentRepository $current)
    {
        $title = 'all time records';

        $currentlist = $current->getCurrentList();

        return view('pages.records.alltime', compact('currentlist','title'));
    }

    public function records2021(CurrentRepository $current)
    {
        $title = '2021 records';

        $currentlist = $current->getCurrentList();

        return view('pages.records.2021', compact('currentlist','title'));
    }

    public function recordsMonth(CurrentRepository $current)
    {
        $title = 'current month records';

        $currentlist = $current->getCurrentList();

        return view('pages.records.currentmonth', compact('currentlist','title'));
    }

    public function recordsYear(CurrentRepository $current)
    {
        $title = 'current year records';

        $currentlist = $current->getCurrentList();

        return view('pages.records.currentyear', compact('currentlist','title'));
    }
}
