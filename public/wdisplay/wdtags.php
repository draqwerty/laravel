<?php
// converted tagslist.txt to .\tagslist.php for php tags
// by gen-PHP-tagslist.pl - Version 1.00 - 07-Apr-2006
// Author: Ken True - webmaster-weather.org
// Edited: 20-Apr-2006 to trim unused tags
// Version 1.01 - 25-Jan-2008 -- added Windy-rain to icon list
// Version 1.02 - 24-Jun-2008 -- added variables to replace old trends-inc.html with trends-inc.php
// Version 1.03 - 27-Oct-2008 -- added Snow and WU almanac variables
// Version 1.04 - 03-Jun-2009 -- added moonrisedate/moonsetdate for wxastronomy.php
// Version 1.05 - 11-Jul-2009 -- added tags for printable flyer, alternative dashboard, high/low/avg plugins
//                               Thanks to Mike and Scott for their permission to add the above tags!
// Version 1.06 - 12-Jul-2009 -- added tags for V4.0 of alternative dashboard
// Version 1.07 - 23-Jul-2011 -- added support for multiple plugin scripts for WD - see comments for supported scripts
// Version 1.08 - 04-Aug-2012 -- added support for monthly average tags
/* 
  1.07 includes support for:
  
WebsterWeather:  http://www.websterweatherlive.com/wxScripts.php
  Alt-Dashboard 4.xx Script (Pre-Rainer's JavaScript) 	V4.30 	18-FEB-2011
  Alt-Dashboard 5.xx Script 	V5.20 	18-FEB-2011
  UpdatedAlt-Dashboard 6.xx Script 	V6.20 	27-JUN-2011
  UpdatedMOBILE Dashboard 1.xx Script 	V1.30 	15-JUL-2011
  High/Low/Averages Script Ver 3 Ajax-PHP Template Only 	V3.01 	25-MAR-2011

642weather (MChallis) http://www.642weather.com/weather/scripts-printable-flyer.php
  Printable Flyer Add-on for WD/PHP/AJAX Website Template V1.12  06-Nov-2009

Eastmasonville http://eastmasonvilleweather.com/downloads.php
  Station Records (wxrecords)  V1.13 - 24-May-2011

Relayweather http://www.relayweather.com/downloads.php
  Temperature and Rain Trending (wxglobalwarming) 	V1.0 	20-Jan-2010

end of 1.07 update description
*/
// --------------------------------------------------------------------------
// allow viewing of generated source

if ( isset($_REQUEST['sce']) && strtolower($_REQUEST['sce']) == 'view' ) {
//--self downloader --
   $filenameReal = __FILE__;
   $download_size = filesize($filenameReal);
   header('Pragma: public');
   header('Cache-Control: private');
   header('Cache-Control: no-cache, must-revalidate');
   header('Content-type: text/plain');
   header('Accept-Ranges: bytes');
   header("Content-Length: $download_size");
   header('Connection: close');
   
   readfile($filenameReal);
   exit;
}
// Units
// -----
$uomtemp = 'C'; //  = 'C', 'F',  (or  '°C', '°F', or '&deg;C', '&deg;F' )
$uombaro = 'hPa'; //  = 'inHg', 'hPa', 'kPa', 'mb'
$uomwind = 'kmh'; //  = 'kts','mph','kmh','km/h','m/s','Bft'
$uomrain = 'mm'; //  = 'mm', 'in'
$datefmt = 'd/m/y'; //  = 'd/m/y', 'm/d/y'
$uomdistance = 'km'; // = 'mi','km'  (for windrun variables)
//
// General OR Non Weather Specific/SUN/MOON
// ========================================
$time =  '07:03 AM';	// current time
$date =  '28/1/2021';	// current date
$sunrise =  '6:27 am';	// sun rise time (make sure you have the correct lat/lon
// 		            in view/sun moon)
$time_minute =  '03';	// Current minute
$time_hour =  '07';	// Current hour
$date_day =  '28';	// Current day
$date_month =  '01';	// Current month
$date_year =  '2021';	// Current year
$monthname =  'January';	// Current month name
$dayname =  'Thursday';	// Current day name
$sunset =  '8:35 pm';	// sunset time
$moonrisedate =  '27/01/21';	// moon rise date
$moonrise =  '7:42 pm';	// moon rise time
$moonsetdate =  '28/01/21';	// moon set date
$moonset =  '5:16 am';	// moon set time
$moonage =  'Moon age: 13 days,18 hours,58 minutes,99%';	// current age of the moon (days since new moon)
$moonphase =  '99%';	// Moon phase %
$moonphasename = 'Waxing Gibbous Moon'; // 10.36z addition
$marchequinox =  '09:38 UTC 20 March 2021';	// March equinox date
$junesolstice =  '03:33 UTC 21 June 2021';	// June solstice date
$sepequinox =  '19:22 UTC 22 September 2021';	// September equinox date
$decsolstice =  '16:00 UTC 21 December 2021';	// December solstice date
$moonperihel =  '17:15 UTC 3 January 2022';	// Next Moon perihel date
$moonaphel =  '02:08 UTC 5 July 2021';	// Next moon perihel date
$moonperigee =  '19:32 UTC 3 February 2021';	// Next moon perigee date
$moonapogee =  '10:22 UTC 18 February 2021';	// Next moon apogee date
$newmoon =  '05:01 UTC 13 January 2021';	// Date/time of the next/last new moon
$nextnewmoon =  '19:06 UTC 11 February 2021';	// Date/time of the next new moon for next month
$firstquarter =  '21:02 UTC 20 January 2021';	// Date/time of the next/last first quarter moon
$lastquarter =  '17:38 UTC 4 February 2021';	// Date/time of the next/last last quarter moon
$fullmoon =  '19:17 UTC 28 January 2021';	// Date/time of the next/last full moon
$fullmoondate =  '28 January 2021';	// Date of the next/last full moon (date only)
$suneclipse =  '04 December 2021 09:14:58 7%';	// Next sun eclipse
$mooneclipse =  '19 November 2021 09:03:21 97%';	// Next moon eclipse date
$easterdate =  '4 April 2021';	// Next easter date
$chinesenewyear =  '12 February 2021 ()';	// Chinese new year
$hoursofpossibledaylight =  '14:08';	// Total hours/minutes of possible daylight for today
//
$weatherreport =  'mostly cloudy';	// current weather conditions from selected METAR
$stationaltitude =  '266';	// Station altitude, feet, as set in the units setup
// this under setup)
$stationlatitude =  '-37:54:00';	// Latitude (from the sun moon rise/set setup)
$stationlongitude =  '-145:21:00';	// Longtitude (from the sun moon rise/set setup)
$windowsuptime = '12 Days 13 Hours 20 Minutes 24 Seconds'; // uptime for windows on weather pc
$freememory = '15.58GB'; // amount of free memory on the pc
$Startimedate = '7:43:58 AM 16/01/2021'; // Time/date WD was started

/*
$NOAAEvent = 'NO CURRENT ADVISORIES'; // NOAA Watch/Warning/Advisory
$noaawarningraw = '---'; // NOAA RAW watch/warning/advisory
*/

$wdversion = '10.37S' . '-(b' . '122' . ')';	// Weather Display version number you are running
$wdversiononly = '10.37S';
$wdbuild   = '122';       // Weather Display build number you are running
$noaacityname =  'Belgrave';	// City name,from the noaa setup (in the av/ext setup)
// 
$timeofnextupdate =  '7:04 am';	// Time of next Update/Upload of the weather data to your web page (based on the web table update 
// 
$heatcolourword =  'Cool';	// How hot/cold it feels at the moment, based on the humidex, used with the conditionscolour.jpg 
// 
// 
// Temperature/Humidity
// ====================
// Current:
// --------
$temperature =  '16.0';	// temperature
$tempnodp = '16'; // temperature, no decimal place
$humidity =  '76';	// humidity
$dewpt =  '11.8';	// dew point
$maxtemp =  '16.0';	// today's maximum temperature
$maxtempt =  '6:31 AM';	// time this occurred
$mintemp =  '15.2';	// today's minimum temperature
$mintempt =  '1:23 AM';	// time this occurred
$feelslike =  '16';	// Shows heat index or humidex or windchill (if less than 16oC)

$heati =  '16.0';	// current heat index
$heatinodp =  '16';	// current heat index,no decimal place
$windch =  '16.0';	// current wind-chill
$windchnodp =  '16';	// current wind-chill, no decimal place
$humidexfaren =  '64.7';	// Humidex value in oF
$humidexcelsius =  '18.1';	// Humidex value in oC

$apparenttemp =  '16.7';	// Apparent temperature
$apparentsolartemp =  '18.7';	// Apparent temperature in the sun (you need a solar sensor)
$apparenttempc =  '16.7';	// Apparent temperature, °C
$apparentsolartempc =  '18.7';	// Apparent temperature in the sun, °C (you need a solar sensor)
$apparenttempf =  '62.1';	// Apparent temperature, °F
$apparentsolartempf =  '65.7';	// Apparent temperature in the sun, °F (you need a solar sensor)
// 
$WUmaxtemp = '0.0';	// Todays average max temperature from the selected Wunderground almanac station
$WUmintemp = '0.0';	// Todays average min temperature from the selected Wunderground almanac station
// 
$WUmaxtempr = '0.0';	// Todays record max temperature from the selected Wunderground almanac station
$WUmintempr = '0.0';	// Todays record min temperature from the selected Wunderground almanac station
$WUmaxtempryr = '0';	// Year that it occured
$WUmintempryr = '0';	// year that it occured
// 
// 
// Yesterday:
// ----------
$tempchangehour =  '+0.1';	// Temperature change in the last hour
$maxtempyest =  '22.7';	// Yesterday's max temperature
$maxtempyestt =  '4:58 PM';	// Time of yesterday's max temperature
$mintempyest =  '9.8';	// Yesterday's min temperature
$mintempyestt =  '2:03 AM';	// Time of yesterday's min temperature
// 
// 
// Trends:
// -------
$temp24hoursago =  '11.2';	// The temperature 24 hours ago
$humchangelasthour =  '0';	// Humidity change last hour
$dewchangelasthour =  '+0.1';	// Dew point change last hour
$barochangelasthour =  '+0.6';	// Baro change last hour
// 
// Wind
// ====
// Current:
// --------
// 
$avgspd =  '0.0';	// average wind speed (current)
$gstspd =  '0.0';	// current/gust wind speed
$maxgst =  '13.7';	// today's maximum wind speed
$maxgstt =  '6:44 AM';	// time this occurred
$maxgsthr =  '13.7 kmh  N ';	// maximum gust last hour
$dirdeg =  '217';	// wind direction (degrees)
$dirlabel =  'SW';	// wind direction (NNE etc)
//$maxgustlastimediatehourtime =  '6:44';	// 6:44  time that the max gust last prior 1 hour occured
$avwindlastimediate10 =  '1.3';	// Average wind for the last immediate 10 minute period
// $avdir10minute =  '249';	// average ten minute wind direction (degrees)

$beaufortnum ='0'; //Beaufort wind force number
$currbftspeed = '0 bft'; //Current Beaufort wind speed

$bftspeedtext = 'Calm'; //Beaufort scale in text (i.e Fresh Breeze)
// 
// 
// Baromometer
// ===========
// Current:
// --------
$baro = '1015.9';  // current barometer
$baroinusa2dp =  '30.00 inches';	// Current barometer reading in inches, 2 decimal places only.
$trend =  '+0.7';	// amount of change in the last hour
$pressuretrendname =  'Rising slowly';	// pressure trend (i.e. 'falling'), last hour
$pressuretrendname3hour =  'Rising';	// pressure trend (i.e. 'falling'), last 3 hours

$vpforecasttext = '---';	// Forecast text from the Davis VP
// 
// 
// Rain
// ====
// Current:
// --------
$dayrn =  '  0.000';	// today's rain
$monthrn =  '32.085';	// rain so far this month
$yearrn =  '32.1';	// rain so far this year
$dayswithnorain =  '10';	// Consecutative days with no rain
$dayswithrain =  '5';	// Days with rain for the month
$dayswithrainyear =  '9';	// Days with rain for the year
$currentrainratehr =  '0.00';	// Current rain rate, mm/hr (or in./hr)
$maxrainrate =  '0.0';	// Max rain rate,for the day, mm/min (or in./min)
$maxrainratehr =  '0.000';	// Max rain rate,for the day, mm/hr (or in.mm)
$maxrainratetime =  '09:00 AM';	// Time that occurred
// Yesterday:
// ----------
$yesterdayrain =  '0.0';	// Yesterday rain
//
$vpstormrainstart = '0/0/0';  //Davis VP Storm rain start date
$vpstormrain = '0.0';           //Davis VP Storm rain value
//
// 
// Sunshine/Solar/ET
// =================
$VPsolar =  '13';	//  Solar energy number (W/M2)
$VPuv =  '0.2';	// UV number 
$highsolar =  '14';	// Daily high solar (for Davis VP and Grow stations)
$highuv =  '0.2';	// Daily high UV (for Davis VP stations)
$currentsolarpercent =  '2';	// Current solar percent for stations with a temperature solar sensor (like the dallas 1 wire)
$highsolartime =  '6:59 AM';	// Time that the daily high solar occured
$lowsolartime =  '12:00 AM';	// Time that the daily low solar occured
$highuvtime =  '6:51 AM';	// Time that the daily high UV occured
$lowuvtime =  '12:00 AM';	// Time that the daily low UV occured
$highuvyest =  '14.2';	// Yesterday's high UV
$highuvyesttime =  '12:55 PM';	// Time of yesterday's high UV
$burntime =  '560';	// Time (minutes) to burn (normal skin) at the current UV rate, from the Davis VP with UV sensor
// 
// the solar setup.
// 
// 
// Number of resynchronizations, The largest number of packets in a row that were received., and the number of CRC errors 
// 
// detected. 
// 
// 
// Record Readings
// ===============
// 
// for current month to date:
// 
$mrecordwindgust =  '27.0';	// All time record high wind gust
$mrecordhighgustday =  '11';	// Day of record high wind gust
// 
// 
// Snow
// =====
// 
$snowseasonin = '0';	// Snow for season you have entered under input daily weather, inches
$snowmonthin = '0';	// Snow for month you have entered under input daily weather, inches
$snowtodayin = '0.00';	// Snow for today you have entered under input daily weather, inches
$snowseasoncm = '0';	// Snow for season you have entered under input daily weather, cm
$snowmonthcm = '0';	// Snow for month you have entered under input daily weather, cm
$snowtodaycm = '0.0';	// Snow for today you have entered under input daily weather, cm
$snowyesterday = '0';	// Yesterdays' snow
$snowheight = '124';	// Estimated height snow will fall at
$snowheightnew = '1944';	// Estimated height snow will fall at, new formula
// 
$snownowin = '0.00';	// Current snow depth, inches.
$snownowcm = '0.0';	// Current snow depth, cm.
// 
$snowrain = '0.0';	// Rain measure by a heated rain gauge when temp below freezing times 10 to give estimated snow fall
$snowdaysthismonth = '0';	// Days with snow this month
$snowdaysthisyear = '0';	// Days with snow this year
//
// tags needed for trends-inc.php
//
$temp0minuteago = '16.0';  // ****this one is needed for all the others to work
$wind0minuteago = '1.9';
$gust0minuteago = '0.0';
$dir0minuteago = 'SW';
$hum0minuteago = '76';
$dew0minuteago = '11.8';
$baro0minuteago = '1015.8';
$rain0minuteago = '0.0';
$VPsolar0minuteago = '2';
$VPuv0minuteago = '0.2';

$temp5minuteago = '16.0';  
$wind5minuteago = '1.9';
$gust5minuteago = '5.6';
$dir5minuteago = 'NNW';
$hum5minuteago = '76';
$dew5minuteago = '11.8';
$baro5minuteago = '1015.7';
$rain5minuteago = '0.0';
$VPsolar5minuteago = '2';
$VPuv5minuteago = '0.2';

$temp10minuteago = '16.0';  
$wind10minuteago = '3.7';
$gust10minuteago = '1.9';
$dir10minuteago = ' NW';
$hum10minuteago = '76';
$dew10minuteago = '11.8';
$baro10minuteago = '1015.6';
$rain10minuteago = '0.0';
$VPsolar10minuteago = '2';
$VPuv10minuteago = '0.2';

$temp15minuteago = '16.0';  
$wind15minuteago = '0.0';
$gust15minuteago = '1.9';
$dir15minuteago = ' SE';
$hum15minuteago = '76';
$dew15minuteago = '11.8';
$baro15minuteago = '1015.6';
$rain15minuteago = '0.0';
$VPsolar15minuteago = '1';
$VPuv15minuteago = '0.1';

$temp20minuteago = '16.0';  
$wind20minuteago = '1.9';
$gust20minuteago = '0.0';
$dir20minuteago = ' S ';
$hum20minuteago = '75';
$dew20minuteago = '11.6';
$baro20minuteago = '1015.6';
$rain20minuteago = '0.0';
$VPsolar20minuteago = '1';
$VPuv20minuteago = '0.1';

$temp30minuteago = '16.0';  
$wind30minuteago = '3.7';
$gust30minuteago = '3.7';
$dir30minuteago = 'SSW';
$hum30minuteago = '75';
$dew30minuteago = '11.6';
$baro30minuteago = '1015.6';
$rain30minuteago = '0.0';
$VPsolar30minuteago = '0';
$VPuv30minuteago = '0.0';

$temp45minuteago = '15.9';  
$wind45minuteago = '1.9';
$gust45minuteago = '0.0';
$dir45minuteago = 'WSW';
$hum45minuteago = '76';
$dew45minuteago = '11.7';
$baro45minuteago = '1015.3';
$rain45minuteago = '0.0';
$VPsolar45minuteago = '0';
$VPuv45minuteago = '0.0';

$temp60minuteago = '15.9';  
$wind60minuteago = '0.0';
$gust60minuteago = '0.0';
$dir60minuteago = 'SW';
$hum60minuteago = '76';
$dew60minuteago = '11.7';
$baro60minuteago = '1015.2';
$rain60minuteago = '0.0';
$VPsolar60minuteago = '0';
$VPuv60minuteago = '0.0';

$temp75minuteago = '15.8';  
$wind75minuteago = '0.0';
$gust75minuteago = '0.0';
$dir75minuteago = 'NNW';
$hum75minuteago = '76';
$dew75minuteago = '11.6';
$baro75minuteago = '1015.1';
$rain75minuteago = '0.0';
$VPsolar75minuteago = '0';
$VPuv75minuteago = '0.0';

$temp90minuteago = '15.8';  
$wind90minuteago = '1.9';
$gust90minuteago = '3.7';
$dir90minuteago = ' NW';
$hum90minuteago = '77';
$dew90minuteago = '11.8';
$baro90minuteago = '1014.7';
$rain90minuteago = '0.0';
$VPsolar90minuteago = '0';
$VPuv90minuteago = '0.0';

$temp105minuteago = '15.7';  
$wind105minuteago = '0.0';
$gust105minuteago = '0.0';
$dir105minuteago = ' SE';
$hum105minuteago = '77';
$dew105minuteago = '11.7';
$baro105minuteago = '1014.8';
$rain105minuteago = '0.0';
$VPsolar105minuteago = '0';
$VPuv105minuteago = '0.0';

$temp120minuteago = '15.7';  
$wind120minuteago = '0.0';
$gust120minuteago = '0.0';
$dir120minuteago = ' NW';
$hum120minuteago = '77';
$dew120minuteago = '11.7';
$baro120minuteago = '1014.7';
$rain120minuteago = '0.0';
$VPsolar120minuteago = '0';
$VPuv120minuteago = '0.0';

$VPet = '0.0';
$VPetmonth = '20.5';
$dateoflastrainalways = '17/1/2021';
$highbaro = '1015.9 ';
$highbarot = '3:13 AM';
$highsolaryest = '1337.0';
$highsolaryesttime = '3:33 PM';
$hourrn = '0.0';
$maxaverageyest = '11.5';
$maxaverageyestt = '3:31 PM';
$maxavgdirectionletter = 'NNE';
$maxavgspd = '7.5';
$maxavgspdt = '6:19 AM';
$maxbaroyest = '1016.3 ';
$maxbaroyestt = '9:27 AM';
$maxgstdirectionletter = '  N';
$maxgustyest = '27.8 kmh  SE';
$maxgustyestt = '4:11 PM';
$mcoldestdayonrecord = '12.6C  on: 16 Jan 2021';
$mcoldestnightonrecord = '9.2C  on: 16 Jan 2021';
$minchillyest = '9.8';
$minchillyestt = '2:03 AM';
$minwindch = '15.2';
$minwindcht = '1:23 AM';
$mrecordhighavwindday = '21';
$mrecordhighavwindmonth = '1';
$mrecordhighavwindyear = '2021';
$mrecordhighbaro = '1028.8';
$mrecordhighbaroday = '8';
$mrecordhighbaromonth = '1';
$mrecordhighbaroyear = '2021';
$mrecordhighgustmonth = '1';
$mrecordhighgustyear = '2021';
$mrecordhightemp = '36.4';
$mrecordhightempday = '25';
$mrecordhightempmonth = '1';
$mrecordhightempyear = '2021';
$mrecordlowchill = '7.8';
$mrecordlowchillday = '15';
$mrecordlowchillmonth = '1';
$mrecordlowchillyear = '2021';
$mrecordlowtemp = '7.8';
$mrecordlowtempday = '15';
$mrecordlowtempmonth = '1';
$mrecordlowtempyear = '2021';
$mrecordwindspeed = '15.5';
$mwarmestdayonrecord = '30.2C  on: 11 Jan 2021';
$mwarmestnightonrecord = '26.9C  on: 25 Jan 2021';
$raincurrentweek = '0.0';
$raintodatemonthago = '0.0';
$raintodateyearago = '0.0';
$timeoflastrainalways = ' 4:51 AM';
$windruntodatethismonth = '1241.72 km';
$windruntodatethisyear = '1241.72 km';
$windruntoday = '8.17';
$yesterdaydaviset = '0.0';
$yrecordhighavwindday = '21';
$yrecordhighavwindmonth = '1';
$yrecordhighavwindyear = '2021';
$yrecordhighbaro = '1028.8';
$yrecordhighbaroday = '8';
$yrecordhighbaromonth = '1';
$yrecordhighbaroyear = '2021';
$yrecordhighgustday = '11';
$yrecordhighgustmonth = '1';
$yrecordhighgustyear = '2021';
$yrecordhightemp = '36.4';
$yrecordhightempday = '25';
$yrecordhightempmonth = '1';
$yrecordhightempyear = '2021';
$yrecordlowchill = '7.8';
$yrecordlowchillday = '15';
$yrecordlowchillmonth = '1';
$yrecordlowchillyear = '2021';
$yrecordlowtemp = '7.8';
$yrecordlowtempday = '15';
$yrecordlowtempmonth = '1';
$yrecordlowtempyear = '2021';
$yrecordwindgust = '27.0';
$yrecordwindspeed = '15.5';
$daysTmaxGT30C = '7';
$daysTmaxGT25C = '14';
$daysTminLT0C = '0';
$daysTminLTm15C = '0';

// end of trends-inc.php variables

//  
   // CURRENT CONDITIONS ICONS FOR clientraw.txt
   // create array for icons. There are 35 possible values in clientraw.txt
   // It would be simpler to do this with array() but to make it easier to 
   // modify each element is defined individually. Each index [#] corresponds
   // to the value provided in clientraw.txt
   $icon_array[0] =  'day_clear.gif';            // imagesunny.visible
   $icon_array[1] =  'night_clear.gif';          // imageclearnight.visible
   $icon_array[2] =  'day_partly_cloudy.gif';    // imagecloudy.visible
   $icon_array[3] =  'day_partly_cloudy.gif';    // imagecloudy2.visible
   $icon_array[4] =  'night_partly_cloudy.gif';  // imagecloudynight.visible
   $icon_array[5] =  'day_partly_cloudy.gif';            // imagedry.visible
   $icon_array[6] =  'fog.gif';                  // imagefog.visible
   $icon_array[7] =  'haze.gif';                 // imagehaze.visible
   $icon_array[8] =  'day_heavy_rain.gif';       // imageheavyrain.visible
   $icon_array[9] =  'day_mostly_sunny.gif';     // imagemainlyfine.visible
   $icon_array[10] =  'mist.gif';                // imagemist.visible
   $icon_array[11] =  'fog.gif';                 // imagenightfog.visible
   $icon_array[12] =  'night_heavy_rain.gif';    // imagenightheavyrain.visible
   $icon_array[13] =  'night_cloudy.gif';        // imagenightovercast.visible
   $icon_array[14] =  'night_rain.gif';          // imagenightrain.visible
   $icon_array[15] =  'night_light_rain.gif';    // imagenightshowers.visible
   $icon_array[16] =  'night_snow.gif';          // imagenightsnow.visible
   $icon_array[17] =  'night_tstorm.gif';        // imagenightthunder.visible
   $icon_array[18] =  'day_cloudy.gif';          // imageovercast.visible
   $icon_array[19] =  'day_partly_cloudy.gif';   // imagepartlycloudy.visible
   $icon_array[20] =  'day_rain.gif';            // imagerain.visible
   $icon_array[21] =  'day_rain.gif';            // imagerain2.visible
   $icon_array[22] =  'day_light_rain.gif';      // imageshowers2.visible
   $icon_array[23] =  'sleet.gif';               // imagesleet.visible
   $icon_array[24] =  'sleet.gif';               // imagesleetshowers.visible
   $icon_array[25] =  'snow.gif';                // imagesnow.visible
   $icon_array[26] =  'snow.gif';                // imagesnowmelt.visible
   $icon_array[27] =  'snow.gif';                // imagesnowshowers2.visible
   $icon_array[28] =  'day_clear.gif.gif';       // imagesunny.visible
   $icon_array[29] =  'day_tstorm.gif';          // imagethundershowers.visible
   $icon_array[30] =  'day_tstorm.gif';          // imagethundershowers2.visible
   $icon_array[31] =  'day_tstorm.gif';          // imagethunderstorms.visible
   $icon_array[32] =  'tornado.gif';             // imagetornado.visible
   $icon_array[33] =  'windy.gif';               // imagewindy.visible
   $icon_array[34] =  'day_partly_cloudy.gif';   // stopped raining
   $icon_array[35] =  'windyrain.gif';           // Wind+rain
   $iconnumber = '5';                // icon number

   $current_icon = $icon_array[5]; // name of our condition icon
// ----------------------------------------------------------------------------------
//   $current_summary = 'Dry' . '<br />' . 'Dry ';
   $weathercond = 'Dry';
   $Currentsolardescription = 'Dry ';
   $current_summary = $Currentsolardescription;
   $current_summary = preg_replace('|^/[^/]+/|','',$current_summary);
   $current_summary = preg_replace('|\\\\|',', ',$current_summary);
   $current_summary = preg_replace('|/|',', ',$current_summary);
//  
//  
$cloudheightfeet =  '1743';	// Estimated cloud base height, feet, (based on dew point, and you height above sea  level...enter
$cloudheightmeters =  '531';	// Estimated cloud base height, metres, (based on dew point, and you height above sea

// end of stock testtags.txt

// ----------------------------------------------------------------------------------------------------
// begin mchallis tags added to testtags.txt for printable flyer
$maxgsthrtime = '6:44';        // time that the max gust last prior 1 hour occured
$minbaroyest  = '1011.8 ';
$minbaroyestt = '6:08 PM';
$mrecordlowbaro = '996.6';
$mrecordlowbaroday = '26';
$mrecordlowbaromonth = '1';
$mrecordlowbaroyear = '2021';
$yrecordlowbaro = '996.6';
$yrecordlowbaroday = '26';
$yrecordlowbaromonth = '1';
$yrecordlowbaroyear = '2021';
// end mchallis tags added to testtags.txt for printable flyer
// ----------------------------------------------------------------------------------------------------
// New WebsterWeatherLive VER 4.10 tags
//----------------------------------------------
$lighteningbearing = '0';
$lighteningdistance = '0';
$lighteningcountlasthournextstorm = '0';
$lighteningcountlastminutenextstorm = '0';
$lighteningcountlast12hournextstorm = '0';
$lighteningcountlast30minutesnextstorm = '0';
$timeofdaygreeting = 'Morning';
$avwindlastimediate60 = '1.7'; // average wind speed
$avwindlastimediate120 = '0.6'; // average wind speed
$currentmonthaveragerain = '---'; // average rain for current month
//
// version 5.00+ 
$avwindlastimediate15 = '1.5'; // average wind speed
$avwindlastimediate30 = '1.6'; // average wind speed
$todayhihumidex = '18.2'; //daily high humidex
$todaylohumidex = '17.3'; //Daily low Humidex
//Version 5.02
$dayornight = 'Day'; // Day or night flag

//Version 6.20
$tempchangelasthourfaren = '+0.2'; //For snow prediction
$abshum = '6.53'; //For snow prediction
$maxtemp4today = '---'; // max from station's records
$mintemp4today = '---'; // min from station's records
$maxtemp4todayyr = '2021'; // max year from station's records
$mintemp4todayyr = '2021'; // min year from station's records
$avsnowjan = '0.0'; //Average snow for jan from your inputted snow data (cm)
$avsnowfeb = '---'; //Average snow for feb from your inputted snow data (cm)
$avsnowmar = '---'; //Average snow for mar from your inputted snow data (cm)
$avsnowapr = '---'; //Average snow for apr from your inputted snow data (cm)
$avsnowmay = '---'; //Average snow for may from your inputted snow data (cm)
$avsnowjun = '---'; //Average snow for may from your inputted snow data (cm)
$avsnowjul = '---'; //Average snow for jul from your inputted snow data (cm)
$avsnowaug = '---'; //Average snow for aug from your inputted snow data (cm)
$avsnowsep = '---'; //Average snow for sep from your inputted snow data (cm)
$avsnowoct = '---'; //Average snow for oct from your inputted snow data (cm)
$avsnownov = '---'; //Average snow for nov from your inputted snow data (cm)
$avsnowdec = '---'; //Average snow for dec from your inputted snow data (cm)
$avsnowjannow = '0.0';
$avsnowfebnow = '---';
$avsnowmarnow = '---';
$avsnowaprnow = '---';
$avsnowmaynow = '---';
$avsnowjunnow = '---';
$avsnowjulnow = '---';
$avsnowaugnow = '---';
$avsnowsepnow = '---';
$avsnowoctnow = '---';
$avsnownovnow = '---';
$avsnowdecnow = '---';
// end of websterweather additions
// ----------------------------------------------------------------------------------------------------
// relayweather wxglobalwarming
// For Temperature Trend Chart, you Need to add the following to your testtags file if they don't yet exist:

$avtempjannow = '17.7';
$avtempfebnow = '0.0';
$avtempmarnow = '0.0';
$avtempaprnow = '0.0';
$avtempmaynow = '0.0';
$avtempjunnow = '0.0';
$avtempjulnow = '0.0';
$avtempaugnow = '0.0';
$avtempsepnow = '0.0';
$avtempoctnow = '0.0';
$avtempnovnow = '0.0';
$avtempdecnow = '15.0';
$avtempjan = '17.7';//Average temperature for january from your data
$avtempfeb = '0.0';//Average temperature for february from your data
$avtempmar = '0.0';//Average temperature for march from your data
$avtempapr = '0.0';//Average temperature for april from your data
$avtempmay = '0.0';//Average temperature for may from your data
$avtempjun = '0.0';//Average temperature for june from your data
$avtempjul = '0.0';//Average temperature for july from your data
$avtempaug = '0.0';//Average temperature for august from your data
$avtempsep = '0.0';//Average temperature for september from your data
$avtempoct = '0.0';//Average temperature for october from your data
$avtempnov = '0.0';//Average temperature for november from your data
$avtempdec = '15.0';//Average temperature for december from your data

//For the Rain Trending Chart, you Need to add the following to your testtags file if they don't yet exist:

//Start Rain Trending
$avrainjan = '0.0';
$avrainfeb = '149.1';
$avrainmar = '111.1';
$avrainapr = '111.1';
$avrainmay = '60.7';
$avrainjun = '0.0';
$avrainjul = '0.0';
$avrainaug = '0.0';
$avrainsep = '0.0';
$avrainoct = '63.0';
$avrainnov = '63.0';
$avraindec = '145.6';

$avrainjannow = '32.1';
$avrainfebnow = '0.0';
$avrainmarnow = '0.0';
$avrainaprnow = '0.0';
$avrainmaynow = '0.0';
$avrainjunnow = '0.0';
$avrainjulnow = '0.0';
$avrainaugnow = '0.0';
$avrainsepnow = '0.0';
$avrainoctnow = '0.0';
$avrainnovnow = '0.0';
$avraindecnow = '2.3';
//End Rain Trending
// end of relayweather tags
// ----------------------------------------------------------------------------------------------------
// eastmasonville wxrecord.php tags
$recordhightemp = '36.4';
$recordlowtemp = '7.0';
$recordhighheatindex = '35.0';
$recordlowchill = '7.0';
$warmestdayonrecord = '30.2 C  on: 11 Jan 2021';
$warmestnightonrecord = '26.9C  on: 25 Jan 2021';
$coldestdayonrecord = '12.6C  on: 16 Jan 2021';
$coldestnightonrecord = '9.2C  on: 16 Jan 2021';
$recordwindgust = '27.0';
$recordwindspeed = '15.5';
$recordhighwindrun = '85.6';
$recorddailyrain = '11.0';
$recordhighrainmth = '32.1';
$recordrainrate = '8.3';
$recorddayswithrain = '4';
$recorddaysnorain = '10';
$recordhighdew = '18.9';
$recordlowdew = '2.6';
$recordhighhum = '100';
$recordlowhum = '22';
$recordhighbaro = '1028.8';
$recordlowbaro = '973.1';
$recordhighsolar = '1624.0';
$recordhightempmonth = '1';
$recordhightempday = '25';
$recordhightempyear = '2021';
$recordlowtempmonth = '12';
$recordlowtempday = '29';
$recordlowtempyear = '2020';
$recordhighheatindexmonth = '1';
$recordhighheatindexday = '25';
$recordhighheatindexyear = '2021';
$recordlowchillmonth = '12';
$recordlowchillday = '29';
$recordlowchillyear = '2020';
$recordhighgustmonth = '1';
$recordhighgustday = '11';
$recordhighgustyear = '2021';
$recordhighavwindmonth = '1';
$recordhighavwindday = '21';
$recordhighavwindyear = '2021';
$recordhighwindrunmth = '1';
$recordhighwindrunday = '27';
$recordhighwindrunyr = '2021';
$recorddailyrainmonth = '1';
$recorddailyrainday = '15';
$recorddailyrainyear = '2021';
$recordhighrainmthmth = '1';
$recordhighrainmthyr = '2021';
$recordrainratemonth = '1';
$recordrainrateday = '16';
$recordrainrateyear = '2021';
$recorddayswithrainmonth = '1';
$recorddayswithrainday = '3';
$recorddayswithrainyear = '2021';
$recorddaysnorainmonth = '1';
$recorddaysnorainday = '27';
$recorddaysnorainyear = '2021';
$recordhighdewmonth = '1';
$recordhighdewday = '24';
$recordhighdewyear = '2021';
$recordlowdewmonth = '12';
$recordlowdewday = '28';
$recordlowdewyear = '2020';
$recordhighhummonth = '12';
$recordhighhumday = '28';
$recordhighhumyear = '2020';
$recordlowhummonth = '1';
$recordlowhumday = '11';
$recordlowhumyear = '2021';
$recordhighbaromonth = '1';
$recordhighbaroday = '8';
$recordhighbaroyear = '2021';
$recordlowbaromonth = '12';
$recordlowbaroday = '27';
$recordlowbaroyear = '2020';
$recordhighsolarmonth = '1';
$recordhighsolarday = '12';
$recordhighsolaryear = '2021';
$recordhighuv = '19.8';
$recordhighuvmonth = '1';
$recordhighuvday = '19';
$recordhighuvyear = '2021';

$yrecordhighheatindex = '35.0';
$yrecordhighheatindexmonth = '1';
$yrecordhighheatindexday = '25';
$yrecordhighheatindexyear = '2021';
$ywarmestdayonrecord = '30.2C  on: 11 Jan 2021';
$ywarmestnightonrecord = '26.9C  on: 25 Jan 2021';
$ycoldestdayonrecord = '12.6C  on: 16 Jan 2021';
$ycoldestnightonrecord = '9.2C  on: 16 Jan 2021';
$yrecordhighwindrun = '85.6';
$yrecordhighwindrunmth = '1';
$yrecordhighwindrunday = '27';
$yrecordhighwindrunyr = '2021';
$yrecorddailyrain = '11.0';
$yrecordhighrainmth = '32.1';
$yrecordrainrate = '8.3';
$yrecorddayswithrain = '4';
$yrecorddaysnorain = '10';
$yrecordhighdew = '18.9';
$yrecordlowdew = '2.7';
$yrecordhighhum = '100';
$yrecordlowhum = '22';
$yrecorddailyrainmonth = '1';
$yrecorddailyrainday = '15';
$yrecorddailyrainyear = '2021';
$yrecordhighrainmthmth = '1';
$yrecordhighrainmthyr = '2021';
$yrecordrainratemonth = '1';
$yrecordrainrateday = '16';
$yrecordrainrateyear = '2021';
$yrecorddayswithrainmonth = '1';
$yrecorddayswithrainday = '3';
$yrecorddaysnorainmonth = '1';
$yrecorddaysnorainday = '27';
$yrecordhighdewmonth = '1';
$yrecordhighdewday = '24';
$yrecordhighdewyear = '2021';
$yrecordlowdewmonth = '1';
$yrecordlowdewday = '22';
$yrecordlowdewyear = '2021';
$yrecordhighhummonth = '1';
$yrecordhighhumday = '3';
$yrecordhighhumyear = '2021';
$yrecordlowhummonth = '1';
$yrecordlowhumday = '11';
$yrecordlowhumyear = '2021';
$yrecordhighsolar = '1624.0';
$yrecordhighsolarmonth = '1';
$yrecordhighsolarday = '12';
$yrecordhighsolaryear = '2021';
$yrecordhighuv = '19.8';
$yrecordhighuvmonth = '1';
$yrecordhighuvday = '19';
$yrecordhighuvyear = '2021';

$mrecordhighheatindex = '35.0';
$mrecordhighheatindexmonth = '1';
$mrecordhighheatindexday = '25';
$mrecordhighheatindexyear = '2021';
$mrecordhighwindrun = '85.6';
$mrecordhighwindrunmth = '1';
$mrecordhighwindrunday = '27';
$mrecordhighwindrunyr = '2021';
$mrecorddailyrain = '11.0';
$mrecordhighrainmth = '32.1';
$mrecordrainrate = '8.3';
$mrecorddayswithrain = '4';
$mrecorddaysnorain = '10';
$mrecordhighdew = '18.9';
$mrecordlowdew = '2.7';
$mrecordhighhum = '100';
$mrecordlowhum = '22';
$mrecorddailyrainmonth = '1';
$mrecorddailyrainday = '15';
$mrecorddailyrainyear = '2021';
$mrecordhighrainmthmth = '1';
$mrecordhighrainmthyr = '2021';
$mrecordrainratemonth = '1';
$mrecordrainrateday = '16';
$mrecordrainrateyear = '2021';
$mrecorddayswithrainmonth = '1';
$mrecorddayswithrainday = '3';
$mrecorddaysnorainmonth = '1';
$mrecorddaysnorainday = '27';
$mrecordhighdewmonth = '1';
$mrecordhighdewday = '24';
$mrecordhighdewyear = '2021';
$mrecordlowdewmonth = '1';
$mrecordlowdewday = '22';
$mrecordlowdewyear = '2021';
$mrecordhighhummonth = '1';
$mrecordhighhumday = '3';
$mrecordhighhumyear = '2021';
$mrecordlowhummonth = '1';
$mrecordlowhumday = '11';
$mrecordlowhumyear = '2021';
$myrecordhighbaromonth = '1';
$mrecordhighsolar = '1624.0';
$mrecordhighsolarmonth = '1';
$mrecordhighsolarday = '12';
$mrecordhighsolaryear = '2021';
$mrecordhighuv = '19.8';
$mrecordhighuvmonth = '1';
$mrecordhighuvday = '19';
$mrecordhighuvyear = '2021';
// end of eastmasonville wxrecord.php tags
// ----------------------------------------------------------------------------------------------------
// other addons
$vpissstatus = 'Ok';      // VP ISS Status
$vpreception2 = '%vpreception2%'; // VP Current reception %  *** NEW IN V1.01
$vpconsolebattery = '%vpconsolebattery%'; // VP Console Battery Volts *** NEW IN V1.01
$firewi = '0.1'; // Fire Weather Index
$avtempweek = '20.5';    // Average Weekly Temp
$hddday = '0.7';        // Heating Degree for day
$hddmonth = '53.4';    // Heating Degree for month to date
$hddyear = '53.4';    // Heating Degree for year to date
$cddday = '0.0';        // Cooling Degree for day
$cddmonth = '37.9';    // Cooling Degree for month to date
$cddyear = '37.9';    // Cooling Degree for year to date
$minchillweek = '10.0';  // Minimum Wind Chill over past 7 days 
$maxheatweek = '35.0';  // Maximum Heat Index for the Week *** NEW IN V2.00
$airdensity = '1.22';  //air density
$solarnoon = '13:31'; // Solar noon
$changeinday = '-00:01:52';  // change in day length since yesterday
$etcurrentweek = '7.6'; // ET total for the last 7 days
$sunshinehourstodateday = '00:00';
$sunshinehourstodatemonth = '27:39';
$maxsolarfortime = '675';
$wetbulb = '13.7';
$lighteningcountlasthour = '0';
$lighteningcountlastminute = '0';
$lighteningcountlast5minutes = '0';
$lighteningcountlast12hour = '0';
$lighteningcountlast30minutes = '0';
$lighteningcountlasttime = '17:41:46 2021/15/01';
$lighteningcountmonth = '555';
$lighteningcountyear = '555';
$chandler = '1.5';
$maxdew = '12.3';
$maxdewt = '12:00 AM';
$mindew = '11.5';
$mindewt = '5:58 AM';
$maxdewyest = '12.6';
$maxdewyestt = '10:47 PM';
$mindewyest = '6.1';
$mindewyestt = '6:37 AM';
$stationname = 'IMELBO2077';
$raindifffromav = '---';
$raindifffromavyear = '32.1';
$gddmonth = '227.4';
$gddyear = '227.4';
$maxheat = '16.0';
$maxheatt = '6:31 AM'; 
$maxheatyest = '22.7';  
$yeartodateavtemp = '17.7'; 
$monthtodateavtemp = '17.7'; 
$maxchillyest = '22.7'; 
$monthtodatemaxgust = '27.8'; 
$monthtodateavspeed = '1.9'; // MTD average wind speed
$monthtodateavgust = '4.8'; //MTD average wind gust
$yeartodateavwind = '1.9'; // YTD average wind speed
$yeartodategstwind = '4.8'; // YTD avg wind gust
$lowbaro = '1014.2 ';
$lowbarot = '12:28 AM';
$monthtodatemaxbaro = '1028.8'; // MTD average wind speed
$monthtodateminbaro = '996.6'; //MTD average wind gust
$sunshinehourstodateyear = '27:39'; 
$sunshineyesterday = '00:45';
$avtempsincemidnight = '15.6';
$yesterdayavtemp = '15.5';
$avgspeedsincereset = '1.2';
$maxheatyestt = '4:58 PM';
$windrunyesterday = '85.62';
$currentwdet = '0.3';
$yesterdaywdet = '0.9';
$highhum = '80';
$highhumt = '12:00 AM';
$lowhum = '75';
$lowhumt = '5:58 AM';
$maxhumyest = '92';
$maxhumyestt = '3:16 AM';
$minhumyest = '38';
$minhumyestt = '3:45 PM';
$recordhightempjan = '36.4';
$recordlowtempjan = '7.8';
$recordhightempfeb = '---';
$recordlowtempfeb = '20.0';
$recordhightempmar = '---';
$recordlowtempmar = '---';
$recordhightempapr = '---';
$recordlowtempapr = '22.1';
$recordhightempmay = '---';
$recordlowtempmay = '16.5';
$recordhightempjun = '---';
$recordlowtempjun = '11.6';
$recordhightempjul = '---';
$recordlowtempjul = '---';
$recordhightempaug = '---';
$recordlowtempaug = '---';
$recordhightempsep = '---';
$recordlowtempsep = '13.0';
$recordhightempoct = '---';
$recordlowtempoct = '14.7';
$recordhightempnov = '---';
$recordlowtempnov = '23.7';
$recordhightempdec = '27.8';
$recordlowtempdec = '7.0';

// average temp and rain by month (V1.08 addition)

$avtempjannow = '17.7';
$avtempfebnow = '0.0';
$avtempmarnow = '0.0';
$avtempaprnow = '0.0';
$avtempmaynow = '0.0';
$avtempjunnow = '0.0';
$avtempjulnow = '0.0';
$avtempaugnow = '0.0';
$avtempsepnow = '0.0';
$avtempoctnow = '0.0';
$avtempnovnow = '0.0';
$avtempdecnow = '15.0';

$avrainjannow = '32.1';
$avrainfebnow = '0.0';
$avrainmarnow = '0.0';
$avrainaprnow = '0.0';
$avrainmaynow = '0.0';
$avrainjunnow = '0.0';
$avrainjulnow = '0.0';
$avrainaugnow = '0.0';
$avrainsepnow = '0.0';
$avrainoctnow = '0.0';
$avrainnovnow = '0.0';
$avraindecnow = '2.3';

// end of other addons
// end of testtags.txt/testtags.php
?>
