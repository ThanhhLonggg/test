@extends('headeradmin')
@section('main-content-admin')
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <form action="{{ route('artists.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="FirstName">First Name</label>
                <input type="text" class="form-control" id="FirstName" name="FirstName" value="">
            </div>
            <div class="form-group">
                <label for="LastName">Last Name</label>
                <input type="text" class="form-control" id="LastName" name="LastName" value="">
            </div>
            <div class="form-group">
                <label for="BirthDate">Birth Date</label>
                <input type="text" class="form-control" id="BirthDate" name="BirthDate" value="">
            </div>
            <div class="form-group">
                <label for="Img">Image</label>
                <input type="text" class="form-control" id="Img" name="Img" value="">
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="text" class="form-control" id="Price" name="Price" value="">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea class="form-control" id="Description" name="Description" rows="3" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
</section>
</div>

@endsection
@extends('footeradmin')