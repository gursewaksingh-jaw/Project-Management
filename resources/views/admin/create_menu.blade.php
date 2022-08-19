@extends('Layouts.header')
@section('header')

<style>
.form-error {

    border: 2px solid #e74c3c;
    animation: shake .1s linear;
    animation-iteration-count: 2;
}




.lists {
    background-color: #989899a6;
    margin-bottom: 20px;
    height: 45px;
    min-width: 200px;
    padding: 10px;
    font-size: 16px;
    font-weight: 600px;
    border-radius: 10px;
    display: inline-block;
    margin-left: 60px;
}

.mainlist {
    background-color: black;
}

.nav-icon {
    margin-right: 8px;
}


a {
    color: white;
}

.action {
    margin-left: 197px;
    position: absolute;
    margin-top: -22px;

}
</style>

@section('title','Create Menu')
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
<div class="row">
    <div class="col-sm-6">
        <div class="card card-secondary" style="width: 500px;margin-left: 385px;margin-top: 100px;">
            <div class="card-header">
                @if(!empty($mval['id']))
                <h3 class="card-title">Update Menu</h3>
                @else
                <h3 class="card-title">Create Menu</h3>
                @endif
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            @if(!empty($mval['id']))
            <form action="{{url('updated')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$mval['id']}}" name="id">

                @endif
                <form action="{{url('created')}}" method="POST">
                    @csrf
                    <div class="card-body" style="display: block;">
                        <div class="form-group">



                            <div class="form-group">
                                <label for="inputStatus"> Menu Title</label>
                                <input type="text" name="menu_title" @if(!empty($mval['id']))
                                    value="{{$mval['menu_title']}}" @endif
                                    class=" form-control {{($errors->first('menu_title') ? " form-error" : "")}} ">
                                <!-- <span style=" color:red">@error('menu_title'){{$message}} @enderror</span> -->

                                @if(!empty($error= $errors->first('menu_title')))
                                <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                            text-align: center;font-weight: 600;margin-left: 466px;margin-top: -33px;">
                                    @error('menu_title')! @enderror</p>

                                <div class="wrapper"
                                    style="font-size: 13px;margin-top: -47px;margin-left: 500px;inline-size: 148px;text-align: center;
                             background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 40px;">
                                    @error('menu_title'){{$message}} @enderror</div>
                                @endif
                            </div>


                            <div class="form-group">


                                <div class="row">
                                    <div class="col-sm-6">

                                        <label for="inputStatus">Select menu title</label>

                                        <select id="inputStatus" class="form-control custom-select" name="p_menu">
                                            @if(empty($parent))

                                            <option selected="" disabled="">
                                                No Menu title found</option>
                                            @else
                                            <option selected="" disabled="">
                                                {{$parent->menu_title}}
                                            </option>
                                            @endif

                                            <option value="0">None</option>
                                            <!-- <option value="0">New</option> -->
                                            @if(empty($mval['id']))
                                            <option selected="" disabled="">
                                                Select option</option>
                                            @foreach($key as $data)
                                            @if($data->menu_title)

                                            <option value="{{$data->id}}">{{$data->menu_title}}</option>
                                            @else
                                            @endif
                                            @endforeach
                                            @endif

                                            @if(!empty($mval['id']))
                                            @foreach($allmenulist as $data)
                                            @if($data->menu_title)
                                            <option value="{{$data->id}}">{{$data->menu_title}}</option>
                                            @else
                                            @endif
                                            @endforeach
                                            @endif
                                        </select>


                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputStatus">Icons</label>
                                            <select id="inputStatus"
                                                class="form-control custom-select  {{($errors->first('icons') ? " form-error" : "")}}"
                                                name="icons">
                                                @if(!empty($mval['id']))
                                                <option selected="" disabled="">{{$mval['icons']}}</option>
                                                @else
                                                <option selected="" disabled="">Select one</option>
                                                @endif
                                                <option value="home">Home</option>
                                                <option value="user">User</option>
                                                <option value="table">Table</option>
                                                <option value="plus">Plus</option>
                                                <option value="edit">Edit</option>
                                                <option value="page">Page</option>
                                            </select>
                                            <!-- <span style="color:red">@error('icons'){{$message}} @enderror</span> -->
                                            @if(!empty($error= $errors->first('icons')))
                                            <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                           text-align: center;font-weight: 600;margin-left: 228px;margin-top: -32px">
                                                @error('icons')! @enderror</p>

                                            <div class="wrapper" style="font-size: 13px;margin-top: -38px;margin-left: 261px;inline-size: 148px;
                                        text-align: center;background-color: #554545;color: red;border-style: solid;border-width: 1px;
                                        display: block;margin-bottom: 39px;">
                                                @error('icons'){{$message}} @enderror</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputStatus">URL</label>
                                        <select id="inputStatus"
                                            class="form-control custom-select  {{($errors->first('url') ? " form-error" : "")}} "
                                            name="url">
                                            @if(!empty($mval['id']))

                                            <option value="{{$mval['url']}}">{{$mval['url']}}</option>
                                            @else
                                            <option selected="" disabled="">Select one</option>
                                            @endif
                                            <option value="menu-list">Menu List</option>
                                            <option value="faq-list">FAQ List</option>
                                            <option value="slider-list">Slider List</option>
                                        </select>
                                        <!-- <span style="color:red">@error('url'){{$message}} @enderror</span> -->
                                        @if(!empty($error= $errors->first('url')))
                                        <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                     text-align: center;font-weight: 600;margin-left: 466px;margin-top: -34px;">
                                            @error('url')! @enderror</p>

                                        <div class="wrapper" style="font-size: 13px;margin-top: -40px;margin-left: 500px;inline-size: 148px;
                                      text-align: center;background-color: #554545;color: red;border-style: solid;border-width: 1px;
                                       display: block;margin-bottom: 59px;">
                                            @error('url'){{$message}} @enderror</div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            @if(!empty($mval['id']))
                            <button type="submit" class="btn btn-secondary"
                                style="margin-left: 121px;width: 200px;height: 48px;">Update</button>
                            @else
                            <button type="submit" class="btn btn-secondary"
                                style="margin-left: 121px;width: 200px;height: 48px;">Create</button>
                            @endif
                        </div>
                </form>

                <!-- ------------------------------------------------------------------------------------------------------- -->

        </div>
    </div>

</div>


<div class="contain">
    <div class="card card-secondary" style="  width: 500px;margin-left:50px;margin-top: 100px;">
        <div class="card-header">
            <h3 class="card-title">Arrange menu title order</h3>
            <div class="card-tools">


            </div>
        </div>
        <div class="card-body">
            <?= $menus ?>
        </div>
    </div>
    <!-- <div id="sort-1" class="sort ui-helper-clearfix" style="margin-top: 100px;"> -->
    <!-- <ul style="list-style-type: none; color:white;margin-top: 99px; " class="simple_with_animation vertical"> -->
    <!-- <table>

            <?= $menus ?>
            <tr>
                <td>

                </td>
            </tr>
        </table> -->

    <!-- </ul> -->
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
$(function() {
    $("#sortable").sortable();
});
</script>


<script>
$("document").ready(function() {
    setTimeout(function() {
        $("#successmsg").fadeOut('slow');
    }, 1000);
});
</script>
<