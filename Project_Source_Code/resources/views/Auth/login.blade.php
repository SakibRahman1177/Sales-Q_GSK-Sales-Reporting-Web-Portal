<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/reg.css') }}" />
<style>
body{
    background-image: url('../images/ad1.png');
    background-repeat: no-repeat;
    background-size: cover;
}
.bar{
background-color: rgba(0,0,0,0.8);
	width: 100%;
  height: 100%;
	font-size: 18px;
	border-radius: 5px;
	border: 0.3px solid rgba(255,255,255,0.2);
	box-shadow: 1px 1px 5px rgba(0,0,0,0.2);
	color: #fff;
}
</style>

<div class="bar"> 
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
    <h3>Login</h3>
    <h4>Sales & Distribution Channel</h4>


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


      <button name="submit" class="submit" id="contact-submit" data-submit="...Sending">Signin</button>
    </fieldset>
  </form>
</div>
</div>
