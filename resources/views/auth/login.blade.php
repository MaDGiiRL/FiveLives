<x-layout title="FiveLives - Login" meta-description="Login to FiveLives, the best platform for gamers. Join us now!">
    <style>
        body{
            background-image: url(/images//wallpapersden.com_gta-5-mods_4096x1748.jpg);
            background-size: cover;
            background-position: center;;
            background-attachment: fixed;
        }
    </style>
    <div class="container custom-margin2">
        <div class="row justify-content-start p-2 mt-md-5">
            <div class="col-md-6 p-4 p-md-5 shadow-lg mt-5 mt-md-0 mt-lg-0 formLoginCustom bg-blur">
                <h3 class="text-center">🎮 Welcome back to <span class="text-yellow">FiveLives</span>!</h3>
                <p class="text-center ">Your adventure awaits, let's dive back in!</p>
                <form method="POST" action="{{ route('login') }}" class="formLogin">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li><i class="bi bi-exclamation-circle"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label small">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="my-3 text-center">
                        <button type="submit" class="btn yellow-button w-100 fs-5">Login</button>
                    </div>
                </form>
                <!-- <p class="text-center mt-4">Do you forgot your password? <a class="" href="{{ route('password.request') }}">Recover Password</a></p> -->
                <p class="text-center mt-4">Don't have an account? <a class="" href="{{route('register')}}">Sign up now and join the adventure!</a></p>
            </div>
        </div>
    </div>
</x-layout>