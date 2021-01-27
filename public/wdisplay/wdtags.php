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
$uomtemp = 'C'; //  = 'C', 'F',  (or  '�C', '�F', or '&deg;C', '&deg;F' )
$uombaro = 'hPa'; //  = 'inHg', 'hPa', 'kPa', 'mb'
$uomwind = 'kmh'; //  = 'kts','mph','kmh','km/h','m/s','Bft'
$uomrain = 'mm'; //  = 'mm', 'in'
$datefmt = 'd/m/y'; //  = 'd/m/y', 'm/d/y'
$uomdistance = 'km'; // = 'mi','km'  (for windrun variables)
//
// General OR Non Weather Specific/SUN/MOON
// ========================================
$time =  '07:48 AM';	// current time
$date =  '27/1/2021';	// current date
$sunrise =  '6:26 am';	// sun rise time (make sure you have the correct lat/lon
// 		            in view/sun moon)
$time_minute =  '48';	// Current minute
$time_hour =  '07';	// Current hour
$date_day =  '27';	// Current day
$date_month =  '01';	// Current month
$date_year =  '2021';	// Current year
$monthname =  'January';	// Current month name
$dayname =  'Wednesday';	// Current day name
$sunset =  '8:36 pm';	// sunset time
$moonrisedate =  '26/01/21';	// moon rise date
$moonrise =  '6:49 pm';	// moon rise time
$moonsetdate =  '27/01/21';	// moon set date
$moonset =  '4:19 am';	// moon set time
$moonage =  'Moon age: 12 days,20 hours,10 minutes,96%';	// current age of the moon (days since new moon)
$moonphase =  '96%';	// Moon phase %
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
$mooneclipse =  '26 May 2021 11:19:07 101%';	// Next moon eclipse date
$easterdate =  '4 April 2021';	// Next easter date
$chinesenewyear =  '12 February 2021 ()';	// Chinese new year
$hoursofpossibledaylight =  '14:10';	// Total hours/minutes of possible daylight for today
//
$weatherreport =  'mostly cloudy';	// current weather conditions from selected METAR
$stationaltitude =  '266';	// Station altitude, feet, as set in the units setup
// this under setup)
$stationlatitude =  '-37:54:00';	// Latitude (from the sun moon rise/set setup)
$stationlongitude =  '-145:21:00';	// Longtitude (from the sun moon rise/set setup)
$windowsuptime = '11 Days 14 Hours 5 Minutes 20 Seconds'; // uptime for windows on weather pc
$freememory = '15.60GB'; // amount of free memory on the pc
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
$timeofnextupdate =  '7:49 am';	// Time of next Update/Upload of the weather data to your web page (based on the web table update 
// 
$heatcolourword =  'Cool';	// How hot/cold it feels at the moment, based on the humidex, used with the conditionscolour.jpg 
// 
// 
// Temperature/Humidity
// ====================
// Current:
// --------
$temperature =  '11.6';	// temperature
$tempnodp = '12'; // temperature, no decimal place
$humidity =  '72';	// humidity
$dewpt =  '6.7';	// dew point
$maxtemp =  '11.8';	// today's maximum temperature
$maxtempt =  '12:00 AM';	// time this occurred
$mintemp =  '9.8';	// today's minimum temperature
$mintempt =  '2:03 AM';	// time this occurred
$feelslike =  '12';	// Shows heat index or humidex or windchill (if less than 16oC)

$heati =  '11.6';	// current heat index
$heatinodp =  '12';	// current heat index,no decimal place
$windch =  '11.6';	// current wind-chill
$windchnodp =  '12';	// current wind-chill, no decimal place
$humidexfaren =  '52.7';	// Humidex value in oF
$humidexcelsius =  '11.5';	// Humidex value in oC

$apparenttemp =  '10.9';	// Apparent temperature
$apparentsolartemp =  '13.1';	// Apparent temperature in the sun (you need a solar sensor)
$apparenttempc =  '10.9';	// Apparent temperature, �C
$apparentsolartempc =  '13.1';	// Apparent temperature in the sun, �C (you need a solar sensor)
$apparenttempf =  '51.7';	// Apparent temperature, �F
$apparentsolartempf =  '55.6';	// Apparent temperature in the sun, �F (you need a solar sensor)
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
$tempchangehour =  '+0.4';	// Temperature change in the last hour
$maxtempyest =  '20.0';	// Yesterday's max temperature
$maxtempyestt =  '12:54 AM';	// Time of yesterday's max temperature
$mintempyest =  '11.8';	// Yesterday's min temperature
$mintempyestt =  '11:46 PM';	// Time of yesterday's min temperature
// 
// 
// Trends:
// -------
$temp24hoursago =  '16.6';	// The temperature 24 hours ago
$humchangelasthour =  '0';	// Humidity change last hour
$dewchangelasthour =  '+0.4';	// Dew point change last hour
$barochangelasthour =  '+0.3';	// Baro change last hour
// 
// Wind
// ====
// Current:
// --------
// 
$avgspd =  '2.2';	// average wind speed (current)
$gstspd =  '1.1';	// current/gust wind speed
$maxgst =  '13.0';	// today's maximum wind speed
$maxgstt =  '4:38 AM';	// time this occurred
$maxgsthr =  '9.7 kmh  SE';	// maximum gust last hour
$dirdeg =  '149';	// wind direction (degrees)
$dirlabel =  'SSE';	// wind direction (NNE etc)
//$maxgustlastimediatehourtime =  '7:38';	// 7:38  time that the max gust last prior 1 hour occured
$avwindlastimediate10 =  '2.6';	// Average wind for the last immediate 10 minute period
// $avdir10minute =  '132';	// average ten minute wind direction (degrees)

$beaufortnum ='0'; //Beaufort wind force number
$currbftspeed = '0 bft'; //Current Beaufort wind speed

$bftspeedtext = 'Light Air'; //Beaufort scale in text (i.e Fresh Breeze)
// 
// 
// Baromometer
// ===========
// Current:
// --------
$baro = '1015.0';  // current barometer
$baroinusa2dp =  '29.97 inches';	// Current barometer reading in inches, 2 decimal places only.
$trend =  '+0.4';	// amount of change in the last hour
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
$monthrn =  '32.085';	// rain so far this month
$yearrn =  '32.1';	// rain so far this year
$dayswithnorain =  '9';	// Consecutative days with no rain
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
$VPsolar =  '72';	//  Solar energy number (W/M2)
$VPuv =  '1.2';	// UV number 
$highsolar =  '93';	// Daily high solar (for Davis VP and Grow stations)
$highuv =  '1.2';	// Daily high UV (for Davis VP stations)
$currentsolarpercent =  '14';	// Current solar percent for stations with a temperature solar sensor (like the dallas 1 wire)
$highsolartime =  '7:34 AM';	// Time that the daily high solar occured
$lowsolartime =  '12:00 AM';	// Time that the daily low solar occured
$highuvtime =  '7:47 AM';	// Time that the daily high UV occured
$lowuvtime =  '12:00 AM';	// Time that the daily low UV occured
$highuvyest =  '6.5';	// Yesterday's high UV
$highuvyesttime =  '2:44 PM';	// Time of yesterday's high UV
$burntime =  '93';	// Time (minutes) to burn (normal skin) at the current UV rate, from the Davis VP with UV sensor
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
$snowheight = '125';	// Estimated height snow will fall at
$snowheightnew = '1292';	// Estimated height snow will fall at, new formula
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
$temp0minuteago = '11.6';  // ****this one is needed for all the others to work
$wind0minuteago = '1.9';
$gust0minuteago = '7.4';
$dir0minuteago = ' SE';
$hum0minuteago = '72';
$dew0minuteago = '6.7';
$baro0minuteago = '1015.0';
$rain0minuteago = '0.0';
$VPsolar0minuteago = '13';
$VPuv0minuteago = '1.2';

$temp5minuteago = '11.5';  
$wind5minuteago = '1.9';
$gust5minuteago = '5.6';
$dir5minuteago = ' SE';
$hum5minuteago = '72';
$dew5minuteago = '6.6';
$baro5minuteago = '1014.9';
$rain5minuteago = '0.0';
$VPsolar5minuteago = '10';
$VPuv5minuteago = '1.0';

$temp10minuteago = '11.5';  
$wind10minuteago = '3.7';
$gust10minuteago = '5.6';
$dir10minuteago = ' SE';
$hum10minuteago = '72';
$dew10minuteago = '6.6';
$baro10minuteago = '1014.9';
$rain10minuteago = '0.0';
$VPsolar10minuteago = '9';
$VPuv10minuteago = '0.9';

$temp15minuteago = '11.4';  
$wind15minuteago = '3.7';
$gust15minuteago = '7.4';
$dir15minuteago = ' SE';
$hum15minuteago = '72';
$dew15minuteago = '6.5';
$baro15minuteago = '1014.9';
$rain15minuteago = '0.0';
$VPsolar15minuteago = '8';
$VPuv15minuteago = '0.8';

$temp20minuteago = '11.4';  
$wind20minuteago = '0.0';
$gust20minuteago = '3.7';
$dir20minuteago = ' SE';
$hum20minuteago = '73';
$dew20minuteago = '6.7';
$baro20minuteago = '1014.9';
$rain20minuteago = '0.0';
$VPsolar20minuteago = '7';
$VPuv20minuteago = '0.7';

$temp30minuteago = '11.3';  
$wind30minuteago = '0.0';
$gust30minuteago = '3.7';
$dir30minuteago = ' SE';
$hum30minuteago = '73';
$dew30minuteago = '6.6';
$baro30minuteago = '1014.8';
$rain30minuteago = '0.0';
$VPsolar30minuteago = '4';
$VPuv30minuteago = '0.5';

$temp45minuteago = '11.2';  
$wind45minuteago = '1.9';
$gust45minuteago = '5.6';
$dir45minuteago = ' SE';
$hum45minuteago = '72';
$dew45minuteago = '6.3';
$baro45minuteago = '1014.8';
$rain45minuteago = '0.0';
$VPsolar45minuteago = '3';
$VPuv45minuteago = '0.3';

$temp60minuteago = '11.2';  
$wind60minuteago = '1.9';
$gust60minuteago = '3.7';
$dir60minuteago = ' SE';
$hum60minuteago = '72';
$dew60minuteago = '6.3';
$baro60minuteago = '1014.7';
$rain60minuteago = '0.0';
$VPsolar60minuteago = '1';
$VPuv60minuteago = '0.1';

$temp75minuteago = '11.2';  
$wind75minuteago = '1.9';
$gust75minuteago = '3.7';
$dir75minuteago = ' SE';
$hum75minuteago = '72';
$dew75minuteago = '6.3';
$baro75minuteago = '1014.3';
$rain75minuteago = '0.0';
$VPsolar75minuteago = '1';
$VPuv75minuteago = '0.0';

$temp90minuteago = '11.2';  
$wind90minuteago = '3.7';
$gust90minuteago = '5.6';
$dir90minuteago = 'ESE';
$hum90minuteago = '72';
$dew90minuteago = '6.3';
$baro90minuteago = '1014.2';
$rain90minuteago = '0.0';
$VPsolar90minuteago = '0';
$VPuv90minuteago = '0.0';

$temp105minuteago = '11.2';  
$wind105minuteago = '3.7';
$gust105minuteago = '5.6';
$dir105minuteago = ' SE';
$hum105minuteago = '73';
$dew105minuteago = '6.5';
$baro105minuteago = '1013.8';
$rain105minuteago = '0.0';
$VPsolar105minuteago = '0';
$VPuv105minuteago = '0.0';

$temp120minuteago = '11.1';  
$wind120minuteago = '3.7';
$gust120minuteago = '5.6';
$dir120minuteago = ' SE';
$hum120minuteago = '74';
$dew120minuteago = '6.6';
$baro120minuteago = '1013.7';
$rain120minuteago = '0.0';
$VPsolar120minuteago = '0';
$VPuv120minuteago = '0.0';

$VPet = '0.0';
$VPetmonth = '19.5';
$dateoflastrainalways = '17/1/2021';
$highbaro = '1015.0 ';
$highbarot = '7:46 AM';
$highsolaryest = '452.0';
$highsolaryesttime = '2:44 PM';
$hourrn = '0.0';
$maxaverageyest = '11.5';
$maxaverageyestt = '12:42 AM';
$maxavgdirectionletter = ' SE';
$maxavgspd = '5.4';
$maxavgspdt = '4:43 AM';
$maxbaroyest = '1012.2 ';
$maxbaroyestt = '11:49 PM';
$maxgstdirectionletter = 'SSW';
$maxgustyest = '22.2 kmh   N';
$maxgustyestt = '3:47 AM';
$mcoldestdayonrecord = '12.6C  on: 16 Jan 2021';
$mcoldestnightonrecord = '9.2C  on: 16 Jan 2021';
$minchillyest = '11.8';
$minchillyestt = '11:46 PM';
$minwindch = '9.8';
$minwindcht = '2:03 AM';
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
$windruntodatethismonth = '1162.97 km';
$windruntodatethisyear = '1162.97 km';
$windruntoday = '15.05';
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
$cloudheightfeet =  '2010';	// Estimated cloud base height, feet, (based on dew point, and you height above sea  level...enter
$cloudheightmeters =  '613';	// Estimated cloud base height, metres, (based on dew point, and you height above sea

// end of stock testtags.txt

// ----------------------------------------------------------------------------------------------------
// begin mchallis tags added to testtags.txt for printable flyer
$maxgsthrtime = '7:38';        // time that the max gust last prior 1 hour occured
$minbaroyest  = '996.6 ';
$minbaroyestt = '4:19 AM';
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
$avwindlastimediate120 = '2.6'; // average wind speed
$currentmonthaveragerain = '---'; // average rain for current month
//
// version 5.00+ 
$avwindlastimediate15 = '2.8'; // average wind speed
$avwindlastimediate30 = '1.4'; // average wind speed
$todayhihumidex = '12.9'; //daily high humidex
$todaylohumidex = '10.0'; //Daily low Humidex
//Version 5.02
$dayornight = 'Day'; // Day or night flag

//Version 6.20
$tempchangelasthourfaren = '+0.7'; //For snow prediction
$abshum = '5.72'; //For snow prediction
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

$avtempjannow = '17.8';
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
$avtempjan = '17.8';//Average temperature for january from your data
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
$recordhighwindrun = '80.8';
$recorddailyrain = '11.0';
$recordhighrainmth = '32.1';
$recordrainrate = '8.3';
$recorddayswithrain = '4';
$recorddaysnorain = '9';
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
$recordhighwindrunday = '11';
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
$recorddaysnorainday = '26';
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
$yrecordhighwindrun = '80.8';
$yrecordhighwindrunmth = '1';
$yrecordhighwindrunday = '11';
$yrecordhighwindrunyr = '2021';
$yrecorddailyrain = '11.0';
$yrecordhighrainmth = '32.1';
$yrecordrainrate = '8.3';
$yrecorddayswithrain = '4';
$yrecorddaysnorain = '9';
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
$yrecorddaysnorainday = '26';
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
$mrecordhighwindrun = '80.8';
$mrecordhighwindrunmth = '1';
$mrecordhighwindrunday = '11';
$mrecordhighwindrunyr = '2021';
$mrecorddailyrain = '11.0';
$mrecordhighrainmth = '32.1';
$mrecordrainrate = '8.3';
$mrecorddayswithrain = '4';
$mrecorddaysnorain = '9';
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
$mrecorddaysnorainday = '26';
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
$firewi = '0.0'; // Fire Weather Index
$avtempweek = '20.4';    // Average Weekly Temp
$hddday = '2.3';        // Heating Degree for day
$hddmonth = '52.1';    // Heating Degree for month to date
$hddyear = '52.1';    // Heating Degree for year to date
$cddday = '0.0';        // Cooling Degree for day
$cddmonth = '37.9';    // Cooling Degree for month to date
$cddyear = '37.9';    // Cooling Degree for year to date
$minchillweek = '10.0';  // Minimum Wind Chill over past 7 days 
$maxheatweek = '35.0';  // Maximum Heat Index for the Week *** NEW IN V2.00
$airdensity = '1.24';  //air density
$solarnoon = '13:31'; // Solar noon
$changeinday = '-00:01:50';  // change in day length since yesterday
$etcurrentweek = '7.5'; // ET total for the last 7 days
$sunshinehourstodateday = '00:00';
$sunshinehourstodatemonth = '26:54';
$maxsolarfortime = '522';
$wetbulb = '9.3';
$lighteningcountlasthour = '0';
$lighteningcountlastminute = '0';
$lighteningcountlast5minutes = '0';
$lighteningcountlast12hour = '0';
$lighteningcountlast30minutes = '0';
$lighteningcountlasttime = '17:41:46 2021/15/01';
$lighteningcountmonth = '555';
$lighteningcountyear = '555';
$chandler = '2.3';
$maxdew = '9.5';
$maxdewt = '12:00 AM';
$mindew = '6.1';
$mindewt = '6:37 AM';
$maxdewyest = '18.9';
$maxdewyestt = '6:01 AM';
$mindewyest = '9.2';
$mindewyestt = '11:50 PM';
$stationname = 'IMELBO2077';
$raindifffromav = '---';
$raindifffromavyear = '32.1';
$gddmonth = '221.0';
$gddyear = '221.0';
$maxheat = '11.8';
$maxheatt = '12:00 AM'; 
$maxheatyest = '20.0';  
$yeartodateavtemp = '17.8'; 
$monthtodateavtemp = '17.8'; 
$maxchillyest = '20.0'; 
$monthtodatemaxgust = '27.8'; 
$monthtodateavspeed = '1.8'; // MTD average wind speed
$monthtodateavgust = '4.7'; //MTD average wind gust
$yeartodateavwind = '1.8'; // YTD average wind speed
$yeartodategstwind = '4.7'; // YTD avg wind gust
$lowbaro = '1012.2 ';
$lowbarot = '12:00 AM';
$monthtodatemaxbaro = '1028.8'; // MTD average wind speed
$monthtodateminbaro = '996.6'; //MTD average wind gust
$sunshinehourstodateyear = '26:54'; 
$sunshineyesterday = '00:35';
$avtempsincemidnight = '10.9';
$yesterdayavtemp = '16.0';
$avgspeedsincereset = '1.9';
$maxheatyestt = '12:54 AM';
$windrunyesterday = '42.58';
$currentwdet = '0.3';
$yesterdaywdet = '0.2';
$highhum = '92';
$highhumt = '3:16 AM';
$lowhum = '71';
$lowhumt = '6:37 AM';
$maxhumyest = '99';
$maxhumyestt = '9:13 AM';
$minhumyest = '73';
$minhumyestt = '12:50 AM';
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

$avtempjannow = '17.8';
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
