<x-layout title="FiveLives" meta-description="FiveLives is an online rpg server based on GTA V.">
  <style>
    body {
      background-image: url('/images/BG_02 2.png');
      background-size: cover;
      background-attachment: fixed;
    }
  </style>
  <x-navbar />
  <div class="container-fluid text-white overflow-hidden">
    <div class="row flex-column-reverse flex-md-row">
      <!-- COLONNA SINISTRA: STEP -->
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center py-5">
        <div class="step-box bg-blur">
          <div class="step-title">STEP 1</div>
          <div class="step-heading">GTA V Legacy Edition</div>
          <div class="step-desc">Ti servirà una copia di GTA V <strong>Legacy Edition</strong> da qualsiasi launcher (es. Steam, Rockstar, ecc..)</div>
          <a href="https://www.instant-gaming.com/?igr=fivelivesIT" class="btn btn-outline-danger fs-4">Steam Download</a>
        </div>

        <div class="text-center arrow">↓</div>

        <div class="step-box bg-blur">
          <div class="step-title">STEP 2</div>
          <div class="step-heading">Scarica il laucher</div>
          <div class="step-desc">Scarica il laucher di FiveM ed entra nel server FiveLives.</div>
          <a href="https://fivem.net/" class="btn btn-outline-danger fs-4">Download</a>
        </div>

        <div class="text-center arrow">↓</div>

        <div class="step-box bg-blur">
          <div class="step-title">STEP 3</div>
          <div class="step-heading">Leggi il Regolamento</div>
          <div class="step-desc">Per essere preparat* a giocare leggi attentamente il nostro regolamento.</div>
          <button class="btn btn-outline-danger fs-4">Regolamento</button>
        </div>
      </div>

      <!-- COLONNA DESTRA: TITOLO + ABOUT -->
      <div class="col-12 col-md-6 d-flex flex-column justify-content-between py-5 px-md-5">
        <!-- Titolo in alto -->
        <div class="mb-4 text-start pt-5 pt-md-0 pt-lg-0">
          <div class="row align-items-center">
            <div class="col-3">
              <img src="/images/logo.png" class="logo-mobile" width="250">
            </div>
            <div class="col-9">
              <h1 class="fw-bold display-md-1 display-lg-1 display-2 text-white">BENVENUTI SU <span class="text-yellow">FIVELIVES</span></h1>
              <p class="lead text-light">La tua avventura su GTA RP parte da qui!</p>
            </div>
          </div>
        </div>

        <!-- Box About sticky in basso -->
        <div class="about-box bg-blur p-4 mt-md-0" data-aos="fade-left" data-aos-delay="500">

          <div class="intro-box bg-blur p-4 text-white">
            <h2 class="fw-bold">Cos'è <span class="text-yellow">FiveLives</span>?</h2>
            <p> <strong>FiveLives</strong> è un server di roleplay di nuova generazione basato su <em>Grand Theft Auto V</em>, progettato per offrire un’esperienza di gioco completamente immersiva, realistica e personalizzata. </p>
            <p> Con un’economia attentamente bilanciata, regole strutturate e una community attiva e accogliente, FiveLives è il punto di riferimento per i giocatori in cerca di narrazioni profonde e scelte significative. </p>
            <p> Che tu sogni di diventare un magnate degli affari, un agente delle forze dell’ordine, un paramedico o di vivere al limite, qui troverai la tua strada. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <x-footer />
</x-layout>