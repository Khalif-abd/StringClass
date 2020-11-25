<?
class Str {
    private $str = "";

    public function __construct($string = null) {
        $rawString = $this->getString($string);
        $this->str = $rawString;
    }

    public function __toString() {
        return $this->str;
    }

    private function getString($string = null){
        return $string; 
    }

    public function reverse() {
        return $this->str = strrev($this->str);     
    } 

    public function length() {
        return $this->str = strval(mb_strlen($this->str));
    }

    public function length2() {
        return mb_strlen($this->str);
    }

    public function concat($string1 = null) {
        return $this->str = $this->str.$this->getString($string1);
    }

    public function trim() {
        return $this->str = trim($this->str);
    }

    public function toLowerCase() {
        return $this->str = mb_strtolower($this->str);
    }

    public function toUpperCase() {
        return $this->str = mb_strtoupper($this->str);
    }

    public function equals($string = null) {
        return  $this->str = strval($this->str == $this->getString($string));
    }

    public function isEmpty() {
        return $this->str = $this->length() == 0;
    }

    public function htmlSpecialChars() {
        return $this->str = htmlspecialchars($this->str);
    }

    public function htmlSpecialCharsDecode() {
        return $this->str = htmlspecialchars_decode($this->str);
    }

    public function firstIndex ($subscr = null) {
        return $this->str = strval(stripos($this->str, $subscr));
    }

    public function lastIndex($subscr = null) {
        return $this->str = strval(strripos($this, $subscr));
    }

    public function stripTags() {
        return $this->str = strip_tags($this->str);
    }

    public function stripSlashes() {
        return $this->str = stripslashes($this->str);
    }

    public function substring($start = 0, $end = 0) {
        $newStr = ($start == $end) ? "" : mb_substr($this->str, $start, ($end > 0) ? $end - $start : null);
        return $this->str = $newStr;
    }

    private function substring2($start = 0, $end = 0) {
        $newStr = ($start == $end) ? "" : mb_substr($this->str, $start, ($end > 0) ? $end - $start : null);
        return new Str($newStr);
    }

    function startsWith($ndle=null) {
         $length = strlen($ndle);
         return $this->str = (strval(substr($this->str, 0, $length) === $ndle? 1:0));
    }
    
    function endsWith($ndle=null) {
        $length = strlen($ndle);
         return $this->str = (strval(substr($this->str, -$length) === $ndle? 1:0));
    }

    public function insert($index = 0, $string = null) {
        $objString = new Str($string);
        $before = $index == 0 ? "" : $this->substring2(0, $index);
        $after = $this->substring2($index, $this->length2());
        $this->str = $before.$objString.$after;
        return strval($this);
    }
   

    public static function from($string) {
        return new Str($string);
    }


}
  
?>
