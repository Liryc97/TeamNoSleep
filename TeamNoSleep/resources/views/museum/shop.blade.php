@extends('layouts.main')

@section('content')
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#" ><img src="http://via.placeholder.com/50x50" style="width 30%"></a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <form class="form-inline">
                <div class="md-form my-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
              </form>
        </li>
  
        <!-- Dropdown -->
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Account</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Log out</a>
            <a class="dropdown-item" href="#">Test</a>
          </div> --}}
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Artist</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Types of Arts</a>
              <a class="dropdown-item" href="#">Top Artist</a>
              <a class="dropdown-item" href="#">Sale</a>
            </div>
          </li>
      </ul>

      <ul class="navbar-nav">
       <!-- Dropdown -->
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Account</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Log out</a>
          <a class="dropdown-item" href="#">Test</a>
        </div>
      </li>
      </ul>

     
      
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->
 


<div class="container-fluid bg-white" style="margin-top: 50px">
    
        <div class="row">
            <div class="col-md-2">
                <span class="anchor" id="formUserEdit"></span>
                    
                <div class="">
                    <div>
                    <img src="http://via.placeholder.com/50x50" style="width:30%"alt="">
                    </div>
                    <h3>Id no: 1</h3>
                    <h3>Name:</h3>
                    <h3>City:</h3>
                    <h3>Rigeion:</h3>
                    <h3>Contact:</h3>
                    <h3>Email:</h3>
                </div>
                            
            </div>
            <div class="col-md-10">
                <div>
                <img src="http://via.placeholder.com/350x50" style="width:100%" alt="">
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Ditails</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false">Work</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false">Contact</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Raw denim you
                      probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                      cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
                      keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
                      placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                      qui.</div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
                      locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
                      blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
                      Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum
                      PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS
                      salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
                      sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                      stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
                      wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
                      lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                      locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
                      squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                      etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
                      stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
                  </div>
            </div>
            
        </div>

</div>
{{-- <div class="cta-sektion  border py-3">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 col-sm-3 col-xs-12 ">
                <button type="button" class="btn bg-danger twhite" style="">Start Right Now</button>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="footer  py-5  ">
	<div class="container">
	  <div class="row">
		
		<div class="col-xs-12 col-sm-6 col-md-3 footer-two">
		    <h5>Information </h5>
		    <ul class="list-unstyled">
									<li><a href="maintenance.html">item</a></li>
									<li><a href="contact.html">item</a></li>
									<li><a href="about.html">item</a></li>
									<li><a href="about.html">item</a></li>
									<li><a href="about.html">item</a></li>
								</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-three">
		    <h5>Helpful Links </h5>
		    <ul class="list-unstyled">
									<li><a href="maintenance.html">test</a></li>
									<li><a href="contact.html">test</a></li>
									<li><a href="about.html">test</a></li>
									<li><a href="about.html">test</a></li>
									<li><a href="about.html">test</a></li>
								</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-four">
		    <h5>Helpful Links </h5>
		    <ul class="list-unstyled">
									<li><a href="maintenance.html">test</a></li>
									<li><a href="contact.html">test</a></li>
									<li><a href="about.html">test</a></li>
									<li><a href="about.html">test</a></li>
									<li><a href="about.html">test</a></li>
								</ul>
		</div>
	  </div>
	</div>
</div>
<div class="copyright bglight1 border pt-2">
    <div class="container">
        
    </div> --}}
</div>

  
@endsection