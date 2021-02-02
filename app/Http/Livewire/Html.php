<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Explore;

class Html extends Component
{
    // Initialize model of materi with variables
    public $explores, $explore_id, $judul_materi, $isi_materi, $kategori;

    public function mount()
    {
        $this->explores = Explore::where('kategori', 'html')->get();
    }

    public function show($ex_id)
    {
        $ex = Explore::find($ex_id);
        $this->explore_id = $ex->id;
        $this->judul_materi = $ex->judul_materi;
        $this->isi_materi = $ex->isi_materi;
        $this->kategori = $ex->kategori;
    }

    public function render()
    {
        return view('livewire.html');
    }
}
