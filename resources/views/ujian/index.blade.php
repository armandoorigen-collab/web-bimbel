@extends('belajar')

@section('content')

<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>
        <div class="user">
            <img src="assets/imgs/customer01.jpg" alt="">
            </div>
    </div>
    <div class="ujian">
        <div class="tabelujian mt-1 pt-1">
            <div class="tabelHead">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            <div class="table-header">
                <a href="{{ route('ujian.create') }}" class="btn-tambah">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
            <div class="search-box">
                <input type="text" placeholder="masukkan kata kunci dan enter...">
                <i class="fas fa-search"></i>
            </div>
        </div>
         <!-- TABLE -->
    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Ujian</th>
                    <th>Pelajaran</th>
                    <th>Kelas</th>
                    <th>Jumlah Soal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ujians as $ujian)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ujian->nama_ujian }}</td>
                    <td>{{ $ujian->mapel }}</td>
                    <td>{{ $ujian->kelas }}</td>
                    <td>{{ $ujian->jumlah_soal ?? 0 }}</td>
                    <td class="aksi">
                        <a href="{{ route('ujian.show', $ujian) }}" class="btn-add"><i class="fas fa-plus"></i></a>
                        <a href="" class="btn-edit"><i class="fas fa-pen"></i></a>
                        <a href="" class="btn-hapus"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- PAGINATION -->
        <div class="pagination">
            <button>&laquo; Previous</button>
            <span class="active">1</span>
            <button>Next &raquo;</button>
        </div>
    </div>
    </div>
</div>       
@endsection

