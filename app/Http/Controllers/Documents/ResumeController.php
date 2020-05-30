<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class ResumeController extends Controller
{
    public function index()
    {
        return view('documents.resume');
    }

    public function generateResumePDF()
    {
        $data = ['title' => 'Welcome to ItSolutionStuff.com'];
        $pdf = PDF::loadView('documents.myPDF', $data);
//        $pdf = PDF::loadView('documents.resume');

        return $pdf->download('resumeAndriiLav.pdf');
    }
}
