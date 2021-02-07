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
$time =  '5:19 PM';	// current time
$date =  '6/2/2021';	// current date
$sunrise =  '6:40 am';	// sun rise time (make sure you have the correct lat/lon
// 		            in view/sun moon)
$time_minute =  '19';	// Current minute
$time_hour =  '17';	// Current hour
$date_day =  '06';	// Current day
$date_month =  '02';	// Current month
$date_year =  '2021';	// Current year
$monthname =  'February';	// Current month name
$dayname =  'Saturday';	// Current day name
$sunset =  '8:25 pm';	// sunset time
$moonrisedate =  '07/02/21';	// moon rise date
$moonrise =  '1:45 am';	// moon rise time
$moonsetdate =  '06/02/21';	// moon set date
$moonset =  '3:32 pm';	// moon set time
$moonage =  'Moon age: 23 days,18 hours,47 minutes,33%';	// current age of the moon (days since new moon)
$moonphase =  '33%';	// Moon phase %
$moonphasename = 'Waning Crescent Moon'; // 10.36z addition
$marchequinox =  '09:38 UTC 20 March 2021';	// March equinox date
$junesolstice =  '03:33 UTC 21 June 2021';	// June solstice date
$sepequinox =  '19:22 UTC 22 September 2021';	// September equinox date
$decsolstice =  '16:00 UTC 21 December 2021';	// December solstice date
$moonperihel =  '17:15 UTC 3 January 2022';	// Next Moon perihel date
$moonaphel =  '02:08 UTC 5 July 2021';	// Next moon perihel date
$moonperigee =  '05:15 UTC 2 March 2021';	// Next moon perigee date
$moonapogee =  '10:22 UTC 18 February 2021';	// Next moon apogee date
$newmoon =  '05:01 UTC 13 January 2021';	// Date/time of the next/last new moon
$nextnewmoon =  '19:06 UTC 11 February 2021';	// Date/time of the next new moon for next month
$firstquarter =  '21:02 UTC 20 January 2021';	// Date/time of the next/last first quarter moon
$lastquarter =  '17:38 UTC 4 February 2021';	// Date/time of the next/last last quarter moon
$fullmoon =  '19:17 UTC 28 January 2021';	// Date/time of the next/last full moon
$fullmoondate =  '28 January 2021';	// Date of the next/last full moon (date only)
$suneclipse =  '04 December 2021 19:16:04 4%';	// Next sun eclipse
$mooneclipse =  '26 May 2021 21:19:07 101%';	// Next moon eclipse date
$easterdate =  '4 April 2021';	// Next easter date
$chinesenewyear =  '12 February 2021 ()';	// Chinese new year
$hoursofpossibledaylight =  '13:45';	// Total hours/minutes of possible daylight for today
//
$weatherreport =  'Clear';	// current weather conditions from selected METAR
$stationaltitude =  '266';	// Station altitude, feet, as set in the units setup
// this under setup)
$stationlatitude =  '-37:00:41';	// Latitude (from the sun moon rise/set setup)
$stationlongitude =  '-145:21:19';	// Longtitude (from the sun moon rise/set setup)
$windowsuptime = '21 Days 23 Hours 36 Minutes 52 Seconds'; // uptime for windows on weather pc
$freememory = '15.58GB'; // amount of free memory on the pc
$Startimedate = '3:49:00 PM 6/02/2021'; // Time/date WD was started

/*
$NOAAEvent = 'NO CURRENT ADVISORIES'; // NOAA Watch/Warning/Advisory
$noaawarningraw = '---'; // NOAA RAW watch/warning/advisory
*/

$wdversion = '10.37S' . '-(b' . '122' . ')';	// Weather Display version number you are running
$wdversiononly = '10.37S';
$wdbuild   = '122';       // Weather Display build number you are running
$noaacityname =  'Belgrave';	// City name,from the noaa setup (in the av/ext setup)
// 
$timeofnextupdate =  '5:20 pm';	// Time of next Update/Upload of the weather data to your web page (based on the web table update 
// 
$heatcolourword =  'Comfortable';	// How hot/cold it feels at the moment, based on the humidex, used with the conditionscolour.jpg 
// 
// 
// Temperature/Humidity
// ====================
// Current:
// --------
$temperature =  '20.5';	// temperature
$tempnodp = '20'; // temperature, no decimal place
$humidity =  '55';	// humidity
$dewpt =  '11.1';	// dew point
$maxtemp =  '20.6';	// today's maximum temperature
$maxtempt =  '4:55 PM';	// time this occurred
$mintemp =  '15.7';	// today's minimum temperature
$mintempt =  '2:12 AM';	// time this occurred
$feelslike =  '25';	// Shows heat index or humidex or windchill (if less than 16oC)

$heati =  '24.6';	// current heat index
$heatinodp =  '25';	// current heat index,no decimal place
$windch =  '20.5';	// current wind-chill
$windchnodp =  '21';	// current wind-chill, no decimal place
$humidexfaren =  '72.2';	// Humidex value in oF
$humidexcelsius =  '22.3';	// Humidex value in oC

$apparenttemp =  '20.9';	// Apparent temperature
$apparentsolartemp =  '25.2';	// Apparent temperature in the sun (you need a solar sensor)
$apparenttempc =  '20.9';	// Apparent temperature, °C
$apparentsolartempc =  '25.2';	// Apparent temperature in the sun, °C (you need a solar sensor)
$apparenttempf =  '69.6';	// Apparent temperature, °F
$apparentsolartempf =  '77.4';	// Apparent temperature in the sun, °F (you need a solar sensor)
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
$tempchangehour =  '+0.6';	// Temperature change in the last hour
$maxtempyest =  '25.6';	// Yesterday's max temperature
$maxtempyestt =  '12:44 PM';	// Time of yesterday's max temperature
$mintempyest =  '16.1';	// Yesterday's min temperature
$mintempyestt =  '7:05 AM';	// Time of yesterday's min temperature
// 
// 
// Trends:
// -------
$temp24hoursago =  '24.1';	// The temperature 24 hours ago
$humchangelasthour =  '-9';	// Humidity change last hour
$dewchangelasthour =  '-1.7';	// Dew point change last hour
$barochangelasthour =  '0.0';	// Baro change last hour
// 
// Wind
// ====
// Current:
// --------
// 
$avgspd =  '2.2';	// average wind speed (current)
$gstspd =  '3.2';	// current/gust wind speed
$maxgst =  '25.9';	// today's maximum wind speed
$maxgstt =  '7:28 AM';	// time this occurred
$maxgsthr =  '12.2 kmh  NE';	// maximum gust last hour
$dirdeg =  '22';	// wind direction (degrees)
$dirlabel =  'NNE';	// wind direction (NNE etc)
//$maxgustlastimediatehourtime =  '16:45';	// 16:45  time that the max gust last prior 1 hour occured
$avwindlastimediate10 =  '0.7';	// Average wind for the last immediate 10 minute period
// $avdir10minute =  '351';	// average ten minute wind direction (degrees)

$beaufortnum ='0'; //Beaufort wind force number
$currbftspeed = '1 bft'; //Current Beaufort wind speed

$bftspeedtext = 'Light Air'; //Beaufort scale in text (i.e Fresh Breeze)
// 
// 
// Baromometer
// ===========
// Current:
// --------
$baro = '1000.0';  // current barometer
$baroinusa2dp =  '29.53 inches';	// Current barometer reading in inches, 2 decimal places only.
$trend =  '+0.1';	// amount of change in the last hour
$pressuretrendname =  'Steady';	// pressure trend (i.e. 'falling'), last hour
$pressuretrendname3hour =  'Rising slowly';	// pressure trend (i.e. 'falling'), last 3 hours

$vpforecasttext = '---';	// Forecast text from the Davis VP
// 
// 
// Rain
// ====
// Current:
// --------
$dayrn =  '  0.000';	// today's rain
$monthrn =  '1.561';	// rain so far this month
$yearrn =  '118.2';	// rain so far this year
$dayswithnorain =  '1';	// Consecutative days with no rain
$dayswithrain =  '0';	// Days with rain for the month
$dayswithrainyear =  '11';	// Days with rain for the year
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
$VPsolar =  '327';	//  Solar energy number (W/M2)
$VPuv =  '4.5';	// UV number 
$highsolar =  '1028';	// Daily high solar (for Davis VP and Grow stations)
$highuv =  '13.8';	// Daily high UV (for Davis VP stations)
$currentsolarpercent =  '55';	// Current solar percent for stations with a temperature solar sensor (like the dallas 1 wire)
$highsolartime =  '11:40 AM';	// Time that the daily high solar occured
$lowsolartime =  '12:00 AM';	// Time that the daily low solar occured
$highuvtime =  '11:40 AM';	// Time that the daily high UV occured
$lowuvtime =  '12:00 AM';	// Time that the daily low UV occured
$highuvyest =  '14.0';	// Yesterday's high UV
$highuvyesttime =  '12:39 PM';	// Time of yesterday's high UV
$burntime =  '25';	// Time (minutes) to burn (normal skin) at the current UV rate, from the Davis VP with UV sensor
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
$mrecordwindgust =  '33.9';	// All time record high wind gust
$mrecordhighgustday =  '5';	// Day of record high wind gust
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
$snowheight = '127';	// Estimated height snow will fall at
$snowheightnew = '2759';	// Estimated height snow will fall at, new formula
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
$temp0minuteago = '20.5';  // ****this one is needed for all the others to work
$wind0minuteago = '1.9';
$gust0minuteago = '5.6';
$dir0minuteago = ' N ';
$hum0minuteago = '57';
$dew0minuteago = '11.7';
$baro0minuteago = '1000.0';
$rain0minuteago = '0.0';
$VPsolar0minuteago = '75';
$VPuv0minuteago = '4.5';

$temp5minuteago = '20.5';  
$wind5minuteago = '0.0';
$gust5minuteago = '3.7';
$dir5minuteago = ' N ';
$hum5minuteago = '58';
$dew5minuteago = '12.0';
$baro5minuteago = '1000.0';
$rain5minuteago = '0.0';
$VPsolar5minuteago = '16';
$VPuv5minuteago = '1.4';

$temp10minuteago = '20.6';  
$wind10minuteago = '1.9';
$gust10minuteago = '5.6';
$dir10minuteago = ' NE';
$hum10minuteago = '57';
$dew10minuteago = '11.8';
$baro10minuteago = '1000.0';
$rain10minuteago = '0.0';
$VPsolar10minuteago = '22';
$VPuv10minuteago = '2.0';

$temp15minuteago = '20.6';  
$wind15minuteago = '0.0';
$gust15minuteago = '1.9';
$dir15minuteago = ' NE';
$hum15minuteago = '63';
$dew15minuteago = '13.3';
$baro15minuteago = '1000.0';
$rain15minuteago = '0.0';
$VPsolar15minuteago = '34';
$VPuv15minuteago = '2.9';

$temp20minuteago = '20.6';  
$wind20minuteago = '3.7';
$gust20minuteago = '3.7';
$dir20minuteago = 'WSW';
$hum20minuteago = '59';
$dew20minuteago = '12.3';
$baro20minuteago = '1000.0';
$rain20minuteago = '0.0';
$VPsolar20minuteago = '25';
$VPuv20minuteago = '2.2';

$temp30minuteago = '20.2';  
$wind30minuteago = '3.7';
$gust30minuteago = '5.6';
$dir30minuteago = ' N ';
$hum30minuteago = '61';
$dew30minuteago = '12.4';
$baro30minuteago = '1000.0';
$rain30minuteago = '0.0';
$VPsolar30minuteago = '31';
$VPuv30minuteago = '2.9';

$temp45minuteago = '20.1';  
$wind45minuteago = '1.9';
$gust45minuteago = '1.9';
$dir45minuteago = ' N ';
$hum45minuteago = '63';
$dew45minuteago = '12.8';
$baro45minuteago = '1000.0';
$rain45minuteago = '0.0';
$VPsolar45minuteago = '23';
$VPuv45minuteago = '2.4';

$temp60minuteago = '19.9';  
$wind60minuteago = '1.9';
$gust60minuteago = '3.7';
$dir60minuteago = 'NNW';
$hum60minuteago = '66';
$dew60minuteago = '13.4';
$baro60minuteago = '1000.0';
$rain60minuteago = '0.0';
$VPsolar60minuteago = '22';
$VPuv60minuteago = '2.6';

$temp75minuteago = '19.9';  
$wind75minuteago = '0.0';
$gust75minuteago = '3.7';
$dir75minuteago = 'NNW';
$hum75minuteago = '65';
$dew75minuteago = '13.1';
$baro75minuteago = '1000.0';
$rain75minuteago = '0.0';
$VPsolar75minuteago = '24';
$VPuv75minuteago = '3.0';

$temp90minuteago = '20.0';  
$wind90minuteago = '3.7';
$gust90minuteago = '5.6';
$dir90minuteago = ' N ';
$hum90minuteago = '62';
$dew90minuteago = '12.5';
$baro90minuteago = '999.8';
$rain90minuteago = '0.0';
$VPsolar90minuteago = '23';
$VPuv90minuteago = '2.7';

$temp105minuteago = '19.4';  
$wind105minuteago = '1.9';
$gust105minuteago = '3.7';
$dir105minuteago = 'NNW';
$hum105minuteago = '66';
$dew105minuteago = '12.9';
$baro105minuteago = '999.9';
$rain105minuteago = '0.0';
$VPsolar105minuteago = '23';
$VPuv105minuteago = '2.6';

$temp120minuteago = '19.0';  
$wind120minuteago = '0.0';
$gust120minuteago = '1.9';
$dir120minuteago = ' NW';
$hum120minuteago = '71';
$dew120minuteago = '13.6';
$baro120minuteago = '999.9';
$rain120minuteago = '0.0';
$VPsolar120minuteago = '15';
$VPuv120minuteago = '1.9';

$VPet = '0.0';
$VPetmonth = '10.2';
$dateoflastrainalways = '5/2/2021';
$highbaro = '1000.1 ';
$highbarot = '2:44 PM';
$highsolaryest = '1110.0';
$highsolaryesttime = '12:39 PM';
$hourrn = '0.0';
$maxaverageyest = '19.1';
$maxaverageyestt = '12:24 PM';
$maxavgdirectionletter = 'N';
$maxavgspd = '11.1';
$maxavgspdt = '1:43 PM';
$maxbaroyest = '1003.0 ';
$maxbaroyestt = '2:16 AM';
$maxgstdirectionletter = 'N';
$maxgustyest = '33.8 kmh NNE';
$maxgustyestt = '12:24 PM';
$mcoldestdayonrecord = '14.8C  on: 02 Feb 2021';
$mcoldestnightonrecord = '12.4C  on: 03 Feb 2021';
$minchillyest = '16.1';
$minchillyestt = '7:05 AM';
$minwindch = '15.7';
$minwindcht = '2:12 AM';
$mrecordhighavwindday = '5';
$mrecordhighavwindmonth = '2';
$mrecordhighavwindyear = '2021';
$mrecordhighbaro = '1018.6';
$mrecordhighbaroday = '2';
$mrecordhighbaromonth = '2';
$mrecordhighbaroyear = '2021';
$mrecordhighgustmonth = '2';
$mrecordhighgustyear = '2021';
$mrecordhightemp = '28.4';
$mrecordhightempday = '4';
$mrecordhightempmonth = '2';
$mrecordhightempyear = '2021';
$mrecordlowchill = '9.5';
$mrecordlowchillday = '3';
$mrecordlowchillmonth = '2';
$mrecordlowchillyear = '2021';
$mrecordlowtemp = '9.5';
$mrecordlowtempday = '3';
$mrecordlowtempmonth = '2';
$mrecordlowtempyear = '2021';
$mrecordwindspeed = '19.1';
$mwarmestdayonrecord = '23.0C  on: 05 Feb 2021';
$mwarmestnightonrecord = '22.4C  on: 05 Feb 2021';
$raincurrentweek = '0.0';
$raintodatemonthago = '2.6';
$raintodateyearago = '0.0';
$timeoflastrainalways = ' 8:24 PM';
$windruntodatethismonth = '320.08 km';
$windruntodatethisyear = '1747.73 km';
$windruntoday = '52.94';
$yesterdaydaviset = '0.0';
$yrecordhighavwindday = '5';
$yrecordhighavwindmonth = '2';
$yrecordhighavwindyear = '2021';
$yrecordhighbaro = '1028.8';
$yrecordhighbaroday = '8';
$yrecordhighbaromonth = '1';
$yrecordhighbaroyear = '2021';
$yrecordhighgustday = '5';
$yrecordhighgustmonth = '2';
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
$yrecordwindgust = '33.9';
$yrecordwindspeed = '19.1';
$daysTmaxGT30C = '0';
$daysTmaxGT25C = '2';
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
$cloudheightfeet =  '3854';	// Estimated cloud base height, feet, (based on dew point, and you height above sea  level...enter
$cloudheightmeters =  '1175';	// Estimated cloud base height, metres, (based on dew point, and you height above sea

// end of stock testtags.txt

// ----------------------------------------------------------------------------------------------------
// begin mchallis tags added to testtags.txt for printable flyer
$maxgsthrtime = '16:45';        // time that the max gust last prior 1 hour occured
$minbaroyest  = '995.3 ';
$minbaroyestt = '7:09 PM';
$mrecordlowbaro = '995.3';
$mrecordlowbaroday = '5';
$mrecordlowbaromonth = '2';
$mrecordlowbaroyear = '2021';
$yrecordlowbaro = '995.3';
$yrecordlowbaroday = '5';
$yrecordlowbaromonth = '2';
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
$timeofdaygreeting = 'Afternoon';
$avwindlastimediate60 = '2.1'; // average wind speed
$avwindlastimediate120 = '2.0'; // average wind speed
$currentmonthaveragerain = '---'; // average rain for current month
//
// version 5.00+ 
$avwindlastimediate15 = '0.9'; // average wind speed
$avwindlastimediate30 = '1.5'; // average wind speed
$todayhihumidex = '23.7'; //daily high humidex
$todaylohumidex = '17.5'; //Daily low Humidex
//Version 5.02
$dayornight = 'Day'; // Day or night flag

//Version 6.20
$tempchangelasthourfaren = '+1.1'; //For snow prediction
$abshum = '6.31'; //For snow prediction
$maxtemp4today = '---'; // max from station's records
$mintemp4today = '---'; // min from station's records
$maxtemp4todayyr = '2021'; // max year from station's records
$mintemp4todayyr = '2021'; // min year from station's records
$avsnowjan = '0.0'; //Average snow for jan from your inputted snow data (cm)
$avsnowfeb = '0.0'; //Average snow for feb from your inputted snow data (cm)
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
$avsnowfebnow = '0.0';
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

$avtempjannow = '17.6';
$avtempfebnow = '17.3';
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
$avtempjan = '17.6';//Average temperature for january from your data
$avtempfeb = '17.3';//Average temperature for february from your data
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
$avrainjan = '38.9';
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

$avrainjannow = '116.6';
$avrainfebnow = '1.6';
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
$warmestdayonrecord = '33.8 C  on: 24 Jan 2021';
$warmestnightonrecord = '26.9C  on: 25 Jan 2021';
$coldestdayonrecord = '12.6C  on: 16 Jan 2021';
$coldestnightonrecord = '9.2C  on: 16 Jan 2021';
$recordwindgust = '33.9';
$recordwindspeed = '19.1';
$recordhighwindrun = '95.3';
$recorddailyrain = '11.0';
$recordhighrainmth = '116.6';
$recordrainrate = '8.3';
$recorddayswithrain = '4';
$recorddaysnorain = '19';
$recordhighdew = '19.4';
$recordlowdew = '2.6';
$recordhighhum = '100';
$recordlowhum = '22';
$recordhighbaro = '1028.8';
$recordlowbaro = '973.1';
$recordhighsolar = '1651.0';
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
$recordhighgustmonth = '2';
$recordhighgustday = '5';
$recordhighgustyear = '2021';
$recordhighavwindmonth = '2';
$recordhighavwindday = '5';
$recordhighavwindyear = '2021';
$recordhighwindrunmth = '2';
$recordhighwindrunday = '5';
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
$recorddaysnorainmonth = '2';
$recorddaysnorainday = '5';
$recorddaysnorainyear = '2021';
$recordhighdewmonth = '2';
$recordhighdewday = '5';
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
$recordhighsolarday = '31';
$recordhighsolaryear = '2021';
$recordhighuv = '19.8';
$recordhighuvmonth = '1';
$recordhighuvday = '19';
$recordhighuvyear = '2021';

$yrecordhighheatindex = '35.0';
$yrecordhighheatindexmonth = '1';
$yrecordhighheatindexday = '25';
$yrecordhighheatindexyear = '2021';
$ywarmestdayonrecord = '33.8C  on: 24 Jan 2021';
$ywarmestnightonrecord = '26.9C  on: 25 Jan 2021';
$ycoldestdayonrecord = '12.6C  on: 16 Jan 2021';
$ycoldestnightonrecord = '9.2C  on: 16 Jan 2021';
$yrecordhighwindrun = '95.3';
$yrecordhighwindrunmth = '2';
$yrecordhighwindrunday = '5';
$yrecordhighwindrunyr = '2021';
$yrecorddailyrain = '11.0';
$yrecordhighrainmth = '116.6';
$yrecordrainrate = '8.3';
$yrecorddayswithrain = '4';
$yrecorddaysnorain = '19';
$yrecordhighdew = '19.4';
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
$yrecorddaysnorainmonth = '2';
$yrecorddaysnorainday = '5';
$yrecordhighdewmonth = '2';
$yrecordhighdewday = '5';
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
$yrecordhighsolar = '1651.0';
$yrecordhighsolarmonth = '1';
$yrecordhighsolarday = '31';
$yrecordhighsolaryear = '2021';
$yrecordhighuv = '19.8';
$yrecordhighuvmonth = '1';
$yrecordhighuvday = '19';
$yrecordhighuvyear = '2021';

$mrecordhighheatindex = '28.1';
$mrecordhighheatindexmonth = '2';
$mrecordhighheatindexday = '4';
$mrecordhighheatindexyear = '2021';
$mrecordhighwindrun = '95.3';
$mrecordhighwindrunmth = '2';
$mrecordhighwindrunday = '5';
$mrecordhighwindrunyr = '2021';
$mrecorddailyrain = '1.6';
$mrecordhighrainmth = '116.6';
$mrecordrainrate = '0.0';
$mrecorddayswithrain = '1';
$mrecorddaysnorain = '19';
$mrecordhighdew = '19.4';
$mrecordlowdew = '7.3';
$mrecordhighhum = '98';
$mrecordlowhum = '39';
$mrecorddailyrainmonth = '2';
$mrecorddailyrainday = '5';
$mrecorddailyrainyear = '2021';
$mrecordhighrainmthmth = '2';
$mrecordhighrainmthyr = '2021';
$mrecordrainratemonth = '2';
$mrecordrainrateday = '1';
$mrecordrainrateyear = '2021';
$mrecorddayswithrainmonth = '2';
$mrecorddayswithrainday = '5';
$mrecorddaysnorainmonth = '2';
$mrecorddaysnorainday = '5';
$mrecordhighdewmonth = '2';
$mrecordhighdewday = '5';
$mrecordhighdewyear = '2021';
$mrecordlowdewmonth = '2';
$mrecordlowdewday = '2';
$mrecordlowdewyear = '2021';
$mrecordhighhummonth = '2';
$mrecordhighhumday = '1';
$mrecordhighhumyear = '2021';
$mrecordlowhummonth = '2';
$mrecordlowhumday = '4';
$mrecordlowhumyear = '2021';
$myrecordhighbaromonth = '2';
$mrecordhighsolar = '1552.0';
$mrecordhighsolarmonth = '2';
$mrecordhighsolarday = '3';
$mrecordhighsolaryear = '2021';
$mrecordhighuv = '16.7';
$mrecordhighuvmonth = '2';
$mrecordhighuvday = '2';
$mrecordhighuvyear = '2021';
// end of eastmasonville wxrecord.php tags
// ----------------------------------------------------------------------------------------------------
// other addons
$vpissstatus = 'Ok';      // VP ISS Status
$vpreception2 = '%vpreception2%'; // VP Current reception %  *** NEW IN V1.01
$vpconsolebattery = '%vpconsolebattery%'; // VP Console Battery Volts *** NEW IN V1.01
$firewi = '9.5'; // Fire Weather Index
$avtempweek = '16.9';    // Average Weekly Temp
$hddday = '1.1';        // Heating Degree for day
$hddmonth = '11.9';    // Heating Degree for month to date
$hddyear = '70.8';    // Heating Degree for year to date
$cddday = '0.0';        // Cooling Degree for day
$cddmonth = '5.4';    // Cooling Degree for month to date
$cddyear = '43.3';    // Cooling Degree for year to date
$minchillweek = '10.6';  // Minimum Wind Chill over past 7 days 
$maxheatweek = '28.1';  // Maximum Heat Index for the Week *** NEW IN V2.00
$airdensity = '1.18';  //air density
$solarnoon = '13:32'; // Solar noon
$changeinday = '-00:02:03';  // change in day length since yesterday
$etcurrentweek = '10.5'; // ET total for the last 7 days
$sunshinehourstodateday = '00:44';
$sunshinehourstodatemonth = '11:07';
$maxsolarfortime = '603';
$wetbulb = '15.3';
$lighteningcountlasthour = '0';
$lighteningcountlastminute = '0';
$lighteningcountlast5minutes = '0';
$lighteningcountlast12hour = '4';
$lighteningcountlast30minutes = '0';
$lighteningcountlasttime = '09:51:15 2021/05/02';
$lighteningcountmonth = '4';
$lighteningcountyear = '559';
$chandler = '13.7';
$maxdew = '16.0';
$maxdewt = '12:33 AM';
$mindew = '8.6';
$mindewt = '5:40 AM';
$maxdewyest = '19.4';
$maxdewyestt = '4:09 PM';
$mindewyest = '12.7';
$mindewyestt = '1:34 AM';
$stationname = 'IMELBO2077';
$raindifffromav = '---';
$raindifffromavyear = '118.2';
$gddmonth = '38.3';
$gddyear = '293.7';
$maxheat = '20.6';
$maxheatt = '4:55 PM'; 
$maxheatyest = '25.6';  
$yeartodateavtemp = '17.6'; 
$monthtodateavtemp = '17.3'; 
$maxchillyest = '25.6'; 
$monthtodatemaxgust = '33.3'; 
$monthtodateavspeed = '2.3'; // MTD average wind speed
$monthtodateavgust = '5.8'; //MTD average wind gust
$yeartodateavwind = '2.0'; // YTD average wind speed
$yeartodategstwind = '4.9'; // YTD avg wind gust
$lowbaro = '996.0 ';
$lowbarot = '4:30 AM';
$monthtodatemaxbaro = '1018.6'; // MTD average wind speed
$monthtodateminbaro = '995.3'; //MTD average wind gust
$sunshinehourstodateyear = '42:26'; 
$sunshineyesterday = '01:01';
$avtempsincemidnight = '17.5';
$yesterdayavtemp = '21.8';
$avgspeedsincereset = '3.1';
$maxheatyestt = '12:44 PM';
$windrunyesterday = '95.28';
$currentwdet = '2.2';
$yesterdaywdet = '2.4';
$highhum = '96';
$highhumt = '1:06 AM';
$lowhum = '55';
$lowhumt = '5:18 PM';
$maxhumyest = '94';
$maxhumyestt = '11:33 PM';
$minhumyest = '47';
$minhumyestt = '1:45 AM';
$recordhightempjan = '36.4';
$recordlowtempjan = '7.8';
$recordhightempfeb = '25.6';
$recordlowtempfeb = '11.3';
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

$avtempjannow = '17.6';
$avtempfebnow = '17.3';
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

$avrainjannow = '116.6';
$avrainfebnow = '1.6';
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
