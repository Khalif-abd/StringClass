# StrClass:

        include_once('StrClass.php');

        $str = Str::from('<sctipt>Hello world!</script>');
        $str->htmlSpecialChars();
        $str->insert(19,' bla-bla ');
        $str->reverse();
        $str->toUpperCase();
        echo $str;

Full method overview available at [Wiki](https://github.com/r0ck3r/JString/wiki)
