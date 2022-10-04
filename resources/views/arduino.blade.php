@include('head')
@include('header')
<div class="container" style="margin-top:10rem; margin-left:3.3rem;">
    <form name="con" id="con" action="{{url('store-arduino')}}" method="post">
        @csrf
        <label for="serie" style="color:rgb(158, 158, 158);">Serienummer:</label><br>
        <input type="text" name="serienummer" class="serie" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

        {{-- <label for="type" style="color:rgb(158, 158, 158);"><br>type arduino:</label><br>
        <input type="text" name="type" class="type" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br> --}}

        <br><label for="type" style="color:rgb(158, 158, 158);">Type arduino:</label><br>
        <select id="type" name="type" form="con" style="width:15rem; height:2.5rem; color:rgb(158, 158, 158); background-color:rgb(16, 16, 16); border: 1px solid rgb(56, 56, 56);">
            @foreach($arduin as $data) 
            <option value="{{ $data->type }}">{{ $data->type }}</option>
            @endforeach
        </select><br>

        <br><input type="radio" class="defect" name="defect" value="Defect">
        <label for="defect" style="color:rgb(104, 104, 104);">Defect</label><br>

        <input type="submit" class="sub1" value="Submit" style=" margin-left:6.5rem; margin-top:1rem; width:6rem; height:2.5rem;">
        
    </form>
    </div>