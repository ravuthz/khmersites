@extends('home')

@section('content')

@include('partials.slider')

@include('home._col_4')
<!-- End Gallery Row -->
<!-- <div class="row">
    Begin Bottom Section
    Blog Preview
        ==================================================
    <div class="span6">
        <h5 class="title-bg">From the Blog
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>
        <div id="blogCarousel" class="carousel slide ">
            Carousel items
            <div class="carousel-inner">
                Blog Item 1
                <div class="active item">
                    <a href="blog-single.htm"><img src="{{url('assets/img/gallery/blog-med-img-1.jpg')}}" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">A subject that is beautiful in itself</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                <li>
                                    <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a>
                                        <li>
                                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a>
                                                <li>
                                                    <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                        <p>
                </div>
                Blog Item 2
                <div class="item">
                    <a href="blog-single.htm"><img src="{{url('assets/img/gallery/blog-med-img-1.jpg')}}" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">A great artist is always before his time</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                <li>
                                    <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a>
                                        <li>
                                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a>
                                                <li>
                                                    <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                        <p>
                </div>
                Blog Item 3
                <div class="item">
                    <a href="blog-single.htm"><img src="{{url('assets/img/gallery/blog-med-img-1.jpg')}}" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">Is art everything to anybody?</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                <li>
                                    <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a>
                                        <li>
                                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a>
                                                <li>
                                                    <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                        <p>
                </div>
            </div>
        </div>
    </div>
    Client Area
        ==================================================
    <div class="span6">
        <h5 class="title-bg">Recent Clients
                <small>That love us</small>
                <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>
        Client Testimonial Slider
        <div id="clientCarousel" class="carousel slide no-margin">
            Carousel items
            <div class="carousel-inner">
                <div class="active item">
                    <p class="quote-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."
                        <cite>- Client Name, Big Company</cite>
                    </p>
                </div>
                <div class="item">
                    <p class="quote-text">"Adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."
                        <cite>- Another Client Name, Company Name</cite>
                    </p>
                </div>
                <div class="item">
                    <p class="quote-text">"Mauris eget tellus sem. Cras sollicitudin sem eu elit aliquam quis condimentum nulla suscipit. Nam sed magna ante. Ut eget suscipit mauris."
                        <cite>- On More Client, The Company</cite>
                    </p>
                </div>
            </div>
        </div>
        Client Logo Thumbs
        <ul class="client-logos">
            @for($i=1; $i<=5; $i++)
                <li>
                    <a href="#" class="client-link"><img src="{{url('assets/img/gallery/client-img-' . $i . '.png')}}" alt="Client"></a>

                </li>
            @endfor
        </ul>
    </div>
</div> -->
<!-- End Bottom Section -->
@endsection
