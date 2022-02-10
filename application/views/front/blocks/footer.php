<footer>
  <div class="d-flex flex-wrap contact-row" id="<?= strtolower(slug($subpages[6]->title)) ?>">
    <div class="col-12">
      <h2 class="footer-title mb-5"><?= $contact_descriptions->title ?></h2>
    </div>
    <div class="col-12 col-lg-5 mb-4 mb-lg-0">
      <div class="footer-contact-data">
        <p><strong><?= $contact_settings->company ?></strong></p> 
        <p><strong><?= $contact_settings->name ?></strong></p>
        <br>
        <p><a class="footer-link" href="https://www.google.com/maps/place/<?= $contact_settings->address ?>,+<?= "$contact_settings->zip_code $contact_settings->city" ?>/data=!4m2!3m1!1s0x4706e0316527679d:0xb9b9a3ea09b6825?sa=X&ved=2ahUKEwiun5ivlbfuAhUJM-wKHeLKBpIQ8gEwAHoECAkQAQ" ><?= $contact_settings->address ?> <br>
          <?= "$contact_settings->zip_code $contact_settings->city" ?></a></p>
          <p><a href="mailto:<?= $contact_settings->email1 ?>" class="footer-link"><?= $contact_settings->email1 ?></a></p>
          <br>
          <?php foreach($departments as $dep): ?>
            <p><strong><?= $dep->title ?></strong></p>
            <p><strong><?= $dep->name ?></strong></p>
            <p><?= $contact_descriptions->dep_fax ?> <a class="footer-link" href="tel:<?= $dep->phone ?>"><?= $dep->phone ?></a></p>
            <p><?= $contact_descriptions->dep_phone ?> <a class="footer-link" href="<?= $dep->is_fax ? 'fax' : 'tel' ?>:<?= $dep->fax ?>"><?= $dep->fax ?></a></p>
            <br>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-12 col-lg-7">
        <form id="contact-form" method="post" action="<?= base(). 'mailer/send' ?>">
          <div class="d-flex flex-wrap inputs-wrapper">
            <div class="col-12 col-md-6 pl-0">
              <input class="custom-input" required name="name" placeholder="<?= $contact_descriptions->name ?>" type="text">
            </div>
            <div class="col-12 col-md-6 pr-0">
              <input class="custom-input" required name="email" placeholder="<?= $contact_descriptions->email ?>" type="email">
            </div>

            <div class="col-12 col-md-6 pl-0">
              <input class="custom-input" required name="phone" placeholder="<?= $contact_descriptions->phone ?>" type="text">
            </div>
            <div class="col-12 col-md-6 pr-0">
              <input class="custom-input" name="subject" required placeholder="<?= $contact_descriptions->subject ?>" type="text">
            </div>
            <div class="col-12 px-0">
              <textarea placeholder="<?= $contact_descriptions->text_us ?>" required name="message" id="" rows="4"></textarea>
            </div>
            <div class="col-12 px-0 pb-0">
              <div class="custom-control custom-checkbox p-0">
                <input type="checkbox" required="" name="rodo1" class="form-check-input" id="rodo1">
                <label class="form-check-label text-white checkbox-label" for="rodo1"><?= $settings->rodo ?></label>
              </div>
            </div>
            <div class="col-12 px-0">
              <div class="custom-control custom-checkbox p-0">
                <input type="checkbox" required="" name="rodo2" class="form-check-input" id="rodo2">
                <label class="form-check-label text-white checkbox-label" for="rodo2"><?= $settings->rodo_tel ?></label>
              </div>
            </div>
            <div class="col-12 text-center text-lg-right px-0">
              <button type="submit" class="button contact-button"><?= $contact_descriptions->button_name ?></button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-12">
        <h2 class="footer-title find-us" style="margin-top: 6rem"><?= $contact_descriptions->find_us ?></h2>
      </div>
    </div>
    <div class="col-12">
      <iframe src="<?= $contact_settings->map ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="d-flex flex-wrap footer2">
      <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <h3 class="footer-title2">
          <strong><?= $contact_settings->company ?></strong> <br>
          <?= $contact_settings->name ?>
        </h3>
        <a href="#"><img class="lazy footer-logo mt-3" data-src="<?= file_url($settings->logo) ?>" alt="logo"></a>
      </div>
      <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <ul class="contact-list">
          <li><span><?= $contact_descriptions->email2 ?> </span><a href="mailto:<?= $contact_settings->email1 ?>" class="footer-link"><?= $contact_settings->email1 ?></a></li>
          <li><span><?= $contact_descriptions->phone2 ?> </span><a href="tel:<?= $contact_settings->phone1 ?>" ><?= $contact_settings->phone1 ?></a></li>
          <li><span><?= $contact_descriptions->nip ?> </span><?= $contact_settings->nip ?></li>
        </ul>
        <div><a  class="address-link" href="https://www.google.com/maps/place/<?= $contact_settings->address ?>,+<?= "$contact_settings->zip_code $contact_settings->city" ?>/data=!4m2!3m1!1s0x4706e0316527679d:0xb9b9a3ea09b6825?sa=X&ved=2ahUKEwiun5ivlbfuAhUJM-wKHeLKBpIQ8gEwAHoECAkQAQ"><?= "$contact_settings->address, $contact_settings->zip_code" ?> <br> <?= $contact_settings->city ?></a></div>
        <a  href="<?= $contact_descriptions->stihl ?>"><img class="lazy stihl-logo mt-3" data-src="<?= file_url($contact_descriptions->photo) ?>" alt="<?= $contact_descriptions->alt ?>"></a>
      </div>
      <div class="col-12 col-lg-4 text-left text-lg-right ">
        <h3 class="footer-title2 font-weight-bolder"><?= $contact_descriptions->menu ?></h3>
        <ul class="contact-list subpages align-items-start align-items-lg-end">
          <?php foreach($subpages as $subpage): ?>
            <?php if($subpage->page != 'home'): ?>
              <li class="subpages-li">
                <a class="text-white" style="color: white!important" href="#<?= strtolower(slug($subpage->title)) ?>"><?= $subpage->title ?>
                <div class="subpage-border"></div>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach ?>
      </ul>
    </div>
    <div class="ad-awards">
      <div>
        <a  href="https://agencjamedialna.pro/"><img class="lazy" data-src="<?= assets() ?>img/adawards.svg" alt="adawards"></a>
        <div>Design and implementation by <a  href="https://agencjamedialna.pro/"><span>Ad Awards.</span></a> All rights reserved.</div>
      </div>
      <a  class="text-center text-lg-left" href="https://agencjamedialna.pro/">www.<span>AgencjaMedialna</span>.pro</a>
    </div>
  </div>

</footer>
<script type="text/javascript" src="<?= assets() ?>js/jquery.min.js"></script>
<script src="<?= assets() ?>lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/mdb.min.js"></script>
<script src="<?= assets() ?>dist/src/js/owl.carousel.js" data-cover></script>
<script src="<?= assets() ?>dist/src/js/owl.support.js" data-cover></script>
<script src="<?= assets() ?>dist/src/js/owl.autoplay.js" data-cover></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
<script src="<?= assets() ?>dist/owl.carousel.js"></script>
<script type="text/javascript">
  var lazyLoadInstance = new LazyLoad();
  if(!document.getElementById('alert-close')) decreaseSlider();
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

    $('.carousel-1').carousel({
      pause: "false"
    });

    $('.carousel-2').carousel({
    pause: "false"
});
  });
</script>
<script>
  window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "var(--first-color)",
          "text": "#fff"
        },
        "button": {
          "background": "var(--first-color)",
          "text": "white",
          "border": "2px solid var(--first-color)"
        }
      },
      "type": "opt-out",
      "content": {
        "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
        "dismiss": "Rozumiem",
        "deny": "",
        "allow": "Rozumiem",
        "link": "Czytaj więcej...",
        "href": "<?= file_url($settings->privace) ?>"
      }
    })});
  </script>
  <script async defer src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script>
  <script async>
    $('#contact-form').submit(function(event) {
      event.preventDefault();
      grecaptcha.ready(function() {
        grecaptcha.execute('<?= $settings->captcha ?>', {action: 'mailer/send'}).then(function(token) {
          $('#contact-form').prepend(`<input type="hidden" name="token" value="${token}">`);
          $('#contact-form').unbind('submit').submit();
        });;
      });
    });
  </script>
</body>
</html>