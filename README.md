# phpClassTree

![](https://img.shields.io/badge/language-php-green.svg?style=plastic)
![](https://img.shields.io/badge/release-v1.4-blue.svg?style=plastic)
![](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=plastic)

无限分类树（支持子分类排序）

## 使用例子
```php
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
```
## 返回样例
```php
Array
(
    [4] => Array
        (
            [id] => 4
            [pid] => 0
            [name] => 上海
            [sort] => 2
        )

    [5] => Array
        (
            [id] => 5
            [pid] => 4
            [name] => 闵行
            [sort] => 0
        )

    [1] => Array
        (
            [id] => 1
            [pid] => 0
            [name] => 浙江
            [sort] => 0
        )

    [13] => Array
        (
            [id] => 13
            [pid] => 1
            [name] => 金华
            [sort] => 1
        )

    [10] => Array
        (
            [id] => 10
            [pid] => 1
            [name] => 宁波
            [sort] => 0
        )

    [6] => Array
        (
            [id] => 6
            [pid] => 10
            [name] => 宁海
            [sort] => 0
        )

)
Array
(
    [4] => Array
        (
            [id] => 4
            [pid] => 0
            [name] => 上海
            [sort] => 2
            [sub] => Array
                (
                    [5] => Array
                        (
                            [id] => 5
                            [pid] => 4
                            [name] => 闵行
                            [sort] => 0
                            [sub] => Array
                                (
                                )

                        )

                )

        )

    [1] => Array
        (
            [id] => 1
            [pid] => 0
            [name] => 浙江
            [sort] => 0
            [sub] => Array
                (
                    [13] => Array
                        (
                            [id] => 13
                            [pid] => 1
                            [name] => 金华
                            [sort] => 1
                            [sub] => Array
                                (
                                )

                        )

                    [10] => Array
                        (
                            [id] => 10
                            [pid] => 1
                            [name] => 宁波
                            [sort] => 0
                            [sub] => Array
                                (
                                    [6] => Array
                                        (
                                            [id] => 6
                                            [pid] => 10
                                            [name] => 宁海
                                            [sort] => 0
                                            [sub] => Array
                                                (
                                                )

                                        )

                                )

                        )

                )

        )

)
```