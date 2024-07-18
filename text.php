<?php

$options = array(
    '北海道' => '<option value>select</option>
    <option value="市区郡">市区郡</option>
                 <option value="札幌市中央区">札幌市中央区</option>',
    '秋田県' => '<option value>select</option><option value="市区郡">市区郡</option>
                 <option value="秋田市">秋田市</option>'
);

$selectedValue = $_POST['selectedValue'];

if (array_key_exists($selectedValue, $options)) {
    echo $options[$selectedValue];
} else {
    echo '<option value="">test</option>';
}
?>
