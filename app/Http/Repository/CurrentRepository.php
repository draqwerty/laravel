<?php

namespace App\Http\Repository;


class CurrentRepository
{
    public function getCurrentList()
    {
        include(app_path() . '/../public/wdisplay/wdtags.php');

        return [
            'temperature' => $temperature,
            'humidity' => $humidity,
            'feelslike' => $feelslike,
            'apparenttempc' => $apparenttempc,
            'apparentsolartempc' => $apparentsolartempc,
            'avgspd' => $avgspd,
            'gstspd' => $gstspd,
            'dirdeg' => $dirdeg,
            'dirlabel' => $dirlabel,
            'baro' => $baro,
            'dayrn' => $dayrn,
            'burntime' => $burntime,
            'VPuv' => $VPuv,
            'timeofnextupdate' => $timeofnextupdate,
        ];
    }
}




?>
