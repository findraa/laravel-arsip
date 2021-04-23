<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Surat Keluar') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Surat Keluar</a></div>
            <div class="breadcrumb-item"><a href="{{ route('surat-keluar') }}">Data Surat Keluar</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="outgoing_mail" :model="$outgoing_mail" />
    </div>
</x-app-layout>
