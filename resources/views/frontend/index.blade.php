@extends('frontend/main')
@push('meta')
    <!--  Title -->
    <title>Jewellery</title>

    <!-- Required meta tags -->
    <meta name="title" content="Jewellery" />
    <meta name="description" content="page_description" />
    <meta name="keywords" content="page_keywords" />

    <meta name="robots" content="index, follow" />
    <!-- Twitter Meta -->
    <meta name="twitter:title" content="Jewellery">
    <meta name="twitter:description" content="page_description">
    <meta name="twitter:image" content="{{ asset('/public/mainwebsite/assets/img/home/favicon.png') }}">

    <!-- Facebook Meta -->
    <meta property="og:url" content="{{ asset('/') }}">
    <meta property="og:title" content="Jewellery">
    <meta property="og:description" content="page_description">
    <meta property="og:image" content="{{ asset('/public/mainwebsite/assets/img/home/favicon.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('/public/mainwebsite/assets/img/home/favicon.png') }}">
    <meta name="classification" content="Jewellery" />
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public/mainwebsite/assets/img/home/favicon.png') }}" />
    <link rel="icon" href="{{ asset('/public/mainwebsite/assets/img/home/favicon.png') }}" id="light-scheme-icon">
    <link rel="icon" href="{{ asset('/public/mainwebsite/assets/img/home/favicon.png') }}" id="dark-scheme-icon">
    <link rel="canonical" href="{{ asset('/') }}" />

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "website_name",
            "alternateName": "website_alternate_name",
            "url": "https://www.website_url.com/",
            "logo": "https://www.website_url.com/logo_path.png",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+91-0000000000",
                "contactType": "customer service",
                "areaServed": "IN",
                "availableLanguage": "English"
            }, {
                "@type": "ContactPoint",
                "telephone": "+91-0000000000",
                "contactType": "technical support",
                "areaServed": "IN",
                "availableLanguage": "English"
            }],
            "sameAs": [
                "https://www.facebook.com/xxxxxxxxxxxxxxxx",
                "https://twitter.com/xxxxxxxxxxxxxxxx",
                "https://www.instagram.com/xxxxxxxxxxxxxxxx/",
                "https://www.linkedin.com/xxxxxxxxxxxxxxxx/",
                "https://www.flickr.com/photos/xxxxxxxxxxxxxxxx/"
            ]
        }
    </script>
@endpush
@push('styles')
<link rel="stylesheet" href="{{ asset('/public/mainwebsite/assets/plugins/glightbox/css/glightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/mainwebsite/assets/plugins/owl/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/mainwebsite/assets/plugins/do-not-edit/css/index.min.css') }}">
@endpush
@section('content')
<nav class="navbar navbar-expand-md top-navbar d-none d-lg-block">
    <div class="container">
      {{-- <a class="navbar-brand w-25" href="#"><img src="{{asset('/timthumb.php')}}?src={{asset('/public/mainwebsite/assets/img/home/demologo.png')}}&w=3300&q=100&f=0&a=tl&zc=1" class="w-55" alt="logo"></a> --}}
      <a class="navbar-brand w-25" href="#"><img class="w-75" src="https://cfcdn20.candere.com/skin/frontend/default/new_design_candere/images/candere_logo/Candere_logo.svg?v=15653406421114" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <form class="row g-3 w-75 mb-0">
          <div class="col-12">
            <div class="d-flex align-items-center border rounded pe-3">
              <input type="search" class="form-control border-0 shadow-none py-2 fs-14" placeholder="Search Products" id="inputsearch4">
            <label for="inputsearch4" class="form-label mb-0 fs-12"><i class="imgr img-search"></i></label>
            </div>
          </div>
        </form>
        <ul class="navbar-nav mb-2 mb-lg-0 fs-16">
          <li class="nav-item w-25">
            <a class="nav-link" href="#"><i class="imgr img-heart"></i></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#"><i class="imgr img-shopping-bag"></i></a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link" href="#"><i class="imgr img-user"></i></a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<nav class="mobile-header d-lg-none">
  <div class="container">
    <ul class="list-unstyled m-0 p-3 d-flex justify-content-between">
      <li><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="public/mainwebsite/assets/img/home/nav1.svg" alt=""></a></li>
      <li><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="imgs img-search fs-18 text-dark"></i></a></li>
    </ul>
  </div>
</nav>
<nav class="navbar navbar-expand-md bottom-navbar position-relative border-bottom py-0 d-none d-lg-block">
    <div class="container justify-content-center">
      <div>
        <ul class="navbar-nav mb-2 mb-lg-0 fs-14">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Trending</a>
            <div class="container-fluid sub-menu position-absolute start-0 bg-white zi-1">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4">
                                    <h6 class="submenu-heading fs-14 fw-bold">Shop By Design</h6>
                                    <ul class="list-unstyled submenu-content">
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Engagement</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Solitaire</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Couple Bands</a><li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Casual</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Eternity</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Pearl</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Three Stone</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <h6 class="submenu-heading fs-14 fw-bold">Shop By Category</h6>
                                    <ul class="list-unstyled submenu-content">
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Diamond</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Gold</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Platinum</a><li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Gemstone</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Swarovski/CZ</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Silver</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <h6 class="submenu-heading fs-14 fw-bold">Shop By Price</h6>
                                    <ul class="list-unstyled submenu-content">
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Below ₹10k</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">₹10k to 30k</a></li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">₹30k to 50k</a><li>
                                        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Above ₹50k</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 submenu-image-container">
                            <img src="{{asset('/timthumb.php')}}?src={{asset('/public/mainwebsite/assets/img/home/ring.jpg')}}" class="w-100 submenu-img" alt="ring">
                        </div>
                    </div>
                </div>
            </div>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Rings</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Earrings</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Necklaces</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Chains</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Bangles</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Other Jewellary</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Collections</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Solitaires</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Gifts</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Wedding</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Sale</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<section class="hero-section">
  <div class="container-fluid px-0 overflow-hidden">
    <div class="video-container">
      <div class="c-video text-center">
        <video
        autoplay="autoplay" muted="muted" loop="loop" playsinline="playsinline" preload="metadata" data-aos="fade-up"
          id="video"
          class="video w-90 w-md-100"
          src="public/mainwebsite/assets/video/video1.mp4"
        ></video>
      </div>
    </div>
  </div>
</section>
<section class="step-section">
  <div class="container-fluid my-3 my-lg-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center fs-20 fs-md-25">
            DESIGN YOUR JEWELLERY
          </div>
          <div class="fs-14 text-center mb-3">Your Design ... Our Craftsmanship...!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-3">
          <div class="card-wrapper card-bg rounded-10 text-center h-100 p-3">
            <img src="public/mainwebsite/assets/img/home/share/step1.png" class="h-70px" alt="">
            <p class="card-heading fs-16 fw-bold mb-0 my-2">STEP 1</p>
            <p class="card-para fs-14 mb-0">Share your jewellery design and idea of customizing it.</p>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card-wrapper card-bg-2 rounded-10 text-center h-100 p-3">
            <img src="public/mainwebsite/assets/img/home/share/step2.png" class="h-70px" alt="">
            <p class="card-heading fs-16 fw-bold mb-0 my-2">STEP 2</p>
            <p class="card-para fs-14 mb-0">Your specifics are analysed, cost is estimated and timeline shared with you.</p>
          </div>
        </div>
        <div class="col-6 col-md-3 mt-4 mt-md-0">
          <div class="card-wrapper card-bg rounded-10 text-center h-100 p-3">
            <img src="public/mainwebsite/assets/img/home/share/step3.png" class="h-70px" alt="">
            <p class="card-heading fs-16 fw-bold mb-0 my-2">STEP 3</p>
            <p class="card-para fs-14 mb-0">We cast the perfect mould of your jewellery and confirm your order by invoice payment.</p>
          </div>
        </div>
        <div class="col-6 col-md-3 mt-4 mt-md-0">
          <div class="card-wrapper card-bg-2 rounded-10 text-center h-100 p-3">
            <img src="public/mainwebsite/assets/img/home/share/step4.png" class="h-70px" alt="">
            <p class="card-heading fs-16 fw-bold mb-0 my-2">STEP 4</p>
            <p class="card-para fs-14 mb-0">Your jewellery is ready along-side a final payment adjustment.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="upload-design-section my-5">
  <div class="container-fluid section-img-wrapper">
   <div class="row mx-0 p-4 justify-content-end">
    <div class="col-12 col-lg-6 col-xl-5 px-0">
     <div class="nav-pills-wrapper rounded-10 overflow-hidden">
     <div class="design-form-tab p-3 pb-0">
      <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
        <li class="nav-item w-49 me-3 me-sm-0" role="presentation">
          <button class="nav-link w-100 fs-14 text-white  active" id="pills-upload-tab" data-bs-toggle="pill" data-bs-target="#pills-upload" type="button" role="tab" aria-controls="pills-upload" aria-selected="true">UPLOAD YOUR DESIGN</button>
        </li>
        <li class="nav-item w-49" role="presentation">
          <button class="nav-link w-100 fs-14 text-white" id="pills-candere-tab" data-bs-toggle="pill" data-bs-target="#pills-candere" type="button" role="tab" aria-controls="pills-candere" aria-selected="false">CANDERE DESIGN</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-upload" role="tabpanel" aria-labelledby="pills-upload-tab">
          <div class="row justify-content-center py-4">
            <div class="col-8 col-md-5">
              <div class="p-0">
                <div class="border border-white rounded p-3">
                  <div class="overflow-hidden"><img class="w-100" src="public/mainwebsite/assets/img/home/dummy_img.jpg" alt="" id="output"></div>
                </div>
                <form class="text-center mt-2" action="" id="orderdata"  enctype='multipart/form-data'  method="POST">
                  <label class="btn btn-theme1 text-white w-100 fs-14" for="file">Upload Image (Max 5mb)</label>
                  <input class="d-none" type="file" name="image" id="file" onchange="loadFile(event)">
                
              </div>
            </div>
            <div class="col-12 col-md-7 mt-3 mt-md-0">
              <div class="row align-items-center">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/diamond-icon.png" alt=""></span>
                    <span class="fs-14">Diamond Clarity</span>
                  </div>
                </div>
                <div class="col-6">
                  <select class="form-select fs-14 shadow-none bg-transparent text-white" aria-label="Default select example" name="diamond">
                    <option class="text-dark" selected disabled>Please Select</option>
                    <option class="text-dark" value="1">One</option>
                    <option class="text-dark" value="2">Two</option>
                    <option class="text-dark" value="3">Three</option>
                  </select>
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase" id="diamond"></span>
              </div>
              <div class="row align-items-center my-3">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/gold1.png" alt=""></span>
                    <span class="fs-14">Gold Colour</span>
                  </div>
                </div>
                <div class="col-6">
                  <select class="form-select fs-14 shadow-none bg-transparent text-white" aria-label="Default select example" name="colour">
                    <option class="text-dark" selected disabled>Please Select</option>
                    @foreach($colour as $key => $value)
                    <option class="text-dark" value="{{$value->id}}">{{$value->Name}}</option>
                    @endforeach
                    
                 
                  </select>
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase" id="colour"></span>
              </div>
              <div class="row align-items-center my-3">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/gold2.png" alt=""></span>
                    <span class="fs-14">Gold Purity</span>
                  </div>
                </div>
                <div class="col-6">
                  <select class="form-select fs-14 shadow-none bg-transparent text-white" aria-label="Default select example" name="purity">
                    <option class="text-dark" selected disabled>Please Select</option>
                    @foreach($purity as $key => $value)
                    
                    <option class="text-dark" value="{{$value->id}}">{{$value->Purity}}</option>
                    @endforeach
                  </select>
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase" id="purity"></span>
              </div>
              <div class="row align-items-center my-3">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/rupees.png" alt=""></span>
                    <span class="fs-14">Your Budget</span>
                  </div>
                </div>
                <div class="col-6">
                  <input type="text" class="form-control border-white bg-transparent shadow-none fs-14 text-white" placeholder="Your Budget" name="budget">
                 
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase" id="budget"></span>
              </div>
              <div class="row">
                <div class="col-12">
                  <textarea class="form-control bg-transparent text-white fs-14 shadow-none" placeholder="Description" id="floatingTextarea2" style="height: 80px" name="Description"></textarea>
                </div>
              </div>
              <div class="text-end">
              <button class="btn next-btn btn-theme1 shadow-none px-3 text-white fs-14 mt-3"  onclick="myfunction()">Next</button>
              </div>
            </div>
          </div>
        </div>
      </form>
        <div class="tab-pane fade" id="pills-candere" role="tabpanel" aria-labelledby="pills-candere-tab">
          <div class="row justify-content-center py-4">
            <div class="col-8 col-md-5">
              <div class="p-0">
                <div class="border border-white rounded p-3">
                  <div class="overflow-hidden produtimg"><img class="w-100" src="public/mainwebsite/assets/img/home/dummy_img.jpg" alt=""></div>
                </div>
                <form class="text-center mt-2" action="" id="form2">
                  <input class="form-control fs-14 shadow-none text-white border-white bg-transparent" type="text" id="searchsku" name="skunumber" placeholder="Candere SKU">
                  <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase skunumber" ></span>
                  <a class="btn btn-theme1 mt-2 w-100 text-white fs-14" onclick="searchsku()">Find Image</a>
               
              </div>
            </div>
            <div class="col-12 col-md-7 mt-3 mt-md-0">
              <div class="row align-items-center">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/diamond-icon.png" alt=""></span>
                    <span class="fs-14">Diamond Clarity</span>
                  </div>
                </div>
                <div class="col-6">
                  <select class="form-select fs-14 shadow-none bg-transparent text-white " aria-label="Default select example" name="diamond">
                    <option class="text-dark" selected disabled >Please Select</option>
                    <option class="text-dark" value="1">One</option>
                    <option class="text-dark" value="2">Two</option>
                    <option class="text-dark" value="3">Three</option>
                  </select>
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase diamond" ></span>
              </div>
              <div class="row align-items-center my-3">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/gold1.png" alt=""></span>
                    <span class="fs-14">Gold Colour</span>
                  </div>
                </div>
                <div class="col-6">
                  <select class="form-select fs-14 shadow-none bg-transparent text-white" aria-label="Default select example"  name="colour">
                    <option class="text-dark" selected disabled>Please Select</option>
                    @foreach($colour as $key => $value)
                    <option class="text-dark" value="{{$value->id}}">{{$value->Name}}</option>
                    @endforeach
                  </select>
                 
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase colour" ></span>
              </div>
              <div class="row align-items-center my-3">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/gold2.png" alt=""></span>
                    <span class="fs-14">Gold Purity</span>
                  </div>
                </div>
                <div class="col-6">
                  <select class="form-select fs-14 shadow-none bg-transparent text-white" name="purity" aria-label="Default select example">
                    <option class="text-dark" selected disabled>Please Select</option>
                    @foreach($purity as $key => $value)
                    <option class="text-dark" value="{{$value->id}}">{{$value->id}}</option>
                    @endforeach
                  </select>
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase purity" ></span>
              </div>
              <div class="row align-items-center my-3">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/rupees.png" alt=""></span>
                    <span class="fs-14">Your Budget</span>
                  </div>
                </div>
                <div class="col-6">
                  <input type="text" class="form-control border-white bg-transparent shadow-none fs-14 text-white"  name="budget" placeholder="Your Budget">
                
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase budget"></span>
              </div>
              <div class="row align-items-center my-3">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/category.png" alt=""></span>
                    <span class="fs-14">Category</span>
                  </div>
                </div>
                <div class="col-6">
                  <select class="form-select fs-14 shadow-none bg-transparent text-white" aria-label="Default select example" name="category" id="selectcategory" onchange="mycategory()">
                    <option class="text-dark" selected disabled >Please Select</option>
                    @foreach($category as $key => $value)
                    <option class="text-dark" value="{{$value->id}}">{{$value->en_Category_Name}}</option>
                    @endforeach
                  </select>
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase category" id="category"></span>
              </div>
              <div class="row align-items-center my-3">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <span><img class="me-1" src="public/mainwebsite/assets/img/home/category.png" alt=""></span>
                    <span class="fs-14">Subcategory</span>
                  </div>
                </div>
                <div class="col-6">
                  <select class="form-select fs-14 shadow-none bg-transparent text-white" aria-label="Default select example" name="subcategory" id="subcat">
                    <option class="text-dark" selected disabled >Please Select</option>
                  </select>
                </div>
                <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase subcategory" id="subcategory"></span>
              </div>
              <div class="row">
                <div class="col-12">
                  <textarea class="form-control bg-transparent text-white fs-14 shadow-none" placeholder="Description" id="floatingTextarea2" style="height: 80px" name="Description"></textarea>
                </div>
              </div>
              <div class="text-end">
                <button class="btn next-btn btn-theme1 shadow-none px-3 text-white fs-14 mt-3" onclick="form2()">Next</button>
                </div>
            </div>
          </div>
        </div>
      </form>
      </div>
     </div>
     <div class="contact-form-tab d-none">
      <div class="text-center text-white fs-14 p-2 contact-heading">YOUR CONTACT DETAILS</div>
      <div class="p-3">
        <form class="row" action="" id="finaldata">
          <div class="col-6 my-2">
            <input class="form-control shadow-none bg-transparent text-white border-white fs-14" type="text" placeholder="First Name" name="fname" >
            <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase " id="fname"></span>
          </div>
         
          <div class="col-6 my-2">
            <input class="form-control shadow-none bg-transparent text-white border-white fs-14" type="text" placeholder="Last Name"  name="lname">
            <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase " id="lname"></span>
          </div>
          <div class="col-6 my-2">
            <input class="form-control shadow-none bg-transparent text-white border-white fs-14" type="text" placeholder="Email"  name="email">
            <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase " id="email"></span>
          </div>
          <div class="col-6 my-2">
            <input class="form-control shadow-none bg-transparent text-white border-white fs-14" type="text" placeholder="Mobile Number"  name="phone">
            <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase " id="phone" ></span>
          </div>
          <div class="col-12 my-2">
            <input class="form-control shadow-none bg-transparent text-white border-white fs-14 " type="text" placeholder="Address"  name="address">
            <span class="text-danger fs-12 fw-bold text-center d-block pt-3 text-uppercase " id="address"></span>
          </div>
        
          <div class="col-12 my-2">
          <button class="btn btn-theme1 w-100 text-white" onclick="mydata()" >Submit</button>
          </div>
         </form>
         <div class="text-center fs-14 mt-3">
          <p class="mb-2">IN CASE OF ANY QUERIES CALL US ON</p>
          <p class="mb-2">+91 22 61066262</p>
          <p class="mb-2">OR</p>
          <P class="mb-2">Whatsapp Us!</P>
          <P class="mb-2">+91 9920024599</P>
         </div>
      </div>
     </div>
     </div>
    </div>
   </div>
  </div>
</section>
{{-- @dd($Product[0]->Primary_Image); --}}
<section class="album-section my-5">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center fs-20 fs-md-25 mb-3">
            OUR ALBUM OF CUSTOMIZATIONS
          </div>
        </div>
      </div>
      <div class="row album-carousel owl-carousel mx-0">
        <div class="col-12">
          <div class="album-img-wrapper position-relative overflow-hidden">
          <img class="position-relative owl-img" src="public/mainwebsite/assets/img/home/1.jpg" class="w-100" alt="">
           <div>
            <button class="btn view-btn shadow-none text-white position-absolute bottom-5 end-5 fs-14" data-bs-toggle="modal" data-bs-target="#productModal">View</button>
           </div>
          </div>
        </div>
        <div class="col-12">
          <div class="album-img-wrapper position-relative overflow-hidden">
          <img src="public/mainwebsite/assets/img/home/2.jpg" class="w-100" alt="">
          <button class="btn view-btn shadow-none text-white position-absolute bottom-5 end-5 fs-14">View</button>
          </div>
        </div>
        <div class="col-12">
          <div class="album-img-wrapper position-relative overflow-hidden">
          <img src="public/mainwebsite/assets/img/home/4.webp" class="w-100" alt="">
          <button class="btn view-btn shadow-none text-white position-absolute bottom-5 end-5 fs-14">View</button>
          </div>
        </div>
        <div class="col-12">
          <div class="album-img-wrapper position-relative overflow-hidden">
          <img src="public/mainwebsite/assets/img/home/5.webp" class="w-100" alt="">
          <button class="btn view-btn shadow-none text-white position-absolute bottom-5 end-5 fs-14">View</button>
          </div>
        </div>
        <div class="col-12">
          <div class="album-img-wrapper position-relative overflow-hidden">
          <img src="public/mainwebsite/assets/img/home/6.webp" class="w-100" alt="">
          <button class="btn view-btn shadow-none text-white position-absolute bottom-5 end-5 fs-14">View</button>
          </div>
        </div>
        <div class="col-12">
          <div class="album-img-wrapper position-relative overflow-hidden">
          <img src="public/mainwebsite/assets/img/home/7.webp" class="w-100" alt="">
          <button class="btn view-btn shadow-none text-white position-absolute bottom-5 end-5 fs-14">View</button>
          </div>
        </div>
      </div> 
    </div>
  </div>
</section>

<footer>
  <div class="container-fluid top-footer py-4 mb-5 mb-lg-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-4 my-2 my-lg-0 text-center">
          <h6 class="fs-20 fs-md-16 mb-0 fw-md-bold">Subscribe to get our latest offer updates</h6>
        </div>
        <div class="col-12 col-lg-4 my-2 my-lg-0 text-center">
          <form class="d-flex align-items-center border rounded">
            <input type="email" class="form-control border-0 shadow-none" placeholder="Your Email Address">
            <button type="submit" class="btn btn-theme2 shadow-none border-0 text-white">Subscribe</button>
          </form>
        </div>
        <div class="col-12 col-lg-4 my-2 my-lg-0">
          <ul class="list-unstyled mb-0 d-flex gap-3 justify-content-center justify-content-lg-end">
            <li>
              <a class="d-flex align-items-center justify-content-center w-40px h-40px rounded social-icon text-decoration-none" href="#"><i class="imgb img-facebook-f text-dark"></i></a>
            </li>
            <li>
              <a class="d-flex align-items-center justify-content-center w-40px h-40px rounded social-icon text-decoration-none" href="#"><i class="imgb img-instagram text-dark"></i></a>
            </li>
            <li>
              <a class="d-flex align-items-center justify-content-center w-40px h-40px rounded social-icon text-decoration-none" href="#"><i class="imgb img-youtube text-dark"></i></a>
            </li>
            <li>
              <a class="d-flex align-items-center justify-content-center w-40px h-40px rounded social-icon text-decoration-none" href="#"><i class="imgb img-twitter text-dark"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4 d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <h6 class="submenu-heading fs-14 fw-bold">ABOUT US</h6>
          <ul class="list-unstyled submenu-content mb-0">
              <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span> About Our Company</a></li>
              <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Media & Press</a></li>
              <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Envisage</a><li>
              <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Terms & Conditions</a></li>
              <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Privacy Policy</a></li>
              <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  FAQ</a></li>
              <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Offer T&C's</a></li>
          </ul>
        </div>
        <div class="col-3">
           <h6 class="submenu-heading fs-14 fw-bold">WHY CANDERE?</h6>
          <ul class="list-unstyled submenu-content mb-0">
            <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span> 15 Days Returns</a></li>
            <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Cancle & Refund</a></li>
            <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Lifetime Exchange</a><li>
            <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  DGRP</a></li>
            <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Certified Jewellary</a></li>
            <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Candere Wallet</a></li>
            <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Jewellary Inscurance</a></li>
          </ul>
       </div>
        <div class="col-3">
      <h6 class="submenu-heading fs-14 fw-bold">EXPERIENCE CANDERE</h6>
      <ul class="list-unstyled submenu-content mb-0">
          <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span> Lookbook</a></li>
          <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Video Gallery</a></li>
          <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span>  Customer Reviews</a><li>
          <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span> Candere Blog</a></li>
          <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span> Order Tracking</a></li>
          <li class="fs-14 py-1"><a class="text-dark text-decoration-none d-flex" href="#"><span class="d-flex align-items-center justify-content-center pe-2"><i class="imgs img-angle-right"></i></span> Virtual Try On</a></li>
      </ul>
       </div>
       <div class="col-3">
    <h6 class="submenu-heading fs-14 fw-bold">CONTACT US</h6>
    <ul class="list-unstyled mb-0">
      <li class="fs-14 py-1">India 022 61066262</li>
      <li class="fs-14 py-1">(9am-9pm, 7 days a week)</li>
      <li class="fs-14 py-1">support@candere.com</li>
    </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bottom-footer py-3 d-none d-lg-block">
   <div class="container">
    <div class="row align-items-center">
      <div class="col-6">
        <div class="text-white fs-12">© 2022 CANDERE.COM . ALL RIGHTS RESERVED. SITE MAP</div>
      </div>
      <div class="col-6">
        <div class="payment-wrapper d-flex align-items-center justify-content-end">
          <div class="icon mx-2">
            <img src="public/mainwebsite/assets/img/home/footer1.png" class="" alt="">
          </div>
          <div class="icon mx-2">
            <img src="public/mainwebsite/assets/img/home/footer2.png" class="" alt="">
          </div>
          <div class="icon mx-2">
            <img src="public/mainwebsite/assets/img/home/footer3.png" class="" alt="">
          </div>
          <div class="icon mx-2">
            <img src="public/mainwebsite/assets/img/home/footer4.png" class="" alt="">
          </div>
          <div class="icon ms-2">
            <img src="public/mainwebsite/assets/img/home/footer5.png" class="" alt="">
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
</footer>

<section class="mobile-bottom-bar shadow-lg d-lg-none position-fixed bottom-0 w-100 bg-white zi-9">
  <ul class="d-flex align-items-center justify-content-between m-0 list-unstyled">
    <li class="nav-item active w-25">
      <a class="nav-link d-flex flex-column align-items-center justify-content-center" href="#"><span class="icon-span text-dark d-flex align-items-center justify-content-center w-40px h-40px rounded-circle"><i class="imgr img-home"></i></span> <span class="fs-12 text-span position-absolute bottom-10px text-theme2">Home</span></a>
    </li>
    <li class="nav-item w-25">
      <a class="nav-link d-flex flex-column align-items-center justify-content-center" href="#"><span class="icon-span text-dark d-flex align-items-center justify-content-center w-40px h-40px rounded-circle"><i class="imgr img-shopping-bag"></i></span> <span class="fs-12 text-span position-absolute bottom-10px text-theme2">Cart</span></a>
    </li>
    <li class="nav-item w-25">
      <a class="nav-link d-flex flex-column align-items-center justify-content-center" href="#"><span class="icon-span text-dark d-flex align-items-center justify-content-center w-40px h-40px rounded-circle"><i class="imgr img-heart"></i></span> <span class="fs-12 text-span position-absolute bottom-10px text-theme2">Wishlist</span></a>
    </li>
    <li class="nav-item w-25">
      <a class="nav-link d-flex flex-column align-items-center justify-content-center" href="#"><span class="icon-span text-dark d-flex align-items-center justify-content-center w-40px h-40px rounded-circle"><i class="imgr img-user"></i></span> <span class="fs-12 text-span position-absolute bottom-10px text-theme2">User</span></a>
    </li>
  </ul>
</section>

<!-- product detail Modal -->
<div class="modal product-modal fade" id="productModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content pb-3">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="productModalLabel"></h5>
        <button type="button" class="btn-close d-none d-md-block" data-bs-dismiss="modal" aria-label="Close"></button>
        <span class="d-md-none"  data-bs-dismiss="modal" aria-label="Close"><i class="imgr img-angle-left text-dark fs-20"></i></span>
      </div>
      <div class="modal-body p-0 p-md-2">
        <div class="row mx-0">
          <div class="col-12 col-md-5 p-0 px-md-2">
            <div class="row product-carousel owl-carousel mx-0">
              <div class="col-12">
                <div class="product-img-wrapper">
                  <img src="public/mainwebsite/assets/img/home/product1.png" class="w-100" alt="">
                </div>
              </div>
              <div class="col-12">
                <div class="product-img-wrapper">
                  <img src="public/mainwebsite/assets/img/home/product2.png" class="w-100" alt="">
                </div>
              </div>
              <div class="col-12">
                <div class="product-img-wrapper">
                  <img src="public/mainwebsite/assets/img/home/product3.png" class="w-100" alt="">
                </div>
              </div>
              <div class="col-12">
                <div class="product-img-wrapper">
                  <img src="public/mainwebsite/assets/img/home/product4.png" class="w-100" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-7 mt-3 mt-md-0">
            <div class="row">
              <div class="col-12">
                <div class="d-flex justify-content-between align-items-start">
                  <div class="fs-18 fw-bold">Rise Above Neglect Bracelet in 925 Silver</div>
                  <div><i class="imgr img-heart fs-18"></i></div>
                </div>
              </div>
              <div class="col-12 mt-1">
                <div class="fs-12 text-theme1">Buy 2, Get Extra 5% Off! Use Code:SHAYASPL5</div>
              </div>
              <div class="col-12 mt-3">
                <span class="fs-18 ">₹2,610</span>
                <span class="fs-18 text-decoration-line-through ms-4">₹2,900</span>
                <span class="fs-18 text-theme1">(10% OFF)</span>
              </div>
              <div class="col-12 my-3">
                <div class="row align-items-center">
                  <div class="col-6 col-md-7">
                    <form action="">
                      <input type="text" class="form-control h-42px rounded-8" placeholder="Pincode">
                    </form>
                  </div>
                  <div class="col-6 col-md-5 text-end">
                    <button class="button">  
                      <span>Add to cart</span>  
                      <div class="cart">  
                        <svg viewBox="0 0 36 26">  
                          <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>  
                          <polyline points="15 13.5 17 15.5 22 10.5"></polyline>  
                        </svg>  
                      </div>  
                    </button>  
                  </div>
                </div>
              </div>
              <div class="col-12 fs-14">
                <p>Silver Lotus Structured Bracelet. Crafted in Oxidised 925 Silver with Synthetic Pink Sapphire. Uniquely handcrafted, no two pieces are exactly alike!</p>
                <p>Weight : 9.000 g (approx.)</p>
                <p>Size: 57.8 mm (Current Size 2.4 Anna Fits well from 2.2 to 2.6 Anna) | Length: 5.7 cm | Breadth: 4.9 cm</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- navbar offcanvas --}}
<div class="offcanvas mobile-nav-offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header pb-0">
    <button type="button" class=" border bg-light d-flex align-items-center justify-content-center h-40px w-40px rounded-10" data-bs-dismiss="offcanvas" aria-label="Close"><i class="imgr img-angle-left text-dark fs-20"></i></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled m-0">
      <li class="py-2"> <a class="text-dark fs-18 text-decoration-none fw-bold d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
        Trending <span><i class="imgs img-angle-down"></i></span>
      </a>
      <div class="collapse py-2" id="collapseExample1">
         <ul class="list-unstyled m-0">
          <li class="py-2"><a class="text-dark fs-16 text-decoration-none d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
            Shop By Design <span><i class="imgs img-angle-down"></i></span>
          </a> 
          <div class="collapse" id="collapseExample2">
            <ul class="list-unstyled submenu-content">
              <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Engagement</a></li>
              <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Solitaire</a></li>
              <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Couple Bands</a><li>
              <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Casual</a></li>
              <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Eternity</a></li>
              <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Pearl</a></li>
              <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Three Stone</a></li>
          </ul>
          </div>
        </li>
        <li class="py-2"><a class="text-dark fs-16 text-decoration-none d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
          Shop By Category <span><i class="imgs img-angle-down"></i></span>
        </a> 
        <div class="collapse" id="collapseExample3">
          <ul class="list-unstyled submenu-content">
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Diamond</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Gold</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Platinum</a><li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Gemstone</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Swarovski/CZ</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Silver</a></li>
        </ul>
        </div>
      </li>
      <li class="py-2"><a class="text-dark fs-16 text-decoration-none d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
        Shop By Price <span><i class="imgs img-angle-down"></i></span>
      </a> 
      <div class="collapse" id="collapseExample4">
        <ul class="list-unstyled submenu-content">
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Below ₹10k</a></li>
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">₹10k to 30k</a></li>
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">₹30k to 50k</a><li>
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Above ₹50k</a></li>
      </ul>
      </div>
    </li>
         </ul>
      </div>
    </li>
    {{--  --}}
    <li class="py-2"> <a class="text-dark fs-18 text-decoration-none fw-bold d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
      Ring <span><i class="imgs img-angle-down"></i></span>
    </a>
    <div class="collapse py-2" id="collapseExample5">
       <ul class="list-unstyled m-0">
        <li class="py-2"><a class="text-dark fs-16 text-decoration-none d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
          Shop By Design <span><i class="imgs img-angle-down"></i></span>
        </a> 
        <div class="collapse" id="collapseExample6">
          <ul class="list-unstyled submenu-content">
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Engagement</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Solitaire</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Couple Bands</a><li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Casual</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Eternity</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Pearl</a></li>
            <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Three Stone</a></li>
        </ul>
        </div>
      </li>
      <li class="py-2"><a class="text-dark fs-16 text-decoration-none d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
        Shop By Category <span><i class="imgs img-angle-down"></i></span>
      </a> 
      <div class="collapse" id="collapseExample7">
        <ul class="list-unstyled submenu-content">
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Diamond</a></li>
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Gold</a></li>
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Platinum</a><li>
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Gemstone</a></li>
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Swarovski/CZ</a></li>
          <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Silver</a></li>
      </ul>
      </div>
    </li>
    <li class="py-2"><a class="text-dark fs-16 text-decoration-none d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">
      Shop By Price <span><i class="imgs img-angle-down"></i></span>
    </a> 
    <div class="collapse" id="collapseExample8">
      <ul class="list-unstyled submenu-content">
        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Below ₹10k</a></li>
        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">₹10k to 30k</a></li>
        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">₹30k to 50k</a><li>
        <li class="fs-14 py-2"><a class="text-dark text-decoration-none" href="#">Above ₹50k</a></li>
    </ul>
    </div>
    </li>
       </ul>
    </div>
   </li>
      </ul>
  </div>
</div>
{{-- search offcanvas --}}
<div class="offcanvas offcanvas-bottom search-offcanvas" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
      <div class="w-70px h-6px bg-secondary rounded mx-auto"></div>
  </div>
  <div class="offcanvas-body small">
    <div class="d-flex align-items-center border rounded pe-3">
      <input type="search" class="form-control border-0 shadow-none py-2 h-42px fs-14" placeholder="Search Products" id="inputsearch4">
    </div>
    <div class="mt-3 text-center"><button class="btn btn-theme1 fs-14 shadow-none text-white px-4 rounded-8">Search</button></div>
  </div>
</div>
@endsection
@push('scripts') 
<script src="{{ asset('public/mainwebsite/assets/plugins/owl/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/public/mainwebsite/assets/js/index.min.js') }}"></script>
<script src="{{ asset('/public/mainwebsite/assets/plugins/glightbox/js/glightbox.min.js') }}"></script>
<script>
//   $(".next-btn").click(function(){
//   $(".nav-pills-wrapper").toggleClass("next-step");
// });
</script>
<script>
   document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {  
   if(!button.classList.contains('loading')) {  
     button.classList.add('loading');  
     setTimeout(() => button.classList.remove('loading'), 3700);  
   }  
   e.preventDefault();  
 })); 
</script>
<script>
  function myfunction(){
      event.preventDefault(); 
      $('.text-danger').html(''); 
      let formData =  new FormData($('#orderdata')[0]);
          $.ajax({
              url:"{{route('designdata')}}",
              method:"post",
              headers: {
                  'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },
              data:formData,
              dataType: 'json',
              cache:false,
              contentType: false,
              processData: false,
              success:function(data){
                  // location.reload();
                  $(".nav-pills-wrapper").toggleClass("next-step");
               
              },
              error:function(data){
                  
                  const obj = JSON.parse(data.responseText);
                  $.each(obj.errors, function(index, value) {
                    // console.log(index);
                      // document.getElementById( index ).innerHTML =  value[0];
                      $(`#${index}`).html(value[0]);
                  });
              }

          });
      
  }

  function mydata(){
      event.preventDefault(); 
      $('.text-danger').html(''); 
              var formData = new FormData(document.forms['finaldata']); // with the file input
              var poData = jQuery(document.forms['orderdata']).serializeArray();
              for (var i=0; i<poData.length; i++)
                  formData.append(poData[i].name, poData[i].value);
              var povalue = jQuery(document.forms['form2']).serializeArray();
              for (var i=0; i<povalue.length; i++)
                  formData.append(povalue[i].name, povalue[i].value);
          $.ajax({
              url:"{{route('designvalue')}}",
              method:"post",
              headers: {
                  'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },
              data:formData,
              dataType: 'json',
              cache:false,
              contentType: false,
              processData: false,
              success:function(data){
                  location.reload();
                  // $(".nav-pills-wrapper").toggleClass("next-step");
               
              },
              error:function(data){
                  
                  const obj = JSON.parse(data.responseText);
                  $.each(obj.errors, function(index, value) {
                    // console.log(index);
                      // document.getElementById( index ).innerHTML =  value[0];
                      $(`#${index}`).html(value[0]);
                  });
              }

          });
      
  }

  function mycategory(){
    $('.text-danger').html(''); 
    var data = $('#selectcategory').val();
    $.ajax({
              url:"{{route('selectcategory')}}",
              method:"post",
              headers: {
                  'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },
              data:{
                 data:data,
              },
              dataType: 'json',
              cache:false,
              // contentType: false,
              // processData: false,
              success:function(data){
                console.log(data);
                $.each(data,function(index ,value){
                  console.log(value.id);
                        $('#subcat').append (`<option class="text-dark" value="`+value.id+`">`+value.en_Subcategory_Name+`</option>`)

                });
               
              },

          });
  }

  function form2(){

    event.preventDefault(); 
    $('.text-danger').html(''); 
      let formData =  new FormData($('#form2')[0]);

          $.ajax({
              url:"{{route('form2data')}}",
              method:"post",
              headers: {
                  'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },
              data:formData,
              dataType: 'json',
              cache:false,
              contentType: false,
              processData: false,
              success:function(data){
                  // location.reload();
                  $(".nav-pills-wrapper").toggleClass("next-step");
               
              },
              error:function(data){
                  
                  const obj = JSON.parse(data.responseText);
                  $.each(obj.errors, function(index, value) {
                    // console.log(index);
                      // document.getElementById( index ).innerHTML =  value[0];
                      $(`.${index}`).html(value[0]);
                  });
              }

          });
   
  }
  
  function searchsku(){

    event.preventDefault(); 
    $('.text-danger').html(''); 
    console.log($('#searchsku').val() );
      var skunumber =  $('#searchsku').val();
          $.ajax({
              url:"{{route('searchsku')}}",
              method:"post",
              headers: {
                  'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },
              data:{skunumber:skunumber,},
              dataType: 'json',
              cache:false,
            //   contentType: false,
            //   processData: false,
              success:function(data){
                  // location.reload();
                  $('.produtimg').empty();
                 $('.produtimg').html('<img class="w-100" src="https://photostock.sarkarimaster.in/public/mainwebsite/assets/img/home/1.jpg" alt="">');
               
              },
              error:function(data){
                  
                  const obj = JSON.parse(data.responseText);
                  $.each(obj.errors, function(index, value) {
                    // console.log(index);
                      // document.getElementById( index ).innerHTML =  value[0];
                      $(`.${index}`).html(value[0]);
                  });
              }

          });
   
  }
</script>
@endpush