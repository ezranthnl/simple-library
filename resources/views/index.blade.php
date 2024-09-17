@extends('layouts.template')

@section('title', 'Daftar Buku')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Semua Buku</h1>
    </div>

    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah Halaman</th>
                    <th scope="col">Nama Penulis</th>
                    <th scope="col">Email Penulis</th>
                    <th scope="col">Tanggal Rilis</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->page_count }}</td>
                        <td>{{ $book->author_name }}</td>
                        <td>{{ $book->author_email }}</td>
                        <td>{{ $book->published_date }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Ga ada buku sama sekali vv</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
