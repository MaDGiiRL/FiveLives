<x-layout title="How To Connect - FiveLives" meta-description="FiveLives is an online rpg server based on GTA V.">
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

        .step-card-1 {
            background-image:
                linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('/images/img1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
            position: relative;
            border-bottom: 3px solid #ffc107
        }


        .step-card-2 {
            background-image:
                linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('/images/img3.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
            position: relative;
            border-bottom: 3px solid #ffc107
        }


        .step-card-3 {
            background-image:
                linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('/images/img2.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
            position: relative;
            border-bottom: 3px solid #ffc107
        }

        .step-card-4 {
            background-image:
                linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
                url('/images/img4.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
            position: relative;
            border-bottom: 3px solid #ffc107
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

    <section class="container connect-section py-5">
        <div class="row justify-content-center">
            <h2 class="section-title text-center mb-2">
                <span class="highlight">HOW TO CONNECT</span> TO FIVELIVES
            </h2>
            <p class="section-subtitle text-center mb-5">Down below you can find instructions on how to connect</p>

            <div class="col-10 step-card-1 mb-4 d-flex flex-column flex-md-row align-items-center justify-content-between p-3">
                <div class="step-text">
                    <h5><span class="step-number">1.</span> GRAND THEFT AUTO V</h5>
                    <ul>
                        <li>
                            Buy the game from an official platform
                        </li>
                        <li>
                            Install GTA V on your computer.
                        </li>
                        <li>
                            Avoid mods or trainers in your main GTA V installation. They might conflict with FiveM.
                        </li>
                        <li>
                            Note your install directory: you’ll need it later when launching FiveM for the first time.
                        </li>
                    </ul>
                    <p class="small text-yellow fw-bold">You do not need to launch GTA V through Steam/Rockstar directly. FiveM will use the game files, but it runs its own environment for roleplay and multiplayer.</p>
                </div>
                <div class="step-action">
                    <a href="#" class="btn yellow-button">Buy</a>
                </div>
            </div>

            <div class="col-10 step-card-2 mb-4 d-flex flex-column flex-md-row align-items-center justify-content-between p-3">
                <div class="step-text">
                    <h5><span class="step-number">2.</span> FIVEM LAUNCHER</h5>
                    <ul>
                        <li>
                            Go to the official FiveM website: <a href="https://fivem.net">https://fivem.net</a>
                        </li>
                        <li>
                            Click on Download Client, accept the terms and follow the installer instructions.
                        </li>
                        <li>
                            Make sure you have Grand Theft Auto V installed (FiveM needs it).
                        </li>
                        <li>
                            Once installed, open FiveM and log in with your Rockstar Games account.
                        </li>
                    </ul>
                </div>
                <div class="step-action">
                    <a href="#" class="btn yellow-button">Download</a>
                </div>
            </div>

            <div class="col-10 step-card-3 mb-4 d-flex flex-column flex-md-row align-items-center justify-content-between p-3">
                <div class="step-text">
                    <h5><span class="step-number">3.</span> Find the Five Lives Server</h5>
                    <ul>
                        <li>
                            In the FiveM main menu, go to the "Servers" tab.
                        </li>
                        <li>
                            Use the search bar and type "Five Lives" (or the exact name of the server).
                        </li>
                        <li>
                            Look through the list and click on the correct server.
                        </li>
                        <li>
                            Click "Connect" to join. If it asks for a password or whitelist, follow the server's instructions (usually found on their Discord or website).
                        </li>
                    </ul>
                </div>
                <div class="step-action">
                    <a href="#" class="btn yellow-button">Connect</a>
                </div>
            </div>

            <div class="col-10 step-card-4 mb-4 d-flex flex-column flex-md-row align-items-center justify-content-between p-3">
                <div class="step-text">
                    <h5><span class="step-number">3.</span> Join the Five Lives Community</h5>
                    <ul>
                        <li>
                            After verification, reconnect to the Five Lives server through FiveM
                        </li>
                        <li>
                            You’ll be prompted to create your character (name, appearance, etc.).
                        </li>
                        <li>
                            Read and follow the roleplay rules — most servers enforce serious RP.
                        </li>
                        <li>
                            Enjoy the immersive world of Five Lives RP!
                        </li>
                    </ul>
                </div>
                <div class="step-action">
                    <a href="#" class="btn yellow-button">Play</a>
                </div>
            </div>

        </div>
    </section>

</x-layout>