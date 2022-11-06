@include('head')
@include('header')

<div class="container-fluid" style="margin-top:8.7rem; margin-left:0.4rem;">
    @if (session('status'))
    <h6 class="alert alert-success" style="width:100%; margin-top:-3.7rem; margin-bottom:-7.8rem; margin-left:-0.4rem;">{{ session('status') }}</h6>
@endif
    <div class="row align-items-start" style="background-color: rgba(0, 0, 0, 0.385); border-radius:8px; padding-left:2rem; padding-top:0rem; margin-top:10rem; height:24rem; margin-left:30rem; margin-right:30rem;">
        <div class="col-sm">
        </div>
        <div class="card-body">

            <form action="{{ url('update-sensoren/' . $sensoren->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="container" style="">
                    <h4 style="color:rgb(158, 158, 158);"> <a href="{{ url('/sensoren') }}"
                    class="btn btn-danger float-end">BACK</a>
                        Edit & Update sensoren
                    </h4>
                <label for="serie" style="color:rgb(158, 158, 158);">Serienummer:</label><br>
                <input type="text" name="serienummer" class="serie" value="{{ $sensoren->serienummer }}"
                    style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

                <br>
                <label for="soort" style="color:rgb(158, 158, 158);">Soort sensor:</label>
                <br>
                <select id="soort" name="soort"
                    style="width:20rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
                    <option name="soort" value="{{ $sensoren->soort }}">{{ $sensoren->soort }}</option>

                    @foreach ($soortsensor as $data)
                        <?php if ($sensoren->soort == $data->soort) {
                            continue;
                        } ?>
                        <option name="soort" value="{{ $data->soort }}"> {{ $data->soort }}</option>
                    @endforeach
                </select>

                @if ($sensoren->defect == 0)
                    <div name="defect" style=""> <br> <input type="checkbox" class="defect" name="defect"
                            value="defect" style="">
                        <label for="defect" style="color:rgb(104, 104, 104);">&nbsp Defect</label>
                    </div>
                @else
                    <div name="defect" style=""> <br> <input type="checkbox" checked="checked" class="defect" name="defect"
                            value="{{ $sensoren->defect }}" style="">
                        <label for="defect" style="color:rgb(158, 158, 158);">&nbsp Defect</label>
                    </div>
                @endif


                <button type="submit" class="btn btn-primary" style="margin-top:0.8rem; width:6rem; height:2.5rem;">Update</button>

                </div>
            </form>

        </div>
    </div>
</div>
</div>
</div>
