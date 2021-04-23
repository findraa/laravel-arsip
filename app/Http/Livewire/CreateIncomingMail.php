<?php

namespace App\Http\Livewire;

use App\Models\IncomingMail;
use Livewire\Component;

class CreateIncomingMail extends Component
{
    public $incoming_mail;
    public $incomingMailId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updateIncomingMail") ? [
            'incoming_mail.file_number' => 'required|string|unique:incoming_mails,file_number,' . $this->incomingMailId
        ] : [
            'incoming_mail.description' => 'required|string',
        ];

        return array_merge([
            'incoming_mail.file_number' => 'required|string|unique:incoming_mails,file_number',
            'incoming_mail.sender' => 'required|string',
            'incoming_mail.letter_date' => 'required|string',
            'incoming_mail.letter_number' => 'required|string',
            'incoming_mail.subject' => 'required|string',
            'incoming_mail.datetime' => 'required|string',

        ], $rules);
    }

    public function createIncomingMail()
    {
        $this->resetErrorBag();
        $this->validate();

         $user = auth()->user();

        if ( !is_null($user) ) {
            $this->incoming_mail['user_id'] = $user->id;
        }

        IncomingMail::create($this->incoming_mail);

        $this->emit('saved');
        $this->reset('incoming_mail');
    }

    public function updateIncomingMail()
    {
        $this->resetErrorBag();
        $this->validate();

        IncomingMail::query()
            ->where('id', $this->incomingMailId)
            ->update($this->incoming_mail);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!!$this->incomingMailId) {
            $incoming_mail = IncomingMail::find($this->incomingMailId);

            $this->incoming_mail = [
                "file_number" => $incoming_mail->file_number,
                "sender" => $incoming_mail->sender,
                "letter_date" => $incoming_mail->letter_date,
                "letter_number" => $incoming_mail->letter_number,
                "subject" => $incoming_mail->subject,
                "datetime" => $incoming_mail->datetime,
                "description" => $incoming_mail->description,
            ];
        }

        $this->button = create_button($this->action, "IncomingMail");
    }

    public function render()
    {
        return view('livewire.create-incoming-mail');
    }
}
