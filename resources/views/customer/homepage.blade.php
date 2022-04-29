@extends('customer.layout.app')

@section('content')
  <!-- start landing  -->
  <div class="home" id="home" class="kv-ee-section kv-ee-section--lg kv-full-page kv-content" style=" background-color: rgb(80,80,80);">
      <div class="container"class="kv-ee-container kv-ee-spacing ">
          <div class="content">
            <b>are facilitating the creation of your property from scratch to finish</b> 
              <a class="kv-ee-button-has-title" href="">sign in</a>
          </div>
          <div class="details"class="kv-ee-container kv-ee-spacing ">
            <h1>
              Welcome to  Constructio<span>n</span> Project  
            </h1>
          </div>
      </div>
  </div>
  <!-- end  landing  -->
  <!-- start section  -->
  <div class="section">
      <div class="container">
          <div class="text">
            <div class="content-image">
              <img src="{{asset('image-home/we.jpeg')}}" alt="">
            </div>
              <div class="con-text">
                  <h2>Welcome to our website</h2>
                  <p>Do you have more to say and show? You can do it in this section. Add pictures and a short description to show visitors more of whatever it is you want.</p>
              <span>Add a description here.</span>
              </div>
          </div>
      </div>
  </div>
  <!-- end section  -->

  <!-- start road map  -->


  <div class="roadMap-2">
    <ul>
      <li> 
        <div class="content">
          <i class="icon fa-regular fa-1"></i> 
          <h2>select project </h2>
          <p> Choose the project you want on the available projects page based on price </p>
        </div>
      </li>     
      <li> 
          <div class="content">
              <i class="icon fa-regular fa-2"></i>              
          <h2>Fill out the form</h2>
            <p>Fill in your form with the required data to get the right price</p>
          </div>
      </li>     
      <li> 
          <div class="content">
            <i class="icon fa-solid fa-3"></i>             
            <h2>publish</h2>
            <p>If you agree to the price, publish your project to contractors</p>
          </div>
      </li>
    </ul>
  </div>
  <!-- end road map  -->
  <!-- start background  -->
  <div class="back">
    <div class="container"></div>
  </div>
  <!-- end background  -->
        <!-- start images  -->
  <div class="images">
    <div class="container">
      <h3>team</h3>
      </div>
  <div class="parent-cont">
    <div class="box box-1">
      <div class="img-cont">
      <img src="image/IMG-20220301-WA0059.jpg" alt="">
    </div>
      <div class="details">
        <h3>Ahmed <br>
        El-Roby </h3>
        <span>front end <br>developer</span>

      </div>
    </div>  <div class="box box-2">
      <div class="img-cont">
      <img src="image/42db0c3456de4ba3859b22f96947ed14.jpeg" alt="">
    </div>
      <div class="details">
        <h3>Abduallh<br>
        Eid</h3>
        <span>Data Scientist & <br>
          Machine Learning En</span>

      </div>
    </div>  <div class="box box-3">
      <div class="details">
        <h3>Ahmed <br>
          Hassan
          </h3>
          <span>Full stack Android<br>
          Flutter Developer </span>

        </div>
        <div class="img-cont">
        <img src="image/edce89c76aeb4131b66f940a59ce7a8f.jpeg" alt="">
      </div>
    
    </div>  <div class="box box-4">
      <div class="details">
        <h3>Mahmoud <br>
          Magdy 
          </h3>
          <span>Full stack web <br>
          Developer </span>

        </div>
        <div class="img-cont">
      <img src="image/d4fef99cec4d47b3a85983a23721f5c1.jpeg" alt="">
    </div>
    
    </div>  <div class="box box-5">
      <div class="img-cont">
      <img src="image/08a59c78f8e94fb2aa6e75c203381d05.jpeg" alt="">
    </div>
      <div class="details">
        <h3>Ibrahim <br>
        EL Hossiny</h3>
        <span>Python Developer</span>

      </div>
    </div>  <div class="box box-6">
      <div class="img-cont">
      <img src="image/976c062e68804df7b2f9dddedbc333da.jpeg" alt="">
    </div>
      <div class="details">
        <h3>Mohamed<br> 
        Fouad</h3>
        <span>front end<br>
        developer</span>

      </div>
    </div> 
      <div class="box box-7">
      <div class="details">
        <h3>Abd-Elrahman<br>
        Tarek</h3>
        <span>cyber security<br>
          python developer</span>

      </div>
      <div class="img-cont">
      <img src="image/8efe9ce9a43e40dc9a13a429eeb5a515.jpeg" alt="">
    </div>
  </div>
    </div>
    </div>

  <!-- end images  -->
  <!-- start footer  -->

  <div class="footer">
      <div class="container">
          <div class="nav">
            <ul class="navigation" class="kv-ee-menu kv-ee-menu-item-wrapper"data-dynamic-navigation-element="nav">
              <li><a class="accept" href="one.html">home</a></li>
              <li><a href="construction-style.html">construction-style</a></li>
              <li><a href="your_project.html">your project</a></li>
              <li><a href="#offers">project(contractor)</a></li>
              <li><a href="#">project x</a></li>
              <li><a href="#">payement</a></li>
              
              </ul>
          </div>
          <div class="logo">
            <a href="#"><span>construction project</span></a>
          </div>
      </div>
  </div>
  <!-- end footer  -->
  <!-- start details -->
  <div class="data">
      <div class="container">
          <div class="address">address</div>
          <div class="content-det">
              <h2>About us</h2>
              <p>We are facilitating the creation of your property from scratch to finish</p>
          </div>
      </div>
  </div>
  <!-- end details -->
@endsection
