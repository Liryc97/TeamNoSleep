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
                    <h3>ID No: 1</h3>
                    <h3>Name:</h3>
                    <h3>City:</h3>
                    <h3>Rigeion:</h3>
                    <h3>Contact:</h3>
                    <h3>Email:</h3>
                    <h3>Specialties:</h3>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
                            <div class="text-right">
                                <button class="btn peach-gradient push-right">Add</button>

                            <div>
                        

    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/2045315/pexels-photo-2045315.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" >
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                </p>
              </div>
            </div>
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/2036650/pexels-photo-2036650.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                 
                </p>
              </div>
            </div>
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/132472/pexels-photo-132472.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/2059696/pexels-photo-2059696.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                </p>
              </div>
            </div>
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/1893536/pexels-photo-1893536.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                </p>
              </div>
            </div>
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/2041160/pexels-photo-2041160.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/849835/pexels-photo-849835.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                </p>
              </div>
            </div>
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/2060948/pexels-photo-2060948.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                </p>
              </div>
            </div>
            <div class="card mb-5">
              <img class="card-img-top" src="https://images.pexels.com/photos/933779/pexels-photo-933779.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  <button type="button" class="btn btn-outline-info waves-effect">Edit</button>
                  <button type="button" class="btn btn-outline-danger waves-effect">Delete</button>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>


                    </div>
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

</div>

  
@endsection