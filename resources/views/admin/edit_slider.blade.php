@extends('Layouts.header')
@section('header')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<style>
.form-error {

    border: 2px solid #e74c3c;
    animation: shake .1s linear;
    animation-iteration-count: 2;
}

#wrapper {
    background: #ccc;
    display: none
}

#sortable {
    list-style-type: none;
    margin: 10px 0 10px 20px;
    padding: 10px;
    width: 72%;
}

#sortable li {
    margin: 8px 5px 3px 3px;

    padding-left: 0.9em;
    padding-left: 1.5em;
    font-size: 1.4em;
    height: 48px;
    border-radius: 14px;
    background-color: #9a9ea2ab;
}

#sortable li span {
    position: absolute;
    margin-left: -1.3em;
}

.li_image {

    background-repeat: no-repeat;
    background-size: 100% 211%;
    border-radius: 5px;
    flex: 2 0 53%;
    filter: blur(0.3px)
}
</style>




@section('title','Update Slider')
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


<div class="" style="display:flex;">

    <div class="card card-secondary" style="  width: 500px;
  margin-left: 400px;
  margin-top: 100px;">
        <div class="card-header">
            <h3 class="card-title">Update Slider Images</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="{{url('updatedimg')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" value="{{$data->id}}" name="id" data-id="{{$data->id}}">
                    <label for="inputName">Image Title</label>
                    <input type="text" name="image_title" id="inputName"
                        class="form-control{{($errors->first('image_title') ? " form-error" : "")}}"
                        value="{{$data->image_title}}">
                </div>
                @if(!empty($error = $errors->first('image_title')))
                <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
            text-align: center;font-weight: 600;margin-left: 466px;margin-top: -47px;margin-bottom: 31px;">

                    @error('image_title')! @enderror</p>

                <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size:
            148px;text-align: center;background-color: #554545;color: red;border-style: solid;border-width:
            1px;display: block;margin-bottom: 22px;">@error('image_title'){{$message}} @enderror</div>
                @endif



                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image"
                                class="custom-file-input{{($errors->first('image') ? " form-error" : "")}}"
                                id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">{{$data->image}}</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>

                        </div>

                    </div>
                    <span style="color:red"></span>
                </div>
                @if(!empty($error = $errors->first('image')))
                <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
            text-align: center;font-weight: 600;margin-left: 466px;margin-top: -47px;margin-bottom: 31px;">

                    @error('image')! @enderror</p>

                <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size:
            148px;text-align: center;background-color: #554545;color: red;border-style: solid;border-width:
            1px;display: block;margin-bottom: 22px;">@error('image'){{$message}} @enderror</div>
                @endif

                <div class="form-group">
                    <label for="inputDescription">Image Description</label>
                    <textarea id="inputDescription" name="description"
                        class="form-control{{($errors->first('description') ? " form-error" : "")}}"
                        rows="4">{{$data->description}}</textarea>
                </div>

                @if(!empty($error= $errors->first('description')))
                <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;text-align: center;font-weight: 600;
                      margin-left: 466px;margin-top: -107px;margin-bottom: 31px;">

                    @error('description')! @enderror</p>

                <div class="wrapper"
                    style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size: 148px;text-align: center;
                background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 81px;">
                    @error('description'){{$message}} @enderror</div>
                @endif





                <div class="form-group">
                    <button class="btn btn-secondary" type="submit"
                        style="margin-left: 121px;width: 200px;height: 48px;">Update</button>
                </div>

            </div>
        </form>
    </div>


    <div class="card card-secondary" style="  width: 500px;
  margin-left: 80px;
  margin-top: 100px;">
        <div class="card-header">
            <h3 class="card-title">Arrange slider image order</h3>
            <div class="card-tools">
                <div class="card-body">

                </div>

            </div>
        </div>

        <ul id="sortable">
            @foreach($datalist as $value)
            <!-- style="background-image: URL('{{asset('images/slider/'.$value->image)}}')"  -->
            <li class="ui-state-default li_image" value="{{$value->id}}" name="sliderid">
                {{$value->image_title}}
            </li>
            @endforeach
        </ul>
    </div>


</div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
// $(function() {
//     $("#sortable").sortable();
// });

$("#sortable").sortable({
    update: function(e, u) {
        var id = $(this).attr('data-id');

        alert(data);
        $.ajax({
            url: '{{ "order" }}',
            type: 'POST',
            data: {
                id: id,
                '_token': '{{csrf_token()}}'
            },
            success: function(result) {
                console.log(result);

            },
            complete: function() {

            }
        });
    }

});
</script>

<script>
$("document").ready(function() {
    setTimeout(function() {
        $("#successmsg").fadeOut('slow');
    }, 1000);
});
</script>

<!-- <script>
  
  $('#error').click(function(){
      $('.wrapper').toggle();
  });
  </script> -->