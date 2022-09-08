<?php

class DOC
{
    public static $CLOSEDTAGS = ["br"];

    public static function openTAG($name, $attributes = '', ...$body)
    {
        if (in_array($name, self::$CLOSEDTAGS)) {
            return sprintf("<%s />", $name);
        }
        return sprintf(($name == "html" ? '' : "\n\n") . "<%s%s>%s</%s>" . ($name == "html" ? '' : "\n\n"), $name, $attributes, implode('', $body), $name);
    }

    public static function openHTML($attributes = '', ...$body)
    {
        return self::openTAG("html", $attributes, ...$body);
    }

    public static function openHEAD($attributes = '', ...$body)
    {
        return self::openTAG("head", $attributes, ...$body);
    }

    public static function openBODY($attributes = '', ...$body)
    {
        return self::openTAG("body", $attributes, ...$body);
    }

    public static function openTitle($attributes = '', ...$body)
    {
        return self::openTAG("title", $attributes, ...$body);
    }

    public static function openScript($attributes = '', ...$body)
    {
        return self::openTAG("script", $attributes, ...$body);
    }
}

class Attributes
{
    public $attributes = "";

    public function setAttr($name, $value)
    {
        $this->attributes .= ' ' . $name . '="' . $value . '"';
        return $this;
    }

    public function id($value = "")
    {
        $this->setAttr(__FUNCTION__, $value);
        return $this;
    }

    public function name($value = "")
    {
        $this->setAttr(__FUNCTION__, $value);
        return $this;
    }

    public function action($value = "")
    {
        $this->setAttr(__FUNCTION__, $value);
        return $this;
    }

    public function method($value = "")
    {
        $this->setAttr(__FUNCTION__, $value);
        return $this;
    }

    public function get()
    {
        return $this->attributes;
    }
}

class STYLE{
    public $styles;
    public function addAttr($name,$value){
        $this->styles .= $name . " : " .$value . ";";
    }
    public function padding($value = '',...$custom){
        if (empty($value)){
            $value = implode(' ',$custom);
        }
        $this->addAttr(__FUNCTION__,$value);
        return $this;
    }
    public function get(){
        return $this->styles;
    }
}
