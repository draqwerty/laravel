<?php
namespace App\External;
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
$uomtemp = 'C'; //  = 'C', 'F',  (or  '�C', '�F', or '&deg;C', '&deg;F' )
$uombaro = 'hPa'; //  = 'inHg', 'hPa', 'kPa', 'mb'
$uomwind = 'kmh'; //  = 'kts','mph','kmh','km/h','m/s','Bft'
$uomrain = 'mm'; //  = 'mm', 'in'
$datefmt = 'd/m/y'; //  = 'd/m/y', 'm/d/y'
$uomdistance = 'km'; // = 'mi','km'  (for windrun variables)
//
// General OR Non Weather Specific/SUN/MOON
// ========================================
$time =  '07:47 AM';	// current time
$date =  '7/1/2021';	// current date
$sunrise =  '6:04 am';	// sun rise time (make sure you have the correct lat/lon
// 		            in view/sun moon)
$time_minute =  '47';	// Current minute
$time_hour =  '07';	// Current hour
$date_day =  '07';	// Current day
$date_month =  '01';	// Current month
$date_year =  '2021';	// Current year
$monthname =  'January';	// Current month name
$dayname =  'Thursday';	// Current day name
$sunset =  '8:44 pm';	// sunset time
$moonrisedate =  '07/01/21';	// moon rise date
$moonrise =  '1:20 am';	// moon rise time
$moonsetdate =  '06/01/21';	// moon set date
$moonset =  '1:01 pm';	// moon set time
$moonage =  'Moon age: 22 days,15 hours,31 minutes,45%';	// current age of the moon (days since new moon)
$moonphase =  '45%';	// Moon phase %
$moonphasename = 'Last Quarter Moon'; // 10.36z addition
$marchequinox =  '09:38 UTC 20 March 2021';	// March equinox date
$junesolstice =  '03:33 UTC 21 June 2021';	// June solstice date
$sepequinox =  '19:22 UTC 22 September 2021';	// September equinox date
$decsolstice =  '16:00 UTC 21 December 2021';	// December solstice date
$moonperihel =  '17:15 UTC 3 January 2022';	// Next Moon perihel date
$moonaphel =  '02:08 UTC 5 July 2021';	// Next moon perihel date
$moonperigee =  '15:44 UTC 9 January 2021';	// Next moon perigee date
$moonapogee =  '13:11 UTC 21 January 2021';	// Next moon apogee date
$newmoon =  '16:17 UTC 14 December 2020';	// Date/time of the next/last new moon
$nextnewmoon =  '05:01 UTC 13 January 2021';	// Date/time of the next new moon for next month
$firstquarter =  '23:42 UTC 21 December 2020';	// Date/time of the next/last first quarter moon
$lastquarter =  '09:38 UTC 6 January 2021';	// Date/time of the next/last last quarter moon
$fullmoon =  '03:29 UTC 30 December 2020';	// Date/time of the next/last full moon
$fullmoondate =  '30 December 2020';	// Date of the next/last full moon (date only)
$suneclipse =  '04 December 2021 09:14:58 7%';	// Next sun eclipse
$mooneclipse =  '26 May 2021 11:19:07 101%';	// Next moon eclipse date
$easterdate =  '4 April 2021';	// Next easter date
$chinesenewyear =  '12 February 2021 ()';	// Chinese new year
$hoursofpossibledaylight =  '14:40';	// Total hours/minutes of possible daylight for today
//
$weatherreport =  'mostly cloudy';	// current weather conditions from selected METAR
$stationaltitude =  '266';	// Station altitude, feet, as set in the units setup
// this under setup)
$stationlatitude =  '-37:54:00';	// Latitude (from the sun moon rise/set setup)
$stationlongitude =  '-145:21:00';	// Longtitude (from the sun moon rise/set setup)
$windowsuptime = '3 Days 1 Hours 33 Minutes 58 Seconds'; // uptime for windows on weather pc
$freememory = '16.04GB'; // amount of free memory on the pc
$Startimedate = '6:13:45 AM 4/01/2021'; // Time/date WD was started

/*
$NOAAEvent = 'NO CURRENT ADVISORIES'; // NOAA Watch/Warning/Advisory
$noaawarningraw = '---'; // NOAA RAW watch/warning/advisory
*/

$wdversion = '10.37S' . '-(b' . '122' . ')';	// Weather Display version number you are running
$wdversiononly = '10.37S';
$wdbuild   = '122';       // Weather Display build number you are running
$noaacityname =  'Belgrave';	// City name,from the noaa setup (in the av/ext setup)
//
$timeofnextupdate =  '7:48 am';	// Time of next Update/Upload of the weather data to your web page (based on the web table update
//
$heatcolourword =  '---';	// How hot/cold it feels at the moment, based on the humidex, used with the conditionscolour.jpg
//
//
// Temperature/Humidity
// ====================
// Current:
// --------
$temperature =  '18';	// temperature
$tempnodp = '14'; // temperature, no decimal place
$humidity =  '91';	// humidity
$dewpt =  '12.9';	// dew point
$maxtemp =  '14.3';	// today's maximum temperature
$maxtempt =  '7:46 AM';	// time this occurred
$mintemp =  '11.9';	// today's minimum temperature
$mintempt =  '5:25 AM';	// time this occurred
$feelslike =  '14';	// Shows heat index or humidex or windchill (if less than 16oC)

$heati =  '14.2';	// current heat index
$heatinodp =  '14';	// current heat index,no decimal place
$windch =  '14.3';	// current wind-chill
$windchnodp =  '14';	// current wind-chill, no decimal place
$humidexfaren =  '62.6';	// Humidex value in oF
$humidexcelsius =  '17.0';	// Humidex value in oC

$apparenttemp =  '14.9';	// Apparent temperature
$apparentsolartemp =  '17.1';	// Apparent temperature in the sun (you need a solar sensor)
$apparenttempc =  '14.9';	// Apparent temperature, �C
$apparentsolartempc =  '17.1';	// Apparent temperature in the sun, �C (you need a solar sensor)
$apparenttempf =  '58.9';	// Apparent temperature, �F
$apparentsolartempf =  '62.8';	// Apparent temperature in the sun, �F (you need a solar sensor)
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
$tempchangehour =  '+2.0';	// Temperature change in the last hour
$maxtempyest =  '16.3';	// Yesterday's max temperature
$maxtempyestt =  '4:34 PM';	// Time of yesterday's max temperature
$mintempyest =  '11.2';	// Yesterday's min temperature
$mintempyestt =  '6:50 AM';	// Time of yesterday's min temperature
//
//
// Trends:
// -------
$temp24hoursago =  '11.4';	// The temperature 24 hours ago
$humchangelasthour =  '-7';	// Humidity change last hour
$dewchangelasthour =  '+0.8';	// Dew point change last hour
$barochangelasthour =  '+0.3';	// Baro change last hour
//
// Wind
// ====
// Current:
// --------
//
$avgspd =  '1.1';	// average wind speed (current)
$gstspd =  '0.4';	// current/gust wind speed
$maxgst =  '8.3';	// today's maximum wind speed
$maxgstt =  '4:05 AM';	// time this occurred
$maxgsthr =  '7.5 kmh  SE';	// maximum gust last hour
$dirdeg =  '304';	// wind direction (degrees)
$dirlabel =  'NW';	// wind direction (NNE etc)
//$maxgustlastimediatehourtime =  '7:20';	// 7:20  time that the max gust last prior 1 hour occured
$avwindlastimediate10 =  '1.5';	// Average wind for the last immediate 10 minute period
// $avdir10minute =  '246';	// average ten minute wind direction (degrees)

$beaufortnum ='0'; //Beaufort wind force number
$currbftspeed = '0 bft'; //Current Beaufort wind speed

$bftspeedtext = 'Calm'; //Beaufort scale in text (i.e Fresh Breeze)
//
//
// Baromometer
// ===========
// Current:
// --------
$baro = '1027.1';  // current barometer
$baroinusa2dp =  '30.33 inches';	// Current barometer reading in inches, 2 decimal places only.
$trend =  '+0.3';	// amount of change in the last hour
$pressuretrendname =  'Steady';	// pressure trend (i.e. 'falling'), last hour
$pressuretrendname3hour =  'Rising';	// pressure trend (i.e. 'falling'), last 3 hours

$vpforecasttext = '---';	// Forecast text from the Davis VP
//
//
// Rain
// ====
// Current:
// --------
$dayrn =  '  0.000';	// today's rain
$monthrn =  '11.788';	// rain so far this month
$yearrn =  '11.8';	// rain so far this year
$dayswithnorain =  '1';	// Consecutative days with no rain
$dayswithrain =  '2';	// Days with rain for the month
$dayswithrainyear =  '4';	// Days with rain for the year
$currentrainratehr =  '0.00';	// Current rain rate, mm/hr (or in./hr)
$maxrainrate =  '0.0';	// Max rain rate,for the day, mm/min (or in./min)
$maxrainratehr =  '0.000';	// Max rain rate,for the day, mm/hr (or in.mm)
$maxrainratetime =  '09:00 AM';	// Time that occurred
// Yesterday:
// ----------
$yesterdayrain =  '0.4';	// Yesterday rain
//
$vpstormrainstart = '0/0/0';  //Davis VP Storm rain start date
$vpstormrain = '0.0';           //Davis VP Storm rain value
//
//
// Sunshine/Solar/ET
// =================
$VPsolar =  '37';	//  Solar energy number (W/M2)
$VPuv =  '0.2';	// UV number
$highsolar =  '37';	// Daily high solar (for Davis VP and Grow stations)
$highuv =  '0.2';	// Daily high UV (for Davis VP stations)
$currentsolarpercent =  '7';	// Current solar percent for stations with a temperature solar sensor (like the dallas 1 wire)
$highsolartime =  '7:46 AM';	// Time that the daily high solar occured
$lowsolartime =  '12:00 AM';	// Time that the daily low solar occured
$highuvtime =  '6:22 AM';	// Time that the daily high UV occured
$lowuvtime =  '12:00 AM';	// Time that the daily low UV occured
$highuvyest =  '3.3';	// Yesterday's high UV
$highuvyesttime =  '4:36 PM';	// Time of yesterday's high UV
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
$mrecordwindgust =  '20.2';	// All time record high wind gust
$mrecordhighgustday =  '1';	// Day of record high wind gust
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
$snowheight = '123';	// Estimated height snow will fall at
$snowheightnew = '1591';	// Estimated height snow will fall at, new formula
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
$temp0minuteago = '14.3';  // ****this one is needed for all the others to work
$wind0minuteago = '0.0';
$gust0minuteago = '1.9';
$dir0minuteago = ' SE';
$hum0minuteago = '92';
$dew0minuteago = '13.0';
$baro0minuteago = '1027.1';
$rain0minuteago = '0.0';
$VPsolar0minuteago = '6';
$VPuv0minuteago = '0.2';

$temp5minuteago = '14.1';
$wind5minuteago = '1.9';
$gust5minuteago = '5.6';
$dir5minuteago = ' W ';
$hum5minuteago = '92';
$dew5minuteago = '12.8';
$baro5minuteago = '1027.1';
$rain5minuteago = '0.0';
$VPsolar5minuteago = '6';
$VPuv5minuteago = '0.2';

$temp10minuteago = '13.8';
$wind10minuteago = '1.9';
$gust10minuteago = '5.6';
$dir10minuteago = ' S ';
$hum10minuteago = '93';
$dew10minuteago = '12.7';
$baro10minuteago = '1027.1';
$rain10minuteago = '0.0';
$VPsolar10minuteago = '6';
$VPuv10minuteago = '0.2';

$temp15minuteago = '13.6';
$wind15minuteago = '1.9';
$gust15minuteago = '5.6';
$dir15minuteago = 'SSW';
$hum15minuteago = '94';
$dew15minuteago = '12.7';
$baro15minuteago = '1027.0';
$rain15minuteago = '0.0';
$VPsolar15minuteago = '5';
$VPuv15minuteago = '0.2';

$temp20minuteago = '13.4';
$wind20minuteago = '1.9';
$gust20minuteago = '3.7';
$dir20minuteago = ' S ';
$hum20minuteago = '96';
$dew20minuteago = '12.7';
$baro20minuteago = '1027.0';
$rain20minuteago = '0.0';
$VPsolar20minuteago = '5';
$VPuv20minuteago = '0.1';

$temp30minuteago = '12.9';
$wind30minuteago = '1.9';
$gust30minuteago = '5.6';
$dir30minuteago = ' SE';
$hum30minuteago = '96';
$dew30minuteago = '12.3';
$baro30minuteago = '1027.0';
$rain30minuteago = '0.0';
$VPsolar30minuteago = '4';
$VPuv30minuteago = '0.1';

$temp45minuteago = '12.6';
$wind45minuteago = '0.0';
$gust45minuteago = '0.0';
$dir45minuteago = ' SE';
$hum45minuteago = '98';
$dew45minuteago = '12.3';
$baro45minuteago = '1026.8';
$rain45minuteago = '0.0';
$VPsolar45minuteago = '4';
$VPuv45minuteago = '0.1';

$temp60minuteago = '12.3';
$wind60minuteago = '0.0';
$gust60minuteago = '1.9';
$dir60minuteago = 'SW';
$hum60minuteago = '99';
$dew60minuteago = '12.1';
$baro60minuteago = '1026.8';
$rain60minuteago = '0.0';
$VPsolar60minuteago = '3';
$VPuv60minuteago = '0.1';

$temp75minuteago = '12.4';
$wind75minuteago = '0.0';
$gust75minuteago = '0.0';
$dir75minuteago = 'SSW';
$hum75minuteago = '98';
$dew75minuteago = '12.1';
$baro75minuteago = '1026.8';
$rain75minuteago = '0.0';
$VPsolar75minuteago = '2';
$VPuv75minuteago = '0.1';

$temp90minuteago = '12.3';
$wind90minuteago = '0.0';
$gust90minuteago = '1.9';
$dir90minuteago = ' SE';
$hum90minuteago = '99';
$dew90minuteago = '12.1';
$baro90minuteago = '1026.7';
$rain90minuteago = '0.0';
$VPsolar90minuteago = '1';
$VPuv90minuteago = '0.1';

$temp105minuteago = '12.2';
$wind105minuteago = '1.9';
$gust105minuteago = '3.7';
$dir105minuteago = ' S ';
$hum105minuteago = '99';
$dew105minuteago = '12.0';
$baro105minuteago = '1026.6';
$rain105minuteago = '0.0';
$VPsolar105minuteago = '0';
$VPuv105minuteago = '0.0';

$temp120minuteago = '12.1';
$wind120minuteago = '0.0';
$gust120minuteago = '3.7';
$dir120minuteago = 'SSW';
$hum120minuteago = '99';
$dew120minuteago = '11.9';
$baro120minuteago = '1026.5';
$rain120minuteago = '0.0';
$VPsolar120minuteago = '0';
$VPuv120minuteago = '0.0';

$VPet = '0.0';
$VPetmonth = '2.5';
$dateoflastrainalways = '5/1/2021';
$highbaro = '1027.1 ';
$highbarot = '7:34 AM';
$highsolaryest = '592.0';
$highsolaryesttime = '4:36 PM';
$hourrn = '0.0';
$maxaverageyest = '8.3';
$maxaverageyestt = '4:47 AM';
$maxavgdirectionletter = ' SE';
$maxavgspd = '4.7';
$maxavgspdt = '3:01 AM';
$maxbaroyest = '1026.2 ';
$maxbaroyestt = '10:09 PM';
$maxgstdirectionletter = '  S';
$maxgustyest = '18.5 kmh   S';
$maxgustyestt = '4:47 AM';
$mcoldestdayonrecord = '13.6C  on: 06 Jan 2021';
$mcoldestnightonrecord = '13.5C  on: 07 Jan 2021';
$minchillyest = '11.2';
$minchillyestt = '6:50 AM';
$minwindch = '11.9';
$minwindcht = '5:25 AM';
$mrecordhighavwindday = '1';
$mrecordhighavwindmonth = '1';
$mrecordhighavwindyear = '2021';
$mrecordhighbaro = '1027.1';
$mrecordhighbaroday = '7';
$mrecordhighbaromonth = '1';
$mrecordhighbaroyear = '2021';
$mrecordhighgustmonth = '1';
$mrecordhighgustyear = '2021';
$mrecordhightemp = '26.9';
$mrecordhightempday = '1';
$mrecordhightempmonth = '1';
$mrecordhightempyear = '2021';
$mrecordlowchill = '11.2';
$mrecordlowchillday = '6';
$mrecordlowchillmonth = '1';
$mrecordlowchillyear = '2021';
$mrecordlowtemp = '11.2';
$mrecordlowtempday = '6';
$mrecordlowtempmonth = '1';
$mrecordlowtempyear = '2021';
$mrecordwindspeed = '10.0';
$mwarmestdayonrecord = '22.5C  on: 01 Jan 2021';
$mwarmestnightonrecord = '19.1C  on: 02 Jan 2021';
$raincurrentweek = '3.0';
$raintodatemonthago = '0.0';
$raintodateyearago = '0.0';
$timeoflastrainalways = ' 6:36 PM';
$windruntodatethismonth = '269.02 km';
$windruntodatethisyear = '269.02 km';
$windruntoday = '9.99';
$yesterdaydaviset = '0.0';
$yrecordhighavwindday = '1';
$yrecordhighavwindmonth = '1';
$yrecordhighavwindyear = '2021';
$yrecordhighbaro = '1027.1';
$yrecordhighbaroday = '7';
$yrecordhighbaromonth = '1';
$yrecordhighbaroyear = '2021';
$yrecordhighgustday = '1';
$yrecordhighgustmonth = '1';
$yrecordhighgustyear = '2021';
$yrecordhightemp = '26.9';
$yrecordhightempday = '1';
$yrecordhightempmonth = '1';
$yrecordhightempyear = '2021';
$yrecordlowchill = '11.2';
$yrecordlowchillday = '6';
$yrecordlowchillmonth = '1';
$yrecordlowchillyear = '2021';
$yrecordlowtemp = '11.2';
$yrecordlowtempday = '6';
$yrecordlowtempmonth = '1';
$yrecordlowtempyear = '2021';
$yrecordwindgust = '20.2';
$yrecordwindspeed = '10.0';
$daysTmaxGT30C = '0';
$daysTmaxGT25C = '3';
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
$cloudheightfeet =  '597';	// Estimated cloud base height, feet, (based on dew point, and you height above sea  level...enter
$cloudheightmeters =  '182';	// Estimated cloud base height, metres, (based on dew point, and you height above sea

// end of stock testtags.txt

// ----------------------------------------------------------------------------------------------------
// begin mchallis tags added to testtags.txt for printable flyer
$maxgsthrtime = '7:20';        // time that the max gust last prior 1 hour occured
$minbaroyest  = '1020.4 ';
$minbaroyestt = '2:02 AM';
$mrecordlowbaro = '1008.1';
$mrecordlowbaroday = '3';
$mrecordlowbaromonth = '1';
$mrecordlowbaroyear = '2021';
$yrecordlowbaro = '1008.1';
$yrecordlowbaroday = '3';
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
$avwindlastimediate60 = '1.0'; // average wind speed
$avwindlastimediate120 = '0.4'; // average wind speed
$currentmonthaveragerain = '---'; // average rain for current month
//
// version 5.00+
$avwindlastimediate15 = '1.9'; // average wind speed
$avwindlastimediate30 = '2.1'; // average wind speed
$todayhihumidex = '17.0'; //daily high humidex
$todaylohumidex = '14.0'; //Daily low Humidex
//Version 5.02
$dayornight = 'Day'; // Day or night flag

//Version 6.20
$tempchangelasthourfaren = '+3.5'; //For snow prediction
$abshum = '6.77'; //For snow prediction
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

$avtempjannow = '16.6';
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
$avtempjan = '16.6';//Average temperature for january from your data
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

$avrainjannow = '11.8';
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
$recordhightemp = '27.8';
$recordlowtemp = '7.0';
$recordhighheatindex = '27.7';
$recordlowchill = '7.0';
$warmestdayonrecord = '24.4 C  on: 27 Dec 2020';
$warmestnightonrecord = '19.1C  on: 02 Jan 2021';
$coldestdayonrecord = '13.3C  on: 28 Dec 2020';
$coldestnightonrecord = '9.9C  on: 29 Dec 2020';
$recordwindgust = '25.9';
$recordwindspeed = '10.7';
$recordhighwindrun = '53.6';
$recorddailyrain = '6.2';
$recordhighrainmth = '11.8';
$recordrainrate = '0.3';
$recorddayswithrain = '4';
$recorddaysnorain = '5';
$recordhighdew = '17.9';
$recordlowdew = '2.6';
$recordhighhum = '100';
$recordlowhum = '29';
$recordhighbaro = '1027.1';
$recordlowbaro = '973.1';
$recordhighsolar = '1469.0';
$recordhightempmonth = '12';
$recordhightempday = '27';
$recordhightempyear = '2020';
$recordlowtempmonth = '12';
$recordlowtempday = '29';
$recordlowtempyear = '2020';
$recordhighheatindexmonth = '1';
$recordhighheatindexday = '1';
$recordhighheatindexyear = '2021';
$recordlowchillmonth = '12';
$recordlowchillday = '29';
$recordlowchillyear = '2020';
$recordhighgustmonth = '12';
$recordhighgustday = '27';
$recordhighgustyear = '2020';
$recordhighavwindmonth = '12';
$recordhighavwindday = '27';
$recordhighavwindyear = '2020';
$recordhighwindrunmth = '1';
$recordhighwindrunday = '2';
$recordhighwindrunyr = '2021';
$recorddailyrainmonth = '1';
$recorddailyrainday = '2';
$recorddailyrainyear = '2021';
$recordhighrainmthmth = '1';
$recordhighrainmthyr = '2021';
$recordrainratemonth = '1';
$recordrainrateday = '2';
$recordrainrateyear = '2021';
$recorddayswithrainmonth = '1';
$recorddayswithrainday = '3';
$recorddayswithrainyear = '2021';
$recorddaysnorainmonth = '1';
$recorddaysnorainday = '2';
$recorddaysnorainyear = '2021';
$recordhighdewmonth = '1';
$recordhighdewday = '1';
$recordhighdewyear = '2021';
$recordlowdewmonth = '12';
$recordlowdewday = '28';
$recordlowdewyear = '2020';
$recordhighhummonth = '12';
$recordhighhumday = '28';
$recordhighhumyear = '2020';
$recordlowhummonth = '12';
$recordlowhumday = '27';
$recordlowhumyear = '2020';
$recordhighbaromonth = '1';
$recordhighbaroday = '7';
$recordhighbaroyear = '2021';
$recordlowbaromonth = '12';
$recordlowbaroday = '27';
$recordlowbaroyear = '2020';
$recordhighsolarmonth = '1';
$recordhighsolarday = '2';
$recordhighsolaryear = '2021';
$recordhighuv = '7.7';
$recordhighuvmonth = '1';
$recordhighuvday = '3';
$recordhighuvyear = '2021';

$yrecordhighheatindex = '27.7';
$yrecordhighheatindexmonth = '1';
$yrecordhighheatindexday = '1';
$yrecordhighheatindexyear = '2021';
$ywarmestdayonrecord = '22.5C  on: 01 Jan 2021';
$ywarmestnightonrecord = '19.1C  on: 02 Jan 2021';
$ycoldestdayonrecord = '13.6C  on: 06 Jan 2021';
$ycoldestnightonrecord = '13.5C  on: 07 Jan 2021';
$yrecordhighwindrun = '53.6';
$yrecordhighwindrunmth = '1';
$yrecordhighwindrunday = '2';
$yrecordhighwindrunyr = '2021';
$yrecorddailyrain = '6.2';
$yrecordhighrainmth = '11.8';
$yrecordrainrate = '0.3';
$yrecorddayswithrain = '4';
$yrecorddaysnorain = '5';
$yrecordhighdew = '17.9';
$yrecordlowdew = '10.4';
$yrecordhighhum = '100';
$yrecordlowhum = '47';
$yrecorddailyrainmonth = '1';
$yrecorddailyrainday = '2';
$yrecorddailyrainyear = '2021';
$yrecordhighrainmthmth = '1';
$yrecordhighrainmthyr = '2021';
$yrecordrainratemonth = '1';
$yrecordrainrateday = '2';
$yrecordrainrateyear = '2021';
$yrecorddayswithrainmonth = '1';
$yrecorddayswithrainday = '3';
$yrecorddaysnorainmonth = '1';
$yrecorddaysnorainday = '2';
$yrecordhighdewmonth = '1';
$yrecordhighdewday = '1';
$yrecordhighdewyear = '2021';
$yrecordlowdewmonth = '1';
$yrecordlowdewday = '6';
$yrecordlowdewyear = '2021';
$yrecordhighhummonth = '1';
$yrecordhighhumday = '3';
$yrecordhighhumyear = '2021';
$yrecordlowhummonth = '1';
$yrecordlowhumday = '1';
$yrecordlowhumyear = '2021';
$yrecordhighsolar = '1469.0';
$yrecordhighsolarmonth = '1';
$yrecordhighsolarday = '2';
$yrecordhighsolaryear = '2021';
$yrecordhighuv = '7.7';
$yrecordhighuvmonth = '1';
$yrecordhighuvday = '3';
$yrecordhighuvyear = '2021';

$mrecordhighheatindex = '27.7';
$mrecordhighheatindexmonth = '1';
$mrecordhighheatindexday = '1';
$mrecordhighheatindexyear = '2021';
$mrecordhighwindrun = '53.6';
$mrecordhighwindrunmth = '1';
$mrecordhighwindrunday = '2';
$mrecordhighwindrunyr = '2021';
$mrecorddailyrain = '6.2';
$mrecordhighrainmth = '11.8';
$mrecordrainrate = '0.3';
$mrecorddayswithrain = '4';
$mrecorddaysnorain = '5';
$mrecordhighdew = '17.9';
$mrecordlowdew = '10.4';
$mrecordhighhum = '100';
$mrecordlowhum = '47';
$mrecorddailyrainmonth = '1';
$mrecorddailyrainday = '2';
$mrecorddailyrainyear = '2021';
$mrecordhighrainmthmth = '1';
$mrecordhighrainmthyr = '2021';
$mrecordrainratemonth = '1';
$mrecordrainrateday = '2';
$mrecordrainrateyear = '2021';
$mrecorddayswithrainmonth = '1';
$mrecorddayswithrainday = '3';
$mrecorddaysnorainmonth = '1';
$mrecorddaysnorainday = '2';
$mrecordhighdewmonth = '1';
$mrecordhighdewday = '1';
$mrecordhighdewyear = '2021';
$mrecordlowdewmonth = '1';
$mrecordlowdewday = '6';
$mrecordlowdewyear = '2021';
$mrecordhighhummonth = '1';
$mrecordhighhumday = '3';
$mrecordhighhumyear = '2021';
$mrecordlowhummonth = '1';
$mrecordlowhumday = '1';
$mrecordlowhumyear = '2021';
$myrecordhighbaromonth = '1';
$mrecordhighsolar = '1469.0';
$mrecordhighsolarmonth = '1';
$mrecordhighsolarday = '2';
$mrecordhighsolaryear = '2021';
$mrecordhighuv = '7.7';
$mrecordhighuvmonth = '1';
$mrecordhighuvday = '3';
$mrecordhighuvyear = '2021';
// end of eastmasonville wxrecord.php tags
// ----------------------------------------------------------------------------------------------------
// other addons
$vpissstatus = 'Ok';      // VP ISS Status
$vpreception2 = '%vpreception2%'; // VP Current reception %  *** NEW IN V1.01
$vpconsolebattery = '%vpconsolebattery%'; // VP Console Battery Volts *** NEW IN V1.01
$firewi = '0.0'; // Fire Weather Index
$avtempweek = '16.6';    // Average Weekly Temp
$hddday = '1.6';        // Heating Degree for day
$hddmonth = '14.2';    // Heating Degree for month to date
$hddyear = '14.2';    // Heating Degree for year to date
$cddday = '0.0';        // Cooling Degree for day
$cddmonth = '3.6';    // Cooling Degree for month to date
$cddyear = '3.6';    // Cooling Degree for year to date
$minchillweek = '11.4';  // Minimum Wind Chill over past 7 days
$maxheatweek = '27.7';  // Maximum Heat Index for the Week *** NEW IN V2.00
$airdensity = '1.24';  //air density
$solarnoon = '13:24'; // Solar noon
$changeinday = '-00:00:57';  // change in day length since yesterday
$etcurrentweek = '2.5'; // ET total for the last 7 days
$sunshinehourstodateday = '00:00';
$sunshinehourstodatemonth = '07:14';
$maxsolarfortime = '539';
$wetbulb = '13.5';
$lighteningcountlasthour = '0';
$lighteningcountlastminute = '0';
$lighteningcountlast5minutes = '0';
$lighteningcountlast12hour = '0';
$lighteningcountlast30minutes = '0';
$lighteningcountlasttime = '17:06:11 2021/02/01';
$lighteningcountmonth = '425';
$lighteningcountyear = '425';
$chandler = '-1.3';
$maxdew = '13.1';
$maxdewt = '7:44 AM';
$mindew = '11.7';
$mindewt = '3:41 AM';
$maxdewyest = '13.5';
$maxdewyestt = '12:00 AM';
$mindewyest = '10.4';
$mindewyestt = '4:10 PM';
$stationname = 'IMELBO2077';
$raindifffromav = '---';
$raindifffromavyear = '11.8';
$gddmonth = '51.1';
$gddyear = '51.1';
$maxheat = '14.3';
$maxheatt = '7:46 AM';
$maxheatyest = '16.3';
$yeartodateavtemp = '16.6';
$monthtodateavtemp = '16.6';
$maxchillyest = '16.3';
$monthtodatemaxgust = '20.4';
$monthtodateavspeed = '1.8'; // MTD average wind speed
$monthtodateavgust = '4.8'; //MTD average wind gust
$yeartodateavwind = '1.8'; // YTD average wind speed
$yeartodategstwind = '4.8'; // YTD avg wind gust
$lowbaro = '1025.6 ';
$lowbarot = '2:12 AM';
$monthtodatemaxbaro = '1027.1'; // MTD average wind speed
$monthtodateminbaro = '1008.1'; //MTD average wind gust
$sunshinehourstodateyear = '07:14';
$sunshineyesterday = '01:22';
$avtempsincemidnight = '12.8';
$yesterdayavtemp = '13.5';
$avgspeedsincereset = '1.3';
$maxheatyestt = '4:34 PM';
$windrunyesterday = '31.39';
$currentwdet = '0.1';
$yesterdaywdet = '0.3';
$highhum = '99';
$highhumt = '2:03 AM';
$lowhum = '91';
$lowhumt = '7:46 AM';
$maxhumyest = '100';
$maxhumyestt = '12:00 AM';
$minhumyest = '70';
$minhumyestt = '4:10 PM';
$recordhightempjan = '25.1';
$recordlowtempjan = '11.2';
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

$avtempjannow = '16.6';
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

$avrainjannow = '11.8';
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
