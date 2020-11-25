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
        $this->str = strrev($this->str);
        return $this;     
    } 

    public function length() {
        $this->str = strval(mb_strlen($this->str));
        return $this;
    }

    public function length2() {
        return mb_strlen($this->str);
    }

    public function concat($string1 = null) {
        $this->str = $this->str.$this->getString($string1);
        return $this;
    }

    public function trim() {
        $this->str = trim($this->str);
        return $this;
    }

    public function toLowerCase() {
        $this->str = mb_strtolower($this->str);
        return $this;
    }

    public function toUpperCase() {
        $this->str = mb_strtoupper($this->str);
        return $this;
    }

    public function equals($string = null) {
        $this->str = strval($this->str == $this->getString($string));
        return  $this;
    }

    public function isEmpty() {
        $this->str = $this->length() == 0;
        return $this;
    }

    public function htmlSpecialChars() {
        $this->str = htmlspecialchars($this->str);
        return $this;
    }

    public function htmlSpecialCharsDecode() {
        $this->str = htmlspecialchars_decode($this->str);
        return $this;
    }

    public function firstIndex ($subscr = null) {
        $this->str = strval(stripos($this->str, $subscr));
        return $this;
    }

    public function lastIndex($subscr = null) {
        return $this->str = strval(strripos($this, $subscr));
        return $this;
    }

    public function stripTags() {
        $this->str = strip_tags($this->str);
        return $this;
    }

    public function stripSlashes() {
        $this->str = stripslashes($this->str);
        return $this;
    }

    public function substring($start = 0, $end = 0) {
        $newStr = ($start == $end) ? "" : mb_substr($this->str, $start, ($end > 0) ? $end - $start : null);
        $this->str = $newStr;
        return $this;
    }

    private function substring2($start = 0, $end = 0) {
        $newStr = ($start == $end) ? "" : mb_substr($this->str, $start, ($end > 0) ? $end - $start : null);
        return new Str($newStr);
    }

    public function startsWith($ndle=null) {
         $length = strlen($ndle);
         $this->str = (strval(substr($this->str, 0, $length) === $ndle? 1:0));
         return $this;
    }
    
    public function endsWith($ndle=null) {
        $length = strlen($ndle);
        $this->str = (strval(substr($this->str, -$length) === $ndle? 1:0));
        return $this;
    }

    public function insert($index = 0, $string = null) {
        $objString = new Str($string);
        $before = $index == 0 ? "" : $this->substring2(0, $index);
        $after = $this->substring2($index, $this->length2());
        $this->str = $before.$objString.$after;
        return $this;
    }
   

    public static function from($string) {
        return new Str($string);
    }


}
  
?>
