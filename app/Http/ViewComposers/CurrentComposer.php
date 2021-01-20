<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Http\Repository\CurrentRepository;

class CurrentComposer
{
    public $currentlist = [];

    public function __construct(CurrentRepository $current)
    {
        $this->currentlist = $current->getCurrentList();
    }

    public function compose(View $view)
    {
        //$view->with('nextupdatedue', end($this->currentlist));
        $view->with($currentlist);
    }
}



 ?>
