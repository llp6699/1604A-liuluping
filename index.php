<?php
//冒泡方法
// 1.循环外层 i
// 2.内层循环 j，判断条件是j=i+1;j<arr.length;j++
// 3.内层调换 arr[i].arr[j] > arr[j].arr[i] 调换位置
function Number2($arr)
{
    $length=count($arr);

    for($i=0;$i<$length;$i++){

        for($j=$i+1;$j<$length;$j++){

            if(($arr[$i].''.$arr[$j])>($arr[$j].''.$arr[$i])){
                $temp=$arr[$i];

                $arr[$i]=$arr[$j];

                $arr[$j]=$temp;
            }
        }
    }
    return (implode('',$arr));
}
$arr = [43,12,443];
$result=Number2($arr);

echo "2:".$result;
