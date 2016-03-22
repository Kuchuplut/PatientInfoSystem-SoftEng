@extends('parent')
@section('mainBody')
<div id="index-banner" class="parallax-container section scrollspy">

@section('navbar')
  
            <li><a class="waves-effect waves-light btn blue darken-4 white-text modal-trigger" href="#modal1">LOG IN</a></li>
            <li><a class="blue-text text-darken-4" href="/sign-up">SIGN UP</a></li>
@endsection
    <div class="row" style="margin-top: 10px;">
      <div class="col s12" align="middle">
        <img src="pictures/logo.png" width="400" height="400"><br>
        <h1 class="white-text thin">Patient's Information System</h1>
        <h4 class="white-text light center" >Patient Information System with Blood Pressure monitoring system</h4>
        <div class="row">
          <div class="col s6">
            <i class="material-icons large white-text">person_add</i>
            <p class="white-text light container">
                Inquire your records in a short time!
            </p>
          </div>

          <div class="col s6">
          <i class="material-icons large white-text">location_city</i>
            <p class="white-text light container">
              We provide you with powerful and tailored recruitment tools for your records - for free
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
        <article class="main"> <!--START OF MAIN-->    
          <div class="row container">         
              
          </div>
        </article>  <!--END OF MAIN--> 
         
    </div>  
     <div class="parallax blue darken-4"><img src="pictures/bg1.jpg"> </div>
  </div>

<!--
  <div class="container">
    <div class="section scrollspy" id="ourWorld">

      <div class="row">
        <h2 class="blue-text col s12 center">Search for patient's name</h2>
      </div>

      <div class="row">
         <nav class="blue">
           <div class="nav-wrapper">
             <form>
               <div class="input-field blue">
                 <input id="search" type="search" required>
                 <label for="search"><i class="material-icons">search</i></label>
                 <i class="material-icons">close</i>
               </div>
             </form>
           </div>
         </nav>
        </div>

        <div class="row">
          <ul class="collapsible" data-collapsible="accordion">
             <li>
               <div class="collapsible-header"><img src="pictures/pic1.jpg" width="42" height="42" class="circle" align="middle"> Jose Manalo</div>
              <div class="collapsible-body container" style="margin-top: 10px; margin-bottom: 10px;">
                  <h5 class="col s6">Diagnosis: Brain Cancer</h5>
                  <a class="btn-floating btn-large waves-effect waves-light red" href="report.html"><i class="material-icons">add</i></a>
               </div>
             </li>
             <li>
               <div class="collapsible-header"><img src="pictures/pic2.jpg" width="42" height="42" class="circle" align="middle">Wally Bayola</div>
              <div class="collapsible-body container" style="margin-top: 10px; margin-bottom: 10px;">
                  <h5 class="col s6">Diagnosis: Skin Cancer</h5>
                  <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
               </div>
             </li>
             <li>
               <div class="collapsible-header"><img src="pictures/pic3.jpg" width="42" height="42" class="circle" align="middle">Paolo Beks</div>
               <div class="collapsible-body container" style="margin-top: 10px; margin-bottom: 10px;">
                  <h5 class="col s6">Diagnosis: Eye Cancer</h5>
                  <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
               </div>
             </li>
              <li>
               <div class="collapsible-header"><img src="pictures/pic4.jpg" width="42" height="42" class="circle" align="middle">Bossing Beks</div>
               <div class="collapsible-body container">
                  <h5>Diagnosis: Skin Cancer</h5>
               </div>
             </li>
           </ul>
        </div>

      </div>
    </div>
  </div>-->
  @endsection