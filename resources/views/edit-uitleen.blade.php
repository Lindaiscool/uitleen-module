@include('head')
@include('header')

<div class="container-fluid" style="margin-top:8.7rem; margin-left:9rem;">
    @if (session('status'))
        <h6 class="alert alert-success" style="margin-left:-9rem; margin-top:-3.7rem; margin-bottom:0.8rem; width:100%;">
            {{ session('status') }}</h6>
    @endif
    <div class="row align-items-start"
        style="background-color: rgba(0, 0, 0, 0.385); border-radius:8px; padding-top:1rem; padding-left:4rem; height:38rem; margin-left:13rem; margin-right:26rem; margin-top:0rem;">
        <div class="col-sm">
        </div>

        <div class="container" style="">

            <form action="{{ url('update-uitleen/' . $uitleen->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="rest" style="">
                    <h4 style="color:rgb(158, 158, 158);"><b><a href="{{ url('/') }}"
                                class="btn btn-danger float-end">BACK</a>
                            Edit & Update uitleen</b>
                    </h4>
                    <div class="form-group mb-3">
                        <label for="" style="color:rgb(158, 158, 158);">Studentnummer</label><br>
                        <select id="student" name="student"
                            style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">

                            <option value="{{ $uitleen->student }}">{{ $uitleen->student }}</option>


                            @foreach ($studenten as $data7)
                                <?php if ($uitleen->student == $data7->studentnummer) {
                                    continue;
                                } ?>
                                <option value="{{ $data7->studentnummer }}">{{ $data7->studentnummer }}</option>
                            @endforeach
                        </select><br>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" style="color:rgb(158, 158, 158); margin-top:0.8rem;">Boek</label><br>
                        <select id="boeken" name="boeken"
                            style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">

                            <option value="{{ $uitleen->boeken }}">{{ $uitleen->titel }}</option>


                            @foreach ($boeken as $data5)
                                <?php if ($uitleen->boeken == $data5->titel) {
                                    continue;
                                } ?>
                                <option value="{{ $data5->isbn }}">{{ $data5->titel }}</option>
                            @endforeach
                        </select><br>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" style="color:rgb(158, 158, 158); margin-top:0.8rem;">Arduino</label><br>
                        <select id="arduinos" name="arduinos"
                            style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">

                            <option value="{{ $uitleen->arduinos }}">{{ $uitleen->type }}</option>


                            @foreach ($arduinos as $data2)
                                <?php if ($uitleen->arduinos == $data2->type) {
                                    continue;
                                } ?>
                                <option value="{{ $data2->serienummer }}">{{ $data2->type }}</option>
                            @endforeach
                        </select><br>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" style="color:rgb(158, 158, 158); margin-top:0.8rem;">Sensor</label><br>
                        <select id="sensoren" name="sensoren"
                            style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">

                            <option value="{{ $uitleen->sensoren }}">{{ $uitleen->sensoren }}</option>


                            @foreach ($sensoren as $data3)
                                <?php if ($uitleen->sensoren == $data3->soort) {
                                    continue;
                                } ?>
                                <option value="{{ $data3->serienummer }}">{{ $data3->soort }}</option>
                            @endforeach
                        </select><br>
                    </div>
                </div>
                <div class="drie" style="float:left; margin-top:-22.3rem; margin-left:20rem;">
                    <div class="form-group mb-3">
                        <label for="" style="color:rgb(158, 158, 158);">Start datum</label><br>
                        <input type="date" id="datum" name="datum" value="{{ $uitleen->datum }}"
                            style="width:9rem; height:2.48rem; padding-left:1rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);"><br>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" style="color:rgb(158, 158, 158);">Opmerking</label><br>
                        <textarea id="opmerking" name="opmerking" rows="4" cols="50" value="{{ $uitleen->opmerking }}"
                            style="width:20rem; height:11rem; color:rgb(158, 158, 158); background-color: rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">{{ $uitleen->opmerking }}</textarea><br>
                    </div>
                    <div class="form-group mb-3">
                        @if ($uitleen->ingeleverd == 0)
                            <input type="checkbox" class="ingeleverd" name="ingeleverd" value="ingeleverd"
                                style="margin-top:0.6rem;">
                            <label for="ingeleverd" style="color:rgb(104, 104, 104);">Ingeleverd</label>
                        @else
                            <input type="checkbox" checked="checked" class="ingeleverd" name="ingeleverd"
                                value="{{ $uitleen->ingeleverd }}" style="margin-top:0.6rem;">
                            <label for="ingeleverd" style="color:rgb(158, 158, 158);">&nbsp Ingeleverd</label>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary" style="margin-top:3rem; margin-left:-39.8rem;">Update
                        Student</button>
                </div>
        </div>
        </form>

    </div>
</div>


{{-- checked"{{ $uitleen->ingeleverd }}" --}}
