<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PredictDiseaseCosts;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;


class PuserLevelController extends Controller
{
    //
    public function listdiseasecosts() {
        $user= Session::get('user');
        $diseasescosts = PredictDiseaseCosts::join('disease','projected_disease_costs.disease_id','=','disease.id')
            ->join('population_distribution','population_distribution.id','=','projected_disease_costs.distributions_id')
            ->join('facility','facility.id','=','projected_disease_costs.facility_id')
            ->select(['projected_disease_costs.year','facility.facility_name','population_distribution.age_group','disease.disease_name','projected_disease_costs.projected_population','projected_disease_costs.projected_salaries', 'projected_disease_costs.services_total_cost', 'projected_disease_costs.consultation_fee', 'projected_disease_costs.drugs_total_cost','projected_disease_costs.nhif_relief','projected_disease_costs.total_less_nhif','projected_disease_costs.total'])
            ->where('projected_disease_costs.user_id','=',$user)
            ->orderby('disease.disease_name');
        return Datatables::of($diseasescosts)->make();
    }
}
