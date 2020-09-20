<section class="ftco-section bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-1">@lang('site-lang.coaches')</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
          @foreach($coaches as $key => $coach)
                    <div class="col-lg-3 d-flex">
                        <div class="coach  {{$key % 2 != 0 ? 'd-md-flex flex-column-reverse' : ''}} align-items-stretch">
                            <div class="img" style="background-image: url('{{asset($coach->path_image)}}');"></div>
                            <div class="text bg-white p-4 ftco-animate">
                            <!-- <span class="subheading">{{$coach->danceDirection_id}}</span> -->
                                <h3><a href="#">{{$coach->name}}</a></h3>
                                <p>{{$coach->description}}</p>
                                <ul class="ftco-social-media d-flex mt-4">
                                    <li class="ftco-animate"><a href="{{$coach->link_fb}}" class="mr-2 d-flex justify-content-center align-items-center {{$coach->link_fb == '' ? 'disabled' : ''}}" target="_blank"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="{{$coach->link_insta}}" class="mr-2 d-flex justify-content-center align-items-center {{$coach->link_insta == '' ? 'disabled' : ''}}" target="_blank"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</section>
