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
    <form class="form-horizontal validate-form" action=""  enctype="multipart/form-data" style="direction:rtl;">

    {{ csrf_field() }}

    <div style="margin:auto;">
        <div class="card-header bluediv" style="text-align: center;padding:10px;">
            <strong>مشاهده سفارش 
            {{$order->code}}
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
        <div class="card-body " style="padding:30px;">
            <p class="card-text">
            <div class="row" >
                <div class="col-3">
                    <label for="name">عنوان :  </label>
                </div>
                <div class="col-8 pull-right">
                   <?php
                        if($order->service==0){
                            $service='نصب';
                        }elseif($order->service==1){
                            $service='تعمیر';
                        }elseif($order->service==2){
                            $service='سرويس';
                        }
                        $title=$service.$order->name.$order->brand;
                   ?>
                    <input class="form-control" type="text" name="title" readonly="readonly" value="{{$title}}">
                    <span class="focus-input100"></span>
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <label for="address">مشكل : </label>
                </div>
                <div class="col-8" >
                <textarea  class="form-control" readonly="readonly">{{$order->problem}}</textarea>
            
                        
                </div>
            </div>
            
            <div class="row">
                <div class="col-3">
                    <label for="address">توضیحات : </label>
                </div>
                <div class="col-8" >
                    <textarea  class="form-control" readonly="readonly">{{$order->comment}}</textarea>
                        
                </div>
            </div>
            <div class="row">
            <div class="col-3">
                    <label for="address">زمان : </label>
                </div>
                <div class="col-8" >
                    <?php
                    $tt=$order->time;
                    $d=substr($tt, 0, 1);
                    $t=substr($tt, 1, 2);
                    $day=new Verta($order->created_at);
                    if($d==0){
                        $od=$day->format('Y/n/j');
                    }elseif($d==1){
                        $od=$day->addDay()->format('Y/n/j');
                    }elseif($d==2){
                        $od=$day->addDays(2)->format('Y/n/j');
                    }elseif($d==3){
                        $od=$day->addDays(3)->format('Y/n/j');
                    }elseif($d==4){
                        $od=$day->addDays(4)->format('Y/n/j');
                    }
                    if($t==0){
                        $ot=Verta::persianNumbers('8 تا 12');
                    }elseif($t==1){
                        $ot=Verta::persianNumbers('12 تا 16');
                    }elseif($t==2){
                        $ot=Verta::persianNumbers('16 تا 20');
                    }elseif($t==3){
                        $ot=Verta::persianNumbers('20 تا 24');
                    }
                    echo Verta::persianNumbers($od).'<br/>'.$ot;
                    ?>
                    
                </div>
            </div>
          
            <div class="row">
                <div class="col-3">
                    <label for="address">آدرس : </label>
                </div>
                <div class="col-8" >
                <textarea  class="form-control" readonly="readonly">{{$order->address}}</textarea>

                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="address">موبايل : </label>
                </div>
                <div class="col-8" >
                <input class="form-control" type="text" name="title" readonly="readonly" value="{{$order->mobile}}">
                    <span class="focus-input100"></span>
                        
                </div>
            </div>

            <div class="row">
                
                <div class="col-8" >
                       ابزار :
                       @if($order->tools==1)
                        دارند
                        @else
                        ندارند
                        @endif
                        _
                        مكان :
                        {{$order->place}}
                        
                        <?php
                        $fType=array("یخچال فریزر","ساید بای ساید","یخچال","فریزر","دوقلو","یخچال و فریزر مینی","یخچال صندوقی","فریزر صندوقی");
                        $bType=array("ذغالی","گازی");
                        $ofbType=array("صنعتی","دستی");
                        if($order->name=='یخجال فریزر'){
                            echo '_
                            نوع:'.$fType[$order->type];

                        }elseif($order->name=='باربیکیو'){
                            echo '_
                            نوع:'.$bType[$order->type];
                        }elseif($order->name=='اجاق و فر برقی'){
                            echo ' _
                            نوع:'.$ofbType[$order->type];
                        }
                        ?>

                </div>
            </div>
            </p>
        </div>
    </div>


  
    </form>
</div>

</body>

</html>