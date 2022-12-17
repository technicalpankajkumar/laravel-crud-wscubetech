<!doctype html>
<html lang="en">
  <head>
      
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
@include('layouts.header');

    <form action="{{$url}}" method="{{$method}}">
      @csrf
    <div class="container bg-white pt-3 pb-3" style="border-radius: 10px;">
      <center><h1 class="text-success">{{$title}}</h1></center>
      <div class="row">
        <div class="col-6 bg-white p-5 "style="border-radius: 10px; border:solid black">
              
             <x-inputcomponent type="text" name="name" lable="Name" :value="$value=$customer->name"/>
             
             <span class=" text-danger">@error('name')
             {{$message}}
             @enderror</span>
             <x-inputcomponent type="email" name="email" lable="Email" :value="$value=$customer->email"/> 
             <span class=" text-danger">@error('email')
             {{$message}}
             @enderror</span>
             <x-inputcomponent type="password" name="password" lable="Password"/>
             <span class=" text-danger">@error('password')
             {{$message}}  
             @enderror</span>
             <x-inputcomponent type="password" name="password_confirmation" lable="Password Confirmed"/>
             <span class=" text-danger">@error('password_confirmation')
             {{$message}}  
             @enderror</span><br>
             <label>Gender</label>
             <div class="form-check" >
               <label class="form-check-label"style="margin-right: 20px;">
                 <input type="radio" class="form-check-input" name="gender" id="" value="M" checked >
                 Male
               </label>
               <label class="form-check-label"style="margin-right: 20px;">
                <input type="radio" class="form-check-input" name="gender" id="" value="F" >
                Female
              </label>
              <label class="form-check-label"style="margin-right: 20px;">
                <input type="radio" class="form-check-input" name="gender" id="" value="O" >
                Other
              </label>
             </div>
             
        </div>
        <div class="col-6 p-5 bg-white"style="border-radius: 10px; border:solid black">
          <x-inputcomponent type="text" name="mobile_no" lable="Mobile No." :value="$value=$customer->mobile_no"/>
          <span class=" text-danger">
            @error('mobile_no')
          {{$message}}
          @enderror</span>
          <x-inputcomponent type="text" name="city" lable="City" :value="$value=$customer->city"/> 
          <span class=" text-danger">@error('city')
          {{$message}}
          @enderror
          </span>
          <x-inputcomponent type="text" name="state" lable="State" :value="$value=$customer->state"/>
          <span class=" text-danger">@error('state')
          {{$message}}
          @enderror
          </span>
          <x-inputcomponent type="text" name="country" lable="Country" :value="$value=$customer->country"/>
          <span class=" text-danger">@error('country')
          {{$message}}
          @enderror</span>
          <center><button class="btn btn-success w-100">{{$Enter}}</button></center>
         
        </div>
        
      </div>
      
    </div>
  </form>
      
    
</body>
</html>