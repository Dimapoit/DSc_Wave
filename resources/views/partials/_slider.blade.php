<section class="home-slider js-fullheight owl-carousel ftco-degree-bottom">

@foreach($sliderData as $item)
    <div class="slider-item js-fullheight" style="background-image: url('{{asset($item->path_image)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-sm-6 ftco-animate text-center">
                    <h1 class="mb-4">{{$item->title_big}}</h1>
                    <h2 class="subheading">{{$item->title_small}}</h2>
                </div>

            </div>
        </div>
    </div>
@endforeach
    
</section>
