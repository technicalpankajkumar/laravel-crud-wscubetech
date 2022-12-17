<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputcomponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $name;
     public $type;
     public $lable;
     public $value;
    
    public function __construct($name,$type,$lable,$value=0)
    {
        $this->type=$type;
        $this->name=$name;
        $this->lable=$lable;
        $this->value=$value;
        // $this->value=$value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputcomponent');
    }
}
