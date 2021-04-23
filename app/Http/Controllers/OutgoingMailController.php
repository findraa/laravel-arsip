<?php

namespace App\Http\Controllers;

use App\Models\OutgoingMail;
use PDF;

class OutgoingMailController extends Controller
{
    public function index_view()
    {
        return view('pages.outgoing-mail.outgoing-mail-data', [
            'outgoing_mail' => OutgoingMail::class
        ]);
    }

    public function print($id)
    {
        $data = OutgoingMail::find($id);

        $pdf = PDF::loadView('pages.outgoing-mail.pdf', compact('data'));

        return $pdf->stream();
    }
}
