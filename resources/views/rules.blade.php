<x-layout title="Rules" meta-description="Rules for the game">
    <style>
        body {
            background-image: url(/images/bg_shop\ 1.png);
            background-size: cover;
            color: white;
            background-attachment: scroll;
        }

        .scroll-area {
            position: relative;
        }

        .scrollspy-nav a.active {
            font-weight: bold;
            color: #E0B219;
        }

        .scrollspy-nav a {
            color: white;
            text-decoration: none;
        }

        .nav-link {
            display: block;
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            font-size: 18px;
            font-weight: bolder;
            color: #E0B219;
            text-decoration: none;
            text-transform: uppercase;
            background: 0 0;
            border: 0;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: white;
            background-color: #E0B219;
        }

        .nav-link:focus,
        .nav-link:hover {
            color: white;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #E0B219;
            font-family: "Outfit", sans-serif;
        }

        .scrollspy-nav a.nav-link {
            font-size: 13px;
            text-transform: none;
            font-weight: 400;
        }


        
    </style>
    </head>
    <div data-bs-spy="scroll" data-bs-target="#scrollspy-main" data-bs-offset="0" tabindex="0" class="custom-margin" style="text-align: justify">
        <div class="container py-5">
            <h1 class="text-uppercase display-1 fw-bold text-white">Community <span class="text-yellow">Rules</span></h1>
            <p class="lead text-center mb-5">To ensure a safe, enjoyable, and respectful experience, we kindly ask all members to review and follow the server rules below.</p>
            <div class="row pt-3">
                <!-- Tabs a sinistra -->
                <div class="col-md-3 ">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#reg-generale" type="button">Lorem Ipsum</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#reg-roleplay" type="button">Lorem Ipsum</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#reg-azioni" type="button">Lorem Ipsum</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#reg-qor" type="button">Lorem Ipsum</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#reg-5vite" type="button">Lorem Ipsum</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#reg-ems" type="button">Lorem Ipsum</button>
                    </div>
                </div>

                <!-- Contenuti a destra -->
                <div class="col-md-9 pt-md-0 pt-lg-0 pt-5">
                    <div class="tab-content">
                        <!-- Regolamento Generale -->
                        <div class="tab-pane fade show active" id="reg-generale">
                            <div class="row">
                                <div class="col-md-3 scrollspy-nav ">
                                    <nav id="scrollspy-generale" class="nav flex-column">
                                        <a class="nav-link" href="#gen-1">Lorem Ipsum 1</a>
                                        <a class="nav-link" href="#gen-2">Lorem Ipsum 2 </a>
                                        <a class="nav-link" href="#gen-3">Lorem Ipsum 3</a>
                                    </nav>
                                </div>
                                <div class="col-md-9 scroll-area pt-md-0 pt-lg-0 pt-5" data-bs-spy="scroll" data-bs-target="#scrollspy-generale" data-bs-offset="0" tabindex="0">
                                    <h4 id="gen-1">Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit voluptas inventore sed reprehenderit voluptate doloribus expedita mollitia dolores exercitationem, eos nisi quos possimus explicabo dignissimos, repudiandae temporibus aut, ducimus adipisci. Alias, nisi delectus tenetur quisquam unde dolorum quidem, expedita, voluptate sequi odio rem consectetur exercitationem voluptas commodi. Commodi vitae aperiam, officiis quibusdam eveniet debitis laborum ratione ducimus, omnis veritatis eaque magnam harum iste est dolores porro cum nobis ipsam voluptatem distinctio. Reprehenderit adipisci soluta nam obcaecati. Quod sed ea accusamus debitis eveniet nihil est nostrum laborum cum, numquam error, quas ex voluptatem neque, fugiat facilis tenetur eum itaque! Labore itaque velit, voluptatem reprehenderit quia ad quasi cum sit animi ut veniam omnis sapiente, molestiae nobis saepe aspernatur reiciendis officia. Dolor assumenda vero exercitationem explicabo dolore quaerat autem. Fugiat recusandae excepturi minima ullam veritatis animi dolor, beatae numquam est? Necessitatibus eveniet dolore, doloribus provident enim saepe assumenda a quo maxime. Eos.</p>


                                    <h4 id="gen-2">Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit voluptas inventore sed reprehenderit voluptate doloribus expedita mollitia dolores exercitationem, eos nisi quos possimus explicabo dignissimos, repudiandae temporibus aut, ducimus adipisci. Alias, nisi delectus tenetur quisquam unde dolorum quidem, expedita, voluptate sequi odio rem consectetur exercitationem voluptas commodi. Commodi vitae aperiam, officiis quibusdam eveniet debitis laborum ratione ducimus, omnis veritatis eaque magnam harum iste est dolores porro cum nobis ipsam voluptatem distinctio. Reprehenderit adipisci soluta nam obcaecati. Quod sed ea accusamus debitis eveniet nihil est nostrum laborum cum, numquam error, quas ex voluptatem neque, fugiat facilis tenetur eum itaque! Labore itaque velit, voluptatem reprehenderit quia ad quasi cum sit animi ut veniam omnis sapiente, molestiae nobis saepe aspernatur reiciendis officia. Dolor assumenda vero exercitationem explicabo dolore quaerat autem. Fugiat recusandae excepturi minima ullam veritatis animi dolor, beatae numquam est? Necessitatibus eveniet dolore, doloribus provident enim saepe assumenda a quo maxime. Eos.</p>

                                    <h4 id="gen-3">Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit voluptas inventore sed reprehenderit voluptate doloribus expedita mollitia dolores exercitationem, eos nisi quos possimus explicabo dignissimos, repudiandae temporibus aut, ducimus adipisci. Alias, nisi delectus tenetur quisquam unde dolorum quidem, expedita, voluptate sequi odio rem consectetur exercitationem voluptas commodi. Commodi vitae aperiam, officiis quibusdam eveniet debitis laborum ratione ducimus, omnis veritatis eaque magnam harum iste est dolores porro cum nobis ipsam voluptatem distinctio. Reprehenderit adipisci soluta nam obcaecati. Quod sed ea accusamus debitis eveniet nihil est nostrum laborum cum, numquam error, quas ex voluptatem neque, fugiat facilis tenetur eum itaque! Labore itaque velit, voluptatem reprehenderit quia ad quasi cum sit animi ut veniam omnis sapiente, molestiae nobis saepe aspernatur reiciendis officia. Dolor assumenda vero exercitationem explicabo dolore quaerat autem. Fugiat recusandae excepturi minima ullam veritatis animi dolor, beatae numquam est? Necessitatibus eveniet dolore, doloribus provident enim saepe assumenda a quo maxime. Eos.</p>

                                </div>
                            </div>
                        </div>

                        <!-- Roleplay -->
                        <div class="tab-pane fade" id="reg-roleplay">
                            <div class="row">
                                <div class="col-md-3 scrollspy-nav">
                                    <nav id="scrollspy-roleplay" class="nav flex-column">
                                        <a class="nav-link" href="#rp-1">Lorem Ipsum</a>
                                        <a class="nav-link" href="#rp-2">Lorem Ipsum</a>
                                    </nav>
                                </div>
                                <div class="col-md-9 scroll-area" data-bs-spy="scroll" data-bs-target="#scrollspy-roleplay" data-bs-offset="0" tabindex="0">
                                    <h4 id="rp-1">Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                                    <h4 id="rp-2">Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                                </div>
                            </div>
                        </div>

                        <!-- Azioni -->
                        <div class="tab-pane fade" id="reg-azioni">
                            <div class="scroll-area">
                                <h4 id="az-1">Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                                <h4 id="az-2">Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                            </div>
                        </div>

                        <!-- QoR -->
                        <div class="tab-pane fade" id="reg-qor">
                            <div class="scroll-area">
                                <h4 id="qor-1">Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                                <h4 id="qor-2">Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                            </div>
                        </div>

                        <!-- 5 Vite -->
                        <div class="tab-pane fade" id="reg-5vite">
                            <div class="scroll-area">
                                <h4 id="v5-1">Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                                <h4 id="v5-2">Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                            </div>
                        </div>

                        <!-- EMS -->
                        <div class="tab-pane fade" id="reg-ems">
                            <div class="scroll-area">
                                <h4 id="ems-1">Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                                <h4 id="ems-2">Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aliquid error quo nulla? Rem sequi nam dolores provident nulla reprehenderit tempore suscipit, perspiciatis alias corporis voluptatibus totam at eligendi ipsa odio nisi. Fugit aliquid tempora sed commodi dolorem. Numquam soluta repudiandae blanditiis animi adipisci quasi tenetur totam inventore accusantium laudantium illum nulla neque nobis distinctio dolores facilis beatae suscipit saepe dolorem, quam voluptates aut in pariatur? Sed blanditiis ducimus, deserunt id suscipit odit laudantium, inventore accusamus eligendi, odio fugit? Sequi facere, quod inventore, distinctio dolorem ea iure doloribus ratione dolores molestias recusandae doloremque libero maiores excepturi molestiae perspiciatis vel corporis! Assumenda natus minus cumque, consectetur veniam maxime fugit doloribus, quia corporis ipsum voluptatum cum soluta, veritatis aperiam at nisi molestias rem doloremque totam sit perferendis necessitatibus? Sit quia quae dolores perferendis qui? Blanditiis magnam incidunt natus voluptates ab numquam labore quos, voluptatem, vero velit enim quasi quam alias repellat et?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</x-layout>