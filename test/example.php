<?php
include __DIR__ . '/../src/ClassTree.php';

use Mostclan\ClassTree;

//===========================Example===========================
$arr   = [
	['id' => 1, 'pid' => 0, 'name' => '浙江', 'sort' => 0],
	['id' => 10, 'pid' => 1, 'name' => '宁波', 'sort' => 0],
	['id' => 13, 'pid' => 1, 'name' => '金华', 'sort' => 1],
	['id' => 4, 'pid' => 0, 'name' => '上海', 'sort' => 2],
	['id' => 5, 'pid' => 4, 'name' => '闵行', 'sort' => 0],
	['id' => 6, 'pid' => 10, 'name' => '宁海', 'sort' => 0],
];
$arr   = ClassTree::sort($arr, 'sort');
$data  = ClassTree::vTree($arr);
$data2 = ClassTree::hTree($arr);
echo '<pre>';
print_r($data);
print_r($data2);