@extends('footer')
@section('main-content')
<div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_2"><img src="{{$artist -> Img}}"></div>
                  </div>
                  <div class="col-md-6">
                  <form action="{{ route('requests.store') }}" method="post">
                    @csrf
                     <h1 class="about_taital" style="padding-top: 0px;">{{$artist -> FirstName}} {{$artist -> LastName}}</h1>
                     <input type="hidden" class="form-control" id="artist_FirstName" name="artist_FirstName" value="{{$artist -> FirstName}}">
                     <input type="hidden" class="form-control" id="artist_LastName" name="artist_LastName" value="{{$artist -> LastName}}">
                     <input type="hidden" class="form-control" id="artist_id" name="artist_id" value="{{$artist -> id}}">
                     <p class="about_text">Birth Date: {{$artist -> BirthDate}}</p>
                     <p class="about_text">Price: {{$artist -> Price}}</p>
                     <input type="hidden" class="form-control" id="artist_Price" name="artist_Price" value="{{$artist -> Price}}">
                     <p class="about_text">Description: {{$artist -> Description}}</p>
                     <div class="readmore_bt"><button type="submit" class="button"id="addBtn" style="width: 100%;float: left;font-size: 18px;color: #ffffff;background-color: #7c2c0c;border: 1px solid #b48569;padding: 8px 5px;text-align: center;font-weight: 500;">
                        Book</button></div>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

@endsection
@extends ('header')
