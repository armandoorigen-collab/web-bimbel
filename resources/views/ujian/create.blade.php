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

    <div class="tambahsoal">
        <div class="soalsoal">
            <div class="cardHead">
                <h2>Tambah Ujian</h2>
            </div>
            
            <form action="{{ route('ujian.store') }}" method="POST" class="form-soal">
                @csrf
                <div class="form-group">
                    <label for="nama_ujian">Nama Ujian</label>
                    <input type="text" name="nama_ujian" id="nama_ujian" placeholder="Nama Ujian">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="mapel">Mata Pelajaran</label>
                        <select name="mapel" id="mapel">
                            <option>Matematika</option>
                            <option>Bahasa Indonesia</option>
                            <option>Kimia</option>
                            <option>Fisika</option>
                            <option>Biologi</option>
                            <option>Bahasa Inggris</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" id="kelas">
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>
                    </div>
                 </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="mapel">Acak soal</label>
                        <select name="acak_soal" id="mapel">
                            <option>Ya</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Acak Jawaban</label>
                        <select name="acak_jawaban" id="kelas">
                            <option>Ya</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="kelas">Tampilkan Hasil</label>
                    <select name="tampilkan_hasil" id="kelas">
                        <option>Ya</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn-save">Simpan</button>
                    <button type="reset" class="btn-reset">Reset</button>
                </div>

            </form>
        </div>
                
    </div>
        
</div>

@endsection