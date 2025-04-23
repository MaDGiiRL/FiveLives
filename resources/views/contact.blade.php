<x-layout title="Contact Us - FiveLives" meta-description="FiveLives is an online rpg server based on GTA V.">
    <style>
        body {
            background-image: url(/images/bg-contact.png);
            background-size: cover;
            color: white;
            background-attachment: fixed;
        }

        .contact-card {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .icon {
            color: #0d6efd;
            margin-right: 10px;
        }

        .section-subtitle {
            color: white;
            font-size: 20px
        }

        .sparkle-wrapper {
            position: relative;
            display: inline-block;
            overflow: hidden;
            border-radius: 30px
        }

        .sparkle-img {
            display: block;
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out;

        }

        .sparkle-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0) 100%);
            transform: skewX(-25deg);
        }

        .sparkle-wrapper:hover::before {
            animation: sparkle 0.8s ease-in-out;
        }

        @keyframes sparkle {
            0% {
                left: -75%;
            }

            100% {
                left: 125%;
            }
        }


        .sparkle-button {
            position: relative;
            display: inline-block;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            border: none;
            font-weight: bold;
            font-size: 18px;
            background-color: #ffc107;
            color: black;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .sparkle-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 0.6) 50%,
                    rgba(255, 255, 255, 0) 100%);
            transform: skewX(-25deg);
            z-index: 1;
        }

        .sparkle-button:hover::before {
            animation: sparkle 0.8s ease-in-out;
        }

        .sparkle-button:hover {
            transform: scale(1.03);

        }

        @keyframes sparkle {
            0% {
                left: -75%;
            }

            100% {
                left: 125%;
            }
        }
    </style>

    <div class="container py-5 mb-5 mt-5">
        <div class="row justify-content-center mb-5 p-2">
            <div class="col-lg-11 mt-5">
                <div class="row contact-card px-5 p-5 shadow-lg bg-blur">
                    <div class="col-md-5 text-center mt-3 mt-md-0 mt-lg-0 order-md-first order-lg-firsto order-last">
                        <div class="sparkle-wrapper my-5">
                            <a href="#"><img src="/images/1.png" class="rounded-5 sparkle-img"></a>
                        </div>
                        <div class="sparkle-wrapper mb-5">
                            <a href="#"><img src="/images/2.png" class="rounded-5 sparkle-img"></a>
                        </div>
                        <div class="sparkle-wrapper">
                            <a href="#"><img src="/images/3.png" class="rounded-5 sparkle-img"></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h1 class="display-1 fw-bold">CONTACT <span class="text-yellow">US</span></h1>
                        <p class="section-subtitle">We’d love to hear from you. Please use the form below to send us your message or inquiry, and we’ll respond promptly.</p>

                        <form action="" method="POST" class="contactForm">
                            @csrf
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <input type="text" name="full_name" placeholder="Full name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email address" required>
                                </div>
                            </div>
                            <div class="mt-3">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="mt-3">
                                <textarea name="message" rows="4" placeholder="Message" required></textarea>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn yellow-button w-100">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>