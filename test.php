<?php

$optionsBox3 = array(
    '北海道' => array(
        '市区郡' => '<option value="釧路郡釧路町">釧路郡釧路町</option>',
        '札幌市中央区' => '<option value="円山">円山</option><option value="大通">大通</option>'
    ),
    '秋田県' => array(
        '市区郡' => '<option value="秋田市">秋田市</option>',
        '秋田市' => '<option value="楢山">楢山</option><option value="山王">山王</option>'
    )
);

$selectedValue = $_POST['selectedValue'];
$parentValue = $_POST['parentValue'];

if (array_key_exists($parentValue, $optionsBox3) && array_key_exists($selectedValue, $optionsBox3[$parentValue])) {
    echo $optionsBox3[$parentValue][$selectedValue];
} else {
    echo '<option value="">町名</option>';
}
?>
