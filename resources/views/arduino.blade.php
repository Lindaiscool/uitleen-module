@if (!Auth::guest())
    @include('head')
    @include('header')
    <div class="container" style="margin-top:10rem; margin-left:3.3rem;">

        <div class="container-fluid">
            <div class="row align-items-start">
                <div class="col-sm">

                    <form name="con" id="con" action="{{ url('store-arduino') }}" method="post"
                        style="float:left; z-index:2;">
                        @csrf
                        <label for="serie" style="color:rgb(158, 158, 158);">Serienummer:</label><br>
                        <input type="text" name="serienummer" class="serie"
                            style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

                        {{-- <label for="type" style="color:rgb(158, 158, 158);"><br>type arduino:</label><br>
        <input type="text" name="type" class="type" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br> --}}

                        <br><label for="type" style="color:rgb(158, 158, 158);">Type arduino:</label><br>
                        <select id="type" title="Selecteer..." name="type" form="con"
                            style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
                            @foreach ($arduin as $data)
                                <option value="{{ $data->type }}">{{ $data->type }}</option>
                            @endforeach
                        </select><br>
                        <script>
                            $('select').selectpicker();
                        </script>

                        <br><input type="checkbox" class="defect" name="defect" value="Defect">
                        <label for="defect" style="color:rgb(104, 104, 104);">Defect</label><br>

                        <input type="submit" class="sub1" value="Submit"
                            style="margin-top:1rem; width:6rem; height:2.5rem;">

                    </form>
                </div>

                <img width="350" height="150" style="margin-left:-18rem; margin-top:-5rem;"
                    src="pics/undraw_handcrafts_bird.svg" alt="x" />>

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
                            @foreach ($arduino as $data2)
                                <tr>
                                    <td style="max-width:23rem; word-wrap: break-word;">{{ $data2->serienummer }}</td>
                                    <td>{{ $data2->type }}</td>
                                    <td>{{ $data2->defect }}</td>
                                    <td><a href="{{ url('edit-arduino/' . $data2->id) }}"><button
                                                class="btn btn-warning"><i class="fa-solid fa-edit"></i></button></a>
                                    </td>
                                    <td><a href="{{ url('delete-arduino/' . $data2->id) }}"
                                            onclick="return confirm('Weet u zeker dat u {{ $data2->type }} {{ $data2->serienummer }} wilt verwijderen?');"><button
                                                class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                                    </a>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        @include('404')
@endif
<script>
    $("#table").dataTable({
        "paging": false,
        "searching": false,
        "info": false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/nl-NL.json"
        }

    });
</script>
