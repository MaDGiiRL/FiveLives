    <!-- Offcanvas Sidebar per Mobile -->
    <div class="offcanvas offcanvas-start text-white col-color-cumstom bg-blur" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
        <div class="text-center mb-5">
            <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : '/images/logo.png' }}"
                class="img-fluid"
                style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px;">
        </div>
        <h1 class="text-center">Hi,<span class="text-yellow"> {{ Auth::user()->name }}</span></h1>
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active text-start link-light mt-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                <i class="bi bi-person"></i> Account
            </button>
            <button class="nav-link text-start link-light my-3" id="v-pills-char-tab" data-bs-toggle="pill" data-bs-target="#v-pills-char" type="button" role="tab" aria-controls="v-pills-char" aria-selected="false">
                <i class="bi bi-person-gear"></i> Impostazioni
            </button>
        </div>
    </div>


    <!-- Sidebar fissa per Desktop -->
    <div class="sidebar-fixed d-none d-md-block col-color-cumstom bg-blur text-white p-3">
        <h3 class="text-center mt-5">Hi,<span class="text-yellow"> {{ Auth::user()->name }}</span></h3>
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active text-start link-light mt-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                <i class="bi bi-person"></i> Account
            </button>
            <button class="nav-link text-start link-light my-3" id="v-pills-char-tab" data-bs-toggle="pill" data-bs-target="#v-pills-char" type="button" role="tab" aria-controls="v-pills-char" aria-selected="false">
                <i class="bi bi-person-gear"></i> Impostazioni
            </button>
        </div>
    </div>



    <nav class="navbar navbar-dark col-color-cumstom d-md-none">
        <div class="container-fluid">
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </nav>

    <style>
        .offcanvas {
            background-color: #333
        }

        .sidebar-fixed {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 300px;
            box-shadow: 0 0 15px rgb(0, 0, 0, 0.8);
            z-index: 1030;
            overflow-y: auto;
            height: 100%;
            border-radius: 0
        }

        .sidebar-fixed .nav-link {
            color: white;
            transition: all 0.3s;
            padding: 10px;
        }

        .sidebar-fixed .nav-link:hover {
            color: white;
            padding-left: 30px;
        }



        .offcanvas-bg {
            background-color: #181818;
        }

        @media (min-width: 768px) {
            .content {
                margin-left: 250px;
            }
        }

    </style>