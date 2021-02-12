<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\CurrentRepository;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Agent;

class ReportsController extends Controller
{
    public function reportsClimateCurrentYear(CurrentRepository $current)
    {
        $title = 'climate data current year report';
        $filename = 'climatedataout.html';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsClimateCurrentMonth(CurrentRepository $current)
    {
        $title = 'climate data current month report';
        $filename = 'climatedataout.html';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsClimateYear(CurrentRepository $current, $year)
    {
        $filename = 'climatedatayearout'.$year.'.html';
        $title = 'climate data year report for '.$year;

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsClimateMonth(CurrentRepository $current, $year, $month)
    {
        $filename = 'climatedataout'.$month.$year.'.html';
        $title = 'climate data month report for ';

        switch($month)
        {
            case 1:
                $title .= 'january ';
                break;
            case 2:
                $title .= 'february ';
                break;
            case 3:
                $title .= 'march ';
                break;
            case 4:
                $title .= 'april ';
                break;
            case 5:
                $title .= 'may ';
                break;
            case 6:
                $title .= 'june ';
                break;
            case 7:
                $title .= 'july ';
                break;
            case 8:
                $title .= 'august ';
                break;
            case 9:
                $title .= 'september ';
                break;
            case 10:
                $title .= 'october ';
                break;
            case 11:
                $title .= 'november ';
                break;
            case 12:
                $title .= 'december ';
                break;
        }

        $title .= $year;

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsDaily(CurrentRepository $current)
    {
        $title = 'daily report';
        $filename = 'weekrep.htm';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports.month')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsDailyLog(CurrentRepository $current)
    {
        $title = 'daily log';
        $filename = 'dailylogout.html';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports.month')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsNoaaCurrentYear(CurrentRepository $current)
    {
        $title = 'noaa style current year report';
        $filename = 'noaareportyear.htm';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsNoaaCurrentMonth(CurrentRepository $current)
    {
        $title = 'noaa style current month report';
        $filename = 'dailynoaareport.htm';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsNoaaYear(CurrentRepository $current, $year)
    {
        $filename = 'noaareportyear'.$year.'.htm';
        $title = 'noaa style year report for '.$year;

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsNoaaMonth(CurrentRepository $current, $year, $month)
    {
        $filename = 'dailynoaareport'.$month.$year.'.htm';
        $title = 'noaa style month report for ';

        switch($month)
        {
            case 1:
                $title .= 'january ';
                break;
            case 2:
                $title .= 'february ';
                break;
            case 3:
                $title .= 'march ';
                break;
            case 4:
                $title .= 'april ';
                break;
            case 5:
                $title .= 'may ';
                break;
            case 6:
                $title .= 'june ';
                break;
            case 7:
                $title .= 'july ';
                break;
            case 8:
                $title .= 'august ';
                break;
            case 9:
                $title .= 'september ';
                break;
            case 10:
                $title .= 'october ';
                break;
            case 11:
                $title .= 'november ';
                break;
            case 12:
                $title .= 'december ';
                break;
        }

        $title .= $year;

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsWeatherData(CurrentRepository $current)
    {
        $title = 'daily report';
        $filename = config('app.name','MEL').'.htm';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports.month')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }

    public function reportsAveExtremeMonth(CurrentRepository $current, $year, $month)
    {
        $title = 'monthly averages/extremes report for '.$month.' '.$year;
        $filename = ucwords($month).$year.'.htm';

        $menuList = (new MenuController)->getMenu();

        $currentlist = $current->getCurrentList();

        return view('pages.reports.month')->with(compact('currentlist','title','filename'))
                                          ->with('menulist', $menuList);
    }
}
