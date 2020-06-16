@extends('shop.layouts.main')

@section('content')
 <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding pb-0">
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom ">
                                            <img  src="{{ asset($product->image)  }}" alt="product-details" />
                                        </div>
                                        @foreach ($image as $item_image)
                                        <div class="pro-large-img img-zoom ">
                                            <img  src="{{ asset($item_image->filename)}}" alt="product-details" />
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="{{ asset($product->image)  }}" alt="product-details" />
                                        </div>
                                        @foreach ($image as $item_image)
                                        <div class="pro-nav-thumb">
                                            <img src="{{ asset($item_image->filename)}}" alt="product-details" />
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                    <h3 class="product-name">{{$product->name}}</h3>
                                        <div class="ratings d-flex">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-old"><del>{{ number_format($product->price,0,",",".") }} <span style="text-transform: lowercase">đ</del></span>
                                            <span class="price-regular">{{  number_format($product->sale,0,",",".") }}đ</span>
                                        </div>
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i> Số Lượng:
                                        <span>{{$product->stock}}</span>
                                        </div>
                                    <p class="pro-desc">{{$product->summary}}</p>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">qty:</h6>
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </div>
                                            <div class="action_link">
                                                <a class="btn btn-cart2" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                        {{-- <div class="like-icon">
                                            <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews section-padding pb-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_two">information</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_three">reviews (1)</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p>{!!$product->description!!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>color</td>
                                                            <td>black, blue, red</td>
                                                        </tr>
                                                        <tr>
                                                            <td>size</td>
                                                            <td>L, M, S</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="tab_three">
                                                <form action="#" class="review-form">
                                                    <h5>1 review for <span>Chaz Kangeroo</span></h5>
                                                    <div class="total-reviews">
                                                        <div class="rev-avatar">
                                                            <img src="assets/img/about/avatar.jpg" alt="">
                                                        </div>
                                                        <div class="review-box">
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            </div>
                                                            <div class="post-author">
                                                                <p><span>admin -</span> 30 Mar, 2019</p>
                                                            </div>
                                                            <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                                                amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                                                vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                                                iaculis, dui congue placerat pretium, augue erat
                                                                accumsan lacus</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                                Your Name</label>
                                                            <input type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                                Your Email</label>
                                                            <input type="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                                Your Review</label>
                                                            <textarea class="form-control" required></textarea>
                                                            <div class="help-block pt-10"><span
                                                                    class="text-danger">Note:</span>
                                                                HTML is not translated!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                                Rating</label>
                                                            &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                            <input type="radio" value="1" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="2" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="3" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="4" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="5" name="rating" checked>
                                                            &nbsp;Good
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="btn btn-sqr" type="submit">Continue</button>
                                                    </div>
                                                </form> <!-- end of review-form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details reviews end -->
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->
     <!-- Related product area start -->
     <section class="product-gallery section-padding">
        <div class="container">
            <div class="row">
                <div class="col-4"><h2>Sản Phẩm Liên Quan</h2></div>
                <div class="col-12">
                    <div class="product-carousel--4 slick-row-5 slick-arrow-style">
                        <!-- product single item start -->
                        @foreach ($relatedProducts  as $product)
                        <div class="product-item ">
                            <div class="product-thumb ">
                                <a href="{{ route('shop.product', ['category' => $product->category->slug , 'slug' => $product->slug , 'id' => $product->id]) }}" title="{{ $product->name }}">
                                    <img src="{{ asset($product->image)  }}"alt="product thumb" class="">
                                </a>

                                <div class="product-label">
                                    <span>new</span>
                                </div>
                                <div class="discount-label">
                                    <span>-10% Off</span>
                                </div>
                            </div>
                            <div class="product-content ">
                                <div class="product-caption">
                                    <h6 class="product-name" style="height: 70px">
                                        <a href="product-details.html">{{$product->name }}</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del>
                                            {{ number_format($product->price,0,",",".") }}đ
                                        </del></span>
                                        <span class="price-regular">
                                            {{  number_format($product->sale,0,",",".") }}đ
                                        </span>
                                    </div>
                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                                <div class="ratings">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- product single item end -->
                    </div>

                </div>
        </div>

    </section>
    <!-- Related product area end -->
@endsection
