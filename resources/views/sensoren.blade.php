@if (!Auth::guest())
    @include('head')
    @include('header')
    <div class="container" style="margin-top:10rem; margin-left:3.3rem;">

<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col-sm">

                    <form name="con" id="con" action="{{ url('store-sensoren') }}" method="post">
                        @csrf
                        <label for="serie" style="color:rgb(158, 158, 158);">Serienummer:</label><br>
                        <input type="text" name="serienummer" class="serie"
                            style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

                        {{-- <label for="type" style="color:rgb(158, 158, 158);"><br>type arduino:</label><br>
                            <input type="text" name="type" class="type" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br> --}}

                        <br>
                        <label for="soort" style="color:rgb(158, 158, 158);">Soort sensor:</label>
                        <br>
                        <select id="soort" name="soort" form="con"
                            style="width:20rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
                            <option value="">Selecteer...</option>
                            @foreach ($soortsensor as $data)
                                <option value="{{ $data->soort }}"> {{ $data->soort }}</option>
                            @endforeach
                        </select>
                        <br>

                        <br><input type="checkbox" class="defect" name="defect" value="Defect">
                        <label for="defect" style="color:rgb(104, 104, 104);"> &nbsp Defect</label>
                        <br>

                        <input type="submit" class="sub1" value="Submit"
                            style="margin-top:1rem; width:6rem; height:2.5rem;">
                    </form>
                </div>

                <img width="390" height="150" style="margin-left:-20rem; margin-top:18rem;" src="pics/undraw_handcrafts_mouse_arrow.svg" alt="x"/>>

                <div class="col-lg-8" style="margin-right:-13rem; margin-top:0.8rem;">

                    <table id="table" class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col">serienummer</th>
                                <th scope="col">soort</th>
                                <th scope="col">defect</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody style="">
                            @foreach ($sensor as $data2)
                                <tr>
                                    <td style="max-width:20rem; word-wrap: break-word;">{{ $data2->serienummer }}</td>
                                    <td>{{ $data2->soort }}</td>
                                    <td>{{ $data2->defect }}</td>
                                    <td>
                                        <a href="{{ url('edit-sensoren/' . $data2->id) }}">
                                            <button class="btn btn-warning">
                                                <i class="fa-solid fa-edit"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-sensoren/' . $data2->id) }}"
                                            onclick="return confirm('Weet u zeker dat u {{ $data2->soort }} {{ $data2->serienummer }} wilt verwijderen?');">
                                            <button class="btn btn-danger" onclick="showAlert()">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
            </div>

        @else
            @include('404')
@endif


<script>
    $("#table").dataTable({
        "paging": false,
        "searching":false,
        "info":false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/nl-NL.json"
        }
    });
</script>