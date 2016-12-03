<?php
/**
 * Sort multi-dimensional arrays by custom keys. Just for two-dimensional now.
 * @param $list
 * @param $rules <p>
 * Custom sort rules. an multi-dimensional array with three elements each.
 * first is the key to sort with,
 * second is SORT_ASC or SORT_DESC,
 * third one is SORT_REGULAR, SORT_NUMERIC or SORT_STRING.
 * </p>
 * @return bool
 * @example:
 *  $list = [['a' => 1, 'b' => 2], ['a' => 1, 'b' => 3]];
 *  $rules = [['a', SORT_ASC, SORT_STRING], ['b', SORT_DESC, SORT_STRING]];
 *  multiKeySort($list, $rules);
 */
function multiKeySort(array &$list, array $rules) {
    if (!$list || !$rules) {
        return false;
    }

    $arr = [];
    foreach ($rules as $rule) {
        array_push($arr, array_column($list, $rule[0]), $rule[1], $rule[2]);
    }
    $arr[] = &$list;
    call_user_func_array('array_multisort', $arr);
    return true;
}

?>