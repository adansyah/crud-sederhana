@extends('layouts.app')
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        @include('layouts.sidebar')
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <br>
            <div class="container-fluid">
                <h1 class="h3 mb-2  text-gray-800">Biodata</h1>
            </div>

            <div class="card-body">
                <div class="card shadow mb-4">
                    {{-- <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                    </div> --}}
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="cece.jpg"
                                alt="...">
                        </div>
                        <p>Perkenalkan nama saya Syahdan Mutahariq, Saya lahir di Cilacap 10 Mei 2004,saya kuliah di
                            STMIK Mardira Indonesia.Kalo mau tau lebih detail liat ke instagram saya yaa</p>
                        <a target="_blank" rel="nofollow" href="https://www.instagram.com/adansyah__/">Klik Disini
                            &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
