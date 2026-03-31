<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;


class FormController extends Controller
{
    // public function FormToPDF(Request $request) {
    //     // return view('displayForm', $request->all());

    //     //set Options
    //     $options = new Options();
    //     $options->set('isRemoteEnabled',true);
    //     $options->set('defaultFont','arial');

    //     //set PDF with the set options
    //     $pdf = new Dompdf($options);

    //     //capture the HTML from the blade View
    //     $html = view('displayForm',$request->all())->render();

    //     //lod html into pdf
    //     $pdf->loadHtml($html);

    //     //set up paper size
    //     $pdf->setPaper('A4','portrait');

    //     //render the PDF
    //     $pdf->render();

    //     //return the PDF
    //     return $pdf->stream("form-details.pdf",["attanchment" => true]);
    // }

    public function FormToPDF(Request $request) 
    {
        // Validate that custom_fields is an array
        $data = $request->validate([
            'custom_fields' => 'required|array',
            'custom_fields.*.label' => 'required|string',
            'custom_fields.*.value' => 'required|string',
        ]);

        $pdf = new \Dompdf\Dompdf();
        
        // Pass the array to the view
        $html = view('displayForm', ['fields' => $data['custom_fields']])->render();

        $pdf->loadHtml($html);
        $pdf->render();
        return $pdf->stream("custom-doc.pdf");
    }
}
