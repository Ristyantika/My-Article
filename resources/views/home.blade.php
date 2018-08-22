  <!--
  Author: W3layouts
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
<!-- header -->
@include('layout.header')
<!-- //header -->

<!-- banner slider-->
@include('layout.banner-slide')
<!-- //banner slider -->

<!-- About -->
<section class="about py-5">
  <div class="container-fluid py-lg-5 py-3">
    <div class="row about_grids">
      <div class="col-lg-4 col-md-6 team_grid1">
        <h3 class="heading text-uppercase">WELCOME TO MY WEBSITE</h3>
      </div>
      <div class="col-lg-3 col-md-6 about_img mt-md-0 mt-5 ">
        <div class="about_image">
          <img src="{{asset('bootstrap/images/v10.jpg')}}" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 team_grid1" style="margin-left: 5%">
        <h3 class="heading text-uppercase">WRITE YOUR ARTICLE</h3>
      </div>
    </div>
  </div>
</section>
<!-- //About -->
    
<!-- services -->
<section class="services">
  <div class="service-overlay py-5">
    <div class="row test-grids">
      <!-- testimonials -->
      <div class=" col-sm-8 clients">
        <div class="sreen-gallery-cursual">
          <div id="owl-demo" class="owl-carousel">
            
             <div class="item-owl">
              <div class="test-image">
                <img src="{{asset('bootstrap/images/islami1.jpg')}}" alt=" " class="img-fluid">
              </div>
              <div class="test-review">
                <h5>Jatuh Cinta Tak Pernah Salah</h5>
                <p> <span><i class="fa fa-quote-left" aria-hidden="true" style="color: white;"></i></span>Bukan perkara siapa cepat dia dapat, tapi tentang cara Allah mempertemukan dengan cara dan waktu yang tepat.Dan, bukan perkara aku ingin memilikimu dengan utuh, tapi tentang terus menerus mencintaimu dengan cara yang paling tulus, memaafkan tanpa memandang waktu, bersabar dalam setiap khilaf yang selalu kita bentuk, dan mengikhlaskan kehidupan bersamamu dalam balutan lika-liku<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
                  </div>
            </div>
            <div class="item-owl">
              <div class="test-image">
                <img src="{{asset('bootstrap/images/islami2.jpg')}}" alt=" " class="img-fluid">
              </div>
              <div class="test-review">
                 <h5>Api Tauhid</h5>
               <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Buku Api Tauhid karya Kang Abik ini baru saja terbit. Responnya luar biasa. Banyak yang sudah mencari sedari dulu. Tidak mengherankan memang, beliau sudah terkenal dengan karyanya yag selalu melejit. Pesan yang selalu disampaikan selalu menyerap dalam hati. Semoga saja pesan di novel ini dapat tersampaikan. Karena novel ini adalah novel sejarah, bukan novel cinta, yang terkesan ‘berat’.<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
              </div>
            </div>
             <div class="item-owl">
              <div class="test-image">
                <img src="{{asset('bootstrap/images/islami3.jpg')}}" alt=" " class="img-fluid">
              </div>
              <div class="test-review">
                 <h5>Tausiyah Cinta</h5>
                 <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Maka, lepaskanlah… Jika Sang Maha Cinta tak mengembalikanmu kepadaku dalam kehidupan ini, pasti Dia akan menyatukan kita dalam kehidupan yang akan datang. Andaikan Allah tak mempertemukan kita di Jabal Rahmah, ku berharap kita dipertemukan di Jannah. Jika memang engkau bukanlah nama yang bersanding dalam buku kehidupanku, tentu Allah tengah menyiapkan seseorang yang lebih baik. Saatnya merelakan<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
              </div>
            </div>
          </div>
        </div>
      <!--//screen-gallery-->

      </div>
      <!-- //testimonials -->
      <div class="col-sm-4 team_grid1">
        <h3 class="heading text-uppercase">List of Book</h3>
        <ul style="color: white;">
          <li>Jatuh Cinta Tak Pernah Salah</li>
          <li>Api Tauhid</li>
          <li>Tausiyah Cinta</li>
      </ul>
      </div>
    </div>
  </div>
</section>
<!-- //services -->

<section class="team py-5 my-lg-5 my-3">
  <div class="container-fluid ">
  <div class="row team_grids">
    @foreach($mains as $main)
    <div class="col-lg-2 col-md-3 col-6 mb-md-0 mb-5 w3l_team_grid">
      <div class="view view-second" style="width: 100px; margin-left: 60px">
        <img src="{{asset("images/$main->image_article")}}" alt=" " class="img-fluid" />
      </div>
      <h4 class="my-2">{{$main->title_article}}</h4>
      <form action="{{url("/home/$main->id_article")}}">
        <input type="submit" class="form-control" value="View More" >
      </form>
    </div>
    @endforeach
  </div>
  </div>
</section>

<!-- Testimonials -->

@include('layout.footer')
<!-- js-scripts -->  
@include('js.index-javascript')


</body>
</html>