@include('layouts/header')
    <body>
        @include('layouts/navbar')
        @if (count($errors) > 0)
							<div class="alert alert-danger " >
								<ul style="text-align:right;">
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
							</div>
						@endif
        <div class="container rtl">
            <div id="stepper-example" class="bs-stepper">
                <?php
                    if($name=='ojaq'){
                        $steps=7;
                    }elseif($name=='ofb'){
                        $steps=8;
                    }elseif($name=='b'){
                        $steps=8;
                    }elseif($name=='ml'){
                        $steps=7;
                    }elseif($name=='mz'){
                        $steps=7;
                    }elseif($name=='f'){
                        $steps=8;
                    }
      
                ?>
                <div class="bs-stepper-header">
                    <?php
                        for($i=0;$i<$steps;$i++){
                        $target="#test-l-".$i;
                        $step="گام".($i+1);
                    ?>
                    <div class="step" data-target="{{$target}}">
                        <a href="#">
                            <span class="bs-stepper-circle">{{$i+1}}</span>
                            <span class="bs-stepper-label">{{$step}}</span>
                        </a>
                    </div>
                    @if($i<$steps-1)
                    <div class="line"></div>
                    @endif
                    <?php
                        }
                    ?>
                </div>
                <div class="bs-stepper-content card-body">
                    <form class="form-horizontal validate-form" style="border-style: solid;" action="{{route('order.save')}}" method="post"  enctype="multipart/form-data" style="direction:rtl;">
					
                        {{ csrf_field() }}
                        <input type="text" name='name' value={{$name}} hidden='hidden'>
                        <?php
                        for($i=0;$i<$steps;$i++){
                        $idName="test-l-".$i;
                        ?>
                            <div id="{{$idName}}" class="content container">
                                <p class="text-center">
                                    <div>
                                        @if($i==0 && $name!='b')
                                            <h4 style="padding:20px;">برند دستگاه را مشخص کنید: </h4>
                                            <?php
                                            for($h=0;$h<sizeof($brand);$h++){
                                                $radioId="brand".$h;
                                            ?>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="brand" id="{{$radioId}}" value="{{$h}}">
                                                <label class="form-check-label" for="brand">			
                                                    {{$brand[$h]}}
                                                </label>
                                            </div>
                                            <?php     
                                            }
                                            ?>
                                        @elseif($i==0 && $name=='b')
                                            <h4 style="padding:20px;">آیا لوازم و قطعات مورد نیاز این سرویس را تهیه کرده‌اید؟</h4>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="tools" id="yes" value="1">
                                                <label class="form-check-label" for="tools">			
                                                    بله
                                                </label>
                                            </div>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="tools" id="no" value="0">
                                                <label class="form-check-label" for="tools">			
                                                خیر
                                                </label>
                                            </div>
                                        @elseif($i==1)
                                            <h4 style="padding:20px;">خدمت درخواستی را مشخص کنید: </h4>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="service" id="nasb" value="0">
                                                <label class="form-check-label" for="service">			
                                                    نصب
                                                </label>
                                            </div>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="service" id="tamir" value="1">
                                                <label class="form-check-label" for="service">			
                                                تعمیر
                                                </label>
                                            </div>
                                            @if($name=='ml')
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="service" id="ser" value="2">
                                                <label class="form-check-label" for="service">			
                                                    سرویس
                                                </label>
                                            </div>
                                            @endif
                                        @elseif($i==2 && $name!='b')
                                            <h4 style="padding:20px;">مشکل دستگاه را مشخص کنید: </h4>
                                            <?php
                                            for($h=0;$h<sizeof($problem);$h++){
                                                $radioId="problem".$h;
                                            ?>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="checkbox" name="{{$radioId}}" id="{{$radioId}}" value="{{$h}}">
                                                <label class="form-check-label" for="problem">			
                                                    {{$problem[$h]}}
                                                </label>
                                            </div>
                                            <?php     
                                            }
                                            ?>
                                            @elseif($i==2 && $name=='b')
                                            <h4 style="padding:20px;">مکان درخواستی</h4>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="place" id="yard" value="0">
                                                <label class="form-check-label" for="place">			
                                                    حیاط
                                                </label>
                                            </div>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="place" id="teras" value="1">
                                                <label class="form-check-label" for="place">			
                                                تراس
                                                </label>
                                            </div>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="place" id="balcony" value="2">
                                                <label class="form-check-label" for="place">			
                                                بالکن
                                                </label>
                                            </div>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="radio" name="place" id="others" value="3">
                                                <label class="form-check-label" for="place">			
                                                سایر
                                                </label>
                                            </div>
                                        @elseif($i==3)
                                            <h4 style="padding:20px;">توضیحات : </h4>
                                            <div class="form-group row container">
                                                <textarea class="form-check-input" type="text" name="comment" rows="3" id="comment" style="width:80%;"></textarea>
                                            
                                            </div>
                                        @elseif($i==4)
                                            <?php
                                            $v=verta();
                                            $today=$v->formatWord('l dS F'); // چهارشنبه بیست و نه ام شهریور
                                            $t=$v->addDay();
                                            $tomorrow=$t->formatWord('l dS F');
                                            $t1=$v->addDay();
                                            $atom=$t1->formatWord('l dS F');
                                            $t2=$v->addDay();
                                            $aatom=$t2->formatWord('l dS F');
                                            $t3=$v->addDay();
                                            $aaatom=$t3->formatWord('l dS F');
                                            ?>
                                            @for($j=0;$j<5;$j++)
                                            <?php
                                            $timeval0=$j.'0';
                                            $timeval1=$j.'1';
                                            $timeval2=$j.'2';
                                            $timeval3=$j.'3';
                                            ?>
                                            <div class="card" style="margin:auto;color:(10,10,10,0.5)">
                                                <div class="card-header">
                                                @if($j==0)
                                                امروز{{$today}}
                                                @elseif($j==1)
                                                فردا{{$tomorrow}}
                                                @elseif($j==2)
                                                پسفردا{{$atom}}
                                                @elseif($j==3)
                                                {{$aatom}}
                                                @elseif($j==4)
                                                {{$aaatom}}
                                                @endif
                                                
                                                </div>
                                            
                                                <div class="card-body">
                                                    <ul>
                                                        <li style="display: inline;:40px;">
                                                        
                                                <input class="form-check-input" type="radio" name="time" id="{{$timeval0}}" value="{{$timeval0}}">
                                                <label class="form-check-label" for="service">
                                                <?php
                                                echo Verta::persianNumbers('8 تا 12');		
                                                ?>	
                                                </label>
                                        </li>
                                                        <li style="display: inline;paddin:20px;">
                                                        
                                                <input class="form-check-input" type="radio" name="time" id="{{$timeval1}}" value="{{$timeval1}}">
                                                <label class="form-check-label" for="service">			
                                                <?php
                                                echo Verta::persianNumbers('12 تا 16');		
                                                ?>
                                                </label>
                                        </li>
                                                        <li style="display: inline;paddin:20px;">
                                                    
                                                <input class="form-check-input" type="radio" name="time" id="{{$timeval2}}" value="{{$timeval2}}">
                                                <label class="form-check-label" for="service">			
                                                <?php
                                                echo Verta::persianNumbers('16 تا 20');		
                                                ?>                                            </label>
                                        </li>
                                                        <li style="display: inline;paddin:20px;">
                                            
                                                <input class="form-check-input" type="radio" name="time" id="{{$timeval3}}" value="{{$timeval3}}">
                                                <label class="form-check-label" for="service">			
                                                <?php
                                                echo Verta::persianNumbers('20 تا 24');		
                                                ?>                                            </label>
                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endfor
                                        @elseif($i==5)
                                            <h4 style="padding:20px;">آدرس : </h4>
                                            <div class="form-group row container">
                                                <textarea class="form-check-input" type="text" name="address" rows="3" id="address" style="width:80%;"></textarea>
                                            
                                            </div>
                                        @elseif($i==6)
                                        <h4 style="padding:20px;">شماره تماس : </h4>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="text" name="mobile" id="mobile">
                                            
                                            </div> 
                                        @elseif($i==7)
                                        <h4 style="padding:20px;">نوع دستگاه: </h4>
                                            <?php
                                            for($h=0;$h<sizeof($type);$h++){
                                                $radioId="type".$h;
                                            ?>
                                            <div class="form-group row container">
                                                <input class="form-check-input" type="checkbox" name="type" id="{{$radioId}}" value="{{$h}}">
                                                <label class="form-check-label" for="type">			
                                                    {{$type[$h]}}
                                                </label>
                                            </div>
                                            <?php     
                                            }
                                            ?>
                                        @endif
                                    
                                    </div>
                                </p>
                            
                                @if($i>0)
                                <div class="btn btn-primary" onclick="myStepper.previous()">قبلی</div>
                                @endif
                                @if($i<$steps-1)
                                <?php
                                $action='action'.$i;
                                ?>
                                <div class="btn btn-primary " id="{{$action}}" onclick="myStepper.next()">بعدی</div>
                                @endif
                                @if($i==$steps-1)
                                <button class="btn btn-success" >ثبت</button>
                                @endif
                            </div>
                        <?php
                            }
                        ?>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
  // Vanilla JavaScript
  document.addEventListener('DOMContentLoaded', function () {
    myStepper = new Stepper(document.querySelector('#stepper-example'))
  })

  // As a jQuery Plugin
  $(document).ready(function () {
    var myStepper = new Stepper($('#stepper-example'))
  })
var i=0;
$(document).ready(function() {
				$('input').keyup(function() {
			
					var empty = false;
					$('input').each(function() {
						if ($(this).val().length == 0) {
							empty = true;
						}
					});
					if (empty) {
						$('#action'+i+' button').attr('disabled', 'disabled');
					} else {
						$('#action'+i+' button').removeAttr('disabled');
					}
				});
                i++;
			});

</script>