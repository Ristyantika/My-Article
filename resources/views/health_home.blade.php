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
        <h3 class="heading text-uppercase">WELCOME TO MY WEBSITE</h3>
      </div>
      <div class="col-lg-3 col-md-6 about_img mt-md-0 mt-5 ">
        <div class="about_image">
          <img src="{{asset('bootstrap/images/v10.jpg')}}" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 team_grid1" style="margin-left: 5%">
        <h3 class="heading text-uppercase">WRITE YOUR HEALTH ARTICLE</h3>
      </div>  
    </div>
  </div>
</section>
<!-- //About -->

<!-- //Team -->
<section class="team py-5 my-lg-5 my-3">
  <div class="container-fluid ">
  <div class="row team_grids">x
    @foreach($healths as $health)
      <div class="col-lg-2 col-md-3 col-6 mb-md-0 mb-5 w3l_team_grid">
        <div class="view view-second" style="width: 100px; margin-left: 60px">
            <img src="{{asset("images/$health->image_article")}}" alt=" " class="img-fluid" />
        </div>
        <h4 class="my-2">{{$health->title_article}}</h4>
        <form action="{{url("health_home/$health->id_article")}}">
          <input type="submit" class="form-control" value="View More" >
        </form>
      </div>
    @endforeach
  </div>
  </div>
</section>

<!-- Testimonials -->

@include('layout.footer')
@include('layout.login_')
@include('layout.register_')
<!-- js-scripts -->  
@include('js.index-javascript')


</body>
</html>