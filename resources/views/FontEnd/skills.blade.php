<div id="skill" class="skill-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @foreach ( App\Models\skills::where('id',1)->get() as $skils )
                <div class="skillbar">
                    <h1>My Skills</h1>
                    <p>{{$skils->skills_desp}}</p>
                    <a href="#" class="btn skill-btn">contact me</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="skill-progress">

                    <p>{{$skils->s_title}}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <p>{{$skils->perscnts}}</p>
                        </div>
                    </div>
                    @endforeach
                    {{-- <p>illsutrator</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            <p>80%</p>
                        </div>
                    </div>
                    <p>html/css</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <p>90%</p>
                        </div>
                    </div>
                    <p>php/mysql</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <p>70%</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!--End of col lg 6-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</div>
