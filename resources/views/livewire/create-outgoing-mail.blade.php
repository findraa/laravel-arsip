<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Surat Keluar') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data surat keluar.') }}
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 form-group sm:col-span-5">
                <x-jet-label for="file_number" value="{{ __('Nomor Berkas') }}" />
                <x-jet-input id="file_number" type="text" class="block w-full mt-1 shadow-none form-control" wire:model.defer="outgoing_mail.file_number" />
                <x-jet-input-error for="outgoing_mail.file_number" class="mt-2" />
            </div>

            <div class="col-span-6 form-group sm:col-span-5">
                <x-jet-label for="sender" value="{{ __('Pengirim') }}" />
                <x-jet-input id="sender" type="text" class="block w-full mt-1 shadow-none form-control" wire:model.defer="outgoing_mail.sender" />
                <x-jet-input-error for="outgoing_mail.sender" class="mt-2" />
            </div>

            <div class="col-span-6 form-group sm:col-span-5">
                <x-jet-label for="letter_date" value="{{ __('Tanggal Surat') }}" />
                <x-jet-input id="letter_date" type="text" class="block w-full mt-1 shadow-none form-control" autocomplete="off" wire:model.defer="outgoing_mail.letter_date" onchange="this.dispatchEvent(new InputEvent('input'))" />
                <x-jet-input-error for="outgoing_mail.letter_date" class="mt-2" />
            </div>

            <div class="col-span-6 form-group sm:col-span-5">
                <x-jet-label for="letter_number" value="{{ __('Nomor Surat') }}" />
                <x-jet-input id="letter_number" type="text" class="block w-full mt-1 shadow-none form-control" wire:model.defer="outgoing_mail.letter_number" />
                <x-jet-input-error for="outgoing_mail.letter_number" class="mt-2" />
            </div>

            @if ($action == "createOutgoingMail")
            <div class="col-span-6 form-group sm:col-span-5">
                <x-jet-label for="subject" value="{{ __('Perihal') }}" />
                <x-jet-input id="subject" type="text" class="block w-full mt-1 shadow-none form-control" wire:model.defer="outgoing_mail.subject" />
                <x-jet-input-error for="outgoing_mail.subject" class="mt-2" />
            </div>
            @endif
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>

@section('js')
<script>
// new Pikaday({ field: document.getElementById('letter_date') })

 var picker = new Pikaday({
    field: document.getElementById('letter_date'),
    format: 'D/M/YYYY',
    toString(date, format) {
        // you should do formatting based on the passed format,
        // but we will just return 'D/M/YYYY' for simplicity
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();
        return `${day}/${month}/${year}`;
    },
    parse(dateString, format) {
        // dateString is the result of `toString` method
        const parts = dateString.split('/');
        const day = parseInt(parts[0], 10);
        const month = parseInt(parts[1], 10) - 1;
        const year = parseInt(parts[2], 10);
        return new Date(year, month, day);
    }
});

</script>
@endsection
