@extends('layouts.main')

@section('title', 'Portofolio')

@section('content')
<div class="max-w-5xl mx-auto py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Sistem Kredit Motor</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <img src="{{ asset('img/kredit1.png') }}" alt="Form Pengajuan" class="rounded-lg shadow-lg">
        <img src="{{ asset('img/kredit2.png') }}" alt="Simulasi Cicilan" class="rounded-lg shadow-lg">
    </div>

    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-3">Fitur Unggulan</h2>
        <ul class="text-gray-700 list-disc pl-5 space-y-2">
            <li>Simulasi cicilan otomatis berdasarkan tenor & DP</li>
            <li>Form pengajuan user dengan validasi data lengkap</li>
            <li>Verifikasi data oleh Admin dan Marketing</li>
            <li>Laporan dapat diekspor ke Excel</li>
        </ul>
    </div>

    <div class="mt-8">
        <a href="https://your-live-demo.com" target="_blank"
           class="inline-block bg-indigo-600 text-white px-5 py-2 rounded hover:bg-indigo-700 transition">Coba Demo</a>
    </div>
</div>
@endsection
