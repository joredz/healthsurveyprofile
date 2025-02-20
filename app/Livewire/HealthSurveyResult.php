<?php

namespace App\Livewire;

use App\Models\Bahay;
use App\Models\Barangay;
use App\Models\EstablishementongPangpagkaen;
use App\Models\HealthSurveyData;
use App\Models\LivelihoodList;
use App\Models\Lote;
use App\Models\Purok;
use App\Models\Religion;
use App\Models\UriBahay;
use App\Models\WaterRefillingStation;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HealthSurveyResult extends Component
{
    public $resultYear;
    public $resultBrgy;
    public $puroks = array();

    public function getNumberOfHouse($row ,$id) {
        switch ($row) {
            case "numberOfHouses":
                $count = HealthSurveyData::select('bilang_ng_bahay')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->groupBy('bilang_ng_bahay')->get();
                return count($count);
                break;
            case "numberOfHouseOnly":
                $count = HealthSurveyData::select('bilang_ng_bahay')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->whereNull('ulo_ng_pamilya')->get();
                return count($count);
                break;
            case "numberOfHousehold":
                $count = HealthSurveyData::select('bilang_ng_bahay')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->whereNotNull('ulo_ng_pamilya')->get();
                return count($count);
                break;
            default:
                return 0;
                break;
        }
    }

    public function render()
    {
        $barangay_list = Barangay::where('user_id', auth()->user()->id)->get();
        $livelihood_list = LivelihoodList::where('user_id', auth()->user()->id)->get();
        $religion_list = Religion::where('user_id', auth()->user()->id)->get();
        $uri_ng_bahay_list = UriBahay::where('user_id', auth()->user()->id)->get();
        $bahay_list = Bahay::where('user_id', auth()->user()->id)->get();
        $lote_list = Lote::where('user_id', auth()->user()->id)->get();
        $refilling_station_list = WaterRefillingStation::where('user_id', auth()->user()->id)->where('name', '!=', 'Others')->get();
        $establishment_list = EstablishementongPangpagkaen::where('user_id', auth()->user()->id)->where('name', '!=', 'Others')->get();
        $this->puroks = Purok::where('barangay_id', $this->resultBrgy)->get();
        return view('livewire.health-survey-result', [
            'barangayList' => $barangay_list, 
            'livelihoodList' => $livelihood_list, 
            'religionList' => $religion_list,
            'uriNgBahayList' => $uri_ng_bahay_list,
            'bahayList' => $bahay_list,
            'loteList' => $lote_list,
            'waterRefillingList' => $refilling_station_list,
            'establishmentList' => $establishment_list
        ]);
    }
}
