<main>
  <section id="<?= strtolower(slug($subpages[1]->title)) ?>" class="welcome">
    <div class="d-flex flex-wrap">
      <div class="col-12 col-lg-6">
        <a data-lightbox="welcome" href="<?= file_url($welcome->photo)  ?>">
          <div class="bg-picture lazy mb-2" title="<?= $welcome->alt  ?>" data-bg="<?= file_url($welcome->photo)  ?>"></div>
        </a>
      </div>
      <div class="col-12 col-lg-6 d-flex align-items-center">
        <div class="section-content">
          <h3 class="section-title"><?= $welcome->title  ?></h3>
          <div class="section-description text-left text-lg-right pl-0 pl-lg-5">
            <?= $welcome->description  ?>
          </div>
          <div class="text-lg-right text-center">
            <button class="button large more" data-toggle="modal" data-target="#o-nas-modal"><?= $welcome->button_name  ?></button>
          </div>
          <div class="modal fade" id="o-nas-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fluid " role="document">
              <div class="modal-content lazy bg-picture" style="height: unset" title="<?= $about_descriptions->alt ?>" data-bg="<?= file_url($about_descriptions->photo) ?>">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?= $about_descriptions->title ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="lazy close-modal" data-src="<?= assets() ?>img/close_modal.svg" alt="zamknij">
                  </button>
                </div>
                <div class="modal-body">
                  <?php foreach($about as $i => $about_item): ?>
                    <div class="d-flex flex-wrap mb-5">
                      <div class="col-12 col-lg-6 <?= $i%2==0 ? 'pr-0 pr-lg-3 d-block d-lg-none mb-lg-0' : 'pl-0 pl-lg-3' ?> mb-3">
                        <a data-lightbox="about-item-<?= $i ?>" href="<?= file_url($about_item->photo)  ?>">
                          <div class="bg-picture lazy" title="<?= $about_item->alt  ?>" data-bg="<?= file_url($about_item->photo)  ?>"></div>
                        </a>
                      </div>
                      <div class="col-12 col-lg-6 <?= $i%2==0 ? 'pr-0 pr-lg-5' : 'pl-0 pl-lg-5' ?>">
                        <div class="modal-description">
                          <?php if($about_item->title): ?>
                            <h4><?= $about_item->title ?></h4>
                          <?php endif; ?>
                          <?= $about_item->description  ?>
                        </div>
                        <?php if(!empty($about_icons[$about_item->id])): ?>
                          <div class="d-flex flex-wrap mt-4 mt-lg-5">
                            <?php foreach($about_icons[$about_item->id] as $icon): ?>
                              <div class="col-12 text-center col-md-4 mb-4 mb-lg-0">
                                <img class="lazy about-icon" data-src="<?= file_url($icon->photo)  ?>" alt="<?= $icon->alt  ?>">
                                <h4 class="about-icon-title"><?= $icon->title ?></h4>
                              </div>
                            <?php endforeach; ?>
                          </div>
                        <?php endif; ?>
                      </div>
                      <?php if($i%2==0): ?>
                        <div class="col-12 col-lg-6 pr-0 pr-lg-3 d-none d-lg-block">
                          <a data-lightbox="about-item-<?= $i ?>" href="<?= file_url($about_item->photo)  ?>">
                            <div class="bg-picture lazy" title="<?= $about_item->alt  ?>" data-bg="<?= file_url($about_item->photo)  ?>"></div>
                          </a>
                        </div>
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php foreach($offers as $i => $offer): ?>
    <section id="<?= $i!=0 ? '' : strtolower(slug($subpages[2]->title)) ?>"  class="welcome<?= !$offer->photo2 ? '' : ' p-0' ?>">
      <div class="d-flex flex-wrap<?= !$offer->photo ? '' : ' py-5 px-0 px-lg-4 lazy bg-picture h-100' ?>" data-bg="<?= !$offer->photo2 ? '' : file_url($offer->photo2) ?>" >
        <div class="col-12 col-lg-6<?= !$offer->photo2 ? '' : ' bg-white p-3 d-block d-lg-none mb-3' ?>" <?= !$offer->photo2 ? '' : 'style="border-radius: 0px 25px 25px 0px;"' ?>>
          <a data-lightbox="offer-<?= $i ?>" href="<?= file_url($offer->photo) ?>">
            <div class="bg-picture lazy" <?= !$offer->photo2 ? '' : 'style="border-radius: 25px;height: 200px"' ?>  data-bg="<?= file_url($offer->photo) ?>"></div>
          </a>
        </div>
        <div class="col-12 col-lg-6 bg-white p-3 p-lg-4 pl-3 pl-lg-5 d-flex align-items-center" <?= !$offer->photo2 ? '' : 'style="border-radius: 25px 0px 0px 25px;"' ?> >
          <div class="section-content">
            <h3 class="section-title text-left<?= $i%2==0 ? '' : ' text-lg-right' ?>"><?= $offer->title ?></h3>
            <div class="section-description text-left<?= $i%2==0 ? ' pr-5': ' text-lg-right pl-0 pl-lg-5' ?>">
              <?= $offer->description ?>
            </div>
            <?php if($offer->link): ?>
              <div class="<?= $i%2!=0 ? 'text-lg-right' : 'text-lg-left' ?> text-center">
                <a  href="<?= $offer->link ?>">
                  <button class="button"><?= $offer->button_name ?></button>
                </a>
              </div>
            <?php endif ?>
          </div>
        </div>
        <?php if($i%2==0): ?>
          <div class="col-12 col-lg-6 bg-white p-3 d-none d-lg-block" style="border-radius: 0px 25px 25px 0px;">
            <a data-lightbox="offer-<?= $i ?>" href="<?= file_url($offer->photo) ?>">
              <div class="bg-picture lazy" style="border-radius: 25px;" title="<?= $offer->alt ?>" data-bg="<?= file_url($offer->photo) ?>"></div>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </section>
  <?php endforeach; ?>

  

  <section id="<?= strtolower(slug($subpages[3]->title)) ?>" class="welcome">
    <div class="d-flex flex-wrap">
      <div class="col-12 col-lg-6">
        <a data-lightbox="rental" href="<?= file_url($rental->photo)  ?>">
          <div class="bg-picture lazy mb-2" title="<?= $rental->alt ?>" data-bg="<?= file_url($rental->photo)  ?>"></div>
        </a>
      </div>
      <div class="col-12 col-lg-6 d-flex align-items-center">
        <div class="section-content">
          <h3 class="section-title text-lg-right text-left"><?= $rental->title  ?></h3>
          <div class="section-description text-left text-lg-right pl-0 pl-lg-5">
            <?= $rental->description  ?>
          </div>
          <div class="text-lg-right text-center">
            <button class="button" data-toggle="modal" data-target="#wypozyczalnia-modal"><?= $rental->button_name  ?></button>
          </div>

          <div class="modal fade" id="wypozyczalnia-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fluid " role="document">
              <div class="modal-content lazy bg-picture" style="height: unset" title="<?= $rental_descriptions->alt  ?>" data-bg="<?= file_url($rental_descriptions->photo)  ?>">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?= $rental_descriptions->title  ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="lazy close-modal" data-src="<?= assets() ?>img/close_modal.svg" alt="zamknij">
                  </button>
                </div>
                <div class="modal-body">
                  <div class="d-flex flex-wrap justify-content-center">

                    <?php foreach($rental_squares as $i => $square): ?>
                      <div class="col-12 col-lg-6 rental-col">
                        <div class="rental-title"><?= $square->title ?></div>
                      </div>
                      <div class="col-12 col-lg-6 rental-col">
                        <a data-lightbox="square-<?= $i ?>" href="<?= file_url($square->photo) ?>">
                          <div class="bg-picture lazy mb-2" style="height: 300px" title="<?= $square->alt ?>" data-bg="<?= file_url($square->photo) ?>"></div>
                        </a>
                        <div class="rental-description"><?= $square->description ?></div>
                        <button style="
    position: absolute;
    top: 0;
    right: 0;
" type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <img class="lazy close-modal" data-src="<?= assets() ?>img/close_modal.svg" alt="zamknij">
                        </button>
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

  <section id="<?= strtolower(slug($subpages[4]->title)) ?>" class="slider pt-0 mt-5 px-0">
    <div id="slider" class="carousel slide carousel-2" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php foreach($services as $i => $service): ?>
          <svg class="<?php if($i == 0) echo 'active' ?>" data-target="#slider" data-slide-to="<?= $i ?>" xmlns="http://www.w3.org/2000/svg" width="131" height="13" viewBox="0 0 131 13"><g><g><path fill="#fff" d="M6 13a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6h119a6 6 0 0 1 6 6v1a6 6 0 0 1-6 6z"/></g></g></svg>
        <?php endforeach; ?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php foreach($services as $i => $service): ?>
          <div class="carousel-item <?php if($i == 0) echo 'active' ?>">
            <div class="bg-picture d-flex align-items-center slider2-bg lazy" title="<?= $service->alt2 ?>" data-bg="<?= file_url($service->photo2) ?>">
              <div class="slider2-photo-container">
                <div class="bg-picture slider2-photo lazy" title="<?= $service->alt ?>" data-bg="<?= file_url($service->photo) ?>"></div>
              </div>
              <h1 class="slider2-title"><?= $service->title ?></h1>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="<?= strtolower(slug($subpages[5]->title)) ?>" class="news position-relative">
    <div class="d-flex flex-wrap news-row">
      <div class="owl-carousel owl-theme">
        <?php foreach($advices as $i => $advice): ?>
          <div class="news-content-container ">
            <div class="news-content">
              <h4><?= $advice->title ?></h4>
              <?= $advice->description ?>
            </div>
            <div class="bg-picture lazy news-photo " title="<?= $advice->alt ?>" data-bg="<?= file_url($advice->photo) ?>"></div>
            <a  href="<?= $advice->link ?>">
              <div class="news-button"><div><?= $advice->button_name ?></div></div>
            </a>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </section>
</main>