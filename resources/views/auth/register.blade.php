<x-layout title="FiveLives - Register" meta-description="Register to FiveLives, the best platform for gamers. Join us now!">
    <style>
        body{
            background-image: url(/images/reverse.png);
            background-size: cover;
            background-position: center;;
            background-attachment: fixed;
        }
    </style>
    <div class="container custom-margin2">
        <div class="row justify-content-end p-2 mt-md-5">
            <div class="col-md-6 p-4 p-md-5 shadow-lg mt-5 mt-md-0 mt-lg-0 formLoginCustom bg-blur">
                <h3 class="text-center">🎮 Welcome to <span class="text-yellow">FiveLives</span>!</h3>
                <p class="text-center ">Register to step into your second life. Your adventure starts here!</p>
                <form method="POST" action="{{ route('register') }}" class="formRegister">
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
                                <label class="form-label small">Full Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                            </div>
                            <div class="my-3 text-center">
                                <button type="submit" class="btn yellow-button w-100 fs-5">Register</button>
                            </div>
                        </form>
                
                <p class="text-center mt-4">Do you have an account? <a class="" href="{{route('login')}}">Log in to continue.</a></p>
            </div>
        </div>
    </div>
</x-layout>