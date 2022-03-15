<?php
    /**
     * 정수형 배열 array를 인자로 받아 가장 큰 값을 return 하는 함수 getTop을 작성하라.
     */

     function getTop($array = array()) {   
        $max = null;

        // 배열을 돌며 최대값을 찾는다.
        foreach($array as $val) {
            
            // max에 값이 null인 경우 val을 max에 대입한다.
            if(is_null($max)) {
                $max = $val;
                continue;
            }

            // max보다 val이 큰 경우 max에 val을 대입한다.
            if($max < $val) {
                $max = $val;
            }
        }
        return $max;
     }

     $arg = [3-1,-5,-3,0,5,1,3];
     
     $result = getTop($arg);
     
     // 결과 출력
     echo $result;
?>