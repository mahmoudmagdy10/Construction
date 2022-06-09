@extends('customer.layout.app')

@section('profile')
  @if($customer->profile_picture !== NULL)
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$customer->profile_picture")}}' alt="avatar" width="40" height="40" />
  @endif
  @if($customer->profile_picture == NULL)
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("image-home/profile.jpg")}}' alt="avatar" width="40" height="40" />
  @endif
@endsection

@section('title')
    Home
@endsection

@section('profile')
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$customer->profile_picture")}}' alt="avatar" width="40" height="40" />
@endsection

@section('content')
    <!-- start landing  -->
    <div class="home" id="home" style=" background-color: rgb(80,80,80);">
      <div data-aos="zoom-in" data-aos-delay="50" class="container">

        <div class="content">

          <b>are facilitating the creation of your property from scratch to finish</b>



        </div>
        <div class="details">
          <h1 id="text">
          </h1>
        </div>

      </div>
    </div>
    <!-- <div class="colors">
  <ul>
    <li class="set"data-color="#00838f"></li>
    <li data-color="#E91E63"></li>
    <li data-color="black"></li>
    <li data-color="#009688"></li>
    <li data-color="rebeccapurple"></li>
        <li data-color="#03A9F4"></li>

  </ul>
  </div> -->

    <!-- end  landing  -->
    <!-- start section  -->
    <div class="section">
      <div class="container">
        <div class="text">
          <div class="content-image">
            <img data-aos="fade-up" data-aos.delay="100" src="{{asset('image-home/undraw_building_re_xfcm.svg')}}" alt="">
          </div>
          <div data-aos="fade-up" data-aos.delay="150" class="con-text">
            <h2>Welcome To <span class="man"> Construction</span>

              Project</h2>
            <p>Do you have more to say and show? You can do it in this section. Add pictures and a short description to
              show visitors more of whatever it is you want.</p>
            <span>Add a description here.</span>
          </div>
        </div>
      </div>
    </div>

    <!-- end section  -->
    <!-- start road map -->
    <div class="road-map">
      <div class="main-title" data-aos="fade-up" data-aos.delay="200">
        <h1>road map</h1>
      </div>
      <div class="container" data-aos="fade-up" data-aos.delay="250">
        <h2 class="heading">if you customer</h2>
        <span class="data-step">follow this steps
        </span>
        <div class="cont-map">
          <div class="right">
            <h2>choose style</h2>
            <p>Choose your architecture or<br> upload your own
            </p>
          </div>
          <div class="clear"></div>
          <div class="left">
            <h2>Fill out the form</h2>
            <p>Fill in your form with <br>the required data to get the right price
            </p>
          </div>
          <div class="clear"></div>
          <div class="right">
            <h2>publish </h2>
            <p>If you agree to the price<br> publish your project to contractors
            </p>
          </div>
          <div class="clear"></div>
          <div class="left">
            <h2>contract
            </h2>
            <p>Upon approval, the contract will be signed.
            </p>
          </div>
          <div class="clear"></div>

        </div>
      </div>
      <div class="container" data-aos="fade-up" data-aos.delay="300">
        <h2 class="heading">if you are a contractor
        </h2>
        <span class="data-step">follow this steps
        </span>
        <div class="cont-map">
          <div class="right">
            <h2>select project
            </h2>
            <p>Choose the project you want on the available projects page based on price

            </p>
          </div>
          <div class="clear"></div>
          <div class="left">
            <h2>make offer</h2>
            <p>You can add an offer to the project

            </p>
          </div>
          <div class="clear"></div>
          <div class="right">
            <h2>contract
            </h2>
            <p>Upon approval, the contract will be signed</p>
          </div>
          <div class="clear"></div>


        </div>
      </div>
    </div>
    <!-- end road map -->
    <!-- start about us  -->
    <div id="about-us" class="about-us">
      <h2>what they're saying about us</h2>
      <div class="main-title" data-aos="fade-up" data-aos.delay="350">
        <h1>about us</h1>
      </div>
      <div class="container swiper mySwiper">
        <div class="swiper-wrapper">




          <div class="box swiper-slide" data-aos="fade-up" data-aos-delay="400">


            <div class="img">
              <img src="{{asset('image-home/rawwwak.jpeg')}}" alt="">
            </div>
            <div class="box-date">
              <h3>Abduallh
                Eid</h3>
              <p>Data Scientist &
                Machine Learning En </p>
              <div class="icon-about">
                <a href="https://www.facebook.com/profile.php?id=100012194289790"><i
                    class="fa-brands fa-facebook-square"></i>
                </a>
                <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>

              </div>
            </div>



          </div>
          <div class="box swiper-slide" data-aos="fade-up" data-aos-delay="450">

            <div class="img">
              <img src="{{asset('image-home/el rooby.jpg')}}" alt="">
            </div>
            <div class="box-date">
              <h3>ahmed el rooby</h3>
              <p>front end developer</p>
              <div class="icon-about">
                <a href="https://www.facebook.com/profile.php?id=100012194289790"><i
                    class="fa-brands fa-facebook-square"></i>
                </a>
                <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>

              </div>
            </div>


          </div>
          <div class="box swiper-slide" data-aos="fade-up" data-aos-delay="500">

            <div class="img">
              <img src="{{asset('image-home/hassan.jpeg')}}" alt="">
            </div>
            <div class="box-date">
              <h3>Ahmed
                Hassan</h3>
              <p>Full stack Android
                Flutter Developer </p>
              <div class="icon-about">
                <a href="https://www.facebook.com/profile.php?id=100012194289790"><i
                    class="fa-brands fa-facebook-square"></i>
                </a>
                <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>

              </div>
            </div>


          </div>
          <div class="box swiper-slide" data-aos="fade-up" data-aos-delay="550">

            <div class="img">
              <img src="{{asset('image-home/mego.jpeg')}}" alt="">
            </div>
            <div class="box-date">
              <h3>Mahmoud
                Magdy</h3>
              <p>Full stack web
                Developer </p>
              <div class="icon-about">
                <a href="https://www.facebook.com/profile.php?id=100012194289790"><i
                    class="fa-brands fa-facebook-square"></i>
                </a>
                <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>

              </div>
            </div>


          </div>
          <div class="box swiper-slide" data-aos="fade-up" data-aos-delay="600">

            <div class="img">
              <img src="{{asset('image-home/hema.jpeg')}}" alt="">
            </div>
            <div class="box-date">
              <h3>Ibrahim
                EL Hossiny</h3>
              <p>Python Developer
              </p>
              <div class="icon-about">
                <a href="https://www.facebook.com/profile.php?id=100012194289790"><i
                    class="fa-brands fa-facebook-square"></i>
                </a>
                <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>

              </div>
            </div>


          </div>
          <div class="box swiper-slide" data-aos="fade-up" data-aos-delay="650">

            <div class="img">
              <img src="{{asset('image-home/fouad.jpeg')}}" alt="">
            </div>
            <div class="box-date">
              <h3>Mohamed
                Fouad</h3>
              <p>front end developer
              </p>
              <div class="icon-about">
                <a href="https://www.facebook.com/profile.php?id=100012194289790"><i
                    class="fa-brands fa-facebook-square"></i>
                </a>
                <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>

              </div>
            </div>


          </div>
          <div class="box swiper-slide" data-aos="fade-up" data-aos-delay="700" width="400px">

            <div class="img">
              <img src="{{asset('image-home/haza.jpeg')}}" alt="">
            </div>
            <div class="box-date">
              <h3>Abd-Elrahman
                Tarek</h3>
              <p>cyber security
                python developer
              </p>
              <div class="icon-about">
                <a href="https://www.facebook.com/profile.php?id=100012194289790"><i
                    class="fa-brands fa-facebook-square"></i>
                </a>
                <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>

              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- end about us  -->

    <!-- start footer  -->
    <div class="footer">
      <div class="container" data-aos="zoom-in" data-aos.delay="750">
        <div class="nav">
          <ul class="navigation">
            <li><a class="accept" href="home.html">home</a></li>
            <li><a href="construction-style.html">construction-style</a></li>
            <li><a href="your-project.html">your project</a></li>
            <li><a href="contractor.html">project(contractor)</a></li>
            <li><a href="">about us</a></li>
            <li><a href="signin.html">sign in</a></li>
            <li><a href="signup.html">sign up</a></li>

          </ul>

        </div>
        <div class="logo">
          <img src="{{asset('image-home/WhatsApp Image 2022-05-11 at 4.35.41 PM.jpeg')}}" alt="">
        </div>
      </div>
    </div>
    <!-- end footer  -->
    <!-- start details -->
    <div class="data">
      <div class="container" data-aos-easing="ease-in-out" data-aos.delay="800">
        <div class="address">address</div>
        <div class="content-det">
          <h2>About us</h2>
          <p>We are facilitating the creation of your property from scratch to finish</p>
        </div>
      </div>
    </div>
    <!-- end details -->
    <!-- start finish  -->


    <!-- end finish  -->

@endsection