<legend>Add Outlet / Chambers</legend>
<form method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
<div class="pad">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</br></div>
    <div>
        <span style="color:#190033;font-size: 20px;">ASM Area-Expert
 &nbsp;</span></br>
        <input type="text" name="AsmAreaExpert" value="{{old('AsmAreaExpert')}}" size="40"></br>
        <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
         --></br>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">ASE Name
 &nbsp;</span></br>
        <input type="text" name="AseName" value="{{old('AseName')}}" size="40"></br>
        <!-- @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
         --></br>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">DHCP Name
 &nbsp;</span></br>
        <input type="text" name="DhcpName" value="{{old('DhcpName')}}" size="40"></br>
        </br>
    </div>

    <div>
        <span style="color:#190033;font-size: 20px;">Chamber / Institution name
 &nbsp;&nbsp;&nbsp;&nbsp;</span></br>
 <input type="text" name="Chamber_InstitutionName" value="{{old('Chamber_InstitutionName')}}" size="40"></br>
</br> </div>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Address-1
 &nbsp;</span></br>
        <input type="text" name="Address1" value="{{old('Address1')}}" size="40"></br>
        <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
         </br>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Contact Number
 &nbsp;</span></br>
        <input type="number" name="Contact_Number" value="{{old('Contact_Number')}}" size="40"></br>
        <!-- @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
      </br>
        </div>
</div></br>
      <button name="submit" type="submit" id="submit" 
      style="padding: 5px; width: 28%; font-size: 15px; 
      background:#190033; color:aliceblue">Submit</button>
</form>