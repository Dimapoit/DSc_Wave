<section class="ftco-section-services ftco-degree">
    <div class="container">
        <div class="row d-flex align-items-center">
        </div>
    </div>
</section>

{{--<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url('{{asset('images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">--}}
<section class="ftco-counter ftco-bg-light" id="section-counter">
{{--    <div class="overlay"></div>--}}
    <div class="container">
        <div class="row d-flex justify-content-center">

                    @foreach($logoData as $item)
                        <div class="col d-flex align-self-center">
                            <a href={{$item->link_logo}} target="_blank"><img src='{{$item->path_image}}'> </a>
                        </div>
                    @endforeach

        </div>
    </div>
</section>

<section class="ftco-about d-md-flex bg-light">
    <div class="one-half img" style="background-image: url('{{asset('images/about_1.jpg')}}');">
        <a href="https://www.youtube.com/watch?v=oOeS5dvKns4&feature=youtu.be" class="icon d-flex justify-content-center align-items-center" target="_blank">
            <span class="icon-play"></span>
        </a>
{{--        <button type="button" class="icon popup-vimeo d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#videoModal" data-video="https://www.youtube.com/watch?v=oOeS5dvKns4&feature=youtu.be">--}}
{{--            <span class="icon-play"></span>--}}
{{--        </button>--}}
{{--        <a href="https://www.youtube.com/watch?v=oOeS5dvKns4&feature=youtu.be" class="icon popup-vimeo d-flex justify-content-center align-items-center">--}}
{{--            <span class="icon-play"></span>--}}
{{--        </a>--}}

    </div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h3 class="subheading">About Wave-DSC</h3>
            <h2 class="mb-5">@lang('site-lang.about-welcome') <br>@lang('site-lang.about-toOurCenter')</h2>
        </div>
        <div>
            @foreach($abouts as $about)
                <p>{{'- '.$about->text}}</p>
            @endforeach
        </div>
    </div>
</section>

<!-- Modal -->
<!-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark border-dark">
          <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body bg-dark p-0">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div> -->
