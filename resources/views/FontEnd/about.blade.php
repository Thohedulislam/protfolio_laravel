<div id="about" class="about-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 no-padding">
                <div class="about-img">
                    <img src="{{asset('/Fontend/assets/img/about-bg.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="about-title">
                            <h1>About Me</h1>
                            @foreach(App\Models\abouts::where('id',13)->get() as $abouts)
                            <p>
                                {{ $abouts->about_desp}}
                            </p>
                           @endforeach

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-about-box">
                            <i class="fa fa-globe"></i>
                            @foreach(App\Models\abouts::where('id',13)->get() as $abouts)
                            <h2>{{$abouts->title2}}</h2>
                            <p>{{$abouts->desp2}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-about-box">
                            <i class="fa fa-globe"></i>
                            @foreach(App\Models\abouts::where('id',13)->get() as $abouts)
                            <h2>{{$abouts->title2}}</h2>
                            <p>{{$abouts->desp2}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-about-box">
                            <i class="fa fa-globe"></i>
                            @foreach(App\Models\abouts::where('id',14)->get() as $abouts)
                            <h2>{{$abouts->title2}}</h2>
                            <p>{{$abouts->desp2}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-about-box">
                            <i class="fa fa-globe"></i>
                            @foreach(App\Models\abouts::where('id',14)->get() as $abouts)
                            <h2>{{$abouts->title2}}</h2>
                            <p>{{$abouts->desp2}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col lg 7-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container Fluid-->
</div>
