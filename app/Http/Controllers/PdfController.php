<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfGenerator()
    {
        $data = [
            'title' => 'Welcome to Coding Xpress',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('pdf', $data);

        return $pdf->download('CodingXpress..pdf');
    }
}
