?php

namespace App\Http\Traits;
use App\External\Wdtags;

trait CurrentTrait
{
    public function CurrentTrait() {

        include(app_path() . '/External/Wdtags.php');

        $data = array(
            'title' => 'Welcome to Belgrave!',
            'temperature' => $temperature,
            'timeofnextupdate' => $timeofnextupdate,
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
            'VPuv' => $VPuv
        );

        return view('pages.index')->with(compact($data));
    }

}

?>
