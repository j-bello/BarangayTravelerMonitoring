<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\Traveler;
use App\Models\Monitoring;
use App\Models\Certificate;

use Illuminate\Support\Facades\DB;



class PDFController extends Controller
{

    public $id;
    public function previewTraveler()
    {
        $travelers = Traveler::all();
        return view('previewTraveler', compact('travelers'));
    }
    public function generatePDFtraveler()
    {
        $travelers = Traveler::all();
        $pdf = PDF::loadView('previewTraveler', compact('travelers'))->setPaper('legal', 'landscape');
        return $pdf->download('travelers.pdf');
    }



    public function previewMonitoring()
    {
        $monitorings = Monitoring::all();
        return view('previewMonitoring', compact('monitorings'));
    }
    public function generatePDFMonitoring()
    {
        $monitorings = Monitoring::all();
        $pdf = PDF::loadView('previewMonitoring', compact('monitorings'))->setPaper('legal', 'landscape');
        return $pdf->download('travelers-monitorings.pdf');
    }

/*
    public function previewTravelerMonitoring()
    {
        $monitorings = Monitoring::all();
        return view('previewTravelerMonitoring', compact('monitorings'));
    }
    public function generatePDFTravelerMonitoring()
    {
        $monitorings = Monitoring::all();
        $pdf = PDF::loadView('previewTravelerMonitoring', compact('monitorings'))->setPaper('legal', 'landscape');
        return $pdf->download('traveler-monitoring.pdf');
    }
*/

public function certificate()
    {
       /* $monitorings = Monitoring::all();
        //return view('certificate', compact('monitoring'));
        $pdf = PDF::loadView('certificate', compact('monitorings'));
        return $pdf->download('certificate.pdf');

*/

        //$monitorings =DB::table('monitorings')
        //->get('id')
      //  $monitorings = DB::table('monitorings')
        //->find('id', $id)
       // ->where('result','Negative')
       // ->get();
        //return view('certificate', compact('monitoring'));




        $certificates =  Certificate::all();
       // $monitorings = Monitoring::where('id', $id)->get();
        $pdf = PDF::loadView('certificate', compact('certificates'));
        return $pdf->download('certificate.pdf');

    }
}
