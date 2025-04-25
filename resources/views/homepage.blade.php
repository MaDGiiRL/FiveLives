<x-layout title="FiveLives" meta-description="FiveLives is an online rpg server based on GTA V.">
  <style>
    body {
      background-image: url('/images/BG_02 2.png');
      background-size: cover;
      background-attachment: fixed;
    }
  </style>

  <div class="container-fluid text-white overflow-hidden">
    <div class="row flex-column-reverse flex-md-row">
      <!-- COLONNA SINISTRA: STEP -->
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center py-5">
        <div class="step-box bg-blur">
          <div class="step-title">STEP 1</div>
          <div class="step-heading">Register an Account</div>
          <div class="step-desc">You’ll need an official copy of the game Grand Theft Auto V.</div>
          <button class="btn btn-outline-danger fs-4">REGISTRATION</button>
        </div>

        <div class="text-center arrow">↓</div>

        <div class="step-box bg-blur">
          <div class="step-title">STEP 2</div>
          <div class="step-heading">Download the Launcher</div>
          <div class="step-desc">You’ll need our launcher to play on the server.</div>
          <button class="btn btn-outline-danger fs-4">DOWNLOAD</button>
        </div>

        <div class="text-center arrow">↓</div>

        <div class="step-box bg-blur">
          <div class="step-title">STEP 3</div>
          <div class="step-heading">Read Server Rules</div>
          <div class="step-desc">To be able to work on our server you need to know.</div>
          <button class="btn btn-outline-danger fs-4">READ RULES</button>
        </div>
      </div>

      <!-- COLONNA DESTRA: TITOLO + ABOUT -->
      <div class="col-12 col-md-6 d-flex flex-column justify-content-between py-5 px-md-5">
        <!-- Titolo in alto -->
        <div class="mb-4 text-start pt-5 pt-md-0 pt-lg-0">
          <div class="row">
            <div class="col-3">
              <img src="/images/logo.png" width="250">
            </div>
            <div class="col-9">
              <h1 class="fw-bold display-1 text-white">WELCOME TO <span class="text-yellow">FIVELIVES</span></h1>
              <p class="lead text-light">Your adventure in GTA V RP starts here.</p>
            </div>
          </div>
        </div>

        <!-- Box About sticky in basso -->
        <div class="about-box bg-blur p-4 mt-md-0" data-aos="fade-left" data-aos-delay="500">

          <div class="intro-box bg-blur p-4 text-white">
            <h2 class="fw-bold">What is <span class="text-yellow">FiveLives</span>?</h2>
            <p>
              <strong>FiveLives</strong> is a next-generation roleplay server based on <em>Grand Theft Auto V</em>, designed to deliver a fully immersive, realistic, and custom-tailored gaming experience.
            </p>
            <p>
              With a carefully balanced economy, structured rules, and an active, welcoming community, FiveLives is the go-to place for players seeking deep storytelling and impactful choices.
            </p>
            <p>
              Whether you dream of becoming a business mogul, a law enforcement officer, a paramedic, or living life on the edge, you'll find your path here.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>