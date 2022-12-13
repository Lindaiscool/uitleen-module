@if (!Auth::guest())
    @include('head')
    @include('header')

    <body>
        @auth
            <div class="container-fluid" style="margin-top:8rem; margin-left:27rem;">
                <div class="row align-items-start">
                    <div class="col-sm">

                        <form name="con" id="con" action="{{ url('store-uitleen') }}" submit() method="post">
                            @csrf
                            <br><label for="student" style="color:rgb(158, 158, 158);">Studentnummer:</label><br>
                            <select id="student" title="Selecteer..." data-style="btn btn-black" name="student"
                                form="con"
                                style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
                                @foreach ($studenten as $data)
                                    <option value="{{ $data->studentnummer }}">{{ $data->studentnummer }}</option>
                                @endforeach
                            </select><br>



                            <br><label for="boeken" style="color:rgb(158, 158, 158);">Boek:</label><br>
                            <select id="boeken" title="Selecteer..." data-style="btn btn-black" name="boeken"
                                form="con"
                                style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
                                @foreach ($boeken as $data1)
                                    <option value="{{ $data1->isbn }}">{{ $data1->titel }}</option>
                                @endforeach

                            </select><br>

                            <br><label for="arduinos" style="color:rgb(158, 158, 158);">Arduino:</label><br>
                            <select id="arduinos" title="Selecteer..."
                                data-style="btn btn-black" name="arduinos" form="con"
                                style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
                                @foreach ($arduinos as $data2)
                                    <option value="{{ $data2->serienummer }}">{{ $data2->type }}</option>
                                @endforeach
                            </select><br>

                            <br><label for="sensoren" style="color:rgb(158, 158, 158);">Sensor:</label><br>
                            <select onchange="makeSensorRequired()" id="sensoren" title="Selecteer..." name="sensoren[]" form="con"
                                class="selectpicker" data-style="btn btn-black" multiple
                                style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
                                @foreach ($sensoren as $data3)
                                    <option value="{{ $data3->serienummer }}">{{ $data3->soort }}</option>
                                @endforeach
                            </select><br>
                            <script>
                                $('select').selectpicker();
                            </script>

                            <div class="drie col-sm" style="float:left; margin-top:-22.5rem; margin-left:20rem;">

                                <label for="datum" style="color:rgb(158, 158, 158);">Start datum:</label><br>
                                <input type="date" id="datum" name="datum"
                                    style="width:9rem; height:2.48rem; padding-left:1rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);"><br>

                                <br><br>
                                <textarea id="opmerking" name="opmerking" rows="4" cols="50" placeholder="Opmerking..."
                                    style="width:20rem; height:11rem; color:rgb(158, 158, 158); background-color: rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);"></textarea>

                                <br><br><input type="checkbox" class="ingeleverd" name="ingeleverd" value="ingeleverd"
                                    style="margin-top:0.6rem;">
                                <label for="ingeleverd" style="color:rgb(104, 104, 104);">&nbsp Ingeleverd</label><br>
                            </div>

                            <input type="submit" class="sub1" value="Submit"
                                style="margin-top:2rem; margin-bottom:2rem; width:6rem; height:2.5rem;">

                        </form>
                        <img width="470" height="260" style="margin-top:-20rem; margin-left:-29rem;rem;"
                            src="pics/undraw_handcrafts_heart.svg" alt="x" />

                    </div>
                </div>
            </div>
        @endauth
    </body>
@else
    @include('404')
@endif
<script>
    function makeSensorRequired() {
        const input = document.getElementById('arduinos');
        if (document.getElementById("sensoren").value != null) {
            input.setAttribute('required', '');
        } else {
            input.removeAttribute('required');
        }
    }
</script>
