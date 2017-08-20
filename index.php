<?php
    //Task № 1
    /* 
    $i = 1;
    $result = "";
        while($i<=100) {
            if ($i%3==0) {
            $result .= " $i";
        }
        $i++;
        }
    echo $result;
    */

    //task № 2
    /*
    $i = 0;
    $numberDiscription = "";

    do {
        if($i == 0) {
            $numberDiscription = " - это ноль.<br>";
        }
        elseif($i%2==0) {
            $numberDiscription = " - это четное число.<br>";
        }
        else {
            $numberDiscription = " - это нечетное число.<br>";
        }
    
    echo "$i $numberDiscription";
    $i++;
    } while ($i<=10);
    */
    

    //Task № 3
    
    $dataSities = array("Московская область" => array("Москва", "Зеленоград", "Клин"),
                        "Ленинградская область" => array("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"),
                        "Краснодарский край" => array("Анапа", "Краснодар", "Крымск", "Новороссийск"),
                        "Крым" => array("Севастополь", "Симферополь", "Ялта", "Саки"),
                        "Амурская область" => array("Зея", "Белогорск", "Сковородино", "Тында")
                        );
    foreach ($dataSities as $key => $value) {
        echo "$key:<br>";
        foreach ($value as $inValue){
            echo " - $inValue;<br>";
        }
    }
    
        
    
    //Task № 4
    function transliteText ($text) {
        $inVar1 = array("ае","уе","ое","ые","ие","эе","яе","юе","ёе","ее","ье","ъе","ый","ий");
        $inVar2 = array("аё","уё","оё","ыё","иё","эё","яё","юё","ёё","её","ьё","ъё","ый","ий");
        $exLetters = array("а$","у$","о$","ы$","и$","э$","я$","ю$","ё$","е$","ь$","ъ$","@","@");
        
        $replace = array("А"=>"A","а"=>"a","Б"=>"B","б"=>"b","В"=>"V","в"=>"v","Г"=>"G","г"=>"g","Д"=>"D","д"=>"d",
            "Е"=>"Ye","е"=>"e","Ё"=>"Ye","ё"=>"e","Ж"=>"Zh","ж"=>"zh","З"=>"Z","з"=>"z","И"=>"I","и"=>"i",
            "Й"=>"Y","й"=>"y","К"=>"K","к"=>"k","Л"=>"L","л"=>"l","М"=>"M","м"=>"m","Н"=>"N","н"=>"n",
            "О"=>"O","о"=>"o","П"=>"P","п"=>"p","Р"=>"R","р"=>"r","С"=>"S","с"=>"s","Т"=>"T","т"=>"t",
            "У"=>"U","у"=>"u","Ф"=>"F","ф"=>"f","Х"=>"Kh","х"=>"kh","Ц"=>"Ts","ц"=>"ts","Ч"=>"Ch","ч"=>"ch",
            "Ш"=>"Sh","ш"=>"sh","Щ"=>"Shch","щ"=>"shch","Ъ"=>"","ъ"=>"","Ы"=>"Y","ы"=>"y","Ь"=>"","ь"=>"",
            "Э"=>"E","э"=>"e","Ю"=>"Yu","ю"=>"yu","Я"=>"Ya","я"=>"ya","@"=>"y","$"=>"ye");
        
        $text = str_replace($inVar1, $exLetters, $text);
        $text = str_replace($inVar2, $exLetters, $text);
        return strtr($text,$replace);
    }
    
    $text = "Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания";
    $text1 = transliteText ($text);
    
    echo "$text<br>$text1<br>";
    
    
    //Task № 5
    function change ($text) {
        return str_replace(" ","_",$text);
    }
    $text2 = change($text);
    echo "$text2<br>";
    
    
    //Task № 6
    function generateMenu() {
        $itemsOfMenu = ["home" => NULL, "archive" => ["catalog 1", "catalog 2", "catalog 3"], "contact" => NULL];
        echo "<ul>";
        foreach ($itemsOfMenu as $key => $value) {
            if (isset($value)) {
                echo "<li>$key<ul>";
                foreach ($value as $inKey => $v) {
                    if ($v == end($value))
                        echo "<li>$v</li></ul></li>";
                    else
                        echo "<li>$v</li>";
                }
            }
            else 
                echo "<li>$key</li>";
        }
        echo "</ul>";
    }
    generateMenu();
    
    
    //Task № 7
    //for ($n = 0; $n <= 9; print $n, $n++)
        
        
    //Task № 8
    function getCitiesK ($dataCities) {
        foreach ($dataCities as $value){
            foreach ($value as $v) {
                $vArr = preg_split('#(?<!^)(?!$)#u', $v);
                if ($vArr[0]=="К")
                echo "$v<br>";
            }
        }
    }        
    
    getCitiesK($dataSities);
    
    
    //Task № 9
    function unitedTransformation ($text) {
        $textTranslite = transliteText ($text);
        return change ($textTranslite);
    }
    echo unitedTransformation ($text);
    
?>
