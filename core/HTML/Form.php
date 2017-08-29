<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 17:59
 */
namespace Core\HTML;

class Form {
    private $data;
    public $surround = 'p';

public function __construct($data){

    $this->data = $data;
}

private function surround($html){
    return "<{$this->surround}>{$html}</{$this->surround}>";
}

private function getValue($index){

    return isset($this->data[$index]) ? $this->data[$index] :null ;

}

    /**
     * @param $name
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
    $type = isset($options['type']) ? $options['type'] : 'text';

    return $this->surround(

        '<label>'. $label .'</label><br/><input type="'.$type.'" name="'. $name . '" value="'.$this->getValue($name). '">'

    );
}


public function submit(){
    return $this->surround('<button type="submit">Envoyer</button>');
}


}