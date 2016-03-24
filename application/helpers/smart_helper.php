<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('auto_inc')){
    function auto_inc($model_name,$pk){
    $CI = & get_instance();
    $id = $CI->$model_name->get_last_id();
        if (!empty($id)) {
            $idd = $id->$pk + 1;
        } else {
            $idd = '1';
        }
        return $idd;
    }
}

if (!function_exists('drop_list')){
    function drop_list($models,$pk,$name,$label,$method=NULL,$param=NULL){
        $CI = & get_instance();
        if ($method === NULL){
            $get = $CI->$models->get_all();
            if (!empty($get)){
                foreach ($get as $val) {
                    $list[''] = $label;
                    $list[$val->$pk] = $val->$name;
                }
            }else{
                $list[''] = "Tidak ada data";
            }
            return $list;
        }

        if ($param === NULL){
            $get = $CI->$models->$method();
            if (!empty($get)){
                foreach ($get as $val) {
                    $list[''] = $label;
                    $list[$val->$pk] = $val->$name;
                }
            }else{
                $list[''] = "Tidak ada data";
            }
            return $list;
        }

        $get = $CI->$models->$method($param);
        if (!empty($get)){
            foreach ($get as $val) {
                $list[''] = $label;
                $list[$val->$pk] = $val->$name;
            }
        }else{
            $list[''] = "Tidak ada data";
        }
        return $list;

    }
}