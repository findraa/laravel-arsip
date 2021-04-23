<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Surat Keluar') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Surat Keluar</a></div>
            <div class="breadcrumb-item"><a href="{{ route('surat-keluar') }}">Buat Surat Keluar</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-outgoing-mail action="createOutgoingMail" />
    </div>
</x-app-layout>
