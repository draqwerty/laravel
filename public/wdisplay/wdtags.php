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
$time =  '10:00 AM';	// current time
$date =  '18/2/2021';	// current date
$sunrise =  '6:52 am';	// sun rise time (make sure you have the correct lat/lon
// 		            in view/sun moon)
$time_minute =  '00';	// Current minute
$time_hour =  '10';	// Current hour
$date_day =  '18';	// Current day
$date_month =  '02';	// Current month
$date_year =  '2021';	// Current year
$monthname =  'February';	// Current month name
$dayname =  'Thursday';	// Current day name
$sunset =  '8:13 pm';	// sunset time
$moonrisedate =  '17/02/21';	// moon rise date
$moonrise =  '11:50 am';	// moon rise time
$moonsetdate =  '17/02/21';	// moon set date
$moonset =  '11:12 pm';	// moon set time
$moonage =  'Moon age: 5 days,18 hours,21 minutes,33%';	// current age of the moon (days since new moon)
$moonphase =  '33%';	// Moon phase %
$moonphasename = 'Waxing Crescent Moon'; // 10.36z addition
$marchequinox =  '09:38 UTC 20 March 2021';	// March equinox date
$junesolstice =  '03:33 UTC 21 June 2021';	// June solstice date
$sepequinox =  '19:22 UTC 22 September 2021';	// September equinox date
$decsolstice =  '16:00 UTC 21 December 2021';	// December solstice date
$moonperihel =  '17:15 UTC 3 January 2022';	// Next Moon perihel date
$moonaphel =  '02:08 UTC 5 July 2021';	// Next moon perihel date
$moonperigee =  '05:15 UTC 2 March 2021';	// Next moon perigee date
$moonapogee =  '10:22 UTC 18 February 2021';	// Next moon apogee date
$newmoon =  '19:06 UTC 11 February 2021';	// Date/time of the next/last new moon
$nextnewmoon =  '10:22 UTC 13 March 2021';	// Date/time of the next new moon for next month
$firstquarter =  '18:48 UTC 19 February 2021';	// Date/time of the next/last first quarter moon
$lastquarter =  '01:31 UTC 6 March 2021';	// Date/time of the next/last last quarter moon
$fullmoon =  '08:18 UTC 27 February 2021';	// Date/time of the next/last full moon
$fullmoondate =  '27 February 2021';	// Date of the next/last full moon (date only)
$suneclipse =  '04 December 2021 7:16 pm 4%';	// Next sun eclipse
$mooneclipse =  '26 May 2021 9:19 pm 101%';	// Next moon eclipse date
$easterdate =  '4 April 2021';	// Next easter date
$chinesenewyear =  '12 February 2021 ()';	// Chinese new year
$hoursofpossibledaylight =  '13:21';	// Total hours/minutes of possible daylight for today
//
$weatherreport =  'Clear';	// current weather conditions from selected METAR
$stationaltitude =  '266';	// Station altitude, feet, as set in the units setup
// this under setup)
$stationlatitude =  '-37:00:41';	// Latitude (from the sun moon rise/set setup)
$stationlongitude =  '-145:21:19';	// Longtitude (from the sun moon rise/set setup)
$windowsuptime = '6 Days 16 Hours 49 Minutes 55 Seconds'; // uptime for windows on weather pc
$freememory = '16.35GB'; // amount of free memory on the pc
$Startimedate = '12:06:55 PM 17/02/2021'; // Time/date WD was started

/*
$NOAAEvent = 'NO CURRENT ADVISORIES'; // NOAA Watch/Warning/Advisory
$noaawarningraw = '---'; // NOAA RAW watch/warning/advisory
*/

$wdversion = '10.37S' . '-(b' . '122' . ')';	// Weather Display version number you are running
$wdversiononly = '10.37S';
$wdbuild   = '122';       // Weather Display build number you are running
$noaacityname =  'Belgrave';	// City name,from the noaa setup (in the av/ext setup)
// 
$timeofnextupdate =  '10:01 am';	// Time of next Update/Upload of the weather data to your web page (based on the web table update 
// 
$heatcolourword =  'Comfortable';	// How hot/cold it feels at the moment, based on the humidex, used with the conditionscolour.jpg 
// 
// 
// Temperature/Humidity
// ====================
// Current:
// --------
$temperature =  '22.5';	// temperature
$tempnodp = '22'; // temperature, no decimal place
$humidity =  '49';	// humidity
$dewpt =  '11.2';	// dew point
$maxtemp =  '22.6';	// today's maximum temperature
$maxtempt =  '9:54 AM';	// time this occurred
$mintemp =  '16.9';	// today's minimum temperature
$mintempt =  '3:35 AM';	// time this occurred
$feelslike =  '25';	// Shows heat index or humidex or windchill (if less than 16oC)

$heati =  '25.0';	// current heat index
$heatinodp =  '25';	// current heat index,no decimal place
$windch =  '22.5';	// current wind-chill
$windchnodp =  '23';	// current wind-chill, no decimal place
$humidexfaren =  '75.9';	// Humidex value in oF
$humidexcelsius =  '24.4';	// Humidex value in oC

$apparenttemp =  '21.4';	// Apparent temperature
$apparentsolartemp =  '27.0';	// Apparent temperature in the sun (you need a solar sensor)
$apparenttempc =  '21.4';	// Apparent temperature, °C
$apparentsolartempc =  '27.0';	// Apparent temperature in the sun, °C (you need a solar sensor)
$apparenttempf =  '70.4';	// Apparent temperature, °F
$apparentsolartempf =  '80.6';	// Apparent temperature in the sun, °F (you need a solar sensor)
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
$tempchangehour =  '+1.3';	// Temperature change in the last hour
$maxtempyest =  '30.2';	// Yesterday's max temperature
$maxtempyestt =  '3:00 PM';	// Time of yesterday's max temperature
$mintempyest =  '19.5';	// Yesterday's min temperature
$mintempyestt =  '9:01 AM';	// Time of yesterday's min temperature
// 
// 
// Trends:
// -------
$temp24hoursago =  '22.3';	// The temperature 24 hours ago
$humchangelasthour =  '-2';	// Humidity change last hour
$dewchangelasthour =  '+0.6';	// Dew point change last hour
$barochangelasthour =  '-0.2';	// Baro change last hour
// 
// Wind
// ====
// Current:
// --------
// 
$avgspd =  '11.1';	// average wind speed (current)
$gstspd =  '5.8';	// current/gust wind speed
$maxgst =  '30.2';	// today's maximum wind speed
$maxgstt =  '9:12 AM';	// time this occurred
$maxgsthr =  '30.2 kmh  N ';	// maximum gust last hour
$dirdeg =  '332';	// wind direction (degrees)
$dirlabel =  'NNW';	// wind direction (NNE etc)
//$maxgustlastimediatehourtime =  '9:12';	// 9:12  time that the max gust last prior 1 hour occured
$avwindlastimediate10 =  '8.7';	// Average wind for the last immediate 10 minute period
// $avdir10minute =  '350';	// average ten minute wind direction (degrees)

$beaufortnum ='2'; //Beaufort wind force number
$currbftspeed = '2 bft'; //Current Beaufort wind speed

$bftspeedtext = 'Light Breeze'; //Beaufort scale in text (i.e Fresh Breeze)
// 
// 
// Baromometer
// ===========
// Current:
// --------
$baro = '1022.2';  // current barometer
$baroinusa2dp =  '30.19 inches';	// Current barometer reading in inches, 2 decimal places only.
$trend =  '-0.2';	// amount of change in the last hour
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
$monthrn =  '12.600';	// rain so far this month
$yearrn =  '129.2';	// rain so far this year
$dayswithnorain =  '14';	// Consecutative days with no rain
$dayswithrain =  '5';	// Days with rain for the month
$dayswithrainyear =  '29';	// Days with rain for the year
$currentrainratehr =  '0.00';	// Current rain rate, mm/hr (or in./hr)
$maxrainrate =  '0.0';	// Max rain rate,for the day, mm/min (or in./min)
$maxrainratehr =  '0.000';	// Max rain rate,for the day, mm/hr (or in.mm)
$maxrainratetime =  '00:00 AM';	// Time that occurred
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
$VPsolar =  '509';	//  Solar energy number (W/M2)
$VPuv =  '7.0';	// UV number 
$highsolar =  '509';	// Daily high solar (for Davis VP and Grow stations)
$highuv =  '7.0';	// Daily high UV (for Davis VP stations)
$currentsolarpercent =  '83';	// Current solar percent for stations with a temperature solar sensor (like the dallas 1 wire)
$highsolartime =  '9:59 AM';	// Time that the daily high solar occured
$lowsolartime =  '12:00 AM';	// Time that the daily low solar occured
$highuvtime =  '9:58 AM';	// Time that the daily high UV occured
$lowuvtime =  '12:00 AM';	// Time that the daily low UV occured
$highuvyest =  '12.4';	// Yesterday's high UV
$highuvyesttime =  '2:17 PM';	// Time of yesterday's high UV
$burntime =  '16';	// Time (minutes) to burn (normal skin) at the current UV rate, from the Davis VP with UV sensor
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
$mrecordwindgust =  '35.2';	// All time record high wind gust
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
$snowheight = '128';	// Estimated height snow will fall at
$snowheightnew = '2864';	// Estimated height snow will fall at, new formula
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
$temp0minuteago = '22.5';  // ****this one is needed for all the others to work
$wind0minuteago = '7.4';
$gust0minuteago = '25.9';
$dir0minuteago = ' N ';
$hum0minuteago = '49';
$dew0minuteago = '11.2';
$baro0minuteago = '1022.2';
$rain0minuteago = '0.0';
$VPsolar0minuteago = '82';
$VPuv0minuteago = '7.0';

$temp5minuteago = '22.5';  
$wind5minuteago = '5.6';
$gust5minuteago = '18.5';
$dir5minuteago = ' N ';
$hum5minuteago = '50';
$dew5minuteago = '11.6';
$baro5minuteago = '1022.3';
$rain5minuteago = '0.0';
$VPsolar5minuteago = '81';
$VPuv5minuteago = '6.7';

$temp10minuteago = '22.3';  
$wind10minuteago = '5.6';
$gust10minuteago = '20.4';
$dir10minuteago = ' N ';
$hum10minuteago = '50';
$dew10minuteago = '11.4';
$baro10minuteago = '1022.3';
$rain10minuteago = '0.0';
$VPsolar10minuteago = '78';
$VPuv10minuteago = '6.3';

$temp15minuteago = '22.1';  
$wind15minuteago = '11.1';
$gust15minuteago = '18.5';
$dir15minuteago = ' N ';
$hum15minuteago = '49';
$dew15minuteago = '10.9';
$baro15minuteago = '1022.3';
$rain15minuteago = '0.0';
$VPsolar15minuteago = '72';
$VPuv15minuteago = '5.7';

$temp20minuteago = '21.9';  
$wind20minuteago = '3.7';
$gust20minuteago = '7.4';
$dir20minuteago = ' N ';
$hum20minuteago = '50';
$dew20minuteago = '11.0';
$baro20minuteago = '1022.4';
$rain20minuteago = '0.0';
$VPsolar20minuteago = '65';
$VPuv20minuteago = '5.0';

$temp30minuteago = '21.7';  
$wind30minuteago = '7.4';
$gust30minuteago = '18.5';
$dir30minuteago = ' NW';
$hum30minuteago = '50';
$dew30minuteago = '10.8';
$baro30minuteago = '1022.3';
$rain30minuteago = '0.0';
$VPsolar30minuteago = '36';
$VPuv30minuteago = '2.0';

$temp45minuteago = '21.4';  
$wind45minuteago = '13.0';
$gust45minuteago = '22.2';
$dir45minuteago = ' N ';
$hum45minuteago = '50';
$dew45minuteago = '10.5';
$baro45minuteago = '1022.4';
$rain45minuteago = '0.0';
$VPsolar45minuteago = '21';
$VPuv45minuteago = '1.2';

$temp60minuteago = '21.2';  
$wind60minuteago = '5.6';
$gust60minuteago = '11.1';
$dir60minuteago = 'NNW';
$hum60minuteago = '51';
$dew60minuteago = '10.7';
$baro60minuteago = '1022.4';
$rain60minuteago = '0.0';
$VPsolar60minuteago = '11';
$VPuv60minuteago = '0.6';

$temp75minuteago = '21.0';  
$wind75minuteago = '5.6';
$gust75minuteago = '14.8';
$dir75minuteago = 'WNW';
$hum75minuteago = '51';
$dew75minuteago = '10.5';
$baro75minuteago = '1022.3';
$rain75minuteago = '0.0';
$VPsolar75minuteago = '14';
$VPuv75minuteago = '0.6';

$temp90minuteago = '20.9';  
$wind90minuteago = '1.9';
$gust90minuteago = '9.3';
$dir90minuteago = 'NNW';
$hum90minuteago = '53';
$dew90minuteago = '11.0';
$baro90minuteago = '1022.0';
$rain90minuteago = '0.0';
$VPsolar90minuteago = '14';
$VPuv90minuteago = '0.5';

$temp105minuteago = '20.8';  
$wind105minuteago = '3.7';
$gust105minuteago = '5.6';
$dir105minuteago = ' NE';
$hum105minuteago = '53';
$dew105minuteago = '10.9';
$baro105minuteago = '1021.9';
$rain105minuteago = '0.0';
$VPsolar105minuteago = '28';
$VPuv105minuteago = '0.9';

$temp120minuteago = '20.6';  
$wind120minuteago = '3.7';
$gust120minuteago = '24.1';
$dir120minuteago = ' N ';
$hum120minuteago = '53';
$dew120minuteago = '10.7';
$baro120minuteago = '1022.0';
$rain120minuteago = '0.0';
$VPsolar120minuteago = '19';
$VPuv120minuteago = '0.4';

$VPet = '0.0';
$VPetmonth = '39.9';
$dateoflastrainalways = '5/2/2021';
$highbaro = '1022.4 ';
$highbarot = '8:54 AM';
$highsolaryest = '1444.0';
$highsolaryesttime = '1:35 PM';
$hourrn = '0.0';
$maxaverageyest = '9.3';
$maxaverageyestt = '11:50 AM';
$maxavgdirectionletter = 'NNE';
$maxavgspd = '13.3';
$maxavgspdt = '9:15 AM';
$maxbaroyest = '1022.4 ';
$maxbaroyestt = '9:35 AM';
$maxgstdirectionletter = '  N';
$maxgustyest = '20.4 kmh SSE';
$maxgustyestt = '6:33 PM';
$mcoldestdayonrecord = '14.1C  on: 08 Feb 2021';
$mcoldestnightonrecord = '12.1C  on: 14 Feb 2021';
$minchillyest = '19.5';
$minchillyestt = '9:01 AM';
$minwindch = '16.9';
$minwindcht = '3:35 AM';
$mrecordhighavwindday = '5';
$mrecordhighavwindmonth = '2';
$mrecordhighavwindyear = '2021';
$mrecordhighbaro = '1022.4';
$mrecordhighbaroday = '18';
$mrecordhighbaromonth = '2';
$mrecordhighbaroyear = '2021';
$mrecordhighgustmonth = '2';
$mrecordhighgustyear = '2021';
$mrecordhightemp = '30.2';
$mrecordhightempday = '17';
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
$mwarmestdayonrecord = '26.2C  on: 11 Feb 2021';
$mwarmestnightonrecord = '22.4C  on: 05 Feb 2021';
$raincurrentweek = '0.0';
$raintodatemonthago = '55.8';
$raintodateyearago = '0.0';
$timeoflastrainalways = ' 8:24 PM';
$windruntodatethismonth = '903.08 km';
$windruntodatethisyear = '2330.54 km';
$windruntoday = '34.97';
$yesterdaydaviset = '0.0';
$yrecordhighavwindday = '5';
$yrecordhighavwindmonth = '2';
$yrecordhighavwindyear = '2021';
$yrecordhighbaro = '1028.8';
$yrecordhighbaroday = '8';
$yrecordhighbaromonth = '1';
$yrecordhighbaroyear = '2021';
$yrecordhighgustday = '11';
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
$yrecordwindgust = '35.2';
$yrecordwindspeed = '19.1';
$daysTmaxGT30C = '1';
$daysTmaxGT25C = '7';
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
$cloudheightfeet =  '4635';	// Estimated cloud base height, feet, (based on dew point, and you height above sea  level...enter
$cloudheightmeters =  '1413';	// Estimated cloud base height, metres, (based on dew point, and you height above sea

// end of stock testtags.txt

// ----------------------------------------------------------------------------------------------------
// begin mchallis tags added to testtags.txt for printable flyer
$maxgsthrtime = '9:12';        // time that the max gust last prior 1 hour occured
$minbaroyest  = '1018.9 ';
$minbaroyestt = '5:26 PM';
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
$timeofdaygreeting = 'Morning';
$avwindlastimediate60 = '6.9'; // average wind speed
$avwindlastimediate120 = '5.7'; // average wind speed
$currentmonthaveragerain = '---'; // average rain for current month
//
// version 5.00+ 
$avwindlastimediate15 = '6.8'; // average wind speed
$avwindlastimediate30 = '6.5'; // average wind speed
$todayhihumidex = '25.4'; //daily high humidex
$todaylohumidex = '20.6'; //Daily low Humidex
//Version 5.02
$dayornight = 'Day'; // Day or night flag

//Version 6.20
$tempchangelasthourfaren = '+2.3'; //For snow prediction
$abshum = '6.29'; //For snow prediction
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
$avtempfebnow = '17.6';
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
$avtempfeb = '17.6';//Average temperature for february from your data
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
$avrainjan = '116.6';
$avrainfeb = '0.0';
$avrainmar = '0.0';
$avrainapr = '0.0';
$avrainmay = '0.0';
$avrainjun = '0.0';
$avrainjul = '0.0';
$avrainaug = '0.0';
$avrainsep = '0.0';
$avrainoct = '0.0';
$avrainnov = '0.0';
$avraindec = '2.3';

$avrainjannow = '116.6';
$avrainfebnow = '12.6';
$avrainmarnow = '---';
$avrainaprnow = '---';
$avrainmaynow = '---';
$avrainjunnow = '---';
$avrainjulnow = '---';
$avrainaugnow = '---';
$avrainsepnow = '---';
$avrainoctnow = '---';
$avrainnovnow = '---';
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
$recordwindgust = '35.2';
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
$recordhighgustday = '11';
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

$mrecordhighheatindex = '30.0';
$mrecordhighheatindexmonth = '2';
$mrecordhighheatindexday = '17';
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
$mrecordlowdew = '7.0';
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
$mrecordlowdewday = '8';
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
$mrecordhighuv = '17.2';
$mrecordhighuvmonth = '2';
$mrecordhighuvday = '14';
$mrecordhighuvyear = '2021';
// end of eastmasonville wxrecord.php tags
// ----------------------------------------------------------------------------------------------------
// other addons
$vpissstatus = 'Ok';      // VP ISS Status
$vpreception2 = '%vpreception2%'; // VP Current reception %  *** NEW IN V1.01
$vpconsolebattery = '%vpconsolebattery%'; // VP Console Battery Volts *** NEW IN V1.01
$firewi = '10.1'; // Fire Weather Index
$avtempweek = '18.6';    // Average Weekly Temp
$hddday = '0.0';        // Heating Degree for day
$hddmonth = '32.1';    // Heating Degree for month to date
$hddyear = '91.0';    // Heating Degree for year to date
$cddday = '0.5';        // Cooling Degree for day
$cddmonth = '19.2';    // Cooling Degree for month to date
$cddyear = '57.2';    // Cooling Degree for year to date
$minchillweek = '9.8';  // Minimum Wind Chill over past 7 days 
$maxheatweek = '30.2';  // Maximum Heat Index for the Week *** NEW IN V2.00
$airdensity = '1.20';  //air density
$solarnoon = '13:32'; // Solar noon
$changeinday = '-00:02:14';  // change in day length since yesterday
$etcurrentweek = '19.1'; // ET total for the last 7 days
$sunshinehourstodateday = '00:14';
$sunshinehourstodatemonth = '48:11';
$maxsolarfortime = '613';
$wetbulb = '16.2';
$lighteningcountlasthour = '0';
$lighteningcountlastminute = '0';
$lighteningcountlast5minutes = '0';
$lighteningcountlast12hour = '0';
$lighteningcountlast30minutes = '0';
$lighteningcountlasttime = '09:51:15 2021/05/02';
$lighteningcountmonth = '4';
$lighteningcountyear = '559';
$chandler = '20.6';
$maxdew = '16.0';
$maxdewt = '1:32 AM';
$mindew = '10.2';
$mindewt = '8:09 AM';
$maxdewyest = '17.5';
$maxdewyestt = '5:32 PM';
$mindewyest = '14.2';
$mindewyestt = '3:25 PM';
$stationname = 'IMELBO2077';
$raindifffromav = '---';
$raindifffromavyear = '129.2';
$gddmonth = '134.4';
$gddyear = '389.7';
$maxheat = '22.6';
$maxheatt = '9:54 AM'; 
$maxheatyest = '30.0';  
$yeartodateavtemp = '17.6'; 
$monthtodateavtemp = '17.6'; 
$maxchillyest = '30.2'; 
$monthtodatemaxgust = '35.2'; 
$monthtodateavspeed = '2.2'; // MTD average wind speed
$monthtodateavgust = '5.3'; //MTD average wind gust
$yeartodateavwind = '2.0'; // YTD average wind speed
$yeartodategstwind = '5.0'; // YTD avg wind gust
$lowbaro = '1019.8 ';
$lowbarot = '2:34 AM';
$monthtodatemaxbaro = '1022.4'; // MTD average wind speed
$monthtodateminbaro = '995.3'; //MTD average wind gust
$sunshinehourstodateyear = '79:30'; 
$sunshineyesterday = '06:04';
$avtempsincemidnight = '19.7';
$yesterdayavtemp = '21.9';
$avgspeedsincereset = '3.5';
$maxheatyestt = '3:43 PM';
$windrunyesterday = '34.50';
$currentwdet = '1.0';
$yesterdaywdet = '4.4';
$highhum = '90';
$highhumt = '3:12 AM';
$lowhum = '49';
$lowhumt = '9:37 AM';
$maxhumyest = '80';
$maxhumyestt = '9:12 AM';
$minhumyest = '39';
$minhumyestt = '3:07 PM';
$recordhightempjan = '36.4';
$recordlowtempjan = '7.8';
$recordhightempfeb = '30.2';
$recordlowtempfeb = '9.5';
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
$avtempfebnow = '17.6';
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
$avrainfebnow = '12.6';
$avrainmarnow = '---';
$avrainaprnow = '---';
$avrainmaynow = '---';
$avrainjunnow = '---';
$avrainjulnow = '---';
$avrainaugnow = '---';
$avrainsepnow = '---';
$avrainoctnow = '---';
$avrainnovnow = '---';
$avraindecnow = '2.3';

// end of other addons
// end of testtags.txt/testtags.php
?>
