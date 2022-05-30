<?php
    class Solution {

        /**
         * @param Integer[] $nums
         * @return Integer[][]
         */
        function permute($nums) {
            $result=[];
            $temp=[];
            $dim=[];
            for($i=0;$i<count($nums);$i++){
                if($i==0){
                    array_push($temp,$nums[0]);
                    array_push($result,$temp);
                }
                else{
                    $dim=$result;
                    $result=[];
                    for($j=0;$j<count($dim);$j++){
                        for($k=0;$k<=count($dim[$j]);$k++){
                            $temp=$dim[$j];
                            array_splice($temp,$k,0,$nums[$i]);
                            array_push($result,$temp);
                        }
                    }
                }
            }
            return $result;
        }
    }
?>