<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/reg.css') }}" />
<style>
.reg{
  margin-top: -150px;
  margin-left: 100px;
  margin-right: 20px;
}
</style>

@include('header');

<div class="reg">  
<div class="contain">

  <form id="reg" method="post">
  {{csrf_field()}}
  @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Employee Registration</h3>
    <h4>Fill-up you departmental information</h4>


    <fieldset><span style="float:left;color:darkslateblue"> NAME</span>
      <input placeholder="Your Full Name" name="name" value="{{old('name')}}" class="text">
    </fieldset>
    <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
    @enderror -->
  

    <fieldset><span style="float:left;color:darkslateblue">EMAIL</span>
      <input placeholder="e.x: ...@haleon.com" name="email" value="{{old('email')}}" class="username">
    </fieldset>
    <!-- @error('username')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">PASSWORD</span>
      <input type="password" placeholder="Your pasword" name="password" value="{{old('password')}}" class="password">
    </fieldset>
    <!-- @error('password')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">CONFIRM PASSWORD</span>
      <input type="password" placeholder="Confirm your password" name="cpassword" value="{{old('cpassword')}}" class="confirmpass">
    </fieldset>
    <!-- @error('confirmpass')
            <span class="text-danger">{{$message}}</span>
    @enderror -->

    <br>
    <fieldset><span style="float:left;color:darkslateblue">DEPARTMENT</span>
    <select name="role" id="role" class="text" style="font-size: 17px;">
    <option>Choose Your Team</option>
        <option value="Admin_HR">Admin & HR</option>
        <option value="Expert_MKT">Expert Marketing</option>
        <option value="Sales_Dist">Sales & Distribution</option>
        <option value="Finance">Finance</option>
      </select>
    </fieldset><br>


      <button name="submit" class="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
