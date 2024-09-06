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
           $htmlAttributes='';
           
           foreach($this->attributes as $attribute=>$value){

            if(is_numeric($attribute)){
                $htmlAttributes.=' '.$value;
            } else{
                
            $htmlAttributes .='  ' .$attribute.'="'.htmlentities($value, ENT_QUOTES,'UTF-8').'"';
            }

           }

            $result ='<'.$this->name.$htmlAttributes.'>';
        } else {
            $result ='<'.$this->name.'>';
        }

       if(in_array($this->name,['br','hr', 'img', 'input','meta'])){
        return $result;
       }


        $result .= $this->content;  
        $result .= '</' . $this->name . '>';

        

        return $result;
    }  
}
