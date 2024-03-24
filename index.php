<?php 
require_once "header.php" ;
?>
    <div class="container-lg main-page"> 
        <section id="carousel" class="bg-arc-mint-green">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-container">
                            <img src="assets/carrousel/elephant.jpg" class="d-block w-100" alt="elephants">
                        </div>
                        <div class="carousel-caption d-none d-md-block text-bottom">
                            <h5>Des animaux venant de tous horizons</h5>
                            <p>Découvrez trois mondes fidèles aux habitats naturels des animaux.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-container">
                            <img src="assets/carrousel/solar-panel.jpg" class="d-block w-100" alt="solar panels">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Un cadre respectueux de la nature</h5>
                            <p>L'énergie est précieuse : le parc veille à préserver notre planète..</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-container">
                            <img src="assets/carrousel/suricates.jpg" class="d-block w-100" alt="suricates">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>La santé avant tout</h5>
                            <p>Au zoo d'Arcadia, le bien-être de nos animaux est une priorité.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="welcome" class="my-4 py-3">
            <div class="container-lgpy-4 d-flex align-items-center justify-content-md-around justify-content-center flex-wrap">
                <div class="object-fit-md-contain rounded-5 bg-arc-mint-green p-md-3">
                    <h1 class="text-arc-dark text-center pb-2">Bienvenue au Zoo d'Arcadia</h1>
                    <p class="text-center">Découvrez l'émerveillement au cœur de la mythique forêt de Brocéliande avec Arcadia,<br>
                        le zoo où la nature et le respect des animaux se rejoignent harmonieusement.<br>
                        Plongez dans un monde où la préservation de l'environnement est une priorité,<br>
                        et où le bien-être des animaux est notre engagement quotidien.<br>
                        Bienvenue dans un sanctuaire où la magie de la nature rencontre le bonheur des animaux,<br>
                        pour une expérience inoubliable au sein de la biodiversité d'Arcadia.
                    </p>
                </div>

                <div class="d-flex p-sm-3">
                    <img src="assets/falcon.jpg" alt="falcon" class="falcon-img">
                </div>
            </div>
        </section>

        <hr class="featurette-divider"/>

        <section id="habitat-overview pe-1">
        <h2>Trois mondes magiques à explorer</h2>


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card card-habitat h-100">
                        <img src="assets/habitats/marais.jpg" class="card-img-top z-0" alt="marais">
                        <div class="card-img-overlay d-flex align-items-start justify-content-center">
                            <h5 class="card-title text-light z-1">Les Marais de la Légende</h5>
                        </div>                    
                        <div class="card-body bg-arc-mint-green d-flex flex-column">
                            <p class="card-text z-1">Crocodiles et hippopotames se partagent les eaux sauvages bordant une majestueuse volière.</p>
                            <button class="btn btn-arc-dark align-self-end z-1" type="button">Découvrir</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-habitat h-100">
                        <img src="assets/habitats/jungle.jpg" class="card-img-top z-0" alt="jungle">
                        <div class="card-img-overlay d-flex align-items-start justify-content-center">
                            <h5 class="card-title text-light z-1">La jungle aux Merveilles</h5>
                        </div>
                        <div class="card-body bg-arc-mint-green d-flex flex-column">
                            <p class="card-text z-1">Une forêt luxuriante où panthères, pandas roux et lémuriens cohabitent près d'un imposant vivarium.</p>
                            <button class="btn btn-arc-dark align-self-end z-1">Découvrir</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-habitat h-100">
                        <img src="assets/habitats/savane.jpg" class="card-img-top z-0" alt="savane">
                        <div class="card-img-overlay d-flex align-items-start justify-content-center">
                            <h5 class="card-title text-light z-1">La Savane des Obis</h5>
                        </div>
                        <div class="card-body bg-arc-mint-green d-flex flex-column">
                            <p class="card-text z-1">Plongez au coeur d'un monde aride où girafes, zèbres, suricates et lions trônent et n'attendent que vous.</p>
                            <a href="#" class="btn btn-arc-dark align-self-end z-1">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="top-animal" class="d-flex justify-content-center">
            <figure class="figure">
                <img src="assets/ANIMAUX/JUNGLE/panda-4836503_1920.jpg" alt="Panda roux" class="img-top-animal img-fluid">
                <figcaption class="figure-caption">Partez à la rencontre de nos pandas roux.</figcaption>
            </figure>
        </section>

        <hr class="featurette-divider"/>


        <section id="services" class="py-3">
            

        <h2>Nos services</h2>

        <div class="row text-center">
                <div class="col-lg-4 py-3">
                    <img src="assets/services/train.jpg" alt="train" class="service-img">
                  <h3 class="fw-normal">Petit train</h2>
                  <p>Explorez notre parc à bord de notre charmant petit train, une manière relaxante et divertissante de découvrir les trésors cachés de la forêt de Brocéliande et d'admirer nos merveilleux pensionnaires sous un nouvel angle.</p>
                  <p><a class="btn btn-arc-dark" href="#">En savoir plus »</a></p>
                </div>
            
                <div class="col-lg-4 bg-arc-mint-green py-3">
                      <img src="assets/services/train.jpg" alt="fauconnier" class="service-img">
                    <h3 class="fw-normal">Visites guidées</h2>
                    <p>Pour une expérience encore plus enrichissante, nos visites guidées vous emmènent dans un voyage captivant à travers les différents habitats de nos animaux. Nos guides passionnés partageront avec vous des connaissances fascinantes sur nos résidents, tout en mettant l'accent sur notre engagement envers le respect de l'environnement et le bien-être animal. Rejoignez-nous pour une aventure mémorable, où chaque moment est une découverte.</p>
                    <p><a class="btn btn-arc-dark" href="#">En savoir plus »</a></p>
                  </div>

                  <div class="col-lg-4 py-3">
                      <img src="assets/services/restaurant.jpg" alt="restaurant" class="service-img">
                    <h3 class="fw-normal">Restauration</h2>
                    <p>Plongez dans une aventure unique au zoo Arcadia, où chaque visiteur est choyé avec une gamme de services exceptionnels. Notre espace de restauration propose une variété de délices culinaires, allant des snacks rapides aux repas gastronomiques, pour ravir les papilles des petits et des grands aventuriers.</p>
                    <p><a class="btn btn-arc-dark" href="#">En savoir plus »</a></p>
                  </div>

        </section>

        <hr class="featurette-divider"/>

        <section id="contact" class="py-3">
            <h2>Restons en contact</h2>
            <div class="container">
                <div class="row text-center d-flex align-items-center">
                    <div class="col-md-3">
                        <p>Vos avis comptent pour nous, partagez votre expérience.</p>
                        <button class="btn btn-arc-dark">Écrivez nous</button>
                        <ul class="list-inline my-2">
                            <li class="list-inline-item">
                                <a href="#" class="text-decoration-none text-dark"><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-decoration-none text-dark"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-decoration-none text-dark"><i class="bi bi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-decoration-none text-dark"><i class="bi bi-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="card rounded-4">
                            <div class="card-header bg-arc-primary text-light">
                                @Marc
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Une incroyable journée !</h5>
                                <p class="card-text">"Quelle journée incroyable au zoo ! Les animaux étaient si fascinants à observer, et j'ai tellement appris sur la diversité de notre belle planète. C'était une expérience qui a vraiment égayé ma journée et renforcé mon amour pour la nature. 🌿🦁 #Gratitude #BelleJournée"</p>
                            </div>
                            </div>
                    </div>

                    <div class="col-md-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d21352.38877067888!2d-2.178005767221728!3d48.01277099625603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sforet%20de%20broceliande!5e0!3m2!1sfr!2sfr!4v1710694787647!5m2!1sfr!2sfr" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
    
        </section>
    </div>
    </div>
    <div class="col-md-1"></div>
    </div>

    <?php require_once "footer.php"; ?>