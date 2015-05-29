<?php
/**
 * 各种算法 PHP版
 * All kinds of algorithms in PHP
 */


/*
|     *
|    ***
|   *****
|  *******
| *********
|  *******
|   *****
|    ***
|     *
|---------------------------
| 命令行模式下实现的菱形图像
| php.exe(PHP>5.0.0) | cli/php.exe( 4.3.0<PHP<5.0.0)
|---------------------------
| @authors QiuFan
| @date    2015-05-04 16:08:34
| @version 0.1
| @params $len int 菱形大小
*/
function fn_cli_rhombus($len)
{
    for ($i = 1; $i <= $len; ++$i) {
        for ($j = 1; $j <= ($len - $i); ++$j) {
            echo chr(32);
        }
        for ($k = 1; $k <= ($i * 2 - 1); ++$k) {
            echo '*';
        }
        echo PHP_EOL;
    }

    for ($i = ($len - 1); $i >= 1; --$i) {
        for ($j = 1; $j <= ($len - $i); ++$j) {
            echo chr(32);
        }
        for ($k = 1; $k <= ($i * 2 - 1); ++$k) {
            echo '*';
        }
        echo PHP_EOL;
    }
}


// test
fn_cli_rhombus(30);
