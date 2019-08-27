@extends('admin.layout.main_sidebar')
@section('css')

@endsection
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">เพิ่ม รูป กิจกรรม</h5>
          <button class="btn btn-primary" onclick="$('#files').click();">เพิ่ม</button>
          <form id="upload-form" enctype="multipart/form-data" method="post" action="{{ route('activities.store') }}">
            {{ csrf_field() }}
            <input type="file" name="files[]" id="files"  multiple accept="image/*, video/*" style="display: none;">
          </form>
        </div>
        <div class="card-body">
          <div class="row">
            @foreach($data as $img)

            <div class="col-md-4">
              <div id="mdb-lightbox-ui"></div>
              <div class="mdb-lightbox">
                <figure class="col-md-12">
                  <a href="{{$img->path}}" data-size="1600x1067">
                    <img alt="picture" src="/{{$img->path}}" class="img-fluid">
                  </a>
                </figure>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
   $("#files").change(function(){
    $("#upload-form").submit();
    
  });
   
   $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
 });
</script>



@endsection



