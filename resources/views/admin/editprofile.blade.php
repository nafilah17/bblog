<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

<title>Admin | Blog</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" type="text/css" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="/assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!--NAVBAR HERE -->
@include('admin/header')
  <!-- end -->

<!-- SIDEBAR HERE -->
@include('admin/sidebar')
  <!-- end -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Welcome!</h5>
              </div>
              <div class="card-body">
               
              <form action="/profile/update/{{ $profiles->id }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              
                <div class="form-group">
                  <label for="id">Id:</label>
                  <input type="text" class="form-control" id="id" value="{{$profiles->id}}" name="id">
                </div>
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" value="{{$profiles->name}}" name="name">
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="birthday">Birthday:</label>
                  <input type="datetime-local" class="form-control" id="birthday" value="{{$profiles->birthday}}" name="birthday">
                </div>
                <div class="form-group">
                  <label for="created_at">Created at:</label>
                   <input type="time" id="created_at" class="form-control" name="timestamp">
                </div>
               
                 <div class="form-group">
                  <label for="updated_at">Updated at:</label>
                   <input type="time" id="updated_at" class="form-control" name="timestamp">
                </div>
               
                <button type="submit" class="btn btn-default">Simpan</button>
            
                
              </div>
            </div>
          </div>
        <!-- /.col-md-6 -->
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->



  <!-- FOOTER HERE -->
  @include('admin/footer')
  <!-- END -->

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="/assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="/assets/admin/dist/js/adminlte.min.js"></script>


</body>
</html>
