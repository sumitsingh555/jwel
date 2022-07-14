@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- hero-section area start here  -->
    <div class="hero-section">
        <div class="hero-slider">
            @foreach($sliders as $slider)
            <div class="signle-slide" style="background-image: url('{{asset(SliderImage().$slider->Background_Image)}}');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">{{langConverter($slider->en_Sub_Title,$slider->fr_Sub_Title)}}</h2>
                                <h1 class="slider-title">{{langConverter($slider->en_Title,$slider->fr_Title)}}</h1>
                                <p class="slider-text">{{langConverter($slider->en_Description,$slider->fr_Description)}}</p>
                                <div class="slider-btn">
                                    <a href="{{route('all.product')}}" class="secondary-btn">{{langConverter($slider->en_Button_Text,$slider->fr_Button_Text)}} <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="{{asset(SliderImage().$slider->Thumbnail)}}" alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- hero-section area end here  -->

    <!-- brads area start here  -->
    <div class="brads-area">
        <div class="container">
            <div class="brads-slide">
                @foreach($brands as $brand)
                <div class="sigle-brad">
                    <img src="{{asset(BrandImage().$brand->BrandImage)}}" alt="brad image"/>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- brads area start here  -->

    <!-- Popular Categories area start here  -->
    <div class="popular-categories-area section-bg section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">{{langConverter(siteContentHomePage('many_goods')->en_Title,siteContentHomePage('many_goods')->fr_Title)}}</h3>
                        <h2 class="section-title">{{langConverter(siteContentHomePage('many_goods')->en_Description_One,siteContentHomePage('many_goods')->fr_Description_One)}}</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="{{route('all.product')}}" class="primary-btn">{{__('View All Products')}}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach(Category_Des_Icon() as $item)
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="{{route('category.product',$item->id)}}">
                            <div class="categorie-wrap">
                                <div class="categorie-icon">
                                    <i class="{{$item->Category_Icon}}"></i>
                                </div>
                                <div class="categorie-info">
                                    <h3 class="categorie-name">{{langConverter($item->en_Category_Name,$item->fr_Category_Name)}}</h3>
                                    <h4 class="categorie-subtitle">{{ langConverter($item->en_Description,$item->fr_Description) }}</h4>
                                </div>
                            </div>
                            <i class="arrow flaticon-right-arrow"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Popular Categories area end here  --> 
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
                    <option class="text-dark" value="{{$value->id}}">{{$value->purity}}</option>
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
    <!-- Featured Products area start here  -->
    <div class="featured-productss-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">{{langConverter(siteContentHomePage('products')->en_Title,siteContentHomePage('products')->fr_Title)}}</h3>
                        <h2 class="section-title">{{langConverter(siteContentHomePage('products')->en_Description_One,siteContentHomePage('products')->fr_Description_One)}}</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="{{route('all.product')}}" class="see-btn">{{__('See All')}}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-grid-product">
                                <div class="product-top">
                                    <a href="{{route('single.product',$product->en_Product_Slug)}}"><img class="product-thumbnal" src="{{asset(ProductImage().$product->Primary_Image)}}" alt="{{__('product')}}" /></a>
                                    <div class="product-flags">
                                        @if($product->ItemTag)
                                            <span class="product-flag sale">{{$product->ItemTag}}</span>
                                        @endif
                                        @if($product->Discount )
                                            <span class="product-flag discount">{{ __('-')}}{{$product->Discount}}</span>
                                        @endif
                                    </div>
                                    <ul class="prdouct-btn-wrapper">
                                        <li class="single-product-btn">
                                            <a class="addToWishlist product-btn CompareList" data-id="{{$product->id}}" title="{{__('Add To Compare')}}"><i class="icon flaticon-bar-chart"></i></a>
                                        </li>
                                        <li class="single-product-btn">
                                            <a class="addCompare product-btn MyWishList" data-id="{{$product->id}}"  title="{{__('Add To Wishlist')}}"><i class="icon flaticon-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-info text-center">
                                    @foreach($product->product_tags as $ppt)
                                        <h4 class="product-catagory">{{$ppt->tag}}</h4>
                                    @endforeach
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                    <h3 class="product-name"><a class="product-link" href="{{route('single.product',$product->en_Product_Slug)}}">{{langConverter($product->en_Product_Name,$product->fr_Product_Name)}}</a></h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        {!!  productReview($product->id) !!}
                                    <div class="product-price">
                                        <span class="regular-price">{{currencySymbol()[currency()]}}{{currencyConverter($product->Price)}}</span>
                                        <span class="price">{{currencySymbol()[currency()]}}{{currencyConverter($product->Discount_Price)}}</span>
                                    </div>
                                    <a href="javascript:void(0)" title="{{__('Add To Cart')}}" class="add-cart addCart" data-id="{{$product->id}}">{{__('Add To Cart')}} <i class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Featured Products area end here  -->

    <!-- About Area start here  -->
    <div class="about-area section">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">{{langConverter(siteContentHomePage('about_us')->en_Title,siteContentHomePage('about_us')->fr_Title)}}</h3>
                        <h2 class="section-title">{!! clean(langConverter(siteContentHomePage('about_us')->en_Description_One,siteContentHomePage('about_us')->fr_Description_One)) !!}</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="{{route('about.us')}}" class="primary-btn">{{__('Know More About Us')}}</a>
                    </div>
                </div>
            </div>
            <div class="story-box-slide">
                @foreach($story as $item)
                <div class="single-story-box">
                    <h3 class="story-title">{{__('Story Of')}} <span class="story-year">{{$item->Year}}</span></h3>
                    <p class="story-content">{{langConverter($item->en_Description,$item->fr_Description)}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About Area  end here  -->

    <!-- Trending Products area start here  -->
    <div class="trending-products-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="sub-title">{{langConverter(siteContentHomePage('popular_products')->en_Title,siteContentHomePage('popular_products')->fr_Title)}}</h3>
                        <h2 class="section-title">{{ langConverter(siteContentHomePage('popular_products')->en_Description_One,siteContentHomePage('popular_products')->fr_Description_One) }}</h2>
                    </div>
                    <div class="col-lg-6 align-self-end text-lg-end">
                        <div class="primary-tabs">
                            <ul class="nav nav-tabs" id="TrendingProducts" role="tablist">
                                @if ($allsettings['new_arrival'] == ACTIVE)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{$allsettings['new_arrival'] == ACTIVE ? 'active' : ''}}" id="new-arrival-tab" data-bs-toggle="tab" data-bs-target="#new-arrival" type="button" role="tab" aria-controls="new-arrival" aria-selected="true">{{__('NEW ARRIVAL')}}</button>
                                    </li>
                                @endif
                                @if ($allsettings['best_selling'] == ACTIVE)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{$allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == ACTIVE ? 'active' : ''}}" id="best-selling-tab" data-bs-toggle="tab" data-bs-target="#best-selling" type="button" role="tab" aria-controls="best-selling" aria-selected="false">{{__('BEST SELLING')}}</button>
                                    </li>
                                @endif
                                @if ($allsettings['on_sale'] == ACTIVE)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{$allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == ACTIVE ? 'active' : ''}}" id="on-sell-tab" data-bs-toggle="tab" data-bs-target="#on-sell" type="button" role="tab" aria-controls="on-sell" aria-selected="false">{{__('ON SALE')}}</button>
                                    </li>
                                @endif
                                @if ($allsettings['featured_items'] == ACTIVE)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{$allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == INACTIVE && $allsettings['featured_items'] == ACTIVE ? 'active' : ''}}" id="featured-items-tab" data-bs-toggle="tab" data-bs-target="#featured-items" type="button" role="tab" aria-controls="featured-items" aria-selected="false">{{__('FEATURED ITEMS')}}</button>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="TrendingProductsContent">
                @if ($allsettings['new_arrival'] == ACTIVE)
                    <div class="tab-pane fade {{$allsettings['new_arrival'] == ACTIVE ? 'show active' : ''}}" id="new-arrival" role="tabpanel" aria-labelledby="new-arrival-tab">
                        <div class="row">
                            @foreach($new_arrivals as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-grid-product">
                                            <div class="product-top">
                                                <a href="{{route('single.product',$product->en_Product_Slug)}}"><img class="product-thumbnal" src="{{asset(ProductImage().$product->Primary_Image)}}" alt="{{__('product')}}" /></a>
                                                <div class="product-flags">
                                                    @if($product->ItemTag)
                                                        <span class="product-flag sale">{{$product->ItemTag}}</span>
                                                    @endif
                                                    @if($product->Discount )
                                                        <span class="product-flag discount">{{ __('-')}}{{$product->Discount}}</span>
                                                    @endif
                                                </div>
                                                <ul class="prdouct-btn-wrapper">
                                                    <li class="single-product-btn">
                                                        <a class="addToWishlist product-btn CompareList" data-id="{{$product->id}}" title="{{__('Add To Compare')}}"><i class="icon flaticon-bar-chart"></i></a>
                                                    </li>
                                                    <li class="single-product-btn">
                                                        <a class="addCompare product-btn MyWishList" data-id="{{$product->id}}" title="{{__('Add To Wishlist')}}"><i class="icon flaticon-like"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info text-center">
                                                @foreach($product->product_tags as $pptn)
                                                    <h4 class="product-catagory">{{$pptn->tag}}</h4>
                                                @endforeach
                                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                                <h3 class="product-name"><a class="product-link" href="{{route('single.product',$product->en_Product_Slug)}}">{{langConverter($product->en_Product_Name,$product->fr_Product_Name)}}</a></h3>
                                                <!-- This is server side code. User can not modify it. -->
                                                {!!  productReview($product->id) !!}
                                                <div class="product-price">
                                                    <span class="regular-price">{{currencySymbol()[currency()]}} {{currencyConverter($product->Price)}}</span>
                                                    <span class="price">{{currencySymbol()[currency()]}} {{currencyConverter($product->Discount_Price)}}</span>
                                                </div>
                                                <a href="javascript:void(0)" title="{{__('Add To Cart')}}" class="add-cart addCart" data-id="{{$product->id}}">{{__('Add To Cart')}} <i class="icon fas fa-plus-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if ($allsettings['best_selling'] == ACTIVE)
                     <div class="tab-pane fade {{$allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == ACTIVE ? 'show active' : ''}}" id="best-selling" role="tabpanel" aria-labelledby="best-selling-tab">
                            <div class="row">
                                @foreach($best_sellings as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-grid-product">
                                            <div class="product-top">
                                                <a href="{{route('single.product',$product->en_Product_Slug)}}"><img class="product-thumbnal" src="{{asset(ProductImage().$product->Primary_Image)}}" alt="{{__('product')}}" /></a>
                                                <div class="product-flags">
                                                    @if($product->ItemTag)
                                                        <span class="product-flag sale">{{$product->ItemTag}}</span>
                                                    @endif
                                                    @if($product->Discount )
                                                        <span class="product-flag discount">{{ __('-')}}{{$product->Discount}}</span>
                                                    @endif
                                                </div>
                                                <ul class="prdouct-btn-wrapper">
                                                    <li class="single-product-btn">
                                                        <a class="addToWishlist product-btn CompareList" data-id="{{$product->id}}" title="{{__('Add To Compare')}}"><i class="icon flaticon-bar-chart"></i></a>
                                                    </li>
                                                    <li class="single-product-btn">
                                                        <a class="addCompare product-btn MyWishList" data-id="{{$product->id}}" title="{{__('Add To Wishlist')}}"><i class="icon flaticon-like"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info text-center">
                                                @foreach($product->product_tags as $pptb)
                                                    <h4 class="product-catagory">{{$pptb->tag}}</h4>
                                                @endforeach
                                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                                <h3 class="product-name"><a class="product-link" href="{{route('single.product',$product->en_Product_Slug)}}">{{langConverter($product->en_Product_Name,$product->fr_Product_Name)}}</a></h3>
                                                <!-- This is server side code. User can not modify it. -->
                                                {!!  productReview($product->id) !!}
                                                <div class="product-price">
                                                    <span class="regular-price">{{currencySymbol()[currency()]}} {{currencyConverter($product->Price)}}</span>
                                                    <span class="price">{{currencySymbol()[currency()]}} {{currencyConverter($product->Discount_Price)}}</span>
                                                </div>
                                                <a href="javascript:void(0)" title="{{__('Add To Cart')}}" class="add-cart addCart" data-id="{{$product->id}}">{{__('Add To Cart')}} <i class="icon fas fa-plus-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                @endif
                @if ($allsettings['on_sale'] == ACTIVE)
                     <div class="tab-pane fade {{$allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == ACTIVE ? 'show active' : ''}}" id="on-sell" role="tabpanel" aria-labelledby="on-sell-tab">
                            <div class="row">
                                @foreach($on_sales as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-grid-product">
                                            <div class="product-top">
                                                <a href="{{route('single.product',$product->en_Product_Slug)}}}"><img class="product-thumbnal" src="{{asset(ProductImage().$product->Primary_Image)}}" alt="product" /></a>
                                                <div class="product-flags">
                                                    @if($product->ItemTag)
                                                        <span class="product-flag sale">{{$product->ItemTag}}</span>
                                                    @endif
                                                    @if($product->Discount )
                                                        <span class="product-flag discount">{{ __('-')}}{{$product->Discount}}</span>
                                                    @endif
                                                </div>
                                                <ul class="prdouct-btn-wrapper">
                                                    <li class="single-product-btn">
                                                        <a class="addToWishlist product-btn CompareList" data-id="{{$product->id}}" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                                    </li>
                                                    <li class="single-product-btn">
                                                        <a class="addCompare product-btn MyWishList" data-id="{{$product->id}}" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info text-center">
                                                @foreach($product->product_tags as $ppto)
                                                    <h4 class="product-catagory">{{$ppto->tag}}</h4>
                                                @endforeach
                                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                                <h3 class="product-name"><a class="product-link" href="{{route('single.product',$product->en_Product_Slug)}}">{{langConverter($product->en_Product_Name,$product->fr_Product_Name)}}</a></h3>
                                                <!-- This is server side code. User can not modify it. -->
                                                {!!  productReview($product->id) !!}
                                                <div class="product-price">
                                                    <span class="regular-price">{{currencySymbol()[currency()]}} {{currencyConverter($product->Price)}}</span>
                                                    <span class="price">{{currencySymbol()[currency()]}} {{currencyConverter($product->Discount_Price)}}</span>
                                                </div>
                                                <a href="javascript:void(0)" title="{{__('Add To Cart')}}" class="add-cart addCart" data-id="{{$product->id}}">{{__('Add To Cart')}} <i class="icon fas fa-plus-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                @endif
                @if ($allsettings['featured_items'] == ACTIVE)
                     <div class="tab-pane fade {{$allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == INACTIVE && $allsettings['featured_items'] == ACTIVE ? 'show active' : ''}}" id="featured-items" role="tabpanel" aria-labelledby="featured-items-tab">
                            <div class="row">
                                @foreach($featured_products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-grid-product">
                                            <div class="product-top">
                                                <a href="{{route('single.product',$product->en_Product_Slug)}}"><img class="product-thumbnal" src="{{asset(ProductImage().$product->Primary_Image)}}" alt="product" /></a>
                                                <div class="product-flags">
                                                    @if($product->ItemTag)
                                                        <span class="product-flag sale">{{$product->ItemTag}}</span>
                                                    @endif
                                                    @if($product->Discount )
                                                        <span class="product-flag discount">{{ __('-')}}{{$product->Discount}}</span>
                                                    @endif
                                                </div>
                                                <ul class="prdouct-btn-wrapper">
                                                    <li class="single-product-btn">
                                                        <a class="addToWishlist product-btn CompareList" data-id="{{$product->id}}" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                                    </li>
                                                    <li class="single-product-btn">
                                                        <a class="addCompare product-btn MyWishList" data-id="{{$product->id}}" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info text-center">
                                                @foreach($product->product_tags as $pptf)
                                                    <h4 class="product-catagory">{{$pptf->tag}}</h4>
                                                @endforeach
                                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                                <h3 class="product-name"><a class="product-link" href="{{route('single.product',$product->en_Product_Slug)}}">{{langConverter($product->en_Product_Name,$product->fr_Product_Name)}}</a></h3>
                                                <!-- This is server side code. User can not modify it. -->
                                                {!!  productReview($product->id) !!}
                                                <div class="product-price">
                                                    <span class="regular-price">{{currencySymbol()[currency()]}} {{currencyConverter($product->Price)}}</span>
                                                    <span class="price">{{currencySymbol()[currency()]}} {{currencyConverter($product->Discount_Price)}}</span>
                                                </div>
                                                <a href="javascript:void(0)" title="{{__('Add To Cart')}}" class="add-cart addCart" data-id="{{$product->id}}">{{__('Add To Cart')}} <i class="icon fas fa-plus-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Trending Products area end here  -->

    <!-- product banenr area start here  -->
    <div class="product-banner pb-100">
        <div class="container">
            <div class="row">
                @foreach($promotion as $promo)
                <div class="col-md-5">
                    <a href="#" class="single-banner"><img class="banner-image" src="{{asset(PromotionImage().$promo->Image_One)}}" alt="product-banner" /></a>
                </div>
                <div class="col-md-7">
                    <a href="#" class="single-banner"><img class="banner-image" src="{{asset(PromotionImage().$promo->Image_Two)}}" alt="product-banner" /></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- product banner area end here  -->
    <!-- Blog area start here  -->
    <div class="blog-area section-top section-bg pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">{{langConverter(siteContentHomePage('blogspot')->en_Title,siteContentHomePage('blogspot')->fr_Title)}}</h3>
                        <h2 class="section-title">{{ langConverter(siteContentHomePage('blogspot')->en_Description_One,siteContentHomePage('blogspot')->fr_Description_One) }}</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="{{route('blog')}}" class="see-btn">{{__('See All')}}</a>
                    </div>
                </div>
            </div>

            <div class="blog-slide">
                @foreach($blogs as $blog)
                <!-- Blog Item Start -->
                <div class="single-grid-blog">
                    <div class="blog-thumbnail">
                        <a href="{{route('blog.details',$blog->id)}}"><img class="thumbnail-image" src="{{asset(BlogImage().$blog->Small_Image)}}" alt="blog" /></a>
                    </div>
                    <div class="blog-info">
                        <ul class="blog-category">
                            @foreach($blog->tags as $Item)
                                @foreach($Item->Tag as $n)
                                    <li class="single-category"><a class="category-text" href="{{route('blog.details',$blog->id)}}">{{$n}}</a></li>
                                @endforeach
                            @endforeach
                        </ul>
                        <h3 class="blog-title"><a class="blog-link" href="{{route('blog.details',$blog->id)}}">{{langConverter($blog->en_Title,$blog->fr_Title)}}</a></h3>
                        <p class="blog-content">{!! Str::limit(clean(langConverter($blog->en_Description_Two,$blog->fr_Description_Two)),205) !!}</p>
                        <a class="blog-btn" href="{{route('blog.details',$blog->id)}}l">{{__('See Details')}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog area end here  -->

    <!-- Image Gallery area start here  -->
    <div class="image-gallery-area section-top pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-header-area">
                        <h3 class="sub-title">{{langConverter(siteContentHomePage('image_gallery')->en_Title,siteContentHomePage('image_gallery')->fr_Title)}}</h3>
                        <h2 class="section-title">{{ langConverter(siteContentHomePage('image_gallery')->en_Description_One,siteContentHomePage('image_gallery')->fr_Description_One) }}</h2>
                    </div>
                    @foreach($image_gallery as $item)
                        @if ($loop->iteration %3==1)
                            @if($item->Image !='' && $item->Image!=null)
                                <div class="single-gallery {{($loop->index == 3 ?'big-height' : '')}}">
                                    <img class="gallery-image" src="{{asset(ImageGallery().$item->Image)}}" alt="gallery" />
                                    <div class="popuo-overlay">
                                        <a class="popup-image" href="{{asset(ImageGallery().$item->Image)}}"><i class="view-icon flaticon-view"></i></a>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-4">
                    @foreach($image_gallery as $item)
                        @if ($loop->iteration %3==2)
                            <div class="single-gallery">
                                <img class="gallery-image" src="{{asset(ImageGallery().$item->Image)}}" alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image" href="{{asset(ImageGallery().$item->Image)}}"><i class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
                <div class="col-lg-4 col-md-4">
                    @foreach($image_gallery as $item)
                        @if ($loop->iteration %3==0)
                            <div class="single-gallery">
                                <img class="gallery-image" src="{{asset(ImageGallery().$item->Image)}}" alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image" href="{{asset(ImageGallery().$item->Image)}}}"><i class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery area end here  -->

    <!-- Testimonial ara start here  -->
    <div class="testimonial-area section section-bg">
        <div class="container">
            <div class="section-header-area text-center">
                <h3 class="sub-title">{{__('Testimonial')}}</h3>
                <h2 class="section-title">{{__('What People Are')}} <br />{{__('Saying About Ourself')}}</h2>
            </div>
            <div class="testimonial-slide-top">

                <!-- Testimonial authors Float Images Start -->
                @foreach ($testimonial as $test)
                    @if ($loop->iteration == 1)
                        <img src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="img" class="testimonial-float-img testimonial-left-1 position-absolute">
                    @elseif ($loop->iteration == 2)
                        <img src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="img" class="testimonial-float-img testimonial-left-2 position-absolute">
                    @elseif ($loop->iteration == 3)
                        <img src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="img" class="testimonial-float-img testimonial-left-3 position-absolute">
                    @elseif ($loop->iteration == 4)
                        <img src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="img" class="testimonial-float-img testimonial-left-4 position-absolute">
                    @elseif ($loop->iteration == 5)
                        <img src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="img" class="testimonial-float-img testimonial-right-1 position-absolute">
                    @elseif ($loop->iteration == 6)
                        <img src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="img" class="testimonial-float-img testimonial-right-2 position-absolute">
                    @elseif ($loop->iteration == 7)
                        <img src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="img" class="testimonial-float-img testimonial-right-3 position-absolute">
                    @elseif ($loop->iteration == 8)
                        <img src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="img" class="testimonial-float-img testimonial-right-4 position-absolute">
                @endif
            @endforeach
            <!-- Testimonial authors Float Images End -->

                <img class="shape-image" src="{{asset('frontend/assets/images/shape.png')}}" alt="shape" />
                <div class="testimonial-image-slide">
                    @foreach ($testimonial as $test)
                        <div class="signle-testimonial-image"><img class="testimonial-image" src="{{asset(IMG_TESTIMONIAL.$test->Image)}}" alt="testimonal-image" /></div>
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="testimonail-slide">
                        @foreach ($testimonial as $test)
                            <div class="single-testimonial">
                                <p class="testimonial-text">{{ langConverter($test->en_Description,$test->fr_Description) }}</p>
                                <h3 class="testimonial-title">{{$test->Name}}</h3>
                                <ul class="review-area">
                                    <li><i class="flaticon-star"></i></li>
                                    <li class="{{$test->star == 1 ? 'inactive' : ''}}"><i class="flaticon-star"></i></li>
                                    <li class="{{$test->star == 1 || $test->star == 2 ? 'inactive' : ''}}"><i class="flaticon-star"></i></li>
                                    <li class="{{$test->star == 1 || $test->star == 2 || $test->star == 3 ? 'inactive' : ''}}"><i class="flaticon-star"></i></li>
                                    <li class="{{$test->star == 1 || $test->star == 2 || $test->star == 3 || $test->star == 4 ? 'inactive' : ''}}"><i class="flaticon-star"></i></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial ara end here  -->
@endsection

@section('subscribe_pop_up_modal')
    @if(!session()->has('dontshoW'))
    <!-- Page Load Popup Modal End -->
    <div class="modal fade bd-example-modal-lg theme-modal" id="popUpModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1 modal-bg">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="offer_modal_left">
                                        <img src="{{asset(IMG_LOGO_PATH.$allsettings['main_logo'])}}" alt="logo">
                                        <h3>{{__('SUBSCRIBE TO NEWSLETTER')}}</h3>
                                        <p class="m-0">{{__('Subscribe to the Zairito mailing list to receive updates on new arrivals, special offers and our promotions.')}}</p>

                                        <form id="subscribe_form" name="subscribe_form" >
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control subscribeModal" name="subscribeval" id="subscribeval" placeholder="{{__('Your email')}}">
                                                <div class="input-group-append">
                                                    <button class="theme-btn-one btn-black-overlay btn_sm border-0 subscribeModal" id="subscribeModal">
                                                        {{__('Subscribe')}}</button>
                                                </div>
                                            </div>
                                            <div class="check_boxed_modal">
                                                <input type="checkbox" id="doNotShowModel" name="dontshowmodal" value="dont_show">
                                                <label for="vehicle1">{{__("Don't show this popup again")}}</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="offer_modal_img d-none d-lg-flex">
                                        <img src="{{asset(IMG_ADVERTISE_PATH.$allsettings['popup_image'])}}" alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Page Load Popup Modal End -->
    <div id="DoNotSubscribe" data-url="{{ route('do.not.subscribe') }}"></div>
    <div id="SubscribeStore" data-url="{{route('admin.subscribe.store')}}"></div>
    @push('post_script')
        <script src="{{asset('frontend/assets/js/pages/home.js')}}"></script>
    @endpush()
@endsection
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
                console.log(formData);
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
