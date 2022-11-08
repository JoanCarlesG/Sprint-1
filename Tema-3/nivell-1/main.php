<?php 
$nums1 = array(5, 6, 3, 4, 2);
$nums2 = array(7, 8, 1);
echo "<pre>",var_dump($nums1);
echo "<pre>",var_dump($nums2);

$nums2[] = 9;
echo "<pre>",var_dump($nums2);

$merged = array_merge($nums1, $nums2);
echo "<pre>",var_dump($merged);
?>