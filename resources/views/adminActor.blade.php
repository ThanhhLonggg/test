@extends('headeradmin')
@section('main-content-admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top:50px;">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Actor Management</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    <form action="{{ route('actors.create') }}" method="GET">
                      <button type="submit" class="btn btn-default">Add</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Birthday</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($actors as $actor)
                   <tr>
                      <td>{{$actor -> id}}</td>
                      <td><img style="height:100px" src="{{$actor -> Img}}" alt=""></td>
                      <td>{{$actor ->FirstName}}</td>
                      <td>{{$actor ->LastName}}</td>
                      <td>{{$actor ->BirthDate}}</td>
                      <td>{{$actor ->Price}}</td>
                      <td>{{$actor ->Description}}</td>
                      <td>
                            <a href="{{ route('actors.edit', $actor->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('actors.destroy', $actor->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection
@extends('footeradmin')