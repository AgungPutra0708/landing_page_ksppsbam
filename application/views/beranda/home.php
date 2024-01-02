
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <?php 
          foreach ($banner as $b) :
            ?>
          <div class="item">
            <div class="img-fill" style="background-image: url(<?= base_url('assets/') ?>images/<?= $b['gambar']; ?>);filter: blur(10px);-webkit-filter: blur(10px);">
            </div>
                <div class="text-content">
                  <h4><?= $b['judul']; ?></h4>
                  <p><?= $b['deskripsi']; ?></p>
                  <?php 
                    if ($b['button'] == "Y") {
                  ?>
                  <a href="<?= base_url($b['link']); ?>" class="filled-button">Read More</a>
                  <?php
                    }else{
                    }
                    ?>
                </div>
          </div>
          <?php endforeach; ?>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Akad Here -->
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Macam <em>Akad</em></h2>
              <span>Akad yang digunakan pada KSPPS Bina Auladi Mandiri</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item">
              <img src="assets/images/service_01.jpg" alt="">
              <div style="text-align: center;" class="down-content">
                <h4>Murabahah</h4>
                <!-- <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p> -->
                <a href="" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item">
              <img src="assets/images/service_02.jpg" alt="">
              <div style="text-align: center;" class="down-content">
                <h4>Mudharabah</h4>
                <!-- <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p> -->
                <a href="" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item">
              <img src="assets/images/service_03.jpg" alt="">
              <div style="text-align: center;" class="down-content">
                <h4>Ijaroh</h4>
                <!-- <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p> -->
                <a href="" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item">
              <img src="assets/images/service_03.jpg" alt="">
              <div style="text-align: center;" class="down-content">
                <h4>Wakalah</h4>
                <!-- <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p> -->
                <a href="" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akad Ends Here -->
    <!-- Jumlah Anggota Here -->
    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-6">
            <div class="left-content">
              <span>Lorem ipsum dolor sit amet</span>
              <h2>Our solutions for your <em>business growth</em></h2>
              <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue. 
              <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut posuere ante tortor ut neque.</p>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div> -->
          <div class="col-md-12 align-self-center">
            <h2 style="text-align: center;color:black;">Jumlah Anggota</h2>
            <div class="row">
              <div class="col-md-4">
                <div class="count-area-content shadow">
                  <div class="count-digit">945</div>
                  <div class="count-title">Tapos</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="count-area-content shadow">
                  <div class="count-digit">1280</div>
                  <div class="count-title">Sawangan</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="count-area-content shadow">
                  <div class="count-digit">578</div>
                  <div class="count-title">Sentul</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumlah Anggota Ends Here -->

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="more-info-content"> -->
              <div class="row">
                <div class="col-md-6">
                  <h3>Anggota</h3>
                  <div style="width: 50%;margin: 15px auto;">
                    <canvas id="linechartanggota" width="100" height="100"></canvas>
                  </div>
                </div>
                <div class="col-md-6">
                  <h3>Piutang</h3>
                  <div style="width: 50%;margin: 15px auto;">
                    <canvas id="linechartpiutang" width="100" height="100"></canvas>
                  </div>
                </div>
              </div>
              </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Pengurus(Direksi)</h2>
              <span><em>KSPPS Bina Auladi Mandiri</em></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              <div class="row">
                <div class="testimonial-item col-md-6">
                  <img src="<?= base_url('assets/') ?>images/users.jpg" alt="">
                  <div class="inner-content">
                    <h4>WILDANI YUSWA</h4>
                    <span>KETUA PENGURUS</span>
                    <!-- <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p> -->
                  </div>
                </div>

                <div class="testimonial-item col-md-6">
                  <img src="<?= base_url('assets/') ?>images/users.jpg" alt="">
                  <div class="inner-content">
                    <h4>MUHAMMAD AGUNG PUTRA NUGROHO</h4>
                    <span>SEKRETARIS</span>
                    <!-- <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="testimonial-item col-md-6">
                  <img src="<?= base_url('assets/') ?>images/users.jpg" alt="">
                  <div class="inner-content">
                    <h4>SULASTRI</h4>
                    <span>BENDAHARA</span>
                    <!-- <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p> -->
                  </div>
                </div>

                <div class="testimonial-item col-md-6">
                  <img src="<?= base_url('assets/') ?>images/users.jpg" alt="">
                  <div class="inner-content">
                    <h4>MUHAMMAD SULAIMAN MULADI</h4>
                    <span>MANAGER</span>
                    <!-- <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="col-md-12">
          <h4>Finance Business</h4>
          <div class="row">
            <?php 
            foreach ($mitra as $m) :
              ?>
            <div class="col-md-3">
              <a href="<?= $m['link']; ?>">
                <img style="width: 100%;" src="<?= base_url('assets/') ?>images/<?= $m['gambar']; ?>">
              </a>
            </div>
            <?php
            endforeach;
            ?>
          </div>
        </div>
      </div>
    </footer>
    <script  type="text/javascript">
      var canggota = document.getElementById("linechartanggota").getContext("2d");
      var cpiutang = document.getElementById("linechartpiutang").getContext("2d");
      var dataanggota = {
        labels: ["2016","2017","2018","2019","2020","2021"],
        datasets: [
        {
          label: "Anggota",
          fill: false,
          lineTension: 0.1,
          backgroundColor: "#29B0D0",
          borderColor: "#29B0D0",
          pointHoverBackgroundColor: "#29B0D0",
          pointHoverBorderColor: "#29B0D0",
          data: [<?php foreach ($anggota as $p) :  echo '"' . $p['2016'] . '","' . $p['2017'] . '","' . $p['2018'] . '","' . $p['2019'] . '","' . $p['2020'] . '","' . $p['2021'] . '",'; endforeach;?>]
        }
        ]
      };
      var datapiutang = {
        labels: ["2016","2017","2018","2019","2020","2021"],
        datasets: [
        {
          label: "Piutang",
          fill: false,
          lineTension: 0.1,
          backgroundColor: "#2A516E",
          borderColor: "#2A516E",
          pointHoverBackgroundColor: "#2A516E",
          pointHoverBorderColor: "#2A516E",
          data: [<?php foreach ($piutang as $p) :  echo '"' . $p['2016'] . '","' . $p['2017'] . '","' . $p['2018'] . '","' . $p['2019'] . '","' . $p['2020'] . '","' . $p['2021'] . '",'; endforeach;?>]
        }
        ]
      };

      var myBarChartanggota = new Chart(canggota, {
        type: 'line',
        data: dataanggota,
        options: {
          legend: {
            display: false
          },
          barValueSpacing: 20,
          scales: {
            yAxes: [{
              ticks: {
                min: 0,
              }
            }],
            xAxes: [{
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
              }
            }]
          }
        }
      });
      var myBarChartpiutang = new Chart(cpiutang, {
        type: 'line',
        data: datapiutang,
        options: {
          legend: {
            display: false
          },
          barValueSpacing: 20,
          scales: {
            yAxes: [{
              ticks: {
                min: 0,
              }
            }],
            xAxes: [{
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
              }
            }]
          }
        }
      });
    </script>