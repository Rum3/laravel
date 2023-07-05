<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrationForm extends Component
{
    public $rows = [];

    public function addRow()
    {
        $this->rows[] = count($this->rows) + 1;
    }

    public function deleteRow($index)
    {
        unset($this->rows[$index]);
        $this->rows = array_values($this->rows);
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
}

