    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap');

span{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:120px;
	letter-spacing:0.1em;
  -webkit-text-fill-color: transparent;
  -webkit-text-stroke-width: 3px;
  -webkit-text-stroke-color: white;
  text-shadow: 
						8px 8px rgb(250, 150, 1),
						20px 20px rgb(16, 16, 16);
}
        </style>
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            @include('head')
@include('header')

<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col-sm">
@if (!Auth::guest())
<div style="margin-top:9rem;">
<table id="table" class="table-lg-10 table-bordered table-sm" style="margin-top:10rem; width:73rem; max-width:73rem; margin-left:7rem; margin-bottom:2rem;">
    <thead>
        <tr>
            <th scope="col">studentnummer</th>
            <th scope="col">boek</th>
            <th scope="col">arduino</th>
            <th scope="col">sensor</th>
            <th scope="col">start datum</th>
            <th scope="col">opmerking</th>
            <th scope="col">ingeleverd</th>
            @auth
            <th>edit</th>
            <th>delete</th>
            @endauth
        </tr>
    </thead>
    <tbody style="">
        @foreach ($uitl as $data2)
            <tr>
                <td style="width:8rem;">{{ $data2->student }}</td>
                <td style="max-width:7rem; word-wrap: break-word;">{{ $data2->titel }}</td>
                <td style="max-width:13rem; word-wrap: break-word;">{{ $data2->type }}</td>
                <td><div style="max-width:13rem; word-wrap: break-word;">{{ $data2->soort }}</td>
                <td>{{ $data2->datum }}</td>
                <td><div style="width:10rem; word-wrap: break-word;">{{ $data2->opmerking }}</div></td>
                <td>{{ $data2->ingeleverd }}</td> 
                @auth
                <td><a href="{{ url('edit-uitleen/'.$data2->id) }}"><button class="btn btn-warning"><i class="fa-solid fa-edit"></i></button></a></td>
                <td><a href="{{ url('delete-uitleen/'.$data2->id) }}" onclick="return confirm('Weet u zeker dat u de door {{$data2->student }} uitgeleende producten wilt verwijderen?');"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td></a> 
                @endauth
            </tr>
        @endforeach

    </tbody>
</table>
</div>
@else
<span style="margin-top:23rem;"><b>UitleenModule</b></span>
@endif
        </div>
    </div>
</div>
    </body>
</html>

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



