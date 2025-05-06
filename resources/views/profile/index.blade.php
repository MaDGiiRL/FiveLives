<x-layout title="Account - FiveLives">
    <style>
        body {
            background-image: url(/images/bgprofile.jpg);
            background-size: cover;
            color: white;
            background-attachment: fixed;
            background-position: center;
        }
    </style>

    <x-sidebar />

    <div class="content py-3">
        <div class="container">
            <div class="row p-md-5 p-lg-5 p-2 justify-content-center">
                <div class="col-md-10 col-color-cumstom bg-blur  px-5">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- Account Settings -->
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row align-items-center justify-content-around mb-4">
                                <div class="col-9">
                                    <h2 class="display-3"><span class="text-yellow">A</span>ccount</h2>
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
                                        <label class="form-label small">LinkedIn</label>
                                        <input type="text" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/your_profile" value="{{ old('linkedin', Auth::user()->linkedin) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small">WhatsApp</label>
                                        <input type="text" name="whatsapp" class="form-control" placeholder="https://wa.me/39xxxxxxxxxx" value="{{ old('whatsapp', Auth::user()->whatsapp) }}">
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

                            <!-- <hr>

                        <section id="delete" class="content-section mt-2 pt-3">
                        <h2 class="display-3"><span class="text-yellow">Delete</span> Your Account</h2>
                            <p class="small text-yellow fw-bold"><span class="text-danger">Warning:</span> This action is permanent. All your data will be removed.</p>
                            <button type="submit" class="btn btn-danger" id="btnDeleteProfile" user_id="{{ Auth::id() }}" csrf_token="{{ csrf_token() }}">Delete Account</button>
                        </section> -->
                        </div>

                        <!-- Characters Panel -->
                        <div class="tab-pane fade" id="v-pills-char" role="tabpanel" aria-labelledby="v-pills-char-tab">
                            <h2 class="display-3">Your <span class="text-yellow">Characters</span></h2>
                            <p>Manage or view the characters linked to your account.</p>
                            <div class="card bg-dark border-light my-3 p-3">
                                <p class="text-muted">Character system coming soon...</p>
                            </div>
                            {{-- Puoi qui inserire una lista di personaggi con ciclo @foreach, se disponibile --}}
                        </div>

                        <!-- Lorem Ipsum Panel -->
                        <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
                            <h2 class="display-3"><span class="text-yellow">Lorem</span> Ipsum</h2>
                            <p>This section is under construction. Stay tuned for updates!</p>
                            <div class="card bg-dark border-light my-3 p-3">
                                <p class="text-muted">No content available yet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>