@extends('admin.layout.main_sidebar')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">เพิ่ม รูป</h5>
          <button class="btn btn-primary" onclick="$('#files').click();">เพิ่ม</button>
        </div>
        <div class="card-body">
         <div class="col-lg-3 col-md-6">
          <div class="col-md-4">
            <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','left')">Top Left</button>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
</div>
@endsection
