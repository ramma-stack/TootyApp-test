<?php

namespace App\Http\Controllers;

use Livewire\Component;

class PrintPage extends Component
{
    public function print()
    {
        $this->emit('printPage');
    }

    public function render()
    {
        return view('print-page');
    }
}
