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
          <h6 class="mb-0">Notifikasi</h6>
        </div>
        <!-- Filter Option-->
        <a href="keranjang.php"><i class='lni lni-shopping-basket'></i></a>
      </div>
    </div>
    <!-- Page Content Wrapper-->
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Details Area-->
        <div class="notification-area pt-3 pb-2">
          <!-- Notification Details-->
          <div class="list-group-item d-flex py-3"><span class="noti-icon"><i class="lni-alarm lni-tada-effect"></i></span>
            <div class="noti-info">
              <h6>Promo #DiRumahAja</h6>
              <p>Khusus untuk kamu yang dirumah aja, dapatkan <b>Gratis Ongkir sampai Rp. 15.000</b> dengan min. belanja Rp.200.000</p>
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
          <li class="active"><a href="notifikasi.php"><i class="lni-alarm lni-tada-effect"></i>Notifikasi</a></li>
          <li><a href="support.php"><i class="lni-question-circle"></i>Support</a></li>
        </ul>
      </div>
    </div>
<?php
include 'footer.php';
?>