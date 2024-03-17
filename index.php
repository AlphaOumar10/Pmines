  <!DOCTYPE html>
<html lang="en">
<?php include("header.php");?>

<?php 
include("entite\connexion.php");
$requete = "SELECT * FROM service";

$statement = $connexion->prepare($requete); 
$statement->execute();

?>
<body>

  
<?php include("menu.php");?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Bienvenue sur <span>SMGT</span></h2>
            <p data-aos="fade-up">L’ambition de la société Minière Gaoual Télémélé S.A.R.L est d’être un puissant moteur de croissance durable en Guinée tant en luttant contre le chômage, la construction des infracteurs  (Écoles, Centres de santés, latrines publiques, des routes…) et l’amélioration de la vie sociale de la communauté environnante.
            </p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Commencez</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/mine2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/mine1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/mine3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/mine5.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/mine7.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/mine8.jpg)"></div>


      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->
  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(assets/img/mine6.jpg);"></div>

          <div class="col-lg-7">
            <h2>Société Minière Gaoual Télémélé S.A.R.L </h2>
            <div class="our-story">
              <h3>Notre raison d'être</h3>
              <p>
              <p>Fondé en 2018 la Société Minière Gaoual Télémélé S.A.R.L est une société d’exploitation
aurifère guinéenne spécialisé dans la recherche et la prospection minière.</p>
              <p> L’ambition de la société Minière Gaoual Télémélé S.A.R.L est d’être un puissant moteur de
croissance durable en guinée tant en luttant contre le chômage, la construction des infracteurs
(Écoles, Centres de santés, latrines publiques, des routes…) et l’amélioration de la vie sociale
de la communauté environnante.</p></b><p>
Offrir des conditions générales favorables au développement économique, social et culturel à
travers la préservation et la gestion durable de l’environnement et des ressources naturelles
afin d’assurer à long terme la sécurité alimentaire des guinéens et leur cadre de vie.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Extraction des minerais (Or, Diamant)</span></li>
                <li><i class="bi bi-check-circle"></i> <span>production des minerais</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Construction</span></li>
              </ul>
              <h3>Notre vision</h3>
              <p>Être une société d’exploration aurifère et de développement minier de premier plan en offrant
des rendements supérieurs à nos partenaires et des bienfaits durable à nos parties prenantes.</p>

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="assets/img/projects/videoP.mp4" class="glightbox stretched-link">Regardez la vidéo</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients satisfaits</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projets</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="1" class="purecounter"></span>
                <p>Assistance</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                <p>Travail</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section ======= -->
    <!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Notre politique</h3>
            <p>Nous nous engageons à mener nos activités conformément aux lois et réglementations
applicables et aux normes éthiques les plus élevées telles qu'énoncées dans notre Code de
conduite et d'éthique des affaires, tout en respectant les meilleures pratiques de l'industrie.
</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a>Politique de divulgation de l'entreprise</a></h4>
                <p>Nous nous engageons à une divulgation complète et éthique de nos activités et de nos données, assurant la transparence et la confiance de nos parties prenantes.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a>Politique de communication et de délit d'initié</a></h4>
                <p>La politique de communication définit les règles et procédures pour la diffusion d'informations pertinentes et le délit d'initié désigne l'utilisation non autorisée d'informations privilégiées pour le commerce de valeurs mobilières.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a>Directeur principal</a></h4>
                <p>Un Directeur Principal est un cadre supérieur chargé de superviser et de diriger les activités et les initiatives stratégiques d'une organisation.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a>Charte du conseil d'administration</a></h4>
                <p>
                La charte du conseil d'administration de SMGT. énonce les objectifs, les responsabilités et les processus de gouvernance pour assurer une direction efficace et éthique de l'entreprise, tout en protégeant les intérêts des actionnaires et des parties prenantes.</p>
              </div>
            </div><!-- End Icon Box -->
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/mine7.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>

      </div>
      
    </section><!-- End Alt Services Section 2 -->
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos activités</h2>
          <p>La recherche et la prospection minière géologique</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>L’exploitation de l’or, du diamant, de la bauxite,minérais </h3>
              <p>
L'exploitation de l'or, du diamant, et de la bauxite sont des activités minières visant à extraire ces précieux minéraux de la terre pour divers usages industriels et commerciaux..</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>L’achat et la vente de l’or, du diamant</h3>
              <p>L'achat et la vente de l'or et des diamants sont des activités commerciales qui impliquent l'échange de ces précieuses matières premières pour des bénéfices potentiels..</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Recherche, Prospection, et Consultation Juridique</h3>
              <p>Recherche, prospection, exploitation et consultation juridique minière sont des processus intégraux dans l'exploration et l'exploitation responsable des ressources minières, garantissant la conformité légale et réglementaire tout au long du cycle d'exploitation.</p>
            </div>
          </div><!-- End Service Item -->


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos Sites</h2>
          <p>Les activités de la <b>Société Minière Gaoual Télémélé S.A.R.L </b>sont concentrées dans le Nord
Est de la guinée, dans la préfecture de Siguiri, ville située en bordure du fleuve Niger</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/projects/carte_la_Guinee.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Site Mignada</h4>
                    <p><b>Site Mignada</b> est une ville et une sous-préfecture de Guinée, rattachée à la préfecture de Siguiri et la région de Kankan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/projects/carte_la_Guinee.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Site DIDI</h4>
                    <p><b>Site DIDI</b> est une ville et une sous-préfecture de Guinée, rattachée à la préfecture de Siguiri et la région de Kankan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/projects/carte_la_Guinee.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Village Fifa</h4>
                    <p><b>Village Fifa</b> est une ville et une sous-préfecture de Guinée, rattachée à la préfecture de Siguiri et la région de Kankan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/projects/carte_la_Guinee.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Village Bereko</h4>
                    <p><b>Village Bereko</b> est une ville et une sous-préfecture de Guinée, rattachée à la préfecture de Siguiri et la région de Kankan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->


    <!-- ======= Testimonials Section ======= -->
   <!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php");?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

