<!DOCTYPE html>
<html lang="fa">
@include('layouts/header')
<body>
@include('layouts/navbar')
<div class="row containe-fluid" style="margin:auto;">
        <div class="col-md-3 pull-right">
            @include('layouts/sidebar')

        </div>
<div class="col-md-7 pull-right" style="margin:auto;background-color:rgba(200,200,200,0.5);">
    <form class="form-horizontal validate-form" action="{{route('content.update',['id'=>$content->id])}}" method="post"  enctype="multipart/form-data" style="direction:rtl;">

    {{ csrf_field() }}

    <div style="margin:auto;">
        <div class="card-header bluediv" style="text-align: center;">
            <strong>افزودن محتوای
            {{$name}}
            </strong>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger " >
                <ul style="text-align:right;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success" style="text-align:right;">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body ">
            <p class="card-text">
            <div class="row" >
                <div class="col-3">
                    <label for="name">عنوان :  </label>
                </div>
                <div class="col-8 pull-right">
                    <input class="form-control" type="text" name="title" readonly="readonly" value="{{$content->name}}">
                    <span class="focus-input100"></span>
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <label for="address">متن : </label>
                </div>
                <div class="col-8" >
                    <textarea class="form-control"  type='text' id="text" name="text" rows="4">{{$content->text}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="photo">عکس 3*4 : </label>
                </div>
                <div class="col-8">
                    <div>
                        <div class="input-group">
                            <input class="btn btn-primary bluediv" style="text-align:right;width:90%;" name="photo[]" type="file" accept="image/*">

                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>


   <div class="row fixed-bottom" style="padding:10px;background-color:white;">
        <div class="row" style="margin:auto;">
            <div class="container-login100-form-btn center" >
                <button type="submit" class="login100-form-btn bluediv" style="color:black;font-family:IRANSansWeb;">
                    ویرایش
                </button>
            </div>
        </div>
    </div>
    </form>
</div>

</body>

</html>