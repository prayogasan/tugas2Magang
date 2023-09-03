<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kegiatan;


class Tampil extends Component
{
    public function render()
    {
        
        $kegiatan = Kegiatan::all();
        
        return view('livewire.tampil',);
    }
}
