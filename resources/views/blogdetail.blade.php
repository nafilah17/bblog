<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post</title>

  <!-- Bootstrap core CSS -->
  <link type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link type="text/css" href="/assets/css/blog-home.css" rel="stylesheet">

</head>

<body>

 <!-- nav here -->
 @include('header')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
             <!-- Title -->
        <h1 class="mt-4">{{ $articles->title }}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{ $articles->author_id }}</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>{{ $articles->updated_at }}</p>
        <hr>
        <!-- Preview Image -->
        <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->
        <hr>
        <!-- Post Content -->
        <p class="lead">{{ $articles->content }}</p>   
        <hr>
      </div>


    

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</body>

</html>