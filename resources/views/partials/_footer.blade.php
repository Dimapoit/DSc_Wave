<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4 col-md-4 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">@lang('site-lang.footer-about-title')</h2>
                    <p>@lang('site-lang.footer-about-text')</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
{{--                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
                        <li class="ftco-animate"><a href="{{$contact[0]->link_fb}}" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="{{$contact[0]->link_insta}}" target="_blank"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
{{--            <div class="col-lg-4 col-md-6 mb-5 mb-md-5">--}}
{{--                <div class="ftco-footer-widget mb-4">--}}
{{--                    <h2 class="ftco-heading-2">@lang('site-lang.footer-blog-title')</h2>--}}
{{--                    <div class="block-21 mb-4 d-flex">--}}
{{--                        <a class="blog-img mr-4" style="background-image: url('{{asset('images/image_1.jpg')}}');"></a>--}}
{{--                        <div class="text">--}}
{{--                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>--}}
{{--                            <div class="meta">--}}
{{--                                <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>--}}
{{--                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>--}}
{{--                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="block-21 mb-4 d-flex">--}}
{{--                        <a class="blog-img mr-4" style="background-image: url('{{asset('images/image_2.jpg')}}');"></a>--}}
{{--                        <div class="text">--}}
{{--                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>--}}
{{--                            <div class="meta">--}}
{{--                                <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>--}}
{{--                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>--}}
{{--                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-3 col-md-4 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">@lang('site-lang.footer-services-title')</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('rent')}}" class="py-2 d-block">@lang('site-lang.services-rent')</a></li>
                        <li><a href="{{route('cafe')}}" class="py-2 d-block">@lang('site-lang.services-cafe')</a></li>
                        <li><a href="{{route('shop')}}" class="py-2 d-block">@lang('site-lang.services-shop')</a></li>
                        <li><a href="{{route('studio')}}" class="py-2 d-block">@lang('site-lang.services-studio')</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">@lang('site-lang.footer-contact-title')</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{$contact[0]->address}}</span></li>
                            <li><a class="disabled" href="#"><span class="icon icon-phone"></span><span class="text">{{$contact[0]->phone}}</span></a></li>
                            <li><a class="disabled" href="#"><span class="icon icon-envelope"></span><span class="text">{{$contact[0]->email}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/aos.js')}}"></script>
<script src="{{asset('front/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('front/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('front/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('front/js/google-map.js')}}"></script>

{{--<script>--}}
{{--    // Set iframe attributes when the show instance method is called--}}
{{--    $("#videoModal").on("show.bs.modal", function(event) {--}}
{{--        let button = $(event.relatedTarget); // Button that triggered the modal--}}
{{--        let url = button.data("video");      // Extract url from data-video attribute--}}

{{--        $(this).find("iframe").attr({--}}
{{--            src: url,--}}
{{--            allow : "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
{{--        });--}}
{{--    });--}}

{{--    $("#about-video").on("click", function(event) {--}}
{{--     --}}
{{--        event.preventDefault();--}}

{{--        let button = $(event.relatedTarget); // Button that triggered the modal--}}
{{--        let url = $(this).attr('href');      // Extract url from data-video attribute--}}
{{--        console.log(url);--}}
{{--        $(this).find("iframe").attr({--}}
{{--            src: url,--}}
{{--            allow : "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
{{--        });--}}
{{--    })--}}

{{--    // Remove iframe attributes when the modal has finished being hidden from the user--}}
{{--    $("#videoModal").on("hidden.bs.modal", function() {--}}
{{--        $("#videoModal iframe").removeAttr("src allow");--}}
{{--    });--}}
{{--</script>--}}
<script src="{{asset('front/js/main.js')}}"></script>

