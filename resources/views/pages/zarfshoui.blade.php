
@include('layouts/header')
<body data-spy="scroll" data-target="#primary-menu">

@include('layouts/preloader')
    @include('layouts/navbar')
<br><br><br>
<section class="section-padding gray-bg" id="blog-page">
        <div class="container">
            <div class="row">
               <div class="safahat50">
               <h2 class="txt-safahat">قیمت خدمات</h2>	<br>
               <p class="txt-safahat">نصب ماشین ظرفشویی------------------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat"> جرم گیری ماشین ظرفشویی-----------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat">رفع آبریزی و نشت یابی-----------------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat">تعمیر موتور ماشین ظرفشویی--------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat"> تعمیر برد ماشین ظرفشویی -----------------------------------------------------------------------------------------50هزار تومان</p>
               <p class="txt-safahat">تعویض موتور ماشین ظرفشویی------------------------------------------------------------------------------------50هزار تومان</p>
              
               </div>
               
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/Onsite_Appliances.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3 align="right"><a href="#">خدمات قابل ارائه در سرویس ظرفشویی</a></h3>
                            
                            <p align="right">تعمیر انواع ماشین ظرفشویی
تعمیر ماشین ظرفشویی رومیزی و ایستاده
راه اندازی و نصب ماشین ظرفشویی های مختلف
تعمیر موتور ظرفشویی و تعمیر مخزن رزین
عیب یابی و رفع مشکل ظرفشویی
سرویس کامل ظرفشویی
تعمیر انواع برندهای ظرفشویی بوش، سامسونگ، ال جی، سونی، پاناسونیک و...</p>
                            <a href="{{route('order',['name'=>'mz'])}}" class="sefaresh-btn">ثبت رایگان سفارش</a>
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
