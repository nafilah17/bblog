<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link type="text/css" href="/assets/css/blog-home.css" rel="stylesheet">

</head>

<body>

  @include ('header');

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          @foreach ($articles as $a)
          
          <div class="card-body">
            <h2 class="card-title">{{ $a->title}}</h2>
            <p class="card-text">{{ (substr( $a->content,0,50))}}</p>
            <a href="/blog/detail/{
            {$a->id}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            {{ $a->created_at}}
            <a href="#">{{ $a->author_id}}</a>
          </div>
           @endforeach
        </div>
     

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      @include ('sidebar');

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@include ('footer');

</body>

</html>
