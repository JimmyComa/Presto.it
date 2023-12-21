<?php

namespace App\Livewire;

use Livewire\Component;

class Carousel extends Component
{
    public $i=0;
    public $h=0;
    public function render()
    {
        // $dir="media/carousel";
        // $carousel_scan=scandir($dir);
        // $carousel_file=array_diff($carousel_scan, [".",".."]);
        // $carousel_file = ;
        return view('livewire.carousel');
    }
}
