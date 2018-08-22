<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
<!-- header -->
@include('layout.header_home')
<!-- //header -->

<div class="container">
  @foreach($details as $detail)
   <h1 style="text-align: center;">{{$detail->title_article}}</h1>
   <br>
   <br>
   <img style="width: 30%; display: block; margin-right: auto; margin-left: auto;" src="{{asset("images/$detail->image_article")}}" alt=" " class="" />
   <br>
   <br>
   <h5>{{$detail->description_article}}</h5>
   <br>
   <br>
   @endforeach
</div>


</div>

@include('layout.footer')
@include('layout.login_')
@include('layout.register_')
<!-- js-scripts -->   
<!-- @include('js.index-javascript') -->


</body>
</html>