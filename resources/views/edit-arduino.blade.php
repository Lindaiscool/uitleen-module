@include('head')
@include('header')
<div class="container-fluid" style="margin-top:10rem;">
    @if (session('status'))
    <h6 class="alert alert-success" style="margin-top:-5rem; margin-bottom:2.2rem;">{{ session('status') }}</h6>
@endif
    <div class="row align-items-start" style="background-color: rgba(0, 0, 0, 0.385); border-radius:8px; padding-left:3rem; padding-top:0.8rem; height:24rem; margin-left:30.5rem; margin-right:30rem;">
        <div class="col-sm">


            </div>

        <form action="{{ url('update-arduino/' . $arduinos->id) }}" method="POST" style="">
            @csrf
            @method('PUT')
            <div class="container" style="">
                <h4 style="color:rgb(158, 158, 158);"> <a href="{{ url('/arduino') }}"
                        class="btn btn-danger float-end">BACK</a>
                    Edit & Update arduino

                </h4>
                <label for="serie" style="color:rgb(158, 158, 158); ">Serienummer:</label>
                <br>
                <input type="text" name="serienummer" class="serie" value="{{ $arduinos->serienummer }}"
                    style=" width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

                <br><label for="type" style="color:rgb(158, 158, 158); ">Type arduino:</label><br>
                <select id="type" name="type"
                    style=" width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
                    <option name="type" value="{{ $arduinos->type }}">{{ $arduinos->type }}</option>
                    @foreach ($arduinotype as $data)
                        <?php if ($arduinos->type == $data->type) {
                            continue;
                        } ?>
                        <option name="type" value="{{ $data->type }}">{{ $data->type }}</option>
                    @endforeach
                </select><br>
            </div>
            <div class="container" style="margin-right:47rem;">
                @if ($arduinos->defect == 0)
                    <div> <br> <input type="checkbox" class="defect" name="defect" value="defect" style="">
                        <label for="defect" style="color:rgb(104, 104, 104);">&nbsp Defect</label>
                    </div>
                @else
                    <div> <br> <input type="checkbox" checked="checked" class="defect" name="defect"
                            value="{{ $arduinos->defect }}" style="">
                        <label for="defect" style="color:rgb(158, 158, 158);">&nbsp Defect</label>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary" style="margin-top:0.8rem; width:6rem; height:2.5rem;">Update</button>
            
            </div>
        </form>

    </div>
</div>

