# StrClass:

        include_once('StrClass.php');

          //Старый пример
            $str = Str::from('<sctipt>Hello world!</script>');
            $str->htmlSpecialChars();
            $str->concat(' concat text ');
            $str->insert(19,' inser text ');
            $str->reverse();
            $str->toUpperCase();
            echo $str."<br>";

        //Новый пример
            $str1 = Str::from('<sctipt>Hello world!</script>');
            $str1->htmlSpecialChars()->concat(' concat text ')->insert(19,' inser text ')->reverse()->toUpperCase();
            echo $str1;
