<?php $__env->startSection('content'); ?>

  <section class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 ">
          <h1>Lorem Ipsum<br class="d-none d-md-block" /> Dolor Sit Amet</h1>
          <a class="button button--primary" href="#">Contact Us</a>
        </div>  
      </div>
    </div>
  </section>

  <section class="callout">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Smith and Smith will fight for you!</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="pil">
    <div class="container">
      <div class="row title-row">
        <div class="col-3 d-none d-md-block"></div>
        <div class="col-sm-12 col-md-6">
          <div class="heading-line">
            <h3>Personal Injury Lawyers</h3>
            <div class="line"></div>
          </div>
        </div>
        <div class="col-3 d-none d-md-block"></div>
      </div>
      <div class="row content-row">
        <div class="col-sm-12 col-md-6">
          <h4>Slip & Fall Attorneys</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id turpis fermentum, rhoncus leo nec, pharetra quam. Curabitur dolor odio, venenatis at lobortis tincidunt, blandit in nibh. Nunc aliquet orci a neque suscipit, eu auctor sapien sagittis. Aenean vestibulum lectus ac urna mattis facilisis.</p>
          <a class="button button--primary" href="#">Contact Us</a>
        </div>
        <div class="col-sm-12 col-md-6">
          <img src="<?= App\asset_path('images/wet-floor-sign.jpg'); ?>" alt="Wet Floor Sign">
        </div>
      </div>
    </div>
  </section>

  <section class="heading-button">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Amet Sit Dolor</br>Ipsum Lorem</h1>
          <a class="button button--primary" href="#">Contact Us</a>
        </div>  
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>