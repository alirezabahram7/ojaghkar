<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use App\User;
use App\order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //
    public $oBrand=array("اخوان", "استیل البرز", "تکنوگاز","رزگاز","لاجرمانیا","پیلوت","لوفرا", "گلم گاز", "ایندزیت","بوش","مجیک","بکو","ال جی", "لتو", "ناب استیل","اسنوا","سینجر","آلباگاز","پادیسان", "دوو", "سایر");
    public $ofbBrand=array("اخوان","بوش","زیمنس","ایندزیت","مدیا","بوتان","پادیسان","پاکشوما","پیلوت","تکنوگاز","سینجر","لورچ","مجیک","اسنوا","آلتون","دوو","سایر");
    public $mlBrand=array("سامسونگ","ال‌جی","اسنوا","دوو","بوش","حایر","الکترواستیل","فیلور","کنوود","میتسوبیشی","تکنوواش","توشیبا","سایر");
    public $mzBrand=array("سامسونگ","ال‌جی","بوش","پاناسونیک","سونی","دوو","اسنوا","هیمالیا","مجیک","سایر");
    public $fBrand=array("جنرال الکتریک","سامسونگ","ال‌جی","اسنوا","دوو","بوش","هایر","الکترواستیل","فیلور","کنوود","میتسوبیشی","سایر");

    public $fType=array("یخچال فریزر","ساید بای ساید","یخچال","فریزر","دوقلو","یخچال و فریزر مینی","یخچال صندوقی","فریزر صندوقی");
    public $bType=array("ذغالی","گازی");
    public $ofbType=array("صنعتی","دستی");

    public $oProblems=array("ولوم را هر زمانی که نگه می‌داریم شعله روشن نمی‌شود.", "فندک اجاق گاز کار نمی‌کند.", "در زمان طولانی شعله روشن می‌شود.","فر اجاق گاز گرم نمی‌کند.","شیشه فر اجاق گاز شکسته است.","شیشه اجاق گاز شکسته است.","صفحه دیجیتالی اجاق گاز کار نمی‌کند.", "برد الکترونیکی اجاق گاز خراب شده و اجاق گاز روشن نمی‌شود.", "بوبین اجاق گاز خراب است.","ترموکوپل اجاق گاز خراب است.");
    public $ofbProblem=array("المنت‌ها:مواردی نظیر پخت غیر یکنواخت و عدم گرمای کافی از نشانه های خرابی المنت است.","کلید قطع و وصل","ترموستات کنترلی فر","تنظیم نشدن دمای فر","اختلال در سیستم الکتریکی","فیوز‌ها","سایر");
    public $mlProblems=array("لباس‌ها را خوب نمی‌شوید","دیگ لباسشویی نمی‌چرخد","روشن نمی‌شود","آب را تخلیه نمی‌کند","آب‌گیری نمی‌کند","برق می‌دهد(اتصالی دارد)","کلیدها کار نمی‌کند","دور خشک کن عمل نمی‌کند","صفحه نمایش خطا می‌دهد","در لباسشویی باز یا بسته نمی‌شود","حین کار صدا می‌دهد و تکان می‌خورد","در حال کار آب بیرون می‌ریزد(نشتی آب دارد)","سایر");
    public $mzProblems=array("دستگاه روشن نمی‌شود.","دستگاه به صورت پیوسته و بدون وقفه کار می‌کند.","دستگاه با سر و صدا کار می‌کند.","بوی سوختگی از دستگاه می‌آید.","دستگاه خوب کار نمی‌کند.","کلیدهای دستگاه فرمان نمی‌گیرد.","بدنه دستگاه هنگام استفاده بیش از حد گرم می‌شود.","موتور دستگاه هنگام خاموش شدن لرزش دارد.","آب تخلیه نمی‌کند.","آبگیری نمی‌کند.");
    public $fProblems=array("یخچال خنک نمی‌کند","یخ‌ساز یخ نمی‌سازد","فیلتر تصفیه آب صدا می‌دهد","فریزر خوب منجمد نمی‌کند","یخچال برفک می‌زند","یخچال صدا می‌دهد","یخچال اتومات نمی‌کند","بدنه یخچال برق دارد","صدای یخچال زیاد و غیر عادی است","موتور یخچال کار نمی‌کند و سرما ندارد","لامپ روشنایی روشن نمی‌شود","سایر");

    public function order($name){
        
        if($name=='ojaq'){
            $brand=$this->oBrand;
            $problem=$this->oProblems;
            $type='';
        }elseif($name=='ofb'){
            $type=$this->ofbType;
            $brand=$this->ofbBrand;
            $problem=$this->ofbProblem;
        }elseif($name=='b'){
            $brand='';
            $problem='';
            $type=$this->bType;
        }elseif($name=='ml'){
            $type='';
            $brand=$this->mlBrand;
            $problem=$this->mlProblems;
        }elseif($name=='mz'){
            $brand=$this->mzBrand;
            $type="";
            $problem=$this->mzProblems;
        }elseif($name=='f'){
            $type=$this->fType;
            $brand=$this->fBrand;
            $problem=$this->fProblems;
        }
        return view('pages/order',['name'=>$name,'brand'=>$brand,'problem'=>$problem,'type'=>$type]);
    }
    public function save(Request $request){
        $validatedData = $request->validate([
            'mobile'=> 'required',

        ]);
        $order=new order;
        $brand_index=(int)$request->brand;
        if($request->name=='ojaq'){
            $name='اجاق گاز';
            $order->brand=$this->oBrand[$brand_index];
        }elseif($request->name=='ofb'){
            $name='اجاق و فر برقی';
            $order->brand=$this->ofbBrand[$brand_index];
        }elseif($request->name=='b'){
            $name='باربیکیو';
            if($request->tools==1){
                $order->tools=true;
            }else{
                $order->tools=false;
            }
            if($request->place==0){
                $order->place='حیاط';
            }elseif ($request->place==1) {
                $order->place='تراس';
            }elseif ($request->place==2) {
                $order->place='بالکن';
            }elseif ($request->place==3) {
                $order->place='سایر';
            }
        }elseif($request->name=='ml'){
            $name='ماشین لباسشویی';
            $order->brand=$this->mlBrand[$brand_index];
        }elseif($request->name=='mz'){
            $name='ماشین ظرفشویی';
            $order->brand=$this->mzBrand[$brand_index];
        }elseif ($request->name=='f') {
            $name='یخجال فریزر';
            $order->brand=$this->fBrand[$brand_index];
        }
        $order->name=$name;
        $order->service=$request->service;
        $problem='';
        for($i=0;$i<30;$i++){
            if($request->input('problem'.$i)){
                if($problem==''){
                    $problem=$request->input('problem'.$i);
                }else{
                    $problem=$problem.','.$request->input('problem'.$i);
                }
            }   
        }
        $order->problem=$problem;
        $order->comment=$request->comment;
        $order->time=$request->time;
        $order->address=$request->address;
        $order->mobile=$request->mobile;
        $order->type=$request->type;
        $order->user_id=1;
        $order->save();
        $now = Carbon::now();
        $y=$now->year;
        $m=$now->month;
        $d=$now->day;
        $order->code=$y.$m.$d.$order->id;
        $order->save();

        return redirect('/')->with('success','  كد پیگیری شما'.$order->code);
    }
}
