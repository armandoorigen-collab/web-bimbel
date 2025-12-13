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
    <div class="mainbar">
        <div class="card text-bg-dark" >
            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                <h5 class="card-title">SELAMAT DATANG</h5>
                <p class="card-text">DI BIMBINGAN BELAJAR</p>
                <p class="card-text"><small>ONMAI</small></p>
            </div>
            <img src="{{ asset('landing-page/assets/img/img7.png') }}" class="card-img" style="height: 450px; object-fit: cover;" alt="...">
           
        </div>
    </div>
</div>


@endsection