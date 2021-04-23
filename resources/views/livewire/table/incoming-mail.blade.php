<div>
    <x-data-table :data="$data" :model="$incoming_mails">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('file_number')" role="button" href="#">
                    No. Berkas
                    @include('components.sort-icon', ['field' => 'file_number'])
                </a></th>
                <th><a wire:click.prevent="sortBy('sender')" role="button" href="#">
                    Pengirim
                    @include('components.sort-icon', ['field' => 'sender'])
                </a></th>
                <th><a wire:click.prevent="sortBy('subject')" role="button" href="#">
                    Perihal
                    @include('components.sort-icon', ['field' => 'subject'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($incoming_mails as $incoming_mail)
                <tr x-data="window.__controller.dataTableController({{ $incoming_mail->id }})">
                    <td>{{ $incoming_mail->id }}</td>
                    <td>{{ $incoming_mail->file_number }}</td>
                    <td>{{ $incoming_mail->sender }}</td>
                    <td>{{ $incoming_mail->subject }}</td>
                    <td>{{ $incoming_mail->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/surat-masuk/edit/{{ $incoming_mail->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="text-red-500 fa fa-16px fa-trash"></i></a>

                        <a role="button" href="{{ route('surat-masuk.print', $incoming_mail->id) }}" target="_blank" class="ml-3"><i class="text-green-500 fa fa-16px fa-print"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
