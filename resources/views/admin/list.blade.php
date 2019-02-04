<!DOCTYPE html>
<html lang="fa">
    @include('layouts/header2')
    <link rel="stylesheet" href="/demo/demo.css" />
    <link rel="stylesheet" href="/dist/jquery.md.bootstrap.datetimepicker.style.css" />
    <script src="/bt/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <body>
        @include('layouts/navbar')
       
        <div class="container" style="margin:auto;">
            <div class="wrap-login100" style="border-color:rgba(100,200,200,1);padding:30px;margin:100px auto 100px;">
                <table id="example" class="table table-striped " style="width:100%;direction: rtl">
                    <thead>
                        <tr>
                            <th style="width: 10px;text-align:center;">کد</th>
                            <th style="width: 160px;text-align:center;">عنوان</th>
                            <th style="width: 100px;text-align:center;">برند</th>
                            <th style="width: 100px;text-align:center;"> تاریخ</th>
                            <th style="width: 100px;text-align:center;"> آدرس</th>
                            <th style="width: 100px;text-align:center;"> شماره تماس</th>
                            <th style="width: 10px;text-align:center;">ویرایش</th>
                            <th style="width: 10px;text-align:center;">حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $i=>$order)
                        <tr> 
                            <td class="align-middle" style="text-align:center;">
                                <a href="#">
                                    {{$order->code}}
                                </a>
                            </td>
                            <td class="align-middle" style="text-align:center;">
                                <a href="">
                                    <?php
                                        $sevice='';
                                        if($order->service==0){
                                            $service='نصب'; 
                                        }elseif($order->service==1){
                                            $service='تعمیر';
                                        }elseif($order->service==2){
                                            $service='سرویس';
                                        }
                                    ?>
                                    {{$service}}&nbsp;
                                    {{$order->name}}
                                </a>
                            </td>
                            <td class="align-middle" style="text-align:center;">
                                <a href="#">  
                                {{$order->brand}}
                                </a>
                            </td>
                            <td class="align-middle" style="text-align:center;">
                                <a href="#">
                                    <?php
                                    $tt=$order->time;
                                    if($tt<10){
                                        echo 'امروز';
                                    }elseif($tt>10 && $tt<20){
                                        echo 'فردا';
                                    }elseif($tt>20 && $tt<30){
                                        echo 'پسفردا';
                                    }elseif($tt>30 && $tt<40){
                                        echo 'سه روز بعد';
                                    }elseif($tt>40){
                                        echo 'چار روز بعد';
                                    }
                                    ?>
                                </a>
                            </td>
                            <td class="align-middle" style="text-align:center;">
                               {{$order->address}}
                            </td>
                            <td class="align-middle" style="text-align:center;">
                              {{$order->mobile}}
                               
                            </td>
                            <td class="align-middle" style="text-align:center;">
                                <a href="#">               
                                    <i class="fa fa-edit" aria-hidden="true" style="color:green;"></i>
                                </a>
                            </td>
                            <td class="align-middle" style="text-align:center;">
                                <a href="#">  
                                    <?php
                                        $code=$order->code;
                                    ?>            
                                    <i class="fa fa-trash" aria-hidden="true" style="color:red;"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="fixed-bottom" style="padding:10px;">
            <div class="row container" style="margin:auto;">
                <div style="">    
                    <a  class="btn-floating btn-fb" href="#" style="cursor: pointer;">
                        <img src="/mainImg/icons/add.png" class="popup-button"  style="width:48px;height:48px;" alt="" srcset="">
                        <p class="iransans">ثبت پروژه جدید</p>
                    </a>
                </div>
                <div style="margin:auto;">
                    <a  class="btn-floating btn-fb" style="z-index:10;cursor: pointer;">
                        <img src="/mainImg/icons/export-flat.png" class="popup-button" onclick="openForm2()" style="width:48px;height:48px;" alt="" srcset="">
                        <p class="iransans">گزارش گیری</p>
                    </a>
                </div>
                <div style="">    
                    <a  class="btn-floating btn-fb" style="cursor: pointer;">
                        <img src="/mainImg/icons/filter-flat.png" class="popup-button" onclick="openForm()" style="width:48px;height:48px;" alt="" srcset="">
                        <p class="iransans">جستجوی پیشرفته</p>
                    </a>
                </div>
            </div>
        </div>
    </body>
    
<script>
$('#example').DataTable( {
    language: {
        processing:     "در حال پردازش ...",
        search:         "جستجو",
        lengthMenu:    "نمایش _MENU_ ورودی",
        info:           "نمایش ورودی  _START_  تا _END_ از _TOTAL_ ورودی",
        infoEmpty:      "نمایش ورودی 0 تا 0 از 0 ورودی",
        infoFiltered:   "_فیلتر شده ی _MAX_ ورودی در کل",
        infoPostFix:    "",
        loadingRecords: "در حال بارگذاری رکوردها ...",
        zeroRecords:    "هیچ",
        emptyTable:     "جدول خالی",
        Show:           "نمایش",
        paginate: {
            first:      "ابتدا",
            previous:   "قبلی",
            next:       "بعدی",
            last:       "آخر"
        },
        aria: {
            sortAscending:  "مرتب سازی صعودی :",
            sortDescending: "مرتب سازی نزولی :"
        }
    }
} );
</script>
    <script src="/src/jquery.md.bootstrap.datetimepicker.js" type="text/javascript"></script> 
    <!-- <script src="/dist/jquery.md.bootstrap.datetimepicker.js" type="text/javascript"></script> -->

    <script type="text/javascript">
            $('#date1').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate1',
            targetDateSelector: '#inputDate1-1',
            dateFormat: 'yyyy/MM/dd',
            isGregorian: false,
            enableTimePicker: false,
            disableBeforeToday: false,
            //disabledDates: [new Date(), new Date(2018, 9, 11), new Date(2018, 9, 12), new Date(2018, 9, 13), new Date(2018, 9, 14)]
        });
        $('#date2').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate2',
            targetDateSelector: '#inputDate2-1',
            dateFormat: 'yyyy/MM/dd',
            isGregorian: false,
            enableTimePicker: false,
            disableBeforeToday: false,
            //disabledDates: [new Date(), new Date(2018, 9, 11), new Date(2018, 9, 12), new Date(2018, 9, 13), new Date(2018, 9, 14)]
        });
        $('#date3').MdPersianDateTimePicker({
            targetTextSelector: '#inputdate3',
            targetDateSelector: '#inputdate3-1',
            dateFormat: 'yyyy/MM/dd',
            isGregorian: false,
            enableTimePicker: false,
            disableBeforeToday: false,
            //disabledDates: [new Date(), new Date(2018, 9, 11), new Date(2018, 9, 12), new Date(2018, 9, 13), new Date(2018, 9, 14)]
        });
        $('#date4').MdPersianDateTimePicker({
            targetTextSelector: '#inputdate4',
            targetDateSelector: '#inputdate4-1',
            dateFormat: 'yyyy/MM/dd',
            isGregorian: false,
            enableTimePicker: false,
            disableBeforeToday: false,
            //disabledDates: [new Date(), new Date(2018, 9, 11), new Date(2018, 9, 12), new Date(2018, 9, 13), new Date(2018, 9, 14)]
        });

    </script>