<x-layout title="Account - FiveLives">
    <style>
        body {
            background-image: url(/images/bgprofile.jpg);
            background-size: cover;
            color: white;
            background-attachment: fixed;
            background-position: center;
        }

        .section {
            padding: 100px 0;
            position: relative;
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

        .social-icons {
            padding: 50px;
            text-align: center;
        }

        .social-icons a {
            color: #fff;
            line-height: 30px;
            font-size: 50px;
            margin: 0 5px;
            text-decoration: none;
            line-height: 30px;
            font-size: 50px;
            transition: all 200ms ease-in;
        }

        .social-icons a:hover {
            color: #E0B219;
        }
    </style>

    <x-sidebar />

    <div class="content py-3">
        <div class="container">
            <div class="row p-md-5 p-lg-5 p-2 justify-content-center">
                <div class="col-md-10 col-color-cumstom bg-blur px-5">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- Account -->
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <section class="section about-section gray-bg" id="about">
                                <div class="container">
                                    <div class="row align-items-center justify-content-around mb-4">
                                        <div class="col-9">
                                            <h2 class="display-3"><span class="text-yellow">A</span>ccount</h2>
                                        </div>
                                        <div class="col-3">
                                            <a href="{{route('homepage')}}" class="btn btn-outline-danger"> Torna Indietro</a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center flex-row-reverse">
                                        <div class="col-lg-6">
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
                                                    style="width: 440px; height: 400px; object-fit: cover; border-radius: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="counter">
                                        <div class="row">
                                            <div class="social-icons">
                                                <a href="#" title="facebook">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" title="instagram">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" title="youtube">
                                                    <i class="fa fa-youtube-square" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" title="twitch">
                                                    <i class="bi bi-twitch" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" title="github">
                                                    <i class="bi bi-github" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" title="discord">
                                                    <i class="bi bi-discord" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!-- Settings -->
                        <div class="tab-pane fade" id="v-pills-char" role="tabpanel" aria-labelledby="v-pills-char-tab">
                            <div class="row align-items-center justify-content-around mb-4">
                                <div class="col-9">
                                    <h2 class="display-3"><span class="text-yellow">I</span>mpostazioni</h2>
                                </div>
                                <div class="col-3">
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

                                    <div class="mb-3">
                                        <label class="form-label small">Discord</label>
                                        <input type="text" name="discord" class="form-control" placeholder="https://discord.com/you_profile" value="{{ old('discord', Auth::user()->discord) }}">
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