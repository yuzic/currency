<?php
namespace app\components\providers;

class Cbr
{
    protected $url  = null;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getCurrency($day)
    {
        $xml = new \DOMDocument();
        $list = [];
        $url  = $this->getUrl() . $day;
        if (@$xml->load($url)) {
           $root = $xml->documentElement;
           $items = $root->getElementsByTagName('Valute');
           foreach ($items as $item) {
               $code = $item->getElementsByTagName('CharCode')->item(0)->nodeValue;
               $curs = $item->getElementsByTagName('Value')->item(0)->nodeValue;
               $list[$code] = floatval(str_replace(',', '.', $curs));
           }

           return $list;
        }

        return false;

     }

    public function getUrl()
    {
        return $this->url;
    }
}
