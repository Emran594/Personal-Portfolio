<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class ResumeController extends Controller
{
    public function downloadPDF()
    {
        $data = [
            'name' => 'Emran Sikder',
            'email' => 'emranhasans594@gmail.com',
            'phone' => '01632373626',
            // Add more resume-related data
        ];

        // Load the view and pass data to it
        $pdf = FacadePdf::loadView('public.resume', $data);

        // Download the generated PDF
        return $pdf->download('resume.pdf');
    }
}
