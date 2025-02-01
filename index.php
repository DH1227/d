<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The bluebell -HOME</title>
    <link href="css\common.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php require('inc/links.php');?>
<style>
  .availability-form{
   margin-top: -50px;
   z-index:2;
   position:relative;
  }
    @media screen and(max-width:575px){
  .availability-form{
  margin-top: 25px;
  padding: 0 35px;

 }}
</style>
</head>
<body class="bg-light">
<!--header-->
<?php require('inc/header.php');?>

<!-- carousel-->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper Swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="image/carousel/1.jpg" class="w=100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/12.png" class="w=100 d-block"  />
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/11.png" class="w=100 d-block"  />
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/14.png" class="w=100 d-block"  />
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/15.png" class="w=100 d-block"  />
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/16.png" class="w=100 d-block"  />
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/6.png" class="w=100 d-block"  />
      </div>
      
    </div>
  </div>
</div>

<!--check availability form-->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="nb-4">Check Booking Availibility</h5>
      <form>
      <div class="row align-items-end">
        <div class="col-lg-3">
        
            <label class="form-label" style="font-weight:500;">Check-In</label>
            <input type="date" class="form-control shadow-none">  
        </div>
        <div class="col-lg-3 mb-3">
        
         <label class="form-label" style="font-weight:500;">Check-Out</label>
         <input type="date" class="form-control shadow-none">  
        </div>
         <div class="col-lg-3 mb-3">
           <label class="form-label" style="font-weight:500;">Adult</label>
           <select class="form-select shadow-none">
             <option selected>Open this select menu</option>
             <option value="1">One</option>
             <option value="2">Two</option>
             <option value="3">Three</option>
           </select>
          </div>
          <div class="col-lg-2 mb-3">
           <label class="form-label" style="font-weight:500;">Children</label>
           <select class="form-select shadow-none">
             <option selected>Open this select menu</option>
             <option value="1">One</option>
             <option value="2">Two</option>
             <option value="3">Three</option>
           </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2 ">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>

  
  
        </div>
  
      </div>




    </form>
    </div>
  </div>
</div>

<!--Our Rooms-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="maxwidth:350px; margin:auto;">
       <img src="image/rooms/5.png" class="card-img-top">       
       <div class="card-body">
         <h5>Single Room</h5>
         <h6 class="mb-4">₹2000 per night</h6>
         <div class="features mb-4">
           <h6 class="mb-1">Features</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             1 Room
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             2 Sofa
            </span>
         </div>
         <div class="facilities mb-4">
         <h6 class="mb-1">Facilities</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Room Heater
            </span>
          </div> 
          <div class="guests mb-4">
         <h6 class="mb-1">Guests</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             4 Children
            </span>
          </div>  

          <div class="rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span class="badgerounded-pill bg-light">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
           </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>          
          </div>
        </div>       
      </div>
    </div>



    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="maxwidth:350px; margin:auto;">
       <img src="image/rooms/1.png" class="card-img-top">       
       <div class="card-body">
         <h5>Double Room</h5>
         <h6 class="mb-4">₹8000 per night</h6>
         <div class="features mb-4">
           <h6 class="mb-1">Features</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             2 Attached Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             2 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             2 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             4 Sofa
            </span>
         </div>
         <div class="facilities mb-4">
         <h6 class="mb-1">Facilities</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Room Heater
            </span>
          </div>   
          <div class="guests mb-4">
         <h6 class="mb-1">Guests</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             4 Children
            </span>
          </div>       
          <div class="rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span class="badgerounded-pill bg-light">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
           </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>          
          </div>
        </div>       
      </div>
    </div>


    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="maxwidth:350px; margin:auto;">
       <img src="image/rooms/1.jpg" class="card-img-top">       
       <div class="card-body">
         <h5>Executive Room</h5>
         <h6 class="mb-4">₹5000 per night</h6>
         <div class="features mb-4">
           <h6 class="mb-1">Features</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             1 Room
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             2 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             3 Sofa
            </span>
         </div>
         <div class="facilities mb-4">
         <h6 class="mb-1">Facilities</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             Room Heater
            </span>
          </div>    
          <div class="guests mb-4">
         <h6 class="mb-1">Guests</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap  lh-base">
             4 Children
            </span>
          </div>      
          <div class="rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span class="badgerounded-pill bg-light">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
           </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>          
          </div>
        </div>       
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
     <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
    </div>
  </div>
</div>

<!--our facilities-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="image/facilities/wifi.svg" width="88px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="image/facilities/televion.svg" width="88px">
      <h5 class="mt-3">Television</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="image/facilities/heater.svg" width="88px">
      <h5 class="mt-3">Room Heater</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="image/facilities/ac.svg" width="88px">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="image/facilities/micro.svg" width="88px">
      <h5 class="mt-3">MICROWAVE</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="image/facilities/massage.svg" width="88px">
      <h5 class="mt-3">MASSAGE</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
           
    </div>
  </div>
</div>

<!--our Testimonials-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

<div class="container mt-5">
 <div class="swiper Swiper-testimonials">
   <div class="swiper-wrapper mb-5">

     <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center mb-3">
            <b><i class="bi bi-star-fill fs-2 me-2"></i></b>
            <h6 class="m-0 ms-2">Random User1</h6>
       </div>
       <p>
         Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Adipisci repellat voluptatem eaque voluptatum beatae, 
          officiis explicabo nesciunt? Soluta, deleniti fugiat.
       </p>
       <div class="rating">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
             <b><i class="bi bi-star-fill fs-2 me-2"></i></b>
             <h6 class="m-0 ms-2">Random User1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Adipisci repellat voluptatem eaque voluptatum beatae, 
           officiis explicabo nesciunt? Soluta, deleniti fugiat.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
         </div>
       </div>

       <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
             <b><i class="bi bi-star-fill fs-2 me-2"></i></b>
             <h6 class="m-0 ms-2">Random User1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Adipisci repellat voluptatem eaque voluptatum beatae, 
           officiis explicabo nesciunt? Soluta, deleniti fugiat.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
         </div>
       </div>
        

    </div>
   <div class="swiper-pagination"></div>
  </div>
</div>

<!--Reach Us and follow us-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385399.3519878844!2d28.682534585956525!3d41.00485195631318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVsLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sin!4v1737189250245!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel:918699151102" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +918699151101
        </a> 
        <br>
        <a href="tel:918699151102" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +917888385783
        </a> 
      </div>

      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i> Twitter
          </span>
        </a> 
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i> Facebook
          </span>
        </a> 
        <br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i> Instagram
          </span>
        </a>        
      </div>
    </div>
  </div>
</div>

<!--footer-->
<?php require('inc/footer.php');?>

 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".Swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableonInteraction: false,
      }
    });
   
    var swiper = new Swiper(".Swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView: 1,
        },
        640:{
          slidesPerView: 1,
        },
        768:{
          slidesPerView: 2,
        },
        1024:{
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>