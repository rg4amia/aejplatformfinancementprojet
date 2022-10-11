<?php

namespace App\Http\Controllers\Backend\Admin\GuichetThree;

use App\Http\Controllers\Controller;
use App\Models\ProjetPromoteurThree;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GuichetThreeBackendController extends Controller
{
    public function index()
    {
        return view('backend.pages.admin.guichet-three.index');
    }

    public function getIndex(){
        $projet = ProjetPromoteurThree::all();

        return DataTables::of($projet)
            ->addColumn('checkbox', function ($model) {
                return '<input type="checkbox" id="'.$model->id.'" name="someCheckbox" onchange="setProjetCheck(this,'. $model->id .')"/>';
            })->addColumn('actions', function ($model) {
                $actions = '';
                $actions .='<div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown" aria-expanded="false">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                              <circle cx="12" cy="12" r="1"></circle>
                                              <circle cx="12" cy="5" r="1"></circle>
                                              <circle cx="12" cy="19" r="1"></circle>
                                          </svg>
                                    </button>';
                $actions .='<div class="dropdown-menu" style="">';
                $actions .='<a class="dropdown-item" data-toggle="modal" data-id="'.$model->id.'" data-backdrop="true" data-target="#detail">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                       <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                       <circle cx="12" cy="12" r="3"></circle>
                                   </svg>
                                    <span>Détail</span>
                                 </a>';
                $actions .='</div>';
                $actions .='</div>';
                return $actions;
            })
            ->editColumn('date', function ($model){
                return $model->updated_at;
            })
            ->editColumn('nom', function ($model){
                return $model->promoteur->nom .' '.$model->promoteur->prenoms;
            })
            ->editColumn('matricule_aej', function ($model){
                return $model->promoteur->matricule_aej;
            })
            ->editColumn('intituleprojet', function ($model){
                return $model->intituleprojet ;
            })
            ->editColumn('matriculeprojet', function ($model){
                return $model->matriculeprojet ;
            })
            ->editColumn('coutprojet', function ($model){
                return $model->coutprojet ;
            })
            ->rawColumns(['actions','checkbox'])
            ->make(true);
    }

    }
