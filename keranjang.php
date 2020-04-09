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
          <h6 class="mb-0">Keranjang</h6>
        </div>
        <!-- Filter Option-->
        <a href="keranjang.php"><i class='lni lni-shopping-basket'></i></a>
      </div>
    </div>
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Checkout Wrapper-->
        <div class="checkout-wrapper-area py-3">
          <div class="credit-card-info-wrapper"><img class="d-block mb-4" src="img/bg-img/13.png" alt="">
            <center><h4>Keranjangmu masih kosong.</h4></center>
             </br>
            <a class="btn btn-success btn-lg w-100" href="index.php">Pilih Kadomu Sekarang</a>
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
          <li><a href="support.php"><i class="lni-question-circle"></i>Support</a></li>
        </ul>
      </div>
    </div>
<?php
include 'footer.php';
?>