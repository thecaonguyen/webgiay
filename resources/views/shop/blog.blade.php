@extends('shop.layouts.main')

@section('content')
    <div class="blog-main-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2">
                        <aside class="blog-sidebar-wrapper">
                            <div class="blog-sidebar">
                                <h5 class="title">search</h5>
                                <div class="sidebar-serch-form">
                                    <form action="#">
                                        <input type="text" class="search-field" placeholder="search here">
                                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h5 class="title">recent post</h5>
                                <div class="recent-post">
                                    <div class="recent-post-item">
                                        <figure class="product-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/img/blog/blog-1.jpg" alt="blog image">
                                            </a>
                                        </figure>
                                        <div class="recent-post-description">
                                            <div class="product-name">
                                                <h6><a href="blog-details.html">Auctor gravida enim</a></h6>
                                                <p>Mar 10 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-post-item">
                                        <figure class="product-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/img/blog/blog-2.jpg" alt="blog image">
                                            </a>
                                        </figure>
                                        <div class="recent-post-description">
                                            <div class="product-name">
                                                <h6><a href="blog-details.html">gravida auctor dnim</a></h6>
                                                <p>Apr 18 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-post-item">
                                        <figure class="product-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/img/blog/blog-3.jpg" alt="blog image">
                                            </a>
                                        </figure>
                                        <div class="recent-post-description">
                                            <div class="product-name">
                                                <h6><a href="blog-details.html">enim auctor gravida</a></h6>
                                                <p>Jun 14 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="blog-sidebar">
                                <h5 class="title">Tags</h5>
                                <ul class="blog-tags">
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">Phone</a></li>
                                    <li><a href="#">Kids</a></li>
                                </ul>
                            </div> <!-- single sidebar end -->
                        </aside>
                    </div>
                    <div class="col-lg-9 order-1">
                        <div class="blog-item-wrapper">
                            <!-- blog post item start -->
                            <div class="blog-post-item blog-details-post d-block">
                                <div class="blog-thumb w-100">
                                    <img src="{{asset($blogs->image)}}" alt="blog thumb">
                                </div>
                                <div class="blog-content w-100 mt-20 pl-0">
                                    
                                    <h3 class="blog-title">{{ $blogs->title }}</h3>
                                    <div class="blog-meta">
                                        <p>{{$blogs->updated_at}} | <a href="#">{{$blogs->url}}</a></p>
                                    </div>
                                   
                                    <div class="entry-summary">
                                        <p>{!! $blogs->description !!}</p>
                                        <div class="tag-line">
                                            <h6>Tag :</h6>
                                            <a href="#">Necklaces</a>,
                                            <a href="#">Earrings</a>,
                                            <a href="#">Jewellery</a>,
                                        </div>
                                        <div class="blog-share-link">
                                            <h6>Share :</h6>
                                            <div class="blog-social-icon">
                                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog post item end -->

                            <!-- comment area start -->
                            <div class="comment-section section-padding">
                                <div class="blog-bg">
                                    <h5>03 Comment</h5>
                                    <ul>
                                        <li>
                                            <div class="author-avatar">
                                                <img src="assets/img/blog/comment-icon.png" alt="">
                                            </div>
                                            <div class="comment-body">
                                                <span class="reply-btn"><a href="#">Reply</a></span>
                                                <h5 class="comment-author">Admin</h5>
                                                <div class="comment-post-date">
                                                    15 Dec, 2019 at 9:30pm
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                                    adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                            </div>
                                        </li>
                                        <li class="comment-children">
                                            <div class="author-avatar">
                                                <img src="assets/img/blog/comment-icon.png" alt="">
                                            </div>
                                            <div class="comment-body">
                                                <span class="reply-btn"><a href="#">Reply</a></span>
                                                <h5 class="comment-author">Admin</h5>
                                                <div class="comment-post-date">
                                                    20 Nov, 2019 at 9:30pm
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                                    adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author-avatar">
                                                <img src="assets/img/blog/comment-icon.png" alt="">
                                            </div>
                                            <div class="comment-body">
                                                <span class="reply-btn"><a href="#">Reply</a></span>
                                                <h5 class="comment-author">Admin</h5>
                                                <div class="comment-post-date">
                                                    25 Jan, 2019 at 9:30pm
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                                    adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- comment area end -->

                            <!-- start blog comment box -->
                            <div class="blog-comment-wrapper">
                                <h5>Leave A Reply</h5>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form action="#">
                                    <div class="comment-post-box">
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Comment</label>
                                                <textarea name="commnet" placeholder="Write a comment"></textarea>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Name</label>
                                                <input type="text" class="coment-field" placeholder="Name">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Email</label>
                                                <input type="text" class="coment-field" placeholder="Email">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Website</label>
                                                <input type="text" class="coment-field" placeholder="Website">
                                            </div>
                                            <div class="col-12">
                                                <div class="coment-btn">
                                                    <input class="btn btn-sqr" type="submit" name="submit" value="Post Comment">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- start blog comment box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
