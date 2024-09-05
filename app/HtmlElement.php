<?php  
namespace App;  


class HtmlElement 
{  
private $name,$content,$attributes;


    public function __construct(string $name,array $attributes=[], $content = null)
    {
        $this->attributes =$attributes;
        $this->name =$name;
        $this->content=$content;
        
    }

    public function render()
    {

        if (! empty($this->attributes)){

            $htmlAttributes='';

            foreach($this->attributes as $name => $value){
                $htmlAttributes .= $name.'="'.$value.'"';
            }

            $result ='<'.$this->name.' '.$htmlAttributes.   '>';
        }else {
            $result ='<'.$this->name.'>';
        }
       
       

        $result.= $this->content;
     

        $result .= '</'.$this->name.'>';
        return $result;
    }
}