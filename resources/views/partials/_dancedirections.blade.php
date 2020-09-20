<section class="ftco-section">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
{{--                <h3 class="subheading">@lang('site-lang.danceDirections-title')</h3>--}}
                <h2 class="mb-1">@lang('site-lang.danceDirections-title')</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach($dancedir as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="package-program ftco-animate">
                        <div href="#" class="img d-flex justify-content-center align-items-center disabled" style="background-image: url('{{asset($item->path_image)}}');">
                            <!-- <span>Learn More</span> -->
                        </div>
                        <div class="text mt-3">
                            <h3><a href="#" class='disabled'>{{$item->title}}</a></h3>

                            <p>{{$item->text}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- <div class="container">
          <div class="row mt-4 justify-content-center ftco-animate">
          <div class="col-md-4 text-center">
              <a href="#" class="btn-custom py-4">View More Program <span class="ion-ios-arrow-down ml-2"></span></a>
          </div>
      </div>
    </div> -->
</section>
