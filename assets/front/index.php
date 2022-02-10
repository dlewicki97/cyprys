<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cyprys</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fonts/made tommy/made-tommy.css">
  <link rel="stylesheet" href="dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="dist/assets/owl.theme.default.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div role="alert" class="alert holiday-alert alert-dismissible mb-0">
      <p class="text-white mb-0">Sklep w okresie w dniach od 04.12.2020 do 12.01.2020 r. będzie nieczynny ponieważ firma ma urlop w X czasie</p>
      <button type="button" onclick="decreaseSlider()" class="close" data-dismiss="alert" style="opacity: unset!important" aria-label="Close"><img class="lazy close-icon" data-src="img/close_icon.svg" alt="Zamknij"></button>
    </div>
    <div class="position-relative">
      <nav class="navbar navbar-expand-lg px-lg-5 px-3 navbar-light">
        <a class="navbar-brand" href="#"><img class="logo lazy" data-src="img/logo.svg" alt="logo"></a>
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mt-4 mt-lg-0 ml-lg-auto d-flex justify-content-between ml-0 mb-2 mr-auto mr-lg-0 mb-lg-0">
            <li class="nav-item header-li">
              <a class="nav-link active" href="#">Home
                <div class="header-borders">
                  <div class="header-border-left"></div>
                  <div class="header-border-right"></div>
                </div>
              </a>
            </li>
            <li class="nav-item header-li">
              <a class="nav-link" href="#o-nas">O nas
                <div class="header-borders">
                  <div class="header-border-left"></div>
                  <div class="header-border-right"></div>
                </div>
              </a>
            </li>
            <li class="nav-item header-li">
              <a class="nav-link" href="#oferta">Oferta
                <div class="header-borders">
                  <div class="header-border-left"></div>
                  <div class="header-border-right"></div>
                </div>
              </a>
            </li>
            <li class="nav-item header-li">
              <a class="nav-link" href="#wypozyczalnia">Wypożyczalnia
                <div class="header-borders">
                  <div class="header-border-left"></div>
                  <div class="header-border-right"></div>
                </div>
              </a>
            </li>
            <li class="nav-item header-li">
              <a class="nav-link" href="#serwis">Serwis
                <div class="header-borders">
                  <div class="header-border-left"></div>
                  <div class="header-border-right"></div>
                </div>
              </a>
            </li>
            <li class="nav-item header-li">
              <a class="nav-link" href="#porady">Porady
                <div class="header-borders">
                  <div class="header-border-left"></div>
                  <div class="header-border-right"></div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="carousel-example-1z" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="bg-ad active" data-target="#carousel-example-1z" data-slide-to="0"><div></div></li>
          <li class="bg-ad" data-target="#carousel-example-1z" data-slide-to="1"><div></div></li>
          <li class="bg-ad" data-target="#carousel-example-1z" data-slide-to="2"><div></div></li>
          <li class="bg-ad" data-target="#carousel-example-1z" data-slide-to="3"><div></div></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="bg-picture slider-photo lazy" data-bg="img/slider-1.png">
              <div class="mask">
                <h1 class="slider-title">Zajmujemy się sprzętem</h1>
                <h2 class="slider-subtitle">ogrodniczym i budowlanym</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="bg-picture slider-photo lazy" data-bg="img/slider-2.png">
              <div class="mask">
                <h1 class="slider-title">Oferujemy narzędzia</h1>
                <h2 class="slider-subtitle">w bezkompromisowej jakości</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="bg-picture slider-photo lazy" data-bg="img/slider-3.png">
              <div class="mask">
                <h1 class="slider-title">Zapraszamy do zapoznania się</h1>
                <h2 class="slider-subtitle">z naszą ofertą</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="bg-picture slider-photo lazy" data-bg="img/slider-4.png">
              <div class="mask">
                <h1 class="slider-title">Wiedza i doświadczenie</h1>
                <h2 class="slider-subtitle">od 1998 roku</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </header>

  <main>
    <section id="o-nas" class="welcome">
      <div class="d-flex flex-wrap">
        <div class="col-12 col-lg-6">
          <div class="bg-picture lazy mb-2" data-bg="img/welcome.png"></div>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center">
          <div class="section-content">
            <h3 class="section-title">Witamy!</h3>
            <div class="section-description text-left text-lg-right pl-0 pl-lg-5">
              <p>Jesteśmy firmą z wieloletnim doświadczeniem, działamy na rynku od 1998 roku. Zajmujemy się sprzedażą, serwisem, wynajmem maszyn i urządzeń ogrodniczych, leśnych oraz budowlanych. </p>

              <p>Posiadamy autoryzację firmy STIHL oraz status serwisu jakościowego. Nasza lokalizacja daje nam możliwość zapewnienia Państwu bezpłatnego i swobodnego miejsca do zaparkowania samochodu tuż pod drzwiami firmy. Oraz oferujemy możliwość uruchamiania i testowania maszyn wedle życzenia naszych klientów.</p>
            </div>
            <div class="text-lg-right text-center">
              <button class="button large more" data-toggle="modal" data-target="#o-nas-modal">Więcej</button>
            </div>
            <div class="modal fade" id="o-nas-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-fluid " role="document">
                <div class="modal-content lazy bg-picture" style="height: unset" data-bg="img/modal-bg.png">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">O nas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <img class="lazy close-modal" data-src="img/close_modal.svg" alt="zamknij">
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="d-flex flex-wrap mb-5">
                      <div class="col-12 col-lg-6 pr-0 pr-lg-3 d-block d-lg-none mb-3">
                        <div class="bg-picture lazy" data-bg="img/o-nas1.png"></div>
                      </div>
                      <div class="col-12 col-lg-6 pr-0 pr-lg-5">
                        <div class="modal-description">
                          <p>Zaufało nam wiele osób zarówno nabywców indywidualnych jak i firm prywatnych oraz państwowe jednostki organizacyjne.</p>
                          <br>
                          <p>Cały czas służymy swą wiedzą i doświadczeniem, pragniemy by nasza firma kojarzyła się z profesjonalizmem i wysoką jakością oferowanych produktów i usług. Dysponujemy wyłącznie sprawdzonymi rozwiązaniami i wyrobami renomowanych producentów.</p>
                          <br>
                          <p>Jesteśmy dealerem wiodących marek firm w branży ogrodniczej i budowlanej takich jak: Stihl, Honda, Stiga, Briggs&Stratton, AL-KO, John Deere, MTD, Fiskars, Solo, Toro, Weber, Wacker Neuson, Bomag, Belle, Dynapac, JCB, Ammann, Hatz, Pramac, Iseki, Fogo, Master i wiele innych</p>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 pr-0 pr-lg-3 d-none d-lg-block">
                        <div class="bg-picture lazy" data-bg="img/o-nas1.png"></div>
                      </div>
                    </div>

                    <div class="d-flex flex-wrap">
                      <div class="col-12 col-lg-6 pl-lg-3 pl-0 mb-3 mb-lg-0">
                        <div class="bg-picture lazy" data-bg="img/o-nas2.png"></div>
                      </div>
                      <div class="col-12 col-lg-6 pl-lg-5 pl-0">
                        <div class="modal-description">
                          <h4>Oferujemy wsparcie w procesie zakupu:</h4>
                          <p>- wycenę do wykorzystania przy występowaniu o dotację współpracę z dostawcą leasingu</p>
                          <p>- dobór urządzeń do unikalnych potrzeb każdego przedsiębiorstwa</p>
                          <p>- testy i pokazy urządzeń</p>
                        </div>
                        <div class="d-flex flex-wrap mt-4 mt-lg-5">
                          <div class="col-12 text-center col-md-4 mb-4 mb-lg-0">
                            <img class="lazy about-icon" data-src="img/dollar.svg" alt="dolar">
                            <h4 class="about-icon-title">Wycena</h4>
                          </div>
                          <div class="col-12 text-center col-md-4 mb-4 mb-lg-0">
                            <img class="lazy about-icon" data-src="img/deal.svg" alt="dolar">
                            <h4 class="about-icon-title">Współpraca</h4>
                          </div>
                          <div class="col-12 text-center col-md-4 mb-4 mb-lg-0">
                            <img class="lazy about-icon" data-src="img/list.svg" alt="dolar">
                            <h4 class="about-icon-title">Testowane<br>urządzenia</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="oferta" class="welcome p-0">
      <div class="d-flex flex-wrap py-5 px-0 px-lg-4 lazy bg-picture h-100" data-bg="img/wood.png">
        <div class="col-12 col-lg-6 bg-white p-3 d-block d-lg-none mb-3" style="border-radius: 0px 25px 25px 0px;">
          <div class="bg-picture lazy" style="border-radius: 25px;height: 200px" data-bg="img/saw.png"></div>
        </div>
        <div class="col-12 col-lg-6 bg-white p-3 p-lg-4 pl-3 pl-lg-5 d-flex align-items-center" style="border-radius: 25px 0px 0px 25px;">
          <div class="section-content">
            <h3 class="section-title text-left">Narzędzia ogrodowe marki STIHL</h3>
            <div class="section-description text-left pr-5">
              <p>Od samego początku firma STIHL stawia na najnowszą technikę i nowatorskie pomysły. 90 lat tradycji sprawiło, że jesteśmy postrzegani jako symbol doskonałej techniki. Dziś marka STIHL stanowi synonim jakości i doskonałego serwisu. W ponad 160 krajach na całym świecie nasze produkty pomagają ludziom w wykonywaniu ich pracy - jesteśmy światowym liderem na rynku pilarek łańcuchowych.</p>
            </div>
            <div class="text-lg-left text-center">
              <a target="_blank" href="https://cyprys.stihl-online.pl/pl-pl/">
                <button class="button">Zobacz ofertę</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 bg-white p-3 d-none d-lg-block" style="border-radius: 0px 25px 25px 0px;">
          <div class="bg-picture lazy" style="border-radius: 25px;" data-bg="img/saw.png"></div>
        </div>
      </div>
    </section>

    <section class="welcome">
      <div class="d-flex flex-wrap">
        <div class="col-12 col-lg-6">
          <div class="bg-picture lazy mb-2" data-bg="img/odkurzacz.png"></div>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center">
          <div class="section-content">
            <h3 class="section-title text-lg-right text-left">Narzędzia ogrodowe marki Stiga</h3>
            <div class="section-description text-left text-lg-right pl-0 pl-lg-5">
              <p>Stig Hjelmquist - człowiek, który stworzył firmę Stiga - był skazany na sukces w biznesie, firma powstaje w 1934 roku. Stiga połączyła się z producentem kosiarek Castelgarden oraz producentem pilarek oraz wykaszarek Alpina Professional & Garden. Wspólnie utworzyły grupę Global Garden Products, specjalizującą się w produkcji i sprzedaży sprzętu ogrodniczego. Wyroby marki Stiga można znaleźć w ponad 80 krajach świata, w tym w Australii, Wenezueli, Zambii, Montenegro, Liechtensteinie i Taiwanie.</p>
            </div>
            <div class="text-lg-right text-center">
              <a target="_blank" href="https://www.stiga.pl/">
                <button class="button">Zobacz ofertę</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="welcome p-0">
      <div class="d-flex flex-wrap py-5 px-0 px-lg-4 lazy bg-picture h-100" data-bg="img/grass.png">
        <div class="col-12 col-lg-6 bg-white p-3 d-block d-lg-none mb-3" style="border-radius: 0px 25px 25px 0px;">
          <div class="bg-picture lazy" style="border-radius: 25px; height: 200px" data-bg="img/al-ko.png"></div>
        </div>
        <div class="col-12 col-lg-6 bg-white p-3 p-lg-4 pl-3 pl-lg-5 d-flex align-items-center" style="border-radius: 25px 0px 0px 25px;">
          <div class="section-content">
            <h3 class="section-title text-left">Narzędzia ogrodowe marki AL-KO</h3>
            <div class="section-description text-left pr-5">
              <p>Rodzinna firma założona w 1931 roku, dzisiejsza grupa AL-KO Kober, jest wiodącym dostawcą w dziedzinie ogrodnictwa, motoryzacji i technologii wentylacji. W obszarze Gardentech AL-KO oferuje wszystkie narzędzia ogrodnicze potrzebne do pięknego i zadbanego ogrodu. Znajdziesz tu nie tylko szeroką gamę kosiarek, ale także wiele innych produktów do pielęgnacji trawnika: od wykaszarek i weltykulatorów po pompy wodne do podlewania ogrodu. Pielęgnacja drzew i żywopłotów jest również dziecinnie prosta dzięki ergonomicznym nożycom do żywopłotu, dmuchawom i rozdrabniaczom.</p>
            </div>
            <div class="text-lg-left text-center">
              <a target="_blank" href="https://alko-garden.pl/">
                <button class="button">Zobacz ofertę</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 bg-white p-3 d-none d-lg-block" style="border-radius: 0px 25px 25px 0px;">
          <div class="bg-picture lazy" style="border-radius: 25px;" data-bg="img/al-ko.png"></div>
        </div>
      </div>
    </section>

    <section class="welcome">
      <div class="d-flex flex-wrap">
        <div class="col-12 col-lg-6">
          <div class="bg-picture lazy mb-2" data-bg="img/serwis-2.png"></div>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center">
          <div class="section-content">
            <h3 class="section-title text-lg-right text-left">Narzędzia i maszyny budowlane</h3>
            <div class="section-description text-left text-lg-right pl-0 pl-lg-5">
              <p>Posiadamy obszerny zakres produktów i marek. Nasza oferta to zakres od silników do maszyn i urządzeń po sam lekki sprzęt budowlany. Innowacyjne maszyny budowlane to np. sprzęt zagęszczający ze wskaźnikiem poziomu zagęszczenia gruntu, zdalnie sterowane walce okołkowane na podczerwień, sprzęt  budowlany który stosuje kontrolę sterowania na linii wzroku za pomocą pilota zapewniając wysoki poziom bezpieczeństwa dla operatora i otoczenia czy minikoparki, które jeśli to konieczne zamieniają się z maszyny z silnikiem wysokoprężnym na urządzenie do pracy wewnątrz nieemitujące spalin. Takie rozwiązania mają tylko najlepsi. U nas zakupią Państwo sprzęt producentów: Amman, Wacker Neuson, Fayat Bomag, Weber, Atlas Copco, JCB, Dynapac, Belle, Chicago Pneumatic, Honda, Enar, Pramac, Fogo, CAT i innych.</p>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <section class="welcome p-0">
      <div class="d-flex flex-wrap py-5 px-0 px-lg-4 lazy bg-picture h-100" data-bg="img/zebatki.png">
        <div class="col-12 col-lg-6 bg-white p-3 d-block d-lg-none mb-3" style="border-radius: 0px 25px 25px 0px;">
          <div class="bg-picture lazy" style="border-radius: 25px; height: 200px" data-bg="img/zebatka.png"></div>
        </div>
        <div class="col-12 col-lg-6 bg-white p-3 p-lg-4 pl-3 pl-lg-5 d-flex align-items-center" style="border-radius: 25px 0px 0px 25px;">
          <div class="section-content">
            <h3 class="section-title text-left">Części zamienne</h3>
            <div class="section-description text-left pr-0 pr-lg-5">
              <p>Oprócz sprzedaży gotowych wyrobów posiadamy największe w Gorzowie Wielkopolskim zaplecze z częściami zamiennymi oraz akcesoriami do urządzeń ogrodniczych, leśnych, budowlanych jak i grzewczych. Stale zgodnie z zapotrzebowaniem jest ono powiększane. Dzięki doskonałej jakości oryginalnych części oraz ich dostępności  możemy zredukować przestoje do minimum. Wyłącznie oryginalne części gwarantują optymalne funkcjonowanie i zachowanie trwałej wartości maszyny. Sprawdzamy jakość i dokładność dopasowania, aby mogli Państwo całkowicie polegać na naszych częściach, bez żadnych zastrzeżeń i w każdej sytuacji.</p>
            </div>

          </div>
        </div>
        <div class="col-12 col-lg-6 bg-white p-3 d-none d-lg-block" style="border-radius: 0px 25px 25px 0px;">
          <div class="bg-picture lazy" style="border-radius: 25px;" data-bg="img/zebatka.png"></div>
        </div>
      </div>
    </section>

    <section id="wypozyczalnia" class="welcome">
      <div class="d-flex flex-wrap">
        <div class="col-12 col-lg-6">
          <div class="bg-picture lazy mb-2" data-bg="img/wypozyczalnia.png"></div>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center">
          <div class="section-content">
            <h3 class="section-title text-lg-right text-left">Wypożyczalnia sprzętu i usługi</h3>
            <div class="section-description text-left text-lg-right pl-0 pl-lg-5">
              <p>Świadczymy usługi w zakresie wynajmu maszyn budowlanych oraz ogrodniczych. W ofercie wypożyczalni posiadamy szeroką gamę urządzeń potrzebnych w pracach przydomowych jak i dużych inwestycjach. Ciągła kontrola jakości oraz zapewnienie bezpieczeństwa użytkowania wynajmowanych urządzeń to podstawowe procesy w branży wypożyczania sprzętu budowlanego. Regularnie szkolimy naszych pracowników w zakresie bezpiecznego użytkowania wynajmowanych sprzętów oraz w zakresie umiejętnego przekazywania tej wiedzy naszym Klientom. Nasza działalność jest z definicji przyjazna dla środowiska naturalnego: wypożyczanie sprzętu budowlanego jest opcją proekologiczną w porównaniu do jego zakupu. Jeśli więcej osób wykorzystuje tę samą maszynę, wpływ na środowisko naturalne jest zredukowany. Świadczymy również usługi minikoparką. Montujemy roboty koszące.</p>
            </div>
            <div class="text-lg-right text-center">
              <button class="button" data-toggle="modal" data-target="#wypozyczalnia-modal">Zobacz ofertę</button>
            </div>

            <div class="modal fade" id="wypozyczalnia-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-fluid " role="document">
                <div class="modal-content lazy bg-picture" style="height: unset" data-bg="img/modal-bg.png">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wypożyczalnia sprzętu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <img class="lazy close-modal" data-src="img/close_modal.svg" alt="zamknij">
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="d-flex flex-wrap justify-content-center">
                      <?php $rental = ['Zagęszczarki gruntu od 100kg do 700kg', 'Ubijaki wibracyjne', 'Agregaty prądotwórcze od 2kW do 20kW', 'Przecinarki ręczne, stolikowe, na wózku', 'Wibratory pogrążane', 'Sprężarki powietrza śrubowe na podwoziu', 'Młoty pneumatyczne', 'Pompy wodne', 'Minikoparki', 'Wiertnie glebowe', 'Nożyce do żywopłotu', 'Dmuchawy ogrodowe', 'Rębaki do gałęzi', 'Pilarki na wysięgniku', 'Wertykulatory', 'Glebogryzarki', 'Nagrzewnice powietrza olejowe i elektryczne', 'Osuszacze powietrza', 'Opryskiwacze spalinowe', 'Walce do trawy', 'Siewniki', 'Kosy spalinowe'] ?>
                      <?php foreach($rental as $r): ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 rental-col">
                          <div class="rental-title"><?= $r ?></div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <section id="serwis" class="slider px-0">
      <div id="slider" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <svg class="active" data-target="#slider" data-slide-to="0" xmlns="http://www.w3.org/2000/svg" width="131" height="13" viewBox="0 0 131 13"><g><g><path fill="#fff" d="M6 13a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6h119a6 6 0 0 1 6 6v1a6 6 0 0 1-6 6z"/></g></g></svg>
          <svg data-target="#slider" data-slide-to="1" xmlns="http://www.w3.org/2000/svg" width="131" height="13" viewBox="0 0 131 13"><g><g><path fill="#fff" d="M6 13a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6h119a6 6 0 0 1 6 6v1a6 6 0 0 1-6 6z"/></g></g></svg>
          <svg data-target="#slider" data-slide-to="2" xmlns="http://www.w3.org/2000/svg" width="131" height="13" viewBox="0 0 131 13"><g><g><path fill="#fff" d="M6 13a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6h119a6 6 0 0 1 6 6v1a6 6 0 0 1-6 6z"/></g></g></svg>
          
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="bg-picture d-flex align-items-center slider2-bg lazy" data-bg="img/las.png">
              <div class="slider2-photo-container">
                <div class="bg-picture slider2-photo lazy" data-bg="img/pila.png"></div>
              </div>
              <h1 class="slider2-title">Autoryzowany serwis gwarancyjny <br> i pogwarancyjny wielu marek</h1>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="bg-picture d-flex align-items-center slider2-bg lazy" data-bg="img/las.png">
              <div class="slider2-photo-container">
                <div class="bg-picture slider2-photo lazy" data-bg="img/pila.png"></div>
              </div>
              <h1 class="slider2-title">Autoryzowany serwis gwarancyjny <br> i pogwarancyjny wielu marek</h1>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="bg-picture d-flex align-items-center slider2-bg lazy" data-bg="img/las.png">
              <div class="slider2-photo-container">
                <div class="bg-picture slider2-photo lazy" data-bg="img/pila.png"></div>
              </div>
              <h1 class="slider2-title">Autoryzowany serwis gwarancyjny <br> i pogwarancyjny wielu marek</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="porady" class="news position-relative">
      <div class="d-flex flex-wrap news-row">
        <div class="owl-carousel owl-theme">
          <div class="news-content-container ">
            <div class="news-content">
              <h4>Mulczowanie czy nawożenie?</h4>
              <p>Przeczytaj nasz artykuł na ten temat i poszerz zakres swojej wiedzy</p>
            </div>
            <div class="bg-picture lazy news-photo " data-bg="img/news-1.png"></div>
            <a target="_blank" href="https://www.stihl.pl/mulczowanie-czy-nawozenie-trawnika.aspx">
              <div class="news-button"><div>></div></div>
            </a>
          </div>

          <div class="news-content-container ">
            <div class="news-content">
              <h4>Pielęgnacja trawnika</h4>
              <p>Przeczytaj nasz artykuł na ten temat i poszerz zakres swojej wiedzy</p>
            </div>
            <div class="bg-picture lazy news-photo " data-bg="img/news-2.png"></div>
            <a target="_blank" href="https://www.stihl.pl/porady-dotyczace-pielegnacji-trawnika.aspx">
              <div class="news-button"><div>></div></div>
            </a>
          </div>

          <div class="news-content-container">
            <div class="news-content">
              <h4>Już wiosna!</h4>
              <p>Przyszła wiosna a z nią pora na wiosenne porządki, w domu jak i w ogrodzie musi panować porządek. Zobacz jak to zrobić!</p>
            </div>
            <div class="bg-picture lazy news-photo " data-bg="img/news-3.png"></div>
            <a href="https://www.stihl.pl/ju-wiosna.aspx" target="_blank">
              <div class="news-button"><div>></div></div>
            </a>
          </div>

          <div class="news-content-container">
            <div class="news-content">
              <h4>Jesienne porządki</h4>
              <p>Przeczytaj nasz artykuł na ten temat i poszerz zasięg swoich porządków poza granice komfortu</p>
            </div>
            <div class="bg-picture lazy news-photo " data-bg="img/news-1.png"></div>
            <a href="https://www.stihl.pl/jesienne-porzdki.aspx" target="_blank">
              <div class="news-button"><div>></div></div>
            </a>
          </div>



        </div>
      </div>
    </section>
  </main>

  <footer id="kontakt">
    <div class="d-flex flex-wrap contact-row">
      <div class="col-12">
        <h2 class="footer-title mb-5">Kontakt</h2>
      </div>
      <div class="col-12 col-lg-5 mb-4 mb-lg-0">
        <div class="footer-contact-data">
          <p><strong>CYPRYS Maszyny i Urządzenia</strong></p> 
          <p><strong>Piotr Bamber</strong></p>
          <br>
          <p>ul. Wylotowa 78</p>
          <p>66-400 Gorzów Wlkp.</p>
          <p><a href="mailto:biuro@cyprysmaszyny.pl" class="footer-link">biuro@cyprysmaszyny.pl</a></p>
          <br>
          <p><strong>Dział Serwisu</strong></p>
          <p><strong>Piotr Bamber</strong></p>
          <p>telefon: <a class="footer-link" href="tel:+48 957 282 066">+48 957 282 066</a></p>
          <p>tel./fax: <a class="footer-link" href="tel:+48 601 757 776">+48 601 757 776</a></p>
          <br>
          <p><strong>Dział Sprzedaży</strong></p>
          <p><strong>Agata Sawińska</strong></p>
          <p>telefon: <a class="footer-link" href="tel:+48 957 282 066">+48 957 282 066</a></p>
          <p>tel./fax: <a class="footer-link" href="tel:+48 601 404 231">+48 601 404 231</a></p>
        </div>
      </div>
      <div class="col-12 col-lg-7">
        <div class="d-flex flex-wrap inputs-wrapper">
          <div class="col-12 col-md-6 pl-0">
            <input class="custom-input" placeholder="Imię i nazwisko" type="text">
          </div>
          <div class="col-12 col-md-6 pr-0">
            <input class="custom-input" placeholder="Adres e-mail" type="email">
          </div>

          <div class="col-12 col-md-6 pl-0">
            <input class="custom-input" placeholder="Numer telefonu" type="text">
          </div>
          <div class="col-12 col-md-6 pr-0">
            <input class="custom-input" placeholder="Temat" type="text">
          </div>
          <div class="col-12 px-0">
            <textarea placeholder="Napisz do nas!" name="" id="" rows="4"></textarea>
          </div>
          <div class="col-12 px-0 pb-0">
            <div class="custom-control custom-checkbox p-0">
              <input type="checkbox" required="" name="rodo1" class="form-check-input" id="rodo1">
              <label class="form-check-label text-white checkbox-label" for="rodo1">Chcę otrzymywać Newsletter od „Ignaszak” spółka z ograniczoną odpowiedzialnością sp.k. z wykorzystaniem adresu e-mail oraz pozostałych podanych przeze mnie Danych.*</label>
            </div>
          </div>
          <div class="col-12 px-0">
            <div class="custom-control custom-checkbox p-0">
              <input type="checkbox" required="" name="rodo2" class="form-check-input" id="rodo2">
              <label class="form-check-label text-white checkbox-label" for="rodo2">Chcę otrzymywać Newsletter od „Ignaszak” spółka z ograniczoną odpowiedzialnością sp.k. z wykorzystaniem adresu e-mail oraz pozostałych podanych przeze mnie Danych.*</label>
            </div>
          </div>
          <div class="col-12 text-center text-lg-right px-0">
            <button type="submit" class="button contact-button">Wyślij wiadomość</button>
          </div>
        </div>
      </div>

      <div class="col-12">
        <h2 class="footer-title find-us" style="margin-top: 6rem">Gdzie nas znaleźć?</h2>
      </div>
    </div>
    <div class="col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2417.2971312228706!2d15.291265315814512!3d52.70878197985038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4706e0316527679d%3A0xb9b9a3ea09b6825!2sWylotowa%2078%2C%2066-400%20Gorz%C3%B3w%20Wielkopolski!5e0!3m2!1spl!2spl!4v1611051820589!5m2!1spl!2spl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="d-flex flex-wrap footer2">
      <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <h3 class="footer-title2">
          <strong>Cyprys Maszyny i Urządzenia</strong> <br>
          Piotr Bamber
        </h3>
        <a href="#"><img class="lazy footer-logo mt-3" data-src="img/logo.svg" alt="logo"></a>
      </div>
      <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <ul class="contact-list">
          <li><span>E-mail: </span><a href="mailto:biuro@cyprysmaszyny.pl" class="footer-link">biuro@cyprysmaszyny.pl</a></li>
          <li><span>Telefon: </span><a href="tel:601 757 776" >601 757 776</a></li>
          <li><span>Telefon: </span><a href="tel:601 404 231">601 404 231</a></li>
          <li><span>NIP: </span>5991674907</li>
        </ul>
        <div><a target="_blank" class="address-link" href="#">ul. Wylotowa 78, 66-400 <br> Gorzów Wielkopolski</a></div>
        <a target="_blank" href="https://www.stihl.pl/"><img class="lazy stihl-logo mt-3" data-src="img/stihl_logo.svg" alt="stihl"></a>
      </div>
      <div class="col-12 col-lg-4 text-left text-lg-right ">
        <h3 class="footer-title2 font-weight-bolder">Menu</h3>
        <ul class="contact-list subpages align-items-start align-items-lg-end">
          <li class="subpages-li">
            <a class="text-white" style="color: white!important" href="#o-nas">O nas
              <div class="subpage-border"></div>
            </a>
          </li>
          <li class="subpages-li">
            <a class="text-white" style="color: white!important" href="#oferta">Oferta
              <div class="subpage-border"></div>
            </a>
          </li>
          <li class="subpages-li">
            <a class="text-white" style="color: white!important" href="#wypozyczalnia">Wypożyczalnia
              <div class="subpage-border"></div>
            </a>
          </li>
          <li class="subpages-li">
            <a class="text-white" style="color: white!important" href="#serwis">Serwis
              <div class="subpage-border"></div>
            </a>
          </li>
          <li class="subpages-li">
            <a class="text-white" style="color: white!important" href="#kontakt">Kontakt
              <div class="subpage-border"></div>
            </a>
          </li>
        </ul>
      </div>
      <div class="ad-awards">
        <div>
          <a href="#"><img class="lazy" data-src="img/adawards.svg" alt="adawards"></a>
          <div>Design and implementation by <span>Ad Awards.</span> All rights reserved.</div>
        </div>
        <a target="_blank" class="text-center text-lg-left" href="https://agencjamedialna.pro/">www.<span>AgencjaMedialna</span>.pro</a>
      </div>
    </div>

  </footer>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/footer-links.js"></script>
  <script src="dist/src/js/owl.carousel.js" data-cover></script>
  <script src="dist/src/js/owl.support.js" data-cover></script>
  <script src="dist/src/js/owl.autoplay.js" data-cover></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
  <script src="dist/owl.carousel.js"></script>
  <script type="text/javascript">
    var lazyLoadInstance = new LazyLoad();
    function decreaseSlider() {
      [...document.getElementsByClassName('slider-photo')].forEach(photo => photo.style.height = '100vh');
    }

    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
       dots: false,
       nav: false,
       responsive: {
        0: {items: 1},
        576: {items: 2},
        768: {items: 3},
        992: {items: 4}
      },
      items: 4,
    });
    });
  </script>
</body>
</html>