        <div class="navigation">
            <ul>
                <li>
                    <a href="" class="brand">
                        <span class="icon">
                            <img src="{{ asset('landing-page/assets/img/img1.png') }}" alt="Logo ONMAI" class="logo">
                        </span>
                        <span class="title">BIMBEL ONMAI</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home')}}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">HOME</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard')}}">
                        <span class="icon">
                            <ion-icon name="stats-chart"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tryout') }}">
                        <span class="icon">
                            <ion-icon name="library-outline"></ion-icon>
                        </span>
                        <span class="title">Soal</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="book"></ion-icon>
                        </span>
                        <span class="title">Belajar Mandiri</span>
                    </a>
                </li>

                <li class="{{ request()->routeIs('ujian.*') ? 'active' : '' }}">
                    <a href="{{ route('ujian.index')}}">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Guru</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>