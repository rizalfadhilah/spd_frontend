<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    

</head>


<nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark">
   <img class="navbar-brand" src="images/logo-sc.png" id="logo_custom" width="15%"  alt="logo">
   <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon "></span>
</button>
<div class="collapse navbar-collapse " id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto ">
    <li class="nav-item">
      <a class="nav-link" href="article">ARTICLES</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="#">COMMUNITY</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="#">WORKSHOPS</a>
  </li> 
  <li class="nav-item">
      <a class="nav-link" href="marketplace">MARKETPLACE</a>
  </li>
  <li class="nav-item">
      <i class="fa fa-user-o" style="color: white; margin-top:8px; margin-right: 10px; font-size: 20px;"></i>
      <i class="fa fa-bell-o" style="color: white; margin-top:8px; margin-right: 10px; font-size: 20px;"></i>
      <i class="fa fa-gear" style="color: white; margin-top:8px; margin-right: 10px; font-size: 20px;"></i>

  </li>


</ul>
</div>  
</nav>


<style type="text/css">
img.wp-smiley,
img.emoji {
  display: inline !important;
  border: none !important;
  box-shadow: none !important;
  height: 1em !important;
  width: 1em !important;
  margin: 0 .07em !important;
  vertical-align: -0.1em !important;
  background: none !important;
  padding: 0 !important;
}
</style>


<link rel='stylesheet' id='wp-block-library-css'  href='http://localhost/buddy-test2/wp-includes/css/dist/block-library/style.min.css?ver=5.1.1' media='all' />
<link rel='stylesheet' id='bp-legacy-css-css'  href='http://localhost/buddy-test2/wp-content/plugins/buddypress/bp-templates/bp-legacy/css/buddypress.min.css?ver=4.2.0' media='screen' />
<style id='bp-legacy-css-inline-css' type='text/css'>

    /* Cover image */
    #buddypress #header-cover-image {
      margin-top: 50px;
      height: 255px;
      background-image: url(http://localhost/buddy-test/wp-content/uploads/buddypress/members/1/cover-image/5d0748254f2bd-bp-cover-image.jpg);
    }

    #buddypress #create-group-form #header-cover-image {
      margin: 1em 0;
      position: relative;
    }

    .bp-user #buddypress #item-header {
      padding-top: 0;
    }

    #buddypress #item-header-cover-image #item-header-avatar {
      margin-top: 145px;
      float: left;
      overflow: visible;
      width: auto;
    }

    #buddypress div#item-header #item-header-cover-image #item-header-content {
      clear: both;
      float: left;
      margin-left: 170px;
      margin-top: -140px;
      width: auto;
    }

    body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
    body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
      clear: none;
      margin-top: 225px;
      margin-left: 0;
      max-width: 50%;
    }

    body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
      max-width: 20%;
      padding-top: 20px;
    }

    

    #buddypress div#item-header-cover-image .user-nicename a,
    #buddypress div#item-header-cover-image .user-nicename {
      font-size: 200%;
      color: #fff;
      margin: 0 0 0.6em;
      text-rendering: optimizelegibility;
      text-shadow: 0 0 3px rgba( 0, 0, 0, 0.8 );
    }

    #buddypress #item-header-cover-image #item-header-avatar img.avatar {
      background: rgba( 255, 255, 255, 0.8 );
      border: solid 2px #fff;
      border-radius:100px;
    }

    #buddypress #item-header-cover-image #item-header-avatar a {
      border: 0;
      text-decoration: none;
    }

    #buddypress #item-header-cover-image #item-buttons {
      margin: 0 0 10px;
      padding: 0 0 5px;
    }

    #buddypress #item-header-cover-image #item-buttons:after {
      clear: both;
      content: "";
      display: table;
    }

    @media screen and (max-width: 782px) {
      #buddypress #item-header-cover-image #item-header-avatar,
      .bp-user #buddypress #item-header #item-header-cover-image #item-header-avatar,
      #buddypress div#item-header #item-header-cover-image #item-header-content {
        width: 100%;
        text-align: center;
      }

      #buddypress #item-header-cover-image #item-header-avatar a {
        display: inline-block;
      }

      #buddypress #item-header-cover-image #item-header-avatar img {
        margin: 0;
      }

      #buddypress div#item-header #item-header-cover-image #item-header-content,
      body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
      body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
        margin: 0;
      }

      body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
      body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
        max-width: 100%;
      }

      #buddypress div#item-header-cover-image h2 a,
      #buddypress div#item-header-cover-image h2 {
        color: inherit;
        text-shadow: none;
        margin: 25px 0 0;
        font-size: 200%;
      }

      #buddypress #item-header-cover-image #item-buttons div {
        float: none;
        display: inline-block;
      }

      #buddypress #item-header-cover-image #item-buttons:before {
        content: "";
      }

      #buddypress #item-header-cover-image #item-buttons {
        margin: 5px 0;
      }
    }
    #article-detail{
      margin-top: -50px;
    color: white;
    padding: 20px;
    font-size: 15px;
    background-color: rgba(6, 6, 0, 0.9);
    }
  
</style>


 <section class="section1" style="margin-top: 100px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
              <a id="back-button-circle" href="#">
                  <img src="images/back-button-circle.svg" width="40" height="40" style="margin-left: 150px">
              </a>
          </div>
          <div class="col-6 text-center">
            <h3 class="display-5"><b>LOREM IPSUM DOLAR SIT AMET</b></h3>
        </div>

    </div>
</div>

</section>

<section class="section2">
    <div class="container">
        <div class="row">
           
            <div class="col-md-2">
                <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="color:black"></span>
                    <span class="sr-only">Previous</span>
                </a>
            </div>
            <div class="col-md-8">
               <div id="demo" class="carousel slide" data-interval="false" data-ride="carousel">

  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/robin-vet-219446-unsplash.png" alt="Los Angeles" style="width: 100%; height: auto;">
    </div>
    <div class="carousel-item">
      <img src="images/robin-vet-219446-unsplash.png" alt="Chicago" style="width: 100%; height: auto;">
    </div>
    <div class="carousel-item">
      <img src="images/robin-vet-219446-unsplash.png" alt="New York" style="width: 100%; height: auto;">
    </div>
  </div>
  
 
</div>

          </div>
          <div class="col-md-2">
            <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>



</section>


<section class="section3">
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col">
                <div class="media">
                    <img src="images/07COVER-articleLarge.png" class="mr-3" alt="">
                    <div class="media-body">
                      <h5 class="mt-0"><b>2018 Audi, 1.8 Turbo MT, km 25.000</b></h5>
                      <h5 class="mt-0"><b>(IDR 879.000.000)</b></h5>
                      <hr style="border: 1px solid black; width: 50%">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                      <br><br>
                      <h5 class="mt-0"><b>SPECIFICATION</b></h5>
                      <hr style="border: 1px solid black; width: 50%">
                      
                      <div class="container">
                      <div class="row">
                      <table class="col-md-6">
                          <tr>
                              <td>Model</td>
                              <td>:</td>
                              <td>Audi A4</td>
                          </tr>
                          <tr>
                              <td>Year</td>
                              <td>:</td>
                              <td>2018</td>
                          </tr>
                          <tr>
                              <td>Fuel</td>
                              <td>:</td>
                              <td>Ipsum</td>
                          </tr>
                      </table>
                      <table class="col-md-6">
                          <tr>
                              <td>Variant</td>
                              <td>:</td>
                              <td>Audi A4</td>
                          </tr>
                          <tr>
                              <td>Transmission</td>
                              <td>:</td>
                              <td>2018</td>
                          </tr>
                          <tr>
                              <td>Millage</td>
                              <td>:</td>
                              <td>Ipsum</td>
                          </tr>
                      </table>
                      </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="col-2">
          </div>
      </div>
  </div>

</section>



<section class="section4" style="background-color:black;">
    <style type="text/css" id="slider-css"></style>

    <div class="spe-cor">
      <div class="container">
        <h1 style="color: white; padding-top: 100px; margin-bottom: -150px">Other Cars Just Like This</h1>
                
        <div class="row">
          <div class="col-2">
            <a id="custom-slider1" class="carousel-control-prev" href="#slider-2" role="button" data-slide="prev">
              <img src="images/Group_4.png">
            </a>
            <a id="custom-slider1" class="carousel-control-prev" href="#slider-2" role="button" data-slide="prev">
              <img src="images/Group_4.png">
            </a>
            <a id="custom-slider1" class="carousel-control-prev" href="#slider-2" role="button" data-slide="prev">
              <img src="images/Group_4.png">
            </a>


            <a id="custom-slider2" class="carousel-control-next" href="#slider-2" role="button" data-slide="next">
              <img src="images/Group_4-1.png">
            </a>
            <a id="custom-slider2" class="carousel-control-next" href="#slider-2" role="button" data-slide="next">
              <img src="images/Group_4-1.png">
            </a>
            <a id="custom-slider2" class="carousel-control-next" href="#slider-2" role="button" data-slide="next">
              <img src="images/Group_4-1.png">
            </a>
          </div>
          <div class="col-11">
            <div id="slider-2" class="carousel carousel-by-item slide" data-ride="carousel">
              <div  class="carousel-inner" role="listbox">


                <div class="carousel-item active">
                  <div class="col-md-4 col-sm-4 col-4" style="margin: 0px; padding: 0px;">
                    <img class="d-block img-fluid" style="width: 100%; height: auto; margin: 0px;  " src="images/jonathan-gallegos-725084-unsplash.png" alt="First slide">
                    
                  </div>
                </div>

                <div id="padding-between-content1" class="carousel-item">
                  <div class="col-md-4 col-sm-4 col-4" style="margin: 0px; padding: 0px;">
                    <img class="d-block img-fluid" style="width: 100%; height: auto;" src="images/severin-d-370303-unsplash.png" alt="First slide">
                    
                  </div>
                </div>


                <div id="padding-between-content2" class="carousel-item">
                  <div class="col-md-4 col-sm-4 col-4" style="margin: 0px; padding: 0px;">
                    <img class="d-block img-fluid" style="width: 100%; height: auto;" src="images/serge-kutuzov-223327-unsplash.png" alt="First slide">
                    
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-2">

          </div>

        </div>

      </div>
    </div>

  </section>


   <!-- start footer -->

              <div class="container-fluid" style="background-image: url('images/footer_bg.png'); padding: 0px; margin: 0px; padding-top: 100px; padding-bottom: 100px; margin-top: 450px;">
                <center><img class="logo-footer-sc" style="margin-left: 25px;" src="images/logo-sc.png"></center>
                <!--Footer Links-->
                     <div class="container">
                      <div class="row">

                        <!--First column-->
                        <div class="col-sm-4 col-md  col-6 col mx-auto">
                          <h5 class="title mb-4 mt-3 font-bold" style="text-align: left; font-weight:bold">Articles</h5>

                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">News</a></p>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Video</a></p>


                        </div>
                        <!--/.First column-->

                        <hr class="clearfix w-100 d-md-none">

                        <!--Second column-->
                        <div class="col-sm-4 col-md  col-6 col mx-auto">
                          <h5 class="title mb-4 mt-3 font-bold" style="text-align: left; font-weight:bold">COMMUNITY</h5>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Cars</a></p>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Clubs</a></p>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Members</a></p>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Membership Tiers</a></p>

                        </div>
                        <!--/.Second column-->

                        <hr class="clearfix w-100 d-md-none">

                        <!--Third column-->
                        <div class="col-sm-4 col-md  col-6 col mx-auto">
                          <h5 class="title mb-4 mt-3 font-bold" style="text-align: left; font-weight:bold">WORKSHOP</h5>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Map Locator</a></p>
                        </div>
                        <!--/.Third column-->

                        <hr class="clearfix w-100 d-md-none">

                        <!--Fourth column-->
                        <div class="col-sm-4 col-md  col-6 col mx-auto">
                          <h5 class="title mb-4 mt-3 font-bold" style="text-align: left; font-weight:bold">MARKETPLACE</h5>

                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Cars</a></p>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Parts</a></p>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">Others</a></p>
                          <p style="text-align: left; margin-left: 15%;"><a style="color:white" href="#">E- Commerce</a></p>

                        </div>
                        <!--/.Fourth column-->
                      </div>
                      <div class="row">
                     <div class="col-md-4">

                     </div>
                     <div class="col-md-2">
                      <p style="font-size: 20px; color: white; font-weight: bold;">SUBSCRIBE</p>
                    </div>
                    <div class="col-md-4">
                      <style type="text/css">
                        #filter{
                          margin-left: -50px;
                          width: 80%;
                          padding: 3px;
                        }
                        #filtersubmit {
                          position: relative;
                          z-index: 1;
                          left: -25px;
                          top: 1px;
                          color: #333;
                          cursor: pointer;
                          width: 0;
                        }
                      </style>
                      <input id="filter" type="text" />
                      <i id="filtersubmit" class="fa fa-envelope"></i>
                      
                    </div>
                    <div class="col-md-2">

                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-3">

                   </div>
                   <div class="col-md-3">
                    
                    </div>
                  <div class="col-md-3">
                    <i style="color: white; font-size: 20px; margin-left: -50px" class="fa fa-facebook"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                    <i style="color: white; font-size: 20px" class="fa fa-instagram"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                    <i style="color: white; font-size: 20px" class="fa fa-google-plus"></i>
                  
                  </div>
                  <div class="col-md-3">

                  </div>

                </div>

                    </div>
                    <!--/.Footer Links-->
              </div>

              <!-- end footer -->



<script>
    function GetUnique(e){var l=[],s=temp_c=[],t=["col-md-1","col-md-2","col-md-3","col-md-4","col-md-6","col-md-12","col-sm-1","col-sm-2","col-sm-3","col-sm-4","col-sm-6","col-sm-12","col-lg-1","col-lg-2","col-lg-3","col-lg-4","col-lg-6","col-lg-12","col-xs-1","col-xs-2","col-xs-3","col-xs-4","col-xs-6","col-xs-12","col-xl-1","col-xl-2","col-xl-3","col-xl-4","col-xl-6","col-xl-12"];$(e).each(function(){for(var l=$(e+" > div").attr("class").split(/\s+/),t=0;t<l.length;t++)s.push(l[t])});for(var c=0;c<s.length;c++)temp_c=s[c].split("-"),2==temp_c.length&&(temp_c.push(""),temp_c[2]=temp_c[1],temp_c[1]="xs",s[c]=temp_c.join("-")),-1==$.inArray(s[c],l)&&$.inArray(s[c],t)&&l.push(s[c]);return l}function setcss(e,l,s){for(var t=["","","","","",""],c=d=f=g=0,r=[1200,992,768,567,0],a="",o=[],a=0;a<e.length;a++){var i=e[a].split("-");if(3==i.length){switch(i[1]){case"xl":d=0;break;case"lg":d=1;break;case"md":d=2;break;case"sm":d=3;break;case"xs":d=4}t[d]=i[2]}}for(var n=0;n<t.length;n++)if(""!=t[n]){if(0==c&&(c=12/t[n]),f=12/t[n],g=100/f,a=s+" > .carousel-item.active.carousel-item-right,"+s+" > .carousel-item.carousel-item-next {-webkit-transform: translate3d("+g+"%, 0, 0);transform: translate3d("+g+", 0, 0);left: 0;}"+s+" > .carousel-item.active.carousel-item-left,"+s+" > .carousel-item.carousel-item-prev {-webkit-transform: translate3d(-"+g+"%, 0, 0);transform: translate3d(-"+g+"%, 0, 0);left: 0;}"+s+" > .carousel-item.carousel-item-left, "+s+" > .carousel-item.carousel-item-prev.carousel-item-right, "+s+" > .carousel-item.active {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);left: 0;}",f>1){for(k=0;k<f-1;k++)o.push(l+" .cloneditem-"+k);o.length&&(a=a+o.join(",")+"{display: block;}"),o=[]}0!=r[n]&&(a="@media all and (min-width: "+r[n]+"px) and (transform-3d), all and (min-width:"+r[n]+"px) and (-webkit-transform-3d) {"+a+"}"),$("#slider-css").prepend(a)}$(l).each(function(){for(var e=$(this),l=0;l<c-1;l++)(e=e.next()).length||(e=$(this).siblings(":first")),e.children(":first-child").clone().addClass("cloneditem-"+l).appendTo($(this))})}

//Use Different Slider IDs for multiple slider
$(document).ready(function() {
  var item = '#slider-1 .carousel-item';
  var item_inner = "#slider-1 .carousel-inner";
  classes = GetUnique(item);
  setcss(classes, item, item_inner);


  var item_1 = '#slider-2 .carousel-item';
  var item_inner_1 = "#slider-2 .carousel-inner";
  classes = GetUnique(item_1);
  setcss(classes, item_1, item_inner_1);
});
</script>