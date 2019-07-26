<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitData;   // 加上用户模型文件路径，才能找到MODELS
use App\Models\AirQualityData;
use Illuminate\Support\Facades\DB;  // 加上db操作文件



class DataController extends Controller
{
    //
    public function total_business_volume()
    {   
        //业务金额开始
        $businessA = DB::table('unit_data')->
        where('年度','2019')->sum('业务收入A值（万）');

        $businessB = DB::table('unit_data')->
        where('年度','2019')->sum('业务收入B值（万）');

        // 业务金额结束

        // 项目类型开始
        $type_of_roudian = DB::table('unit_data')
        ->where('项目类型','弱电信息化、视频监控')->count();
        
        $type_of_chuantou = DB::table('unit_data')
        ->where('项目类型','传统设计（土建装修、通电迁改）')->count();

        $type_of_zhihuichengshi = DB::table('unit_data')
        ->where('项目类型','智慧城市设计集成')->count();

        $type_of_wurenji = DB::table('unit_data')
        ->where('项目类型','无人机设计集成')->count();

        $type_of_qita = DB::table('unit_data')
        ->where('项目类型','其他')->count();
        // 项目类型结束

        $tmp = AirQualityData::pluck('tmp')->last();
        $hum = AirQualityData::pluck('hum')->last();
        $aft = AirQualityData::pluck('aft')->last();
        $co2 = AirQualityData::pluck('co2')->last();
        $fd = AirQualityData::pluck('fd')->last();


        return view('index2',[
        // 业务量A数据返回主页

        // 'pythontest' => $result ,
        'businessA' => $businessA ,
        'businessB' => $businessB ,
        'tmp' => $tmp , 
        'hum' => $hum , 
        'aft' => $aft , 
        'co2' => $co2 , 
        'fd' => $fd , 

        // 项目类型数据返回主页
        'type_of_roudian'=>$type_of_roudian ,  
        'type_of_chuantou' => $type_of_chuantou , 
        'type_of_zhihuichengshi' => $type_of_zhihuichengshi ,
        'type_of_wurenji' => $type_of_wurenji , 
        'type_of_qita' => $type_of_qita ,

         ] );
    }

    public function a11()
    {

        return view('/pie');
    }

    public function  types_of_industry()
    {
        $type_of_roudian = DB::table('unit_data')
        ->where('项目类型','弱电信息化、视频监控')->count();
        
        $type_of_chuantou = DB::table('unit_data')
        ->where('项目类型','传统设计（土建装修、通电迁改）')->count();

        $type_of_zhihuichengshi = DB::table('unit_data')
        ->where('项目类型','智慧城市设计集成')->count();

        $type_of_wurenji = DB::table('unit_data')
        ->where('项目类型','无人机设计集成')->count();

        $type_of_qita = DB::table('unit_data')
        ->where('项目类型','其他')->count();
               
        return [
        $type_of_roudian ,
        $type_of_chuantou ,
        $type_of_zhihuichengshi , 
        $type_of_wurenji ,
        $type_of_qita  
        ]   ;
    }

    public function well_data () {

        $tmp = AirQualityData::pluck('tmp')->last();
        $hum = AirQualityData::pluck('hum')->last();
        $aft = AirQualityData::pluck('aft')->last();
        $fav = AirQualityData::pluck('fav')->last();
        $co2 = AirQualityData::pluck('co2')->last();
        $fd = AirQualityData::pluck('fd')->last();
        
        return 
           [$tmp, $hum, $aft , $fav, $co2 , $fd]
        ;
    }

    public function business_area_2 () {
        $bar  = array();
        $bar1 = array();
        $bar2 = array();

        $titles = DB::table('unit_data')->pluck('实施地市');

        foreach ($titles as $title) {
            if (! in_array($title,$bar1) ) {
                array_push($bar1,$title);
            }
            array_push($bar,$title);
            $bar2 = array_count_values($bar);  
        }

        $bar3 = array_values($bar2); 
        return  array($bar1,$bar3);
    }

}
