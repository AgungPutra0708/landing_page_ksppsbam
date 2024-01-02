  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 08:30-16:30</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>021-87909064</a></li>
              <li><a href="#"><i class="fa fa-instagram"></i>@koperasi_bam</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>KSPPS Bina Auladi Mandiri</h2><span style="color: white;font-family: Brush Script MT;">Adil, Amanah, Maslahah</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <?php 
              foreach ($halaman as $h) :
                
                if ($h['title'] == $title) {
                  echo " <li class='nav-item active'>";
                }else{
                  echo " <li class='nav-item'>";
                }
                ?>
                <a class="nav-link" href="<?= base_url($h['link']); ?>"><?= $h['nama']; ?>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>