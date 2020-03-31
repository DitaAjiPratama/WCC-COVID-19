<div class="d-sm-flex align-items-center justify-content-between my-4">
  <h3 class="h3">DKI Jakarta</h3>
  <?php
    $data_jakarta = mysqli_query($con, "SELECT positif, sembuh, meninggal, last_update, source FROM provinsi WHERE nama='Jakarta'");
    while ($row = mysqli_fetch_array($data_jakarta)) {
      $data_jakarta_positif     = $row['positif'];
      $data_jakarta_sembuh      = $row['sembuh'];
      $data_jakarta_meninggal   = $row['meninggal'];
      $data_jakarta_last_update = $row['last_update'];
      $data_jakarta_source      = $row['source'];
    }
  ?>
  <h5 class="h5">(Last Update: <?= $data_jakarta_last_update; ?> - <a href="<?= $data_jakarta_source; ?>" target="_blank">Source</a>)</h5>
</div>

<div class="row">

  <div class="col-md-9">

    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="card text-gray-100 shadow h-100 py-2" style="background:#57C4ED;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Positif COVID-19</div>
                <div class="h5 mb-0 font-weight-bold"><?= $data_jakarta_positif; ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-head-side-cough fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card text-gray-100 shadow h-100 py-2" style="background:#79CAC5;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Sembuh</div>
                <div class="h5 mb-0 font-weight-bold"><?= $data_jakarta_sembuh; ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-notes-medical fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card text-gray-100 shadow h-100 py-2" style="background:#4A4A4A;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Meninggal</div>
                <div class="h5 mb-0 font-weight-bold"><?= $data_jakarta_meninggal; ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-skull-crossbones fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-md-3 mb-4">
        <div class="card text-gray-100 shadow h-100 py-2" style="background:#2060A7;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">On construction</div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End col timeline -->

      <!-- Peta disini -->
      <!-- <div class="col-md-9 mb-4"> -->
      <div class="col-md-12 mb-4">
        <div class="card text-gray-100 shadow h-100 p-0" style="background:#222222;">

          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqEEJqD-6CS1FMneeEsgVRViLE8i0Tmgw&callback=initMap&libraries=drawing&pb=!1m18!1m12!1m3!1d7933.03325458806!2d106.7975101741862!3d-6.19535793205976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6965c21cf89%3A0xb4e9aae2a244be30!2sSlipi%2C+Palmerah%2C+West+Jakarta+City%2C+Jakarta!5e0!3m2!1sen!2sid!4v1560134937615!5m2!1sen!2sid"></script>
          <div class="rounded" id="peta" style="width: 100%; height: 400px;"></div>
          <?php include "module/wilayah-jakarta.php"; ?>
          * Refresh halaman kembali jika peta tidak muncul

        </div>
      </div>
      <!-- End col peta -->

    </div>
    <!-- End row -->

  </div>
  <!-- End parent col 9 -->

  <div class="col-md-3">
    <div class="row">
      <div class="col-md-12">

        <div class="card text-gray-100 shadow p-3" style="background:#2060A7;">
          <h3>Data Jakarta</h3>
          <canvas style="height:300px;" id="piechart"></canvas>
        </div>

      </div>
    </div>
  </div>
  <!-- End parent col 3 -->

</div>
<!-- End row -->

<hr>

<div class="row">

  <div class="col-md-4 mb-4">
    <a href="http://widuricomputercommunity.com/" target="_blank">
      <div class="card text-gray-100 shadow h-100 py-2" style="background:#2060A7;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Website</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-globe fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-4 mb-4">
    <a href="https://github.com/WiduriComputerCommunity/WCC-COVID-19" target="_blank">
      <div class="card text-gray-100 shadow h-100 py-2" style="background:#211F1F;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Github</div>
            </div>
            <div class="col-auto">
              <i class="fab fa-github fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-4 mb-4">
    <a href="https://t.me/WiduriComputerCommunity" target="_blank">
      <div class="card text-gray-100 shadow h-100 py-2" style="background:#0088CC;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Telegram</div>
            </div>
            <div class="col-auto">
              <i class="fab fa-telegram-plane fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

</div>
<!-- End row -->
