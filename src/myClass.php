<?php

class MyClass
{
    public function revertCharacters($str)
    {
        $str = iconv('utf-8', 'windows-1251', $str);
        $str = strrev($str);
        $str = iconv('windows-1251', 'utf-8', $str);
        return $str;
    }
}
// $s = new MyClass();
// print($s->revertCharacters("Как дела мир?"));
?>