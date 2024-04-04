<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
 
    public function chartsapex()
    {
        return view('dashboard.charts-apex');
    }
    public function extendedlightbox()
    {
        return view('dashboard.extended-lightbox');
    }
    public function formadvanced()
    {
        return view('dashboard.form-advanced');
    }
    public function layoutshorizontal()
    {
        return view('dashboard.layouts-horizontal');
    }
    public function mapsgoogle()
    {
        return view('dashboard.maps-google');
    }
    public function pages404()
    {
        return view('dashboard.pages-404');
    }
    public function tablesdatatable()
    {
        return view('dashboard.tables-datatable');
    }
    public function uialerts()
    {
        return view('dashboard.ui-alerts');
    }
}
