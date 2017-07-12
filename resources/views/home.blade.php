@extends('layouts.app')

@section('content')
<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
       ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
    </div>
   
    

     <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
          ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  
    </div>



     <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
       <div id="carousel" style="background-color: #cccccc">            
 
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
          <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
            <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item">
                        <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
              <blockquote>
                <p>hey slide one</p>
              </blockquote> 
            </div>
            <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
              <blockquote>
                <p>karibu slide 2</p>
              </blockquote>
            </div>
            <div class="active item">
                        <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
              <blockquote>
                <p>karibu slide 3.</p>
              </blockquote>
            </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                <blockquote>
                <p>yes proh</p>
              </blockquote>
            </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                <blockquote>
                <p>almost there</p>
              </blockquote>
            </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                <blockquote>
                <p>hey slide.  ya mwisho</p>
              </blockquote>
            
          </div>
        </div>
      </div>              
    </div>
  </div>
</div>
    </div>
</div>
@endsection
