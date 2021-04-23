<?php

namespace App\Http\Livewire;

use App\Models\OutgoingMail;
use Livewire\Component;

class CreateOutgoingMail extends Component
{
    public $outgoing_mail;
    public $outgoingMailId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updateOutgoingMail") ? [
            'outgoing_mail.file_number' => 'required|string|unique:outgoing_mails,file_number,' . $this->outgoingMailId
        ] : [
            'outgoing_mail.subject' => 'required|string',
        ];

        return array_merge([
            'outgoing_mail.file_number' => 'required|string|unique:outgoing_mails,file_number',
            'outgoing_mail.sender' => 'required|string',
            'outgoing_mail.letter_date' => 'required|string',
            'outgoing_mail.letter_number' => 'required|string',
        ], $rules);
    }

    public function createOutgoingMail()
    {
        $this->resetErrorBag();
        $this->validate();

         $user = auth()->user();

        if ( !is_null($user) ) {
            $this->outgoing_mail['user_id'] = $user->id;
        }

        OutgoingMail::create($this->outgoing_mail);

        $this->emit('saved');
        $this->reset('outgoing_mail');
    }

    public function updateOutgoingMail()
    {
        $this->resetErrorBag();
        $this->validate();

        OutgoingMail::query()
            ->where('id', $this->outgoingMailId)
            ->update($this->outgoing_mail);

        $this->emit('saved');
    }

    public function mount()
    {
        if (!!$this->outgoingMailId) {
            $outgoing_mail = OutgoingMail::find($this->outgoingMailId);

            $this->outgoing_mail = [
                "file_number" => $outgoing_mail->file_number,
                "sender" => $outgoing_mail->sender,
                "letter_date" => $outgoing_mail->letter_date,
                "letter_number" => $outgoing_mail->letter_number,
                "subject" => $outgoing_mail->subject,
            ];
        }

        $this->button = create_button($this->action, "OutgoingMail");
    }

    public function render()
    {
        return view('livewire.create-outgoing-mail');
    }
}
