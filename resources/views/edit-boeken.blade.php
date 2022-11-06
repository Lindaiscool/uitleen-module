@include('head')
@include('header')

<div class="container-fluid" style="margin-top:10rem; margin-left:-33rem;">
    @if (session('status'))
    <h6 class="alert alert-success" style="margin-left:33rem; width:100%; margin-top:-5rem; margin-bottom:2.2rem;">{{ session('status') }}</h6>
    @endif
    <div class="row align-items-start" style="background-color: rgba(0, 0, 0, 0.385); border-radius:8px; margin-left:63.5rem; margin-right:-3.5rem; padding-right:3rem; padding-top:2rem; padding-bottom:2rem;">
        <div class="col-sm">
                </div>

                    <form action="{{ url('update-boeken/'.$boeken->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container" style="">
                        <h4 style="color:rgb(158, 158, 158);"> <a href="{{ url('/boeken') }}"
                        class="btn btn-danger float-end">BACK</a>
                            Edit & Update boeken
                        </h4>

                        <label for="serie" style="color:rgb(158, 158, 158);">Serienummer:</label>
                        <br>
                        <input type="text" name="serienummer" class="serie" value="{{$boeken->serienummer}}" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>

                        <label for="isbn" style="color:rgb(158, 158, 158);"><br>ISBN:</label><br>
                        <input type="text" name="isbn" class="isbn" value="{{$boeken->isbn}}" style="height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br>
                        
                        <label for="titel" style="color:rgb(158, 158, 158);"><br>Titel:<br></label><br>
                        <input type="text" name="titel" class="titel" value="{{$boeken->titel}}" style="width:20rem; height:2.5rem; border: 1px solid rgb(56, 56, 56); background-color:rgb(16, 16, 16); color:rgb(104, 104, 104);"><br><br>
                    

                        <button type="submit" class="btn btn-primary" style="margin-top:0.8rem; width:6rem; height:2.5rem;">Update</button>

                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>