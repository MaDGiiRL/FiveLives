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
    <div class="container">
        <div class="row p-md-5 p-lg-5 p-2 col-color-cumstom bg-blur mt-5">
            <div class="col-md-4">
                <div class="text-center mb-5">
                    <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : '/images/logo.png' }}"
                        class="img-fluid"
                        style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px;">
                </div>
                <h1 class="text-center">Hi,<span class="text-yellow"> {{ Auth::user()->name }}</span></h1>
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active text-start link-light mt-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                        <i class="bi bi-person-circle"></i> Account Settings
                    </button>
                    <button class="nav-link text-start link-light my-3" id="v-pills-char-tab" data-bs-toggle="pill" data-bs-target="#v-pills-char" type="button" role="tab" aria-controls="v-pills-char" aria-selected="false">
                        <i class="bi bi-people"></i> Characters
                    </button>
                    <button class="nav-link text-start link-light my-2" id="v-pills-wishlist-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wishlist" type="button" role="tab" aria-controls="v-pills-wishlist" aria-selected="false">
                        <i class="bi bi-heart-fill"></i> Lorem Ipsum
                    </button>
                </div>
            </div>

            <div class="col-md-8  px-5 border-custom">

                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Account Settings -->
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h2 class="display-3">Account <span class="text-yellow">Settings</span></h2>
                        <p>Update your account information below.</p>
                        <section id="contact-info" class="content-section active pb-3">
                            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="contactForm">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label small">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your email" value="{{ old('email', Auth::user()->email) }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small">Profile Picture</label>
                                    <input type="file" name="profile_image" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label small">First Name</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="First name" value="{{ old('first_name', Auth::user()->first_name) }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label small">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last name" value="{{ old('last_name', Auth::user()->last_name) }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label small">Date of Birth</label>
                                        <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date', Auth::user()->birth_date) }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label small">Gender</label>
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
                                        <label class="form-label small">City / Address</label>
                                        <input type="text" name="residence" class="form-control" placeholder="City or address" value="{{ old('residence', Auth::user()->residence) }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label small">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="+39 333 1234567" value="{{ old('phone', Auth::user()->phone) }}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small">Bio</label>
                                    <textarea name="bio" class="form-control" rows="4" placeholder="Write a short bio about yourself...">{{ old('bio', Auth::user()->bio) }}</textarea>
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

                                <button type="submit" class="btn btn-outline-danger">Save Profile</button>
                            </form>
                        </section>

                        <hr>

                        <section id="change-password" class="content-section mt-2 pt-3">
                            <h2 class="display-3"> <span class="text-yellow">Pass</span>word</h2>
                            <p>Update your current password below.</p>
                            <form action="{{ route('profile.updatePassword') }}" method="POST" class="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label small">Current Password</label>
                                        <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label small">New Password</label>
                                        <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label small">Confirm New Password</label>
                                        <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm New Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-danger mb-4">Save Password</button>
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
</x-layout>