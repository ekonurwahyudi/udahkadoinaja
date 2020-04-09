<?php
include 'header2.php';
?>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button" onclick="history.back()"><i class="lni-arrow-left"></i></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Support</h6>
        </div>
        <!-- Filter Option-->
        <a href="keranjang.php"><i class='lni lni-shopping-basket'></i></a>
      </div>
    </div>
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Support Wrapper-->
        <div class="support-wrapper py-3">
          <!-- Accordian Area Wrapper-->
          <div class="accordian-area-wrapper mt-3">
            <!-- Accordian Card-->
            <div class="card accordian-card others-card clearfix">
              <div class="card-body">
                <h5 class="accordian-title">Pertayaan Umum</h5>
                <div class="accordion" id="accordionExample">
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingOne">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><span><i class="lni-brush-alt"></i>Berapa lama pengerjaanya?</span><i class="lni-chevron-right"></i></button>
                  </div>
                  <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <p>Pengerjaanya variasi ya kk</br>
                    <b>Bantal, Mug, Tumber</b> = 1 Hari</br>
                    <b>Kotak Musik</b> = 2-3 Hari</br>
                    <b>Jam</b> = 3-6 Hari</br>
                    <b>3D Box Lamp</b> = 3-14 Hari</p>
                  </div>
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingTwo">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span><i class="lni-delivery"></i>Apakah bisa COD?</span><i class="lni-chevron-right"></i></button>
                  </div>
                  <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <p>Untuk saat ini belum bisa COD ya kak.</p>
                  </div>
                  <div class="accordian-header" id="headingTree">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree"><span><i class="lni-gift"></i>Apakah produk bisa dikembalikan?</span><i class="lni-chevron-right"></i></button>
                  </div>
                  <div class="collapse" id="collapseTree" aria-labelledby="headingTree" data-parent="#accordionExample">
                    <p>Untuk pengembalian produk bisa dilakukan jika ada kesalahan warna / model / kondisi cacat ya kak.</p>
                  </div>
                  <div class="accordian-header" id="heading4">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"><span><i class="lni-handshake"></i>Apakah bisa jadi reseller/dropship?</span><i class="lni-chevron-right"></i></button>
                  </div>
                  <div class="collapse" id="collapse4" aria-labelledby="heading4" data-parent="#accordionExample">
                    <p>Bisa dong kak, nanti kakak dapat potongan 10% ya. Info lebih lanjut langsung hubungi kami ya.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Accordian Area Wrapper-->
          <!-- Accordian Area Wrapper-->
          <div class="accordian-area-wrapper mt-3">
            <!-- Accordian Card-->
            <div class="card accordian-card others-card clearfix">
              <div class="card-body">
                <h5 class="accordian-title">Lainnya</h5>
                <div class="accordion" id="accordionExample3">
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingFive">
                    <a href="cek-resi.php"><button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button"><span><i class="lni-delivery"></i>Cek Resi</span><i class="lni-chevron-right"></i></button></a>
                  </div>
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingSix">
                    <a href="pembayaran.php"><button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button"><span><i class="lni-credit-cards"></i>Pembayaran</span><i class="lni-chevron-right"></i></button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="suha-footer-nav h-100">
        <ul class="h-100 d-flex align-items-center justify-content-between">
          <li><a href="index.php"><i class="lni-home"></i>Home</a></li>
          <li><a href="eksplor.php"><i class="lni-grid-alt"></i>Eksplor</a></li>
          <li><a href="https://api.whatsapp.com/send?phone=628987088921&text=Hai%20kk%2C%20saya%20mau%20tanyak%20seputar%20kado"><i class="lni-whatsapp"></i>Chat</a></li>
          <li><a href="notifikasi.php"><i class="lni-alarm lni-tada-effect"></i>Notifikasi</a></li>
          <li class="active"><a href="support.php"><i class="lni-question-circle"></i>Support</a></li>
        </ul>
      </div>
    </div>
<?php
include 'footer.php';
?>