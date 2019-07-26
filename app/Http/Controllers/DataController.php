<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitData;   // 加上用户模型文件路径，才能找到MODELS
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

        $gz_shiyebu = DB::table('unit_data')->where('事业部','广州事业部')
        ->where('年度','2019')->sum('业务收入A值（万）');

        $yxb_shiyebu = DB::table('unit_data')->where('事业部','粤西事业部')
        ->where('年度','2019')->sum('业务收入A值（万）');

        $yd_shiyebu = DB::table('unit_data')->where('事业部','粤东事业部')
        ->where('年度','2019')->sum('业务收入A值（万）');

        $jkzx_shiyebu = DB::table('unit_data')->where('事业部','集客中心事业部')
        ->where('年度','2019')->sum('业务收入A值（万）');
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

        return view('index2',[
        // 业务量A数据返回主页
        // 'pythontest' => $result ,
        'businessA' => $businessA ,
        'businessB' => $businessB ,
        'gz_shiyebu' => $gz_shiyebu  ,
        'yuedong_shiyebu' => $yd_shiyebu ,
        'yuexibei_shiyebu' => $yxb_shiyebu , 
        'jkzx_shiyebu' => $jkzx_shiyebu ,

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

    public function business_area () {

        // $result = exec("python3 /var/www/app/Python/testbiaoge1.py");

        // $arr = array('key' => 'value');

        // $arr = array("a" => "biaoge" ,"b" => "niubi");

        $arr = 2;                                                                          

        $result1 = ppython("testbiaoge1::go",$arr);
        $result2 = ppython("testbiaoge1::go",$arr);
        
        return 
           [$result1,$result2]
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
 
        // $bar4 = array_combine($bar1,$bar3);
        



        return  array($bar1,$bar3); 
        // foreach ($bar as $dishi) {
        //     foreach ($titles as $title) {
        //         if ($title == $dishi ) {
        //             $title->count();
        //         }
        //     }
        // }
        
            // if (! in_array($title,$bar->$name) ) {
            //     array_push($bar,$title);
            // }
            // else {
            //     # code...
            // }

            // if ( $title !== $bar['name'] ) {
            //     $bar2 = array(
            //         "name" => $title,
            //         "value" => 1
            //     );
            //     array_push($bar,$bar2);
            // }

            // if (! in_array($title,$bar) ) {
            //     // title不在bar里就加到bar里
            //     array_push($bar,$title);
            // }

            // title已经列出了所有出现的地市，包括重复、从里面提取？
            // array_push($bar2,$titlecount);
            // $titlecount根据$bar[i]不同而不同，且有顺序对应关系。
            // 每种title出现了几次
    }

}
