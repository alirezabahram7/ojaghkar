@include('layouts/header')
<body data-spy="scroll" data-target="#primary-menu">
@include('layouts/preloader')
    @include('layouts/navbar')
<br><br><br>
<section class="section-padding gray-bg" id="blog-page">
        <div class="container">
            <div class="row">
               <div class="safahat50">
               <h2 class="txt-safahat">قیمت سرویس و تعمیر لباسشویی</h2>	<br>
               <p class="txt-safahat"> نصب ماشین لباس‌شویی------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat">سرویس ماشین لباس‌شویی--------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat"> تعمیر تایمر مکانیکی ------------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat">تعمیر تایمر دیجیتال-------------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat">اجرت تعویض لاستیک در------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat"> اجرت تعویض پمپ تخلیه-----------------------------------------------------------------------------------50هزار تومان</p>
              
               </div>
               
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/slide1.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3 align="right"><a href="#">خدمات قابل ارائه در سرویس نصب و تعمیر لباسشویی</a></h3>
                            
                            <p align="right">تعمیر انواع لباسشویی ایرانی و خارجی
سرویس ماشین لباسشویی دوقلو، سطلی و در از جلو
راه اندازی و نصب انواع ماشین لباسشویی
تعمیر موتور ماشین لباسشویی
عیب یابی و رفع مشکل لباسشویی
تعمیر انواع برندهای تکنوگاز، آاگ، بوش، جنرال الکتریک، ال جی، ارج، زانوسی، ایدزیت و کلیه برندهای ایرانی و خارجی...</p>
                            <a href="{{route('order',['name'=>'ml'])}}" class="sefaresh-btn">ثبت رایگان سفارش</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



   

<br><br>
        @include('layouts.prefooter')
        @include('layouts.footer')
        @include('layouts.scriptsfooter')
</body>

</html>
