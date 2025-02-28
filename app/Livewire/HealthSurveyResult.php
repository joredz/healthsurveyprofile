<?php

namespace App\Livewire;

use App\Exports\ResultDataExport;
use App\Models\Bahay;
use App\Models\Barangay;
use App\Models\EstablishementongPangpagkaen;
use App\Models\FamilyMemberData;
use App\Models\HealthSurveyData;
use App\Models\LivelihoodList;
use App\Models\Lote;
use App\Models\Purok;
use App\Models\Religion;
use App\Models\UriBahay;
use App\Models\WaterRefillingStation;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class HealthSurveyResult extends Component
{
    public $resultYear;
    public $resultBrgy;
    public $puroks = array();
    public $loading = false;

    public function getNumberOfHouse($row ,$id, $rl = null) {
        switch ($row) {
            case "numberOfHouses":
                $count = HealthSurveyData::select('bilang_ng_bahay')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->groupBy('bilang_ng_bahay')->get();
                return count($count);
                break;
            case "numberOfHouseOnly":
                $count = HealthSurveyData::select('bilang_ng_bahay')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->whereNull('ulo_ng_pamilya')->get();
                return count($count);
                break;
            case "numberOfHousehold":
                $count = HealthSurveyData::select('bilang_ng_bahay')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->whereNotNull('ulo_ng_pamilya')->get();
                return count($count);
                break;
            case "religion":
                $count = HealthSurveyData::select('religion_id')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('religion_id', $rl)->get();
                return count($count);
                break;
            case "uriNgBahay":
                $count = HealthSurveyData::select('uri_bahay_id')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('uri_bahay_id', $rl)->get();
                return count($count);
                break;
            case "bahay":
                $count = HealthSurveyData::select('bahay_id')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('bahay_id', $rl)->get();
                return count($count);
                break;
            case "lote":
                $count = HealthSurveyData::select('lote_id')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('lote_id', $rl)->get();
                return count($count);
                break;
            case "pagbubukod":
                $count = HealthSurveyData::select('pagbubukod')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('pagbubukod', $rl)->get();
                return count($count);
                break;
            case "pangongolekta":
                $count = HealthSurveyData::select('paraan_pangongolekta')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('paraan_pangongolekta', $rl)->get();
                return count($count);
                break;
            case "pagtatapon":
                $count = HealthSurveyData::select('paraan_pagtatapon')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('paraan_pagtatapon', $rl)->get();
                return count($count);
                break;
            case "watersource":
                $count = HealthSurveyData::select('water_source')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('water_source', $rl)->get();
                return count($count);
                break;
            case "waterrefilling":
                $count = HealthSurveyData::select('refilling_station')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('refilling_station', $rl)->get();
                return count($count);
                break;
            case "doubtfulsource":
                $count = HealthSurveyData::select('doubtful_source')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('doubtful_source', $rl)->get();
                return count($count);
                break;
            case "wastewater":
                $count = HealthSurveyData::select('waste_water')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('waste_water', $rl)->get();
                return count($count);
                break;
            case "establishment":
                $count = HealthSurveyData::select('est_pangpagkaen')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('est_pangpagkaen', $rl)->get();
                return count($count);
                break;
            default:
                return 0;
                break;
        }
    }

    public function getNumberOfLivelihood($row, $id) {
        $data = FamilyMemberData::select('work')->leftJoin('health_survey_data as hsd','hsd.id','health_survey_data_id')->where('hsd.barangay_id', $this->resultBrgy)->where('hsd.purok_id', $id)->where('hsd.year', $this->resultYear)->where('work', $row)->where('head_of_the_family', 1)->count();
        return $data;
    }

    public function income($id, $from, $to) {
        $count = HealthSurveyData::select('income_per_month')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear);
        if($to != "below") {
            $count = $count->where('income_per_month', '>=' ,$from);
        }
        if($to != "above") {
            $count = $count->where('income_per_month', '<=', $to);
        }
        return count($count->get());
    }

    public function familyPlanning($where, $id, $fplanning) {
        $count = HealthSurveyData::select('family_planning')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('family_planning', $fplanning)->where('family_planning_saan', $where)->count();
        return $count;
    }

    public function edadKasarian($id, $kasarian, $edad) {
        
        $count = FamilyMemberData::select('age','sex')->leftJoin('health_survey_data as hsd','hsd.id','health_survey_data_id')->where('hsd.barangay_id', $this->resultBrgy)->where('hsd.purok_id', $id)->where('hsd.year', $this->resultYear)->where('sex', $kasarian);
        if($edad == 81) {
            $count = $count->where('age', '>=', $edad);
        } elseif($edad == 0){
            $count = $count->where('age', '<', 1);
        } else {
            $count = $count->where('age', $edad);
        }
        return count($count->get());
    }

    public function uriNgPalikuran($id, $type) {
        switch($type) {
            case 1:
                $count = HealthSurveyData::select('uri_kubeta')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where(function($w) {
                    $w->where('uri_kubeta', 1);
                    $w->orWhere('uri_kubeta', 2);
                })->count();
                return $count;
                break;
            case 2:
                $count = HealthSurveyData::select('uri_kubeta')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('uri_kubeta', 3)->count();
                return $count;
                break;
            case 3:
                $count = HealthSurveyData::select('saan_tae')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('saan_tae', 1)->count();
                return $count;
                break;
            case 4:
                $count = HealthSurveyData::select('saan_tae')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('saan_tae', 2)->count();
                return $count;
                break;
            case 5:
                $count = HealthSurveyData::select('saan_tae')->where('barangay_id', $this->resultBrgy)->where('purok_id', $id)->where('year', $this->resultYear)->where('saan_tae', 3)->count();
                return $count;
                break;
            default:
                break;
        }
    }

    public function exportExcel()
    {
        return Excel::download(new ResultDataExport($this->resultYear,$this->resultBrgy), $this->resultYear.'_'.$this->resultBrgy.'_result.xlsx');
    }

    public function render()
    {
        $barangay_list = Barangay::where('user_id', auth()->user()->id)->get();
        $year_list = HealthSurveyData::select('year')->where('user_id', auth()->user()->id)->groupBy('year')->get();
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
            'establishmentList' => $establishment_list,
            'yearList' => $year_list
        ]);
    }
}
