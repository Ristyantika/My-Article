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
<input type="hidden" name="iduser" value="{{Auth::user()->id_user}}">
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
            <li><h3>My Article</h3></li>
          </ul>
          <div class="resp-tabs-container" style="margin-left: 5%;">
            <div class="tab1">
              <h4 class="">Email : </h4>
              <p>{{Auth::user()->email}}</p>
              <h4>Username</h4>
              <p>{{Auth::user()->username}}</p>
            </div>
            <div class="tab2">
              <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                <br>
                @foreach($myarticles as $myarticle)
                  <tr>
                    <th>{{$myarticle->title_article}}</th>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- //About -->
<section>
  <h1 style="text-align: center;">My Articles</h1>
</section>

<section class="team py-5 my-lg-5 my-3">
  <div class="container-fluid ">
  <div class="row team_grids">
    @foreach($myarticles as $myarticle)
    <div class="col-lg-2 col-md-3 col-6 mb-md-0 mb-5 w3l_team_grid">
      <div class="view view-second" style="width: 100px; margin-left: 60px">
        <img src="{{asset("images/$myarticle->image_article")}}" alt=" " class="img-fluid" />
      </div>
      <h4 class="my-2">{{$myarticle->title_article}}</h4>
      <form action="{{url("my_profile/$myarticle->id_article")}}">
        <input type="submit" class="form-control" value="View More" >
      </form>
      
    </div>
    @endforeach
  </div>
  </div>
</section>
    

@include('layout.footer')
<!-- @include('layout.login_')
@include('layout.register_') -->
<!-- js-scripts -->  

@include('js.index-javascript')


</body>
</html>