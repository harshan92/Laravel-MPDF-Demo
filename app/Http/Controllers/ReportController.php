<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        $users=User::limit(1000)->get();
        return view('welcome',['users'=>$users]);
    }

    // this function opens the PDF in browser. If we want, we can downlod
    public function openPDF()
    {
        $users=User::limit(1000)->get();
        $data = [
            'users' => $users
          ];
          $pdf = PDF::loadView('usersPdf', $data);
          $pdf->allow_charset_conversion=true; 
          $pdf->charset_in='windows-1252';
          return $pdf->stream('document.pdf');
    }
    // this function directly downloads the PDF. 
    public function savePDF()
    {
        
    }
}
