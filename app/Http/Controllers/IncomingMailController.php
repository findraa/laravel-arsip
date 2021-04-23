<?php

namespace App\Http\Controllers;

use App\Models\IncomingMail;
use PDF;

class IncomingMailController extends Controller
{
    public function index_view()
    {
        return view('pages.incoming-mail.incoming-mail-data', [
            'incoming_mail' => IncomingMail::class
        ]);
    }

    public function print($id)
    {
        $data = IncomingMail::find($id);

        $pdf = PDF::loadView('pages.incoming-mail.pdf', compact('data'));

        return $pdf->stream();
    }
}
