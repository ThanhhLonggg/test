@extends('headeradmin')
@section('main-content-admin')
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <form action="{{ route('artists.update', $artist->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="FirstName">First Name</label>
                <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ $artist->FirstName }}">
            </div>
            <div class="form-group">
                <label for="LastName">Last Name</label>
                <input type="text" class="form-control" id="LastName" name="LastName" value="{{ $artist->LastName}}">
            </div>
            <div class="form-group">
                <label for="BirthDate">Birth Date</label>
                <input type="text" class="form-control" id="BirthDate" name="BirthDate" value="{{ $artist->BirthDate}}">
            </div>
            <div class="form-group">
                <label for="Img">Image</label>
                <input type="text" class="form-control" id="Img" name="Img" value="{{ $artist->Img}}">
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="text" class="form-control" id="Price" name="Price" value="{{ $artist->Price}}">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea class="form-control" id="Description" name="Description" rows="3" value="">{{$artist->Description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</section>
</div>

@endsection
@extends('footeradmin')