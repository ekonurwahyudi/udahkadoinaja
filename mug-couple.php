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
          <h6 class="mb-0">Mug Couple</h6>
        </div>
        <!-- Filter Option-->
        <a href="keranjang.php"><i class='lni lni-shopping-basket'></i></a>
      </div>
    </div>
    <div class="page-content-wrapper">
      <!-- Product Slides-->
      <div class="product-slides owl-carousel">
        <!-- Single Hero Slide-->
        <div class="single-product-slide"><img src="img/product/11.jpg" alt=""></div>
        <!-- Single Hero Slide-->
        <div class="single-product-slide"><img src="img/product/21.jpg" alt=""></div>
        <div class="single-product-slide"><img src="img/product/22.jpg" alt=""></div>
        <div class="single-product-slide"><img src="img/product/23.jpg" alt=""></div>
        <!-- Single Hero Slide-->
      </div>
      <div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3">
          <div class="container d-flex justify-content-between">
            <div class="p-title-price">
              <h6 class="mb-1">Mug Couple</h6>
              <p class="sale-price mb-0">Rp. 147.250<span>Rp. 155.000</span></p>
            </div>
          </div>
          <!-- Ratings-->
          <div class="product-ratings">
            <div class="container d-flex align-items-center justify-content-between">
              <div class="ratings"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
              <div class="total-result-of-ratings"><span>4.93</span><span>Very Good</span></div>
            </div>
          </div>
        </div>
        <!-- Selection Panel-->
        <!-- Product Specification-->
        <div class="p-specification bg-white mb-3 py-3">
          <div class="container">
            <h6>Spesifikasi</h6>
            <p>Mug ini cocok buat minum teh, kopi, atau susu. Dan awet dipakai selama tidak dicuci dengan serat kawat. Yang pastinya ini akan menjadi kado yang bermanfaat karena bisa dipakai keperluan minum sehari-hari.</p>
            <ul>
              <li>👉🏼 Mug Keramik Stoneware</li>
              <li>👉🏼 Tinggi 9,7cm</li>
              <li>👉🏼 Diameter 7 cm</li>
              <li>👉🏼 Bahan Baku Impor</li>
              <li>👉🏼 Dishwaser save</li>
              <li>👉🏼 Refrigerator save</li>
            </ul>
          </div>
        </div>
        <!-- Rating & Review Wrapper-->
        <div class="rating-and-review-wrapper bg-white py-3 mb-3">
          <div class="container">
            <h6>Ratings &amp; Reviews</h6>
            <div class="rating-review-content">
              <ul>
                <li class="single-user-review d-flex">
                  <div class="user-thumbnail"><img src="img/bg-img/15.jpg" alt=""></div>
                  <div class="rating-comment">
                    <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
                    <p class="comment mb-0">Barang udah sampe ya kk...makasih banyakk, bagus bagett.</p>
                  </div>
                </li>
                <li class="single-user-review d-flex">
                  <div class="user-thumbnail"><img src="img/bg-img/21.jpg" alt=""></div>
                  <div class="rating-comment">
                    <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
                    <p class="comment mb-0">Terima kasih kak kadonya, bagus banget. makin sukses ya kak udahanya makin berkembang terus dan banyak yang beli.</p>
                  </div>
                </li>
                <li class="single-user-review d-flex">
                  <div class="user-thumbnail"><img src="img/bg-img/20.jpg" alt=""></div>
                  <div class="rating-comment">
                    <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
                    <p class="comment mb-0">wah mantap kadonya. sampeknya sebelum hari H lagi. pengerjaanya ternyata cepat dan pengirimannya juga cepat banget.</p>
                  </div>
                </li>
                <li class="single-user-review d-flex">
                  <div class="user-thumbnail"><img src="img/bg-img/18.jpg" alt=""></div>
                  <div class="rating-comment">
                    <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
                    <p class="comment mb-0">Terima kasih kk, hadiahnya sudah saya terima. bagus banget..unik..</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Ratings Submit Form-->
        <div class="ratings-submit-form bg-white py-3">
          <div class="container">
            <h6>Submit A Review</h6>
            <form action="#" method="POST">
              <div class="form-group">
                <div class="stars">
                  <input class="star-1" type="radio" name="star" id="star1">
                  <label class="star-1" for="star1"></label>
                  <input class="star-2" type="radio" name="star" id="star2">
                  <label class="star-2" for="star2"></label>
                  <input class="star-3" type="radio" name="star" id="star3">
                  <label class="star-3" for="star3"></label>
                  <input class="star-4" type="radio" name="star" id="star4">
                  <label class="star-4" for="star4"></label>
                  <input class="star-5" type="radio" name="star" id="star5">
                  <label class="star-5" for="star5"></label><span></span>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="comments" name="comment" cols="30" rows="10" data-max-length="200"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="suha-footer-nav h-100 py-1">
          <ul>
            <center>
                <a href="https://api.whatsapp.com/send?phone=628987088921&text=Hai%20kk%2C%20saya%20mau%20tanyak%20seputar%20Mug%20Couple"><button class="btn btn-success btn-lg" ><i class="lni-whatsapp"></i>&nbsp;Whatsapp</button>&nbsp;&nbsp;</a>
                <a href="https://api.whatsapp.com/send?phone=628987088921&text=Hai%20kk%2C%20saya%20mau%20tanyak%20seputar%20Mug%20Couple"><button class="btn btn-danger btn-lg w-50">Pesan sekarang</button></a>
            </center>
          </ul> 
      </div> 
    </div>
<?php
include 'footer.php';
?>