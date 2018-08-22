<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
<!-- header -->
@include('layout.header')
<!-- //header -->

<div class="container">
   <form action="{{ URL::to('add_articles')}}" method="post" enctype="multipart/form-data" class="form-image-upload">
          {{ csrf_field() }}
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="row" style="margin-top: 3%; margin-left: 10%">
          <div class="col-sm-4">
                  <img src="{{asset("images/$blogs->image_article")}}" alt="" class="img-fluid">
                  <input type="file" name="image_article" style="margin-top: 10%" id="file" class="form-control">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                <!-- </form> -->
          </div>
          <div class="col-sm-8">
            <div class="form-group">
              <h3><label for="" class="col-form-label">Title Article</label></h3>
              <input type="text" class="form-control" placeholder="" name="title_article" id="" required="">

            </div>
            <div class="form-group">
              <h3><label for="" class="col-form-label">Category</label></h3>
              <select style="width: 200px; height: 30px" name="category_article" class="form-control">
                <option value="Islamic">Islamic</option>
                <option value="Health">Health</option>
              </select>
            </div>
            <div class="form-group">
              <label for="" class="col-form-label">Description</label>
             <textarea type="text" class="form-control" placeholder="" name="description_article" id="" required="" rows="15"></textarea>
            </div>
            <div>
              <input type="hidden" name="id_user" value="{{Auth::user()->id_user}}">
            </div>
            <div class="right-w3l mt-4 mb-3">
              <input type="submit" class="form-control" value="Submit Article">
            </div>
              <!-- <div class="col-md-5">
                    <strong>Title:</strong>
                    <input type="text" name="title_article" class="form-control" placeholder="Title">
                </div>
                <div class="col-md-5">
                    <strong>Category:</strong>
                    <select style="width: 200px; height: 30px" name="category_article" class="form-control">
                      <option value="Islamic">Islamic</option>
                      <option value="Love">Love</option>
                  </select>
                </div>
                <div class="col-md-5">
                    <strong>Description:</strong>
                    <input type="text" name="description_article" class="form-control" placeholder="Description">
                </div>
                <div class="col-md-2">
                    <br/>
                    <button type="submit" class="btn btn-success">Upload</button>
                </div> -->
            </div>
        </div>
            

        <!-- <div class="about_image" style="width: 250px">
          <img alt="" class="img-fluid" name="image_article">
        </div>
          <input type="file" name="image_article" style="margin-top: 10%" id="file">
          <input type="submit" name="submit" value="Display">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
        </form>
        
</div>


</div>

@include('layout.footer')
@include('layout.login_')
@include('layout.register_')
<!-- js-scripts -->   
@include('js.index-javascript')


</body>
</html>