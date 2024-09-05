<?php  
namespace App;  

class HtmlElement {  

    private $name;
    private $content;
    private $attributes;

    public function __construct(string $name, array $attributes=[],  $content = null)
    {
        $this->name = $name;
        $this->content = $content;
        $this->attributes = $attributes;
    }

   
    public function render()
    {
        if(! empty($this->attributes) ){
            $result ='<'.$this->name.'>';
        } else {
            $result ='<'.$this->name.'>';
        }

        // elemento con atributos abrimos la etiqueta con agributos
       
        //caso cobtrario
       
        $result .= $this->content;  
        $result .= '</' . $this->name . '>';

        

        return $result;
    }  
}
