@extends('layouts.page')

@section('content')
<h1 class="heading"> <span> Layanan </span> IT </h1>
    <h1 class="behaestex"><span>BEHAESTEX</span></h1>


    <div class="box-container">

        <div class="box">
            <a href="{{('file/Form_peminjaman_inventaris.pdf')}}" download="Form Peminjaman Inventaris">
            <img src="{{('images/ikon1.png')}}" alt="">
            <h3>Peminjaman Inventaris</h3>
            </a>
        </div>


        <div class="box">
        <a href="{{('file/Form_revisi_data.pdf')}}"download="Form Pengajuan Revisi Data">
            <img src="{{('images/ikon2.png')}}" alt="">
            <h3>Pengajuan Revisi Data</h3>
        </a>
        </div>

        <div class="box">
        <a href="{{('file/FRM_PENGAJUAN_PEMBUATAN_MODIFIKASI_PROGRAM.pdf')}}" download="Form Pengajuan Pembuatan Modifikasi Program">
            <img src="{{('images/ikon4.png')}}" alt="">
            <h3>Pengajuan Akses Program</h3>
            </a>
        </div>

        <div class="box">
        <a href="https://bit.ly/zoom-btx" target="_blank">
            <img src="{{('images/ikon3.png')}}" alt="">
            <h3>Sewa Zoom</h3>
            </a>
        </div>

        <div class="box">
        <a href="{{('file/Form_permintaan_internet.pdf')}}" download="Form Permintaan Akses Internet">
            <img src="{{('images/ikon5.png')}}" alt="">
            <h3>Pengajuan Akses Internet</h3>
            </a>
        </div>

        <div class="box">
        <a href="https://helpdesk.behaestex.co.id/">
            <img src="{{('images/ikon6.png')}}" alt="">
            <h3>Helpdesk</h3>
            </a>
        </div>

    </div>
@endsection
