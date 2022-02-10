<header>
  <?php if($this->session->flashdata('flashdata')) echo $this->session->flashdata('flashdata') ?>
  <?php if($alert->title): ?>
    <div role="alert" class="alert holiday-alert alert-dismissible mb-0">
      <div class="text-white mb-0"><?= $alert->title ?></div>
      <button type="button" onclick="decreaseSlider()" class="close" id="alert-close" data-dismiss="alert" style="opacity: unset!important" aria-label="Close"><img class="lazy close-icon" data-src="<?= assets() ?>img/close_icon.svg" alt="Zamknij"></button>
    </div>
  <?php endif; ?>
  <div class="position-relative">
    <nav class="navbar navbar-expand-lg px-lg-5 px-3 navbar-light">
      <a class="navbar-brand" href="#"><img class="logo lazy" data-src="<?= file_url($settings->logo) ?>" alt="logo"></a>
      <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mt-4 mt-lg-0 ml-lg-auto d-flex justify-content-between ml-0 mb-2 mr-auto mr-lg-0 mb-lg-0">
          <?php foreach($subpages as $i => $subpage): ?>
            <?php if($subpage->page != 'contact'): ?>
              <li class="nav-item header-li">
                <a class="nav-link <?= $i!=0 ?: 'active' ?>" href="#<?= $subpage->page == 'home' ? '' : strtolower(slug($subpage->title)) ?>"><?= $subpage->title ?>
                <div class="header-borders">
                  <div class="header-border-left"></div>
                  <div class="header-border-right"></div>
                </div>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
  <div id="carousel-example-1z" class="carousel slide carousel-1" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php foreach($slider as $i => $slide): ?>
        <li class="bg-ad <?= $i!=0 ?: 'active' ?>" data-target="#carousel-example-1z" data-slide-to="<?= $i ?>"><div></div></li>
      <?php endforeach ?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php foreach($slider as $i => $slide): ?>
        <div class="carousel-item <?= $i!=0 ?: 'active' ?>">
          <div class="bg-picture slider-photo lazy" title="<?= $slide->title ?>" data-bg="<?= file_url($slide->photo) ?>">
            <div class="mask">
              <h1 class="slider-title"><?= $slide->title ?></h1>
              <h2 class="slider-subtitle"><?= $slide->subtitle ?></h2>
            </div>
          </div>
        </div>
      <?php endforeach ?>


    </div>
  </div>

</div>
</header>