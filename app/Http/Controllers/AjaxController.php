<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AjaxController extends Controller {
    public function index(){
        //$msg = "<a href='/admin-panel'>Hello</a>";
        //return response()->json(array('msg'=> $msg), 200);

        $images_extension_array = array("jpg","jpeg","gif","png");
        $dir =storage_path("app/public/images/");
        $dir_resource = opendir($dir);
        $file_count = 0; // количество картинок в директории uploadsdir
        while (($file = readdir($dir_resource)) !== false) {
            $extension_from = strrpos($file,".");
            if ($extension_from && in_array(substr($file,$extension_from+1), $images_extension_array))
                $file_count ++;
        }
        if($file_count>0){
            $lines = array();
            if(file_exists($dir.'input.txt')){
                $lines = file($dir.'input.txt');
            }


            $img = array(); //- массив картинок
            for ($i=1;$i<=$file_count;$i++){
                $img[$i]=$i.'.png';
            }
            for($i=1;$i<=$file_count;$i++){
                list($w[$i], $h[$i]) = getimagesize($dir.$img[$i]);
            }
            $arr= array();
            $arr['arr1'] = $w; //массив с ширинами картинок
            $arr['arr2'] = $h; //массив с высотами картинок
            $arr['arr3'] = $lines;

            echo json_encode($arr);

        }
        else {
            $data = 'Картинок не найдено, всё очень плохо:(';
            echo json_encode($data);
        }
    }

    public function search($val){
        $posts = DB::table('posts')->where('cardtext','like','%'.$val.'%')->get();
        echo json_encode($posts);
    }
}
