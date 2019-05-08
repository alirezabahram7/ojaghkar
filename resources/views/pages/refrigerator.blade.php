@include('layouts/header')
<body data-spy="scroll" data-target="#primary-menu">
@include('layouts/preloader')
    @include('layouts/navbar')
<br><br><br>
<section class="section-padding gray-bg" id="blog-page">
        <div class="container">
            <div class="row">
               <div class="safahat50">
               <h3 align="right">قیمت تعمیر یخچال و فریزر</h3>	<br>
               <p class="txt-safahat">شارژ گاز یخچال------------------------------------------------------------------------------------------------------30هزار تومان</p>
               <p class="txt-safahat">نصب و یا سرویس یخچال ساید بای ساید------------------------------------------------------------------30هزار تومان</p>
               <p class="txt-safahat">باز و بسته کردن یخچال ساید بای ساید---------------------------------------------------------------------35هزار تومان</p>
               <p class="txt-safahat">شستشوی کامل مدار----------------------------------------------------------------------------------------------50هزار تومان</p>
                <p class="txt-safahat">برطرف کردن آبریزی------------------------------------------------------------------------------------------------50هزار تومان</p>
                 <p class="txt-safahat">اجرت رگلاژ در--------------------------------------------------------------------------------------------------------50هزار تومان</p>
                  <p class="txt-safahat">اجرت تعویض ترموستات-----------------------------------------------------------------------------------------50هزار تومان</p>
                 
                   
               <p class="txt-safahat">فاکتور قطعات و لوازم تعویضی، توسط متخصص ارائه خواهد شد</p><br>
               
              
               </div>
               
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/fridge-repair.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3 align="right"><a href="#">خدمات قابل ارائه در سرویس یخچال فریزر</a></h3>
                            <br><br>
                            <p align="right">تعمیر یخچال فریزر
تعمیر یخچال ساید‌بای‌ساید
تعمیر یخچال فروشگاهی
تعمیر یخچال صندوقی
تعمیر موتور یخچال
شارژ گاز یخچال تعمیر برندهای تکنوگاز، آاگ، بوش، جنرال الکتریک، ال جی، ارج، زانوسی، ایدزیت و کلیه برندهای ایرانی و خارجی</p>
                            <a href="{{route('order',['name'=>'f'])}}" class="sefaresh-btn">ثبت رایگان سفارش</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<h4 align="right" class="mm"> توجه:
بازه‌های قیمتی بر اساس تنوع مدل و برند های مختلف لوازم خانگی تعیین شده‌است </h4>

   

<br><br>
@include('layouts.prefooter')
        @include('layouts.footer')
        @include('layouts.scriptsfooter')
</body>

</html>
