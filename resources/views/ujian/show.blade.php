@extends('belajar')

@section('content')

<div class="main">
    <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
    <div class="ujian">
        <div class="tabelujian mt-1 pt-1">
            <div class="tabelHead">
              
            </div>
            
            <div class="table-header">
                <a href="{{ route('ujian.index') }}" class="btn-tambah">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
        <div class="search-box">
           
        </div>
    </div> 

    <!-- Card Detail Ujian -->
    <div class="card">
        <div class="card-header">
            <i class="fas fa-edit"></i> Detail Ujian
        </div>
        <div class="table-card">
            <table class="detail-table">
                <tr>
                    <td>Nama Ujian</td>
                    <td>{{ $ujian->nama_ujian }}</td>
                </tr>
                <tr>
                    <td>Mata Pelajaran</td>
                    <td>{{ $ujian->mapel }}</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>{{ $ujian->kelas }}</td>
                </tr>
                <tr>
                    <td>Jumlah Soal</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div> 
    <div class="table-header">
        <div class="btn-group">
        <a href="{{ route('soal.create', $ujian->id) }}" class="btn-tambah">
            <i class="fas fa-plus"></i> Tambah
        </a>
        <a href="" class="btn-import">
            <i class="fas fa-file-import"></i> Import
        </a>
        </div>
    </div>
    <div class="card-header">
            <i class="fas fa-edit"></i> Soal Ujian
        </div>

    <!-- TABLE soal ujian -->
    <div class="table-card">
        <table class="soal mb-0">
                <thead>
                    <tr>
                        <th style="width:60px">No.</th>
                        <th>Soal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                 <tbody>
        @forelse($soals as $no => $soal)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>
                <p><strong>{{ $soal->pertanyaan }}</strong></p>

                <div class="jawaban">
                    <div class="{{ $soal->jawaban_benar == 'A' ? 'benar' : '' }}">
                        A. {{ $soal->opsi_a }}
                    </div>
                    <div class="{{ $soal->jawaban_benar == 'B' ? 'benar' : '' }}">
                        B. {{ $soal->opsi_b }}
                    </div>
                    <div class="{{ $soal->jawaban_benar == 'C' ? 'benar' : '' }}">
                        C. {{ $soal->opsi_c }}
                    </div>
                    <div class="{{ $soal->jawaban_benar == 'D' ? 'benar' : '' }}">
                        D. {{ $soal->opsi_d }}
                    </div>
                </div>
            </td>
            <td class="aksi">
                <a href="" class="btn-edit">
                    <i class="fas fa-pen"></i>
                </a>

                <form action="" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn-hapus" onclick="return confirm('Yakin hapus soal?')">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" style="text-align:center;">
                <em>Belum ada soal</em>
            </td>
        </tr>
        @endforelse
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

@endsection