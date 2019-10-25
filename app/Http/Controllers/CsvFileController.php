<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\CsvExBjbs;
use App\Imports\CsvImBjbs;
use App\BjbsData;

use App\Exports\CsvExBjbsh2h;
use App\Imports\CsvImBjbsh2h;
use App\BjbsDatah2h;

use App\Exports\CsvExBri;
use App\Imports\CsvImBri;
use App\BriData;

use App\Exports\CsvExBris;
use App\Imports\CsvImBris;
use App\BrisData;

use App\Exports\CsvExBsm;
use App\Imports\CsvImBsm;
use App\BsmData;

use App\Exports\CsvExBtn;
use App\Imports\CsvImBtn;
use App\BtnData;


class CsvFileController extends Controller
{
    //BJBS
    public function csv_exbjbs()
    {
        return Excel::download(new CsvExBjbs, 'bjbs.csv');
    }
    public function csv_imbjbs()
    {
        Excel::import(new CsvImBjbs, request()->file('file'));
        return back();
    }

    //BJBSH2H
    public function csv_exbjbsh2h()
    {
        return Excel::download(new CsvExBjbsh2h, 'bjbsh2h.csv');
    }
    public function csv_imbjbsh2h()
    {
        Excel::import(new CsvImBjbsh2h, request()->file('file'));
        return back();
    }

    //BRI
    public function csv_exbri()
    {
        return Excel::download(new CsvExBri, 'bri.csv');
    }
    public function csv_imbri()
    {
        Excel::import(new CsvImBri, request()->file('file'));
        return back();
    }

    //BRIS
    public function csv_exbris()
    {
        return Excel::download(new CsvExBris, 'bris.csv');
    }
    public function csv_imbris()
    {
        Excel::import(new CsvImBris, request()->file('file'));
        return back();
    }
    
    //BSM
    public function csv_exbsm()
    {
        return Excel::download(new CsvExBsm, 'bsm.csv');
    }
    public function csv_imbsm()
    {
        Excel::import(new CsvImBsm, request()->file('file'));
        return back();
    }

    //BTN
    public function csv_exbtn()
    {
        return Excel::download(new CsvExBtn, 'btn.csv');
    }
    public function csv_imbtn()
    {
        Excel::import(new CsvImBtn, request()->file('file'));
        return back();
    }
}
