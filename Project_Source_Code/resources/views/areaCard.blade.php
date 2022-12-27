<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASE Areas</title>
    <link rel="stylesheet" href="{{ asset('css/try.css') }}">
    <!-- Font Awesome CDN-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <style>
    h1 {
    color: #23FE01;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
}

  .bar{
    background-color: rgba(0,0,0,0.8);
	width: 92%;
  margin-left: -16px;
  margin-bottom: 20px;
	font-size: 18px;
	border-radius: 5px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
	color: #fff;
  }
    </style>
  </head>
 
  <body>
  @include('top');
  @include('Chamber.ChamberSidebar');
  <div class="margin">
    <section>
      <div class="row">
      <div class="bar bar-body">
            <h1>ASE Areas</h1>
      </div>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <a href="/area/{{'Mirpur-1'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Mirpur-1</h5>
            <a class="read" href="/area/{{'Mirpur-1'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Mirpur-2'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Mirpur-2</h5>
            <a class="read" href="/area/{{'Mirpur-2'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Uttara-1'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Uttara-1</h5>
            <a class="read" href="/area/{{'Uttara-1'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Uttara-2'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Uttara-2</h5>
            <a class="read" href="/area/{{'Uttara-2'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Savar'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Savar</h5>
            <a  class="read"href="/area/{{'Savar'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Gazipur'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Gazipur</h5>
            <a class="read" href="/area/{{'Gazipur'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Bogura'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Bogura</h5>
            <a class="read" href="/area/{{'Bogura'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Rajshahi'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Rajshahi</h5>
            <a class="read" href="/area/{{'Rajshahi'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Kustia'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Kustia</h5>
            <a class="read" href="/area/{{'Kustia'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Mymensingh'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Mymensingh</h5>
            <a class="read" href="/area/{{'Mymensingh'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Chittagong(1)'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Chittagong(1)</h5>
            <a class="read" href="/area/{{'Chittagong(1)'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Chittagong(2)'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Chittagong(2)</h5>
            <a class="read" href="/area/{{'Chittagong(2)'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Chittagong(3)'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Chittagong(3)</h5>
            <a class="read" href="/area/{{'Chittagong(3)'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Cumilla'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Cumilla</h5>
            <a class="read" href="/area/{{'Cumilla'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Dhanmondi'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Dhanmondi</h5>
            <a class="read" href="/area/{{'Dhanmondi'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Gulshan'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Gulshan</h5>
            <a class="read" href="/area/{{'Gulshan'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Banasree'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Banasree</h5>
            <a class="read" href="/area/{{'Banasree'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Jatrabari'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Jatrabari</h5>
            <a class="read" href="/area/{{'Jatrabari'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Mohammadpur'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Mohammadpur</h5>
            <a class="read" href="/area/{{'Mohammadpur'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Narayangonj'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Narayangonj</h5>
            <a class="read" href="/area/{{'Narayangonj'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Narshingdi'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Narshingdi</h5>
            <a class="read" href="/area/{{'Narshingdi'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Noakhali'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Noakhali</h5>
            <a class="read" href="/area/{{'Noakhali'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Shantinogor'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Shantinogor</h5>
            <a class="read" href="/area/{{'Shantinogor'}}">Read More</a></a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <a href="/area/{{'Sylhet'}}" style="color:black">
              <i class="fas fa-shop"></i>
            </div>
            <h5 style="font-size: 18px;">Sylhet</h5>
            <a class="read" href="/area/{{'Sylhet'}}">Read More</a> </a>   
          </div>
        </div>
      </div>
    </section>
</div>
  </body>
</html>