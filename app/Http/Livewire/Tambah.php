<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kegiatan;

class Tambah extends Component
{
    public $name;
    public $activity;

    public function store(){

        $this->validate([
            'nama_kegiatan' => 'required|string|min:5',
            'isi_kegiatan' => 'required|string',
        ]);

        Kegiatan::create([
            'nama_kegiatan' => $this->name,
            'isi_kegiatan' => $this->activity,
        ]);

        $this->name = NULL;
        $this->activity = NULL;
        
    }

    public function render()
    {
        return view('livewire.tambah');
    }
}
