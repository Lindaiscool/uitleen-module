@include('head')
@include('header')
<div class="container" style="margin-top:10rem; margin-left:3.3rem;">
    <form name="con" id="con" action="{{url('store-boeken')}}" method="post">
        @csrf
        <label for="serie" style="color:rgb(158, 158, 158);">Serienummer:</label><br>
        <input type="text" name="serienummer" class="serie" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

        <label for="isbn" style="color:rgb(158, 158, 158);"><br>ISBN:</label><br>
        <input type="text" name="isbn" class="isbn" style="height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

        <label for="titel" style="color:rgb(158, 158, 158);"><br>Titel:<br></label><br>
        <input type="text" name="titel" class="titel" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br><br>

        <input type="submit" class="sub1" value="Submit" style=" margin-left:6.5rem; margin-top:1rem; width:6rem; height:2.5rem;">
        
    </form>
    </div>