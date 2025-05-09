<x-layout title="Account - FiveLives">
    <style>
        body {
            background-image: url(/images/bgprofile.jpg);
            background-size: cover;
            color: white;
            background-attachment: fixed;
            background-position: center;
        }

        img {
            max-width: 100%;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        /* About Me 
---------------------*/
        .about-text h3 {
            font-size: 45px;
            font-weight: 700;
            margin: 0 0 6px;
        }

        @media (max-width: 767px) {
            .about-text h3 {
                font-size: 35px;
            }
        }

        .about-text h6 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        @media (max-width: 767px) {
            .about-text h6 {
                font-size: 18px;
            }
        }

        .about-text p {
            font-size: 14px;
            max-width: 450px;
        }

        .about-text p mark {
            font-weight: 600;
            color: white;
        }

        .about-list {
            padding-top: 10px;
        }

        .about-list .media {
            padding: 5px 0;
        }

        .about-list label {
            color: white;
            font-weight: 600;
            width: 88px;
            margin: 0;
            position: relative;
        }


        .about-list p {
            margin: 0;
            font-size: 15px;
        }

        @media (max-width: 991px) {
            .about-avatar {
                margin-top: 30px;
            }
        }

        .dark-color {
            color: white;
        }


        .social-icons a {
            border-radius: 50px;
            color: #3f345f;
            display: inline-block;
            line-height: 52px;
            height: 50px;
            width: 50px;
            box-shadow: 0 5px 25px rgba(93, 70, 232, 0.15);
            margin: 15px 15px;
            font-size: 22px;
        }

        a {
            text-decoration: none !important;
            color: #3f345f;
            transition: all 0.3s ease 0s;
        }

        .slider-nav-item:before {
            position: absolute;
            content: "";
            height: calc(100% + 16px);
            width: calc(100% + 16px);
            top: -8px;
            left: -8px;
            border-radius: 50%;
            border: 1px solid rgba(132, 132, 164, 0.35);
            animation: 1.5s linear 0s normal none infinite focuse;
        }



        /*socil*/
        .slider-nav {
            display: flex;
        }

        .process-scetion .slider-nav-item {
            position: relative;
            flex-grow: 0;
            flex-shrink: 0;
            border-radius: 50%;
            text-align: center;
            background: #fff;
            cursor: pointer;
            transition: all .4s ease;

        }

        .slider-nav-item:before {
            position: absolute;
            content: "";
            height: calc(100% + 16px);
            width: calc(100% + 16px);
            top: -8px;
            left: -8px;
            border-radius: 50%;
            border: 1px solid rgba(132, 132, 164, 0.35);
            animation: 1.5s linear 0s normal none infinite focuse;
        }

        .process-scetion .slider-nav-item:nth-child(2) {
            color: #40beff;
        }

        .process-scetion .slider-nav-item:nth-child(3) {
            color: #311f9b;
        }

        .process-scetion .slider-nav-item:nth-child(4) {
            color: #ff9259;
        }

        .process-scetion .slider-nav-item:nth-child(5) {
            color: #38385f;
        }


        .process-scetion .slider-nav-item .ikon {
            font-size: 50px;
            line-height: 80px;
        }

        .shadow-img1 {
            background-image: url("../img/shadow.png");
            background-repeat: no-repeat;
            background-position: bottom;
        }

        .shadow-img2 {
            background-position: bottom;
            background-image: url("../img/shadow2.png");
            background-size: 100%;
            background-repeat: no-repeat;
        }


        @media only screen and (max-width: 300px) {
            .process-scetion .slider-nav-item {
                height: 30px;
                width: 30px;
            }
        }
    </style>

    <x-sidebar />

    <div class="content py-md-3 py-lg-3">
        <div class="container">
            <div class="row p-md-5 p-lg-5 p-1 justify-content-center">
                <div class="col-md-10 col-color-cumstom bg-blur px-md-5 px-lg-5">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- Account -->
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <section class="section about-section gray-bg" id="about">
                                <div class="container">
                                    <div class="row align-items-center justify-content-around mb-4">
                                        <div class="col-md-4 col-lg-4">
                                            <h2 class="display-3"><span class="text-yellow">A</span>ccount</h2>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="row">
                                                <div class="col-5">
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Logout <i class="bi bi-box-arrow-right"></i></button>
                                                    </form>

                                                </div>
                                                <div class="col-7">
                                                    <a href="{{route('homepage')}}" class="btn btn-outline-danger"> Torna Indietro</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center flex-row-reverse">
                                        <div class="col-lg-6">
                                            <section class="trial-block shadow3">
                                                <div class="about-text go-to">
                                                    <h3 class="dark-color">About Me</h3>
                                                    <p class="small">{{ $user->bio }}</p>
                                                    <div class="row about-list">
                                                        <div class="col-md-6">
                                                            <div class="media">
                                                                <label>Nat* il</label>
                                                                <p>{{ $user->birth_date }}</p>
                                                            </div>
                                                            <div class="media">
                                                                <label>Luogo</label>
                                                                <p>{{ $user->residence }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="media">
                                                                <label>E-mail</label>
                                                                <p>{{ $user->email }}</p>
                                                            </div>
                                                            <div class="media">
                                                                <label>Phone</label>
                                                                <p>{{ $user->phone }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="about-avatar">
                                                <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : '/images/logo.png' }}"
                                                    class="img-fluid"
                                                    style="width: 440px; height: 300px; object-fit: cover; border-radius: 10px;">
                                            </div>
                                            <div class="social-overlap process-scetion pt-3">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-10">
                                                            <div class="social-bar">
                                                                <div class="social-icons mb-3 iconpad text-center">
                                                                    <a href="{{ $user->facebook }}" title="facebook" class="slider-nav-item">
                                                                        <i class="bi bi-facebook"></i>
                                                                    </a>
                                                                    <a href="{{ $user->instagram }}" title="instagram" class="slider-nav-item">
                                                                        <i class="bi bi-instagram"></i>
                                                                    </a>

                                                                    <a href="{{ $user->twitch }}" title="twitch" class="slider-nav-item">
                                                                        <i class="bi bi-twitch"></i>
                                                                    </a>
                                                                    <a href="#" title="{{ $user->github }}" class="slider-nav-item">
                                                                        <i class="bi bi-github"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </section>
                        </div>

                        <!-- Settings -->
                        <div class="tab-pane fade" id="v-pills-char" role="tabpanel" aria-labelledby="v-pills-char-tab">
                            <div class="row align-items-center justify-content-around mb-4">
                                <div class="col-md-9 col-lg-9">
                                    <h2 class="display-3"><span class="text-yellow">I</span>mpostazioni</h2>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <a href="{{route('homepage')}}" class="btn btn-outline-danger"> Torna Indietro</a>
                                </div>
                            </div>
                            <p>Modifica le imposazioni del tuo profilo.</p>
                            <section id="contact-info" class="content-section active pb-3">
                                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="contactForm">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label small">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your email" value="{{ old('email', Auth::user()->email) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small">Immagine Profilo</label>
                                        <input type="file" name="profile_image" class="form-control">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small">Nome</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="Nome" value="{{ old('first_name', Auth::user()->first_name) }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small">Cognome</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Cognome" value="{{ old('last_name', Auth::user()->last_name) }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small">Data di Nascita</label>
                                            <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date', Auth::user()->birth_date) }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small">Genere</label>
                                            <select name="gender" class="form-control">
                                                <option value="">Select</option>
                                                <option value="male" @if(old('gender', Auth::user()->gender) == 'male') selected @endif>Male</option>
                                                <option value="female" @if(old('gender', Auth::user()->gender) == 'female') selected @endif>Female</option>
                                                <option value="other" @if(old('gender', Auth::user()->gender) == 'other') selected @endif>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small">Città / Indirizzo</label>
                                            <input type="text" name="residence" class="form-control" placeholder="Città o indirizzo" value="{{ old('residence', Auth::user()->residence) }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small">Telefono</label>
                                            <input type="text" name="phone" class="form-control" placeholder="+39 333 1234567" value="{{ old('phone', Auth::user()->phone) }}">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small">Bio</label>
                                        <textarea name="bio" class="form-control" rows="4" placeholder="Scrivi qualcosa su di te..">{{ old('bio', Auth::user()->bio) }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" placeholder="https://facebook.com/your_profile" value="{{ old('facebook', Auth::user()->facebook) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small">Instagram</label>
                                        <input type="text" name="instagram" class="form-control" placeholder="https://instagram.com/your_profile" value="{{ old('instagram', Auth::user()->instagram) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small">Twitch</label>
                                        <input type="text" name="twitch" class="form-control" placeholder="https://twitch.com/in/your_profile" value="{{ old('twitch', Auth::user()->twitch) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small">Github</label>
                                        <input type="text" name="github" class="form-control" placeholder="https://github.com/you_profile" value="{{ old('github', Auth::user()->github) }}">
                                    </div>

                                    <button type="submit" class="btn btn-outline-danger">Salva Profilo</button>
                                </form>
                            </section>
                            <hr>
                            <section id="change-password" class="content-section mt-2 pt-3">
                                <h2 class="display-3"> <span class="text-yellow">Pass</span>word</h2>
                                <p>Aggiorna la tua password.</p>
                                <form action="{{ route('profile.updatePassword') }}" method="POST" class="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label small">Password Corrente</label>
                                            <input type="password" name="current_password" class="form-control" placeholder="Password Corrente">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label small">Password Nuova</label>
                                            <input type="password" name="new_password" class="form-control" placeholder="Password Nuova">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label small">Conferma Password</label>
                                            <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm Password Nuova">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-danger mb-4">Salva Password</button>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>