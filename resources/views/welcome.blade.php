@extends('layouts.template')

@section('title', 'Perpustakaan')

@section('content')
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Perpustakaan Online</h1>
            <p class="lead my-3">Hallo kawan selamat datang di perpustakaan online
            </p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Daftar Buku</strong>
                    <h3 class="mb-0">Daftar Buku</h3>
                    <div class="mb-1 text-muted">Berikut adalah daftar buku yang tersedia</div>
                    <p class="card-text mb-auto">silahkan klik link di dibawah ini</p>
                    <a href="index" class="stretched-link">LIHAT DAFTAR BUKU</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                            fill="#eceeef" dy=".3em">Hallo ^^</text>
                    </svg>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Add Book</strong>
                    <h3 class="mb-0">Tambah Buku</h3>
                    <div class="mb-1 text-muted">Tambah Buku</div>
                    <p class="mb-auto">Klik link dibawah ini untuk menambahkan buku</p>
                    <a href="input" class="stretched-link">TAMBAH BUKU</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                            fill="#eceeef" dy=".3em">Tambah Buku?</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
