<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <div class="gallery ftco-gradient d-flex justify-content-center align-items-center">
                    <div class="row justify-content-center">
                        <div class="col-md-12 heading-section ftco-animate text-center">
                            <h3 class="subheading">Photo</h3>
                            <h2 class="mb-1">Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($gallery as $item)
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset($item->path_image)}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset($item->path_image)}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>
