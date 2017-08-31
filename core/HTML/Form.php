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

private function getValue($index)
{

    if (is_object($this->data)) {

        return $this->data->$index;
    }
        return isset($this->data[$index]) ? $this->data[$index] : null;


}

    /**
     * @param $name
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
    $type = isset($options['type']) ? $options['type'] : 'text';
    $label ='<label>'. $label .'</label>';

    if($type === 'textarea'){

        $input = '<textarea name="'. $name . '" class="form-control">'.$this->getValue($name).'</textarea>';

    }else{
        $input = '<input type="'.$type.'" name="'. $name . '" value="'.$this->getValue($name). '" class="form-control">';
    }


    return $this->surround($label . $input);
}

    public function select($name,$label,$choices){
        $label ='<label>'. $label .'</label>';
        $input = '<select class="form-control" name="'. $name .'">';
        foreach ($choices as $k=>$v) {
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = 'selected';
            }
            $input .="<option value='$k' $attributes> $v</option>";
        }
        $input .='</select>';
        return $this->surround($label . $input);

    }


public function submit(){
    return $this->surround('<button type="submit">Envoyer</button>');
}


}