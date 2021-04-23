<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Surat Masuk') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Surat Masuk</a></div>
            <div class="breadcrumb-item"><a href="{{ route('surat-masuk') }}">Edit Surat Masuk</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-incoming-mail action="updateIncomingMail" :incomingMailId="request()->incomingMailId" />
    </div>
</x-app-layout>
