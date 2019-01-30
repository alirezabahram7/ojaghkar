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
               <p class="txt-safahat">هزینه خدمت-----------------------------------------------------------------------------------------------------توافقی</p><br>
               
              
               </div>
               
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/gallery-6.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3 align="right"><a href="#">نصب و راه‌اندازی انواع کباب پز</a></h3>
                            <br><br><br>
                            <p align="right"></p>
                            <a href="{{route('order',['name'=>'b'])}}" class="sefaresh-btn">ثبت رایگان سفارش</a>
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
