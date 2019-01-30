@include('layouts/header')
<body data-spy="scroll" data-target="#primary-menu">

@include('layouts/preloader')
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
						@if(session('success'))
							<div class="alert alert-success" style="text-align:center;">
								{{ session('success') }}
							</div> 
						@endif
<div class="h1212">
 	<form class="form-wrapper cf" action="#">

  	<input class="form-wrapper cf" type="text" style="margin:auto;" placeholder="مثال: تعمیر باربیکیو" required>
  	

	  
  </form>
 </div>  



<br><br><br> <center><h2 >توان مندی های متخصصان ما</h2></center><br><br><br>
    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/cooker-repair.jpg" alt="">
                        </div>
                        <h4>تعمیر اجاق گاز</h4>
                        <p>نصب و تعمیر اجاق گاز رومیزی، صفحه‌ای، لمسی و زمینی تعمیر اجاق گاز فردار و بدون فر تعمیر و تعویض چینی فندک، کلید فندک، ترانس، بوبین، ترموکوپل اجاق گاز تعویض ولوم، سرشعله، فنجونی و شیشه اجاق گاز تعمیر فر گاز اجاقی، دیواری، ریلی، پیتزا پز، صنعتی تعمیر انواع برندهای گاز و فر پادیسان، سینجر، اسنوا، پیلوت، اخوان و تمامی خدمات مربوط به سرویس و تعمیر اجاق گازهای ایرانی و خارجی</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/wildhorse-appliance-repair.jpg" alt="">
                        </div>
                        <h4>تعمیر اجاق گاز و فر برقی</h4>
                        <p>نصب و تعمیر اجاق گاز رومیزی، صفحه‌ای، لمسی و زمینی تعمیر اجاق گاز فردار و بدون فر تعمیر و تعویض چینی فندک، کلید فندک، ترانس، بوبین، ترموکوپل اجاق گاز تعویض ولوم، سرشعله، فنجونی و شیشه اجاق گاز تعمیر فر گاز اجاقی، دیواری، ریلی، پیتزا پز، صنعتی تعمیر انواع برندهای گاز و فر پادیسان، سینجر، اسنوا، پیلوت، اخوان و تمامی خدمات مربوط به سرویس و تعمیر اجاق گازهای ایرانی و خارجی</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/gallery-6.jpg" alt="">
                        </div>
                        <h4>تعمیرباربیکیو</h4>
                        <p>نصب و راه‌اندازی انواع کباب پز</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/slide1.jpg" alt="">
                        </div>
                        <h4>تعمیر ماشین لباس شویی</h4>
                        <p>تعمیر انواع لباسشویی ایرانی و خارجی سرویس ماشین لباسشویی دوقلو، سطلی و در از جلو راه اندازی و نصب انواع ماشین لباسشویی تعمیر موتور ماشین لباسشویی عیب یابی و رفع مشکل لباسشویی تعمیر انواع برندهای لباسشویی بوش، سامسونگ، ال جی، پاکشوما، ایندزیت، آبسال، اسنوا و</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/Onsite_Appliances.jpg" alt="">
                        </div>
                        <h4>تعمیر ماشین ظرفشویی</h4>
                        <p>تعمیر انواع ماشین ظرفشویی تعمیر ماشین ظرفشویی رومیزی و ایستاده راه اندازی و نصب ماشین ظرفشویی های مختلف تعمیر موتور ظرفشویی و تعمیر مخزن رزین عیب یابی و رفع مشکل ظرفشویی سرویس کامل ظرفشویی تعمیر انواع برندهای ظرفشویی بوش، سامسونگ، ال جی، سونی، پاناسونیک و</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/fridge-repair.png" alt="">
                        </div>
                        <h4>تعمیر یخچال فریزر</h4>
                        <p>تعمیر یخچال فریزر تعمیر یخچال ساید‌بای‌ساید تعمیر یخچال فروشگاهی تعمیر یخچال صندوقی تعمیر موتور یخچال شارژ گاز یخچال</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature-area/-->
  
  
  
  
  
  
  
  <br> <center><h2 >اپلیکیشن اجاق کار به زودی در دسترس کاربران</h2></center><br><br><br>

<section class="section-padding gray-bg" id="blog-page">
       <div class="panjah1"><img src="images/app.png" alt=""/></div>
      <div class="panjah1">
        <h2 class="app-home">اپلیکیشن اجاق کار</h2>
      <h4 class="app-home">به زودی اپلیکیشن اجاق کار نیز در وب سایت قرار خواهد گرفت و با امکانات ویژه شمارا شگفت زده خواهیم کرد</h4>
      <a href="#" class="button white">دانلود اپلیکیشن(به زودی)</a>
      
      </div>
</section>
    
    
    
    
    
    <section class="gray-bg section-padding" id="feature-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2 class="title-home-h">چرا اجاق کار را انتخاب کنیم؟</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <center>  <img class="icon-khadamat" src="images/1 (1).png" alt=""/>
                        <h3>پیگیری مراحل انجام کار</h3>
                        <p>پیگیری مراحل انجام کار توسط کارشناسان ما.</p></center>
                   
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <center>   <img class="icon-khadamat" src="images/1 (4).png" alt=""/>
<h3>قیمت عادلانه و مناسب</h3>
                        <p>قیمتی کاملا عادلانه و مناسب </p></center>
                    
              </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                 
                        <center>   <img class="icon-khadamat" src="images/advice.png" alt=""/>
                        <h3>مشاوره حرفه ای</h3>
                        <p>ارائه مشاوره حرفه ای به شما عزیزان</p></center>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                   <center>    <img class="icon-khadamat" src="images/1 (6).png" alt=""/>
                        <h3>پرداخت در پایان کار</h3>
                        <p>پرداخت هزینه ها در پایان کار</p></center>
                   
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <center>  <img class="icon-khadamat" src="images/1 (5).png" alt=""/>
                        <h3>ثبت درخواست چندگانه</h3>
                        <p>امکان ثبت‌ چند درخواست‌ مختلف به‌صورت هم‌زمان وجود دارد.</p></center>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
              
                    <center>   <img class="icon-khadamat" src="images/1 (3).png" alt=""/>
                        <h3>گارانتی کتبی 6 ماهه</h3>
                        <p>ارائه ضمانت برای اطمینان خاطر مشتریان عزیز</p></center>
                </div>
            </div>
        </div>
    </section>


    <br><br>


    <section class="section-padding gray-bg" id="blog-page">
       <div class="panjah"><img src="images/servicesMain.png" alt=""/></div>
      <div class="panjah"><!--<h2 class="ostad">همکاری با اجاق کار</h2>-->
      <h4 class="ostad">تعمیرات دستگاههای خانگی آشپزخانه با تمام برندهای ایرانی ، اروپایی و آمریکایی با قطعات فابریک و گارانتی کتبی 6 ماهه تعمیرگاه</h4></div>
</section>
        @include('layouts.prefooter')
        @include('layouts.footer')
        @include('layouts.scriptsfooter')
</body>

</html>
