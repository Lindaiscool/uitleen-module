@if (!Auth::guest())
@include('head')
@include('header')
<div class="container" style="margin-top:10rem; margin-left:3.3rem;">

<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col-sm">

    <form name="con" id="con" action="{{url('store-boeken')}}" method="post">
        @csrf
        <label for="serie" style="color:rgb(158, 158, 158);">Serienummer:</label><br>
        <input type="text" name="serienummer" class="serie" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

        <label for="isbn" style="color:rgb(158, 158, 158);"><br>ISBN:</label><br>
        <input type="text" name="isbn" class="isbn" style="height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

        <label for="titel" style="color:rgb(158, 158, 158);"><br>Titel:<br></label><br>
        <input type="text" name="titel" class="titel" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br><br>

        <input type="submit" class="sub1" value="Submit" style="margin-top:1rem; width:6rem; height:2.5rem;">
        
    </form>
</div>

<img width="300" height="200" style="margin-left:-18rem; margin-top:20rem;" src = "pics/undraw_handcrafts_leaf.svg" alt="My Happy SVG"/>


<div class="col-lg-8" style="margin-right:-13rem; margin-top:0.8rem;">
    <table id="table" class="table table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col">serienummer</th>
                <th scope="col">isbn</th>
                <th scope="col">titel</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody style="">
            @foreach ($boek as $data2)
                <tr>
                    <td style="max-width:12rem; word-wrap: break-word;">{{ $data2->serienummer }}</td>
                    <td style="max-width:12rem; word-wrap: break-word;">{{ $data2->isbn }}</td>
                    <td style="max-width:12rem; word-wrap: break-word;">{{ $data2->titel }}</td>
                    <td><a href="{{ url('edit-boeken/'.$data2->id) }}"><button class="btn btn-warning"><i class="fa-solid fa-edit"></i></button></a></td>
                    <td><a href="{{ url('delete-boeken/'.$data2->id) }}" onclick="return confirm('Weet u zeker dat u {{ $data2->titel }} {{ $data2->serienummer }} wilt verwijderen?');"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td></a> 
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

</body>

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
