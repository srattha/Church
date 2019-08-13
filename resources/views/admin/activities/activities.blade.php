@extends('admin.layout.main_sidebar')

@section('content')
<div class="main-panel" id="main-panel">
 @include('admin.layout.navbar')
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

        </div>
      </div>
    </div>
  </div>
</div>

</div>
{{-- <script>
$( document ).ready(function() {
    console.log( "ready!" );
});
</script> --}}
@endsection



