<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Public_functions extends CI_Model {
            public function reverse_date($date){
                $result = "";
                if($date!=""){
                    $sdate = substr($date, 0, 10);
                    $chk = strpos($date,"/");
                    if($chk){
                        $result =  trim(implode('/', array_reverse(explode('/', $sdate)))); 
                    } else {
                        $result =  trim(implode('-', array_reverse(explode('-', $sdate)))); 
                    }
                } 
                
                if($result=="__-__-____" || $result=="____-__-__" ){
                    return "";
                } else {
                    return($result);
                }
            }
            public function reverse_date_time($date){
                $result = "";
                if($date!=""){
                    $sdate = substr($date, 0, 10);
                    $shour = substr($date, 11, 8);
                    if($shour!=""){
                        $shour = " ".$shour;
                    }
                    $chk = strpos($date,"/");
                    if($chk){
                        $result =  trim(implode('/', array_reverse(explode('/', $sdate)))).$shour; 
                    } else {
                        $result =  trim(implode('-', array_reverse(explode('-', $sdate)))).$shour; 
                    }
                } 
                
                if($result=="__-__-____" || $result=="____-__-__" ){
                    return "";
                } else {
                    return($result);
                }
            }
    }
