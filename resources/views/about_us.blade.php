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
@include('layout.header_home')
<!-- //header -->

<!-- banner slider-->
@include('layout.banner-slide')
<!-- //banner slider -->

<!-- About -->
<section class="about py-5">
  <div class="container-fluid py-lg-5 py-3">
    <div class="row about_grids">
      <div class="col-lg-4 col-md-6 team_grid1">
        <h3 class="heading text-uppercase">Nuzul Ristyantika Yuliana</h3>
      </div>
      <div class="col-lg-3 col-md-6 about_img mt-md-0 mt-5 ">
        <div class="about_image">
          <img src="{{asset('bootstrap/images/nuzul_photo.jpg')}}" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-5 col-md-12 about-right mt-lg-0 mt-5 pl-lg-5">
        <div id="horizontalTab">
          <ul class="resp-tabs-list">
            <li><h3>Biodata</h3></li>
            <li><h3>Social Media</h3></li>
            <li><h3>Project</h3></li>
          </ul>
          <div class="resp-tabs-container">
            <div class="tab1">
              <h4 class="">nuzulristyantikay@gmail.com</h4>
              <p class="">Malang, 04 July 1997</p>
              <p class="">Jl Anjasmoro no 45 Lawang, Malang, East Java</p>
              <p class="">0898445379</p>
            </div>
            <div class="tab2">
              <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                <br>
                <tr>
                  <th>Line</th>
                  <th>nuzulristyantika</th>
                </tr>
                <tr>
                  <th>Facebook</th>
                  <th>Nuzul Ristyantika</th>
                </tr>
                <tr>
                  <th>Whatsapp</th>
                  <th>08984475379</th>
                </tr>
                <tr>
                  <th>LinkedIn</th>
                  <th>nuzul ristyantika</th>
                </tr>
                <tr>
                  <th>Instagram</th>
                  <th>ristyantika</th>
                </tr>
              </table>
            </div>
            <div class="tab3">
              <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                <br>
                <tr>
                  <th>Github</th>
                  <th>ristyantika</th>
                </tr>
              </table>
              <div class="right-w3l mt-4 mb-3">
              <div class="buttons">
              </div>
            </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- //About -->
    
<!-- services -->
<section class="services">
  <div class="service-overlay py-5">
  <div class="container-fluid py-lg-5 py-3">
    <div class="row service_grids">
      <div class="col-sm-6 ser_grid1">
        <h3>Organizational Experience</h3>
        <ul style="color: white;">
          <li>Staff of Internal Affair Department Himpunan Mahasiswa Teknik Computer-Informatics</li>
          <li>Vice Chairman of Appreciation (Make a poster for appreciate someone who be the winner in competition etc)</li>
          <li>Organizing Committee of GERIGI Institut Teknologi Sepuluh November 2016</li>
          <li>The expert of Internal Affair Department Himpunan Mahasiswa Teknik Computer-Informatics</li> 
          <li>Staff of Entrepreneurship Department in FTIf (Technology Information Faculty)</li> 
          <li>Technical Staff of Schematics National Logic Competition</li>
          <li>The expert of Schematics National Logic Competition</li>
          <li>Head of Data Mining Club in Informatics Department</li>
          <li>Administrator in Laboratory Intelligent Computation and Vision</li>
        </ul>
      </div>
      <div class="col-sm-6 ser_grid1">
        <h3>Employment</h3>
        <ul style="color: white;">
          <li>Teaching Assistant of Basic Programming course August 2017 – December2017</li>
        </ul>
        <h3>Technical Experience</h3>
        <ul style="color: white;">
          <li>Building Linux From Scratch</li>
          <li>Simple Website using Bootstrap</li>
          <li>Server and Client Socket Programming</li>
          <li>Simple Project Image Processing and  Classification</li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- //services -->

<!-- Team -->
<section class="team py-5 my-lg-5 my-3">
  <div class="container-fluid ">
  <div class="row team_grids">
    <div class="col-lg-4 col-12 mb-lg-0 mb-4 team_grid1">
      <h3 class="heading text-uppercase">Programming Language</h3>
      
    </div>
    <div class="col-lg-2 col-md-3 col-6 mb-md-0 mb-5 w3l_team_grid">
      <div class="view view-second" style="width: 100px; margin-left: 60px">
        <img src="{{asset('bootstrap/images/c.jfif')}}" alt=" " class="img-fluid" />
      </div>
      <h4 class="my-2"> C++ used in Competitive Programming</h4>
      <p>3 years</p>
    </div>
    <div class="col-lg-2 col-md-3 col-6 mb-md-0 mb-5 w3l_team_grid">
      <div class="view view-second" style="width: 100px; margin-left: 60px">
        <img src="{{asset('bootstrap/images/python.png')}}" alt=" " class="img-fluid" />
      </div>
      <h4 class="my-2">Python in Data mining and Network Programming</h4>
      <p>1 and Half years</p>
    </div>
    <div class="col-lg-2 col-md-3 col-6 w3l_team_grid">
      <div class="view view-second" style="width: 100px; margin-left: 60px">
        <img src="{{asset('bootstrap/images/html.jfif')}}" alt=" " class="img-fluid" />
      </div>
      <h4 class="my-2">MySQL, HTML, CSS and Bootstrap used in Web Programming</h4>
      <p>2 years</p>
    </div>
    <div class="col-lg-2 col-md-3 col-6 w3l_team_grid">
      <div class="view view-second" style="width: 100px; margin-left: 60px">
        <img src="{{asset('bootstrap/images/matlab.jfif')}}" alt=" " class="img-fluid" />
      </div>
      <h4 class="my-2">Java in Network Programming and Matlab in Digital Image Processing</h4>
      <p>1 year</p>
    </div>
  </div>
  </div>
</section>
<!-- //Team -->

<!-- Testimonials -->
<section class="testimonials py-5">
  <div class="container-fluid py-lg-5">
    <div class="row test-grids">
      <!-- testimonials -->
      <div class=" col-sm-8 clients">
        <div class="sreen-gallery-cursual">
          <div id="owl-demo" class="owl-carousel">
             <div class="item-owl">
              <div class="test-image">
                <img src="{{asset('bootstrap/images/basic.jpg')}}" alt=" " class="img-fluid">
              </div>
              <div class="test-review">
                <h5>Course Taken</h5>
                <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Basic Programming, Discrete Mathematics, English Language, Information Technology and System, Digital System, Calculus, Linear Algebra, Computer Organization, Informatics Mathematics<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
                  <p class="date">First Year</p>
                  </div>
            </div>
            <div class="item-owl">
              <div class="test-image">
                <img src="{{asset('bootstrap/images/web.jpg')}}" alt=" " class="img-fluid">
              </div>
              <div class="test-review">
                 <h5>Course Taken</h5>
               <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Object Oriented Programming, Algorithm Design and Analysis, Probability and Statistics, Database System and Management, Operating System, Graph Theory, Computer Network, Atrificial Intelligence, Web Programming<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
                  <p class="date">Second Year</p>
              </div>
            </div>
             <div class="item-owl">
              <div class="test-image">
                <img src="{{asset('bootstrap/images/data.png')}}" alt=" " class="img-fluid">
              </div>
              <div class="test-review">
                 <h5>Course Taken</h5>
                 <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Information System Analysis and Design, Computer Graphic, Computational Intelligence, Numerical Computing, Network Programming, Software Design, Special Topics for Algrorithm and Programming, Human and Computer Interaction, Information and Network Security, Requirement Engineering, Software Project Management, Data Mining, Digital Image Processing, Big Data<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
                  <p class="date">Third Year</p>
              </div>
            </div>
          </div>
        </div>
      <!--//screen-gallery-->

      </div>
      <!-- //testimonials -->
      <div class="col-sm-4 team_grid1">
        <h3 class="heading text-uppercase">Education</h3>
        <ul style="color: white;">
          <li>Institut Teknologi Sepuluh Nopember</li>
          <li>Informatics Department </li>
          <li>Current GPA – 3.60</li>
      </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials -->

@include('layout.footer')
<!-- @include('layout.login_')
@include('layout.register_') -->
<!-- js-scripts -->  

@include('js.index-javascript')


</body>
</html>