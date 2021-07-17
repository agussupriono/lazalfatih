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
            //////////////////////////////////////////////////////////////////////
            //PARA: Date Should In YYYY-MM-DD Format
            //RESULT FORMAT:
            // '%y Year %m Month %d Day %h Hours %i Minute %s Seconds'        =>  1 Year 3 Month 14 Day 11 Hours 49 Minute 36 Seconds
            // '%y Year %m Month %d Day'                                    =>  1 Year 3 Month 14 Days
            // '%m Month %d Day'                                            =>  3 Month 14 Day
            // '%d Day %h Hours'                                            =>  14 Day 11 Hours
            // '%d Day'                                                        =>  14 Days
            // '%h Hours %i Minute %s Seconds'                                =>  11 Hours 49 Minute 36 Seconds
            // '%i Minute %s Seconds'                                        =>  49 Minute 36 Seconds
            // '%h Hours                                                    =>  11 Hours
            // '%a Days                                                        =>  468 Days
            //////////////////////////////////////////////////////////////////////
            public function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
            {
                $datetime1 = date_create($date_1);
                $datetime2 = date_create($date_2);

                $interval = date_diff($datetime1, $datetime2);

                return $interval->format($differenceFormat);

            }
    }
