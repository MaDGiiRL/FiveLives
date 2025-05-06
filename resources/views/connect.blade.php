<x-layout title="Come Connettersi - FiveLives" meta-description="FiveLives è un server RPG online basato su GTA V.">
    <style>
        body {
            background-image: url(/images/howto.png);
            background-size: cover;
            color: white;
            background-attachment: fixed;
        }

        .section-title {
            font-size: 4rem;
            font-weight: 700;
        }

        .section-title .highlight {
            color: #ffc107;
        }

        .section-subtitle {
            color: white;
            font-size: 20px
        }

        .step-card-1,
        .step-card-2,
        .step-card-3,
        .step-card-4 {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
            position: relative;
            border-bottom: 3px solid #ffc107
        }

        .step-card-1 {
            background-image:
                linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('/images/img1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .step-card-2 {
            background-image:
                linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('/images/img3.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
        }

        .step-card-3 {
            background-image:
                linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('/images/img2.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
        }

        .step-card-4 {
            background-image:
                linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('/images/img4.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
        }

        .step-text {
            color: white;
            padding: 20px;
            flex: 1;
        }

        .step-text h5 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #ffc107;
        }

        .step-number {
            color: #ffc107;
            font-weight: 900;
        }

        .step-action {
            padding: 20px;
        }
    </style>
    <x-navbar />
    <section class="container connect-section py-5">
        <div class="row justify-content-center">
            <h2 class="section-title text-center mb-2">
                <span class="highlight">COME CONNETTERSI</span> A FIVELIVES
            </h2>
            <p class="section-subtitle text-center mb-5">Qui sotto trovi le istruzioni per connetterti</p>

            <div class="col-10 step-card-1 mb-4 d-flex flex-column flex-md-row align-items-center justify-content-between p-3">
                <div class="step-text">
                    <h5><span class="step-number">1.</span> GRAND THEFT AUTO V</h5>
                    <ul>
                        <li>
                            Acquista il gioco da una piattaforma ufficiale.
                        </li>
                        <li>
                            Installa GTA V sul tuo computer.
                        </li>
                        <li>
                            Evita mod o trainer nell'installazione principale di GTA V. Potrebbero entrare in conflitto con FiveM.
                        </li>
                        <li>
                            Prendi nota della directory di installazione: ti servirà al primo avvio di FiveM.
                        </li>
                    </ul>
                    <p class="small text-yellow fw-bold">Non è necessario avviare GTA V tramite Steam/Rockstar. FiveM utilizza i file di gioco, ma funziona in un proprio ambiente multiplayer per il roleplay.</p>
                </div>
                <div class="step-action">
                    <a href="https://www.instant-gaming.com/?igr=fivelivesIT" class="btn yellow-button">Acquista</a>
                </div>
            </div>

            <div class="col-10 step-card-2 mb-4 d-flex flex-column flex-md-row align-items-center justify-content-between p-3">
                <div class="step-text">
                    <h5><span class="step-number">2.</span> FIVEM LAUNCHER</h5>
                    <ul>
                        <li>
                            Vai sul sito ufficiale di FiveM: <a href="https://fivem.net">https://fivem.net</a>
                        </li>
                        <li>
                            Clicca su "Download Client", accetta i termini e segui le istruzioni dell’installazione.
                        </li>
                        <li>
                            Assicurati di avere GTA V installato (FiveM ne ha bisogno).
                        </li>
                        <li>
                            Una volta installato, apri FiveM ed effettua l'accesso con il tuo account Rockstar Games.
                        </li>
                    </ul>
                </div>
                <div class="step-action">
                    <a href="https://fivem.net/" class="btn yellow-button">Scarica</a>
                </div>
            </div>

            <div class="col-10 step-card-3 mb-4 d-flex flex-column flex-md-row align-items-center justify-content-between p-3">
                <div class="step-text">
                    <h5><span class="step-number">3.</span> Unisciti al Discord e completa la Whitelist</h5>
                    <ul>
                        <li>
                            Entra nel nostro server Discord ufficiale per iniziare il processo di accesso.
                        </li>
                        <li>
                            Completa la verifica richiesta per accedere alle sezioni del server.
                        </li>
                        <li>
                            Segui le istruzioni nella sezione whitelist: ti verranno poste domande sul regolamento.
                        </li>
                        <li>
                            Una volta superata la whitelist, potrai accedere al server tramite FiveM.
                        </li>
                    </ul>
                </div>
                <div class="step-action">
                    <a href="https://discord.gg/kMhzry3nwt" class="btn yellow-button">Discord</a>
                </div>

            </div>

            <div class="col-10 step-card-4 mb-4 d-flex flex-column flex-md-row align-items-center justify-content-between p-3">
                <div class="step-text">
                    <h5><span class="step-number">4.</span> Unisciti alla Community di FiveLives</h5>
                    <ul>
                        <li>
                            Dopo la verifica, riconnettiti al server FiveLives tramite FiveM.
                        </li>
                        <li>
                            Ti verrà chiesto di creare il tuo personaggio (nome, aspetto, ecc.).
                        </li>
                        <li>
                            Rispetta le regole del roleplay — la maggior parte dei server richiede RP serio.
                        </li>
                        <li>
                            Goditi il mondo immersivo di FiveLives RP!
                        </li>
                    </ul>
                </div>
                <div class="step-action">
                    <a href="#" class="btn yellow-button">Regolamento</a>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
</x-layout>