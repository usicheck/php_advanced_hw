<?php
//Розробити структуру класів за допомогою патерну Абстрактна фабрика.
//ТЗ:
//Має бути 2 фабрики (Sony, LG) котрі створюють сімейство телевізорів:
//
//LED TV
//LCD TV
//
//Метода класів робимо максимально простими.
//
//Всі класи та інтерфейси мають бути в окремих файлах

//interface iTV {
//    public function createProduct():iItem;
//}
//abstract class iLEDTV implements iTV {
//    abstract public function createProduct():iItem;
//    public function type() {
//        echo 'LED';
//    }
//}
//abstract class iLCDTV implements iTV {
//    abstract public function createProduct():iItem;
//    public function type() {
//        echo 'LCD';
//    }
//}
//class Sony_LED extends iLEDTV {
//
//    public function createProduct():iItem {
//        return new Sony_LED_TV();
//    }
//}
//class Sony_LCD extends iLCDTV {
//
//    public function createProduct():iItem {
//        return new Sony_LCD_TV();
//    }
//}
//class LG_LED extends iLEDTV {
//    public function createProduct():iItem {
//        return new LG_LED_TV();
//    }
//}
//class LG_LCD extends iLCDTV {
//    public function createProduct():iItem {
//        return new LG_LCD_TV();
//    }
//}

//interface iItem {
//    public function getItem();
//}
//class Sony_LED_TV implements iItem{
//    public function getItem(){
//        echo 'Hi! I am Sony_LED_TV.';
//    }
//}
//class Sony_LCD_TV implements iItem{
//    public function getItem(){
//        echo 'Hi! I am Sony_LCD_TV.';
//    }
//}
//class LG_LED_TV implements iItem{
//    public function getItem(){
//        echo 'Hi! I am LG_LED_TV.';
//    }
//}
//class LG_LCD_TV implements iItem{
//    public function getItem(){
//        echo 'Hi! I am LG_LCD_TV.';
//    }
//}
//function clientCode(iTV $TV)
//{
//    $TV_Type = $TV->createProduct();
//    echo $TV_Type->getItem() . "\n";
//}
//clientCode(new Sony_LED());
//clientCode(new Sony_LCD());
//
//clientCode(new LG_LED());
//clientCode(new LG_LCD());
