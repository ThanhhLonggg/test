@extends('footer')
@section('main-content')
<div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_2"><img src="{{$actor -> Img}}"></div>
                  </div>
                  <div class="col-md-6">
                  <form action="{{ route('requests.store') }}" method="post">
                    @csrf
                     <h1 class="about_taital" style="padding-top: 0px;">{{$actor -> FirstName}} {{$actor -> LastName}}</h1>
                     <input type="hidden" class="form-control" id="actor_FirstName" name="actor_FirstName" value="{{$actor -> FirstName}}">
                     <input type="hidden" class="form-control" id="actor_LastName" name="actor_LastName" value="{{$actor -> LastName}}">
                     <input type="hidden" class="form-control" id="actor_id" name="actor_id" value="{{$actor -> id}}">
                     <p class="about_text">Birth Date: {{$actor -> BirthDate}}</p>
                     <p class="about_text">Price: {{$actor -> Price}}</p>
                     <input type="hidden" class="form-control" id="actor_Price" name="actor_Price" value="{{$actor -> Price}}">
                     <p class="about_text">Description: {{$actor -> Description}}</p>
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
