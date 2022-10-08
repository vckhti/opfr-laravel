<?php

namespace App\Http\Controllers\Printer;

use App\Http\Controllers\Controller;
use App\Models\CountryModel;
use App\Models\Models\PrinterModel;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    public function index() {
//        $printers = PrinterModel::take(5)->get();
        //dd($printers);

       return view('welcome');
     //return response()->json(PrinterModel::get(),200);
    }
}
