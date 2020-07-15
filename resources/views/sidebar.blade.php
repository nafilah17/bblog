<!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              @foreach ($articles as $a)
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">{{ $a->category_id}}</a>
                  </li>
                </ul>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        