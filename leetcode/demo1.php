<?php

/**
 * User: kendo
 * Date: 2019/2/19
 *
 * 1. 两数之和
 * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
 *
 * 你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。
 *
 * 示例:
 *
 * 给定 nums = [2, 7, 11, 15], target = 9
 *
 * 因为 nums[0] + nums[1] = 2 + 7 = 9
 * 所以返回 [0, 1]
 */
class Solution
{
    function twoSum(array $nums, int $target)
    {
        $results = [];
        $len = count($nums);
        $middle = ceil(count($len) / 2);
        for ($i = 0; $i <= $middle; $i++) {
            for ($j = 0; $j < ($len - $middle); $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    $result = [$i, $j];
                    sort($result);
                    $results[join($result, '-')] = $result;
                }
            }
        }
        return $results;
    }
}

$numArr = [2, 7, 11, 15];
$target = 9;
$class = new Solution();
$results = $class->twoSum($numArr, $target);
print_r($results);