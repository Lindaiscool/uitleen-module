@include('head')
@include('header')
<div class="container" style="margin-top:8.5rem; margin-left:3.3rem;">
    <form name="con" id="con" action="{{url('store-uitleen')}}" method="post">
        @csrf
        <br><label for="student" style="color:rgb(158, 158, 158);">Studentnummer:</label><br>
        <select id="student" name="student" form="con" style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
            @foreach($studenten as $data) 
            <option value="{{ $data->studentnummer }}">{{ $data->studentnummer }}</option>
            @endforeach
        </select><br><br>

        <label for="datum" style="color:rgb(158, 158, 158);">Start datum:</label><br>
        <input type="date" id="datum" name="datum" style="color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);"><br>

        <br><label for="boeken" style="color:rgb(158, 158, 158);">Boek:</label><br>
        <select id="boeken" name="boeken" form="con" style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
            <option value="">Selecteer...</option>
            @foreach($boeken as $data1) 
            <option value="{{ $data1->titel }}">{{ $data1->titel }}</option>
            @endforeach
            
        </select><br>

        <br><label for="arduinos" style="color:rgb(158, 158, 158);">Arduino:</label><br>
        <select id="arduinos" name="arduinos" form="con" style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
            <option value="">Selecteer...</option>
            @foreach($arduinos as $data2) 
            <option value="{{ $data2->type }}">{{ $data2->type }}</option>
            @endforeach
        </select><br>

        <br><label for="sensoren" style="color:rgb(158, 158, 158);">Sensor:</label><br>
        <select id="sensoren" name="sensoren" form="con" style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
            <option value="">Selecteer...</option>
            @foreach($sensoren as $data3) 
            <option value="{{ $data3->soort }}">{{ $data3->soort }}</option>
            @endforeach
        </select><br>

        <input type="submit" class="sub1" value="Submit" style=" margin-left:4rem; margin-top:2rem; width:6rem; height:2.5rem;">
        
    </form>
    </div>