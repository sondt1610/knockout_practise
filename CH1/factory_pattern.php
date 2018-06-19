<?php
abstract class AbstractFactory
{
    abstract public function createText($mode, $content);
}

class Factory extends AbstractFactory
{
    public function createText($mode, $content)
    {
        switch (strtolower($mode)) {
            case 'htmltext':
                return new HtmlText($content);
                break;
            case 'jsontext':
                return new JsonText($content);
                break;
            default:
                return ;
                break;
        }
    }
}
abstract class Text
{
    private $text;
    public function __construct($string)
    {
        $this->text = $string;
    }
    public function getText()
    {
        return $this->text;
    }
}

class HtmlText extends Text
{
    //code
}

class JsonText extends Text
{
    //code
}

//Khởi tạo lớp Factory
$fatory = new Factory();

$html = $fatory->createText('htmltext','HTML');

echo $html->getText(); //HTML

$json = $fatory->createText('jsontext','JSON');

echo $json->getText(); //JSON