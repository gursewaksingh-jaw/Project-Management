@extends('Layouts.header')
@section('header')

@section('title','View Slider images')
@endsection

@extends('Layouts.left_sidebar')
@section('leftsidebar')
@endsection


<div>
    @if(Session::has('fail'))
    <div class="alert alert-danger" role="alert"
        style="width: 300px;margin-top: 72px;margin-left: 512px;text-align: center;margin-bottom: -75px;">
        {{(Session::get('fail'))}}
    </div>
    @endif

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert"
        style="width: 300px;margin-top: 72px;margin-left: 512px;text-align: center;margin-bottom: -75px;"
        id="successmsg">
        {{(Session::get('success'))}}
    </div>
    @endif
</div>

<div class="col-md-6" style="margin-left:400px;margin-top:90px;">
    <div>
        <a href="add-slider" class="btn btn-secondary" style="margin-left: 810px;width: 132px;margin-bottom: 5px;">Add
            Image
            <i class="nav-icon far fa-plus-square" style="margin-left: 5px;"></i></a>
    </div>
    <div class="card">
        <div class="card-header bg-secondary">
            <h3 class="card-title ">Manage Slider Image</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Image Title</th>
                        <th>Image Description</th>
                        <th>Image</th>
                        <th style="width: 151px;">Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($sliderimg as $data)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{$data->image_title}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="{{asset('images/slider/'.$data->image)}}" alt="image" style="width: 125px;
height: 100px;"></td>
                        <td>

                            <a class="btn btn-danger" href={{"slider/delete/" .$data->id}}>Delete</a>
                            <a class="btn btn-success" href={{"slider/edit/" .$data->id}}>Update</a>


                        </td>
                    </tr>

                    @endforeach


                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">??</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">??</a></li>
            </ul>
        </div>
    </div>

    <div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$("document").ready(function() {
    setTimeout(function() {
        $("#successmsg").fadeOut('slow');
    }, 1000);
});
</script>