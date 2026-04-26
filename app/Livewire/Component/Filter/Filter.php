<?php

namespace App\Livewire\Component\Filter;

use Livewire\Component;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Filter extends Component
{
    public $allNames = [];
    public $nameList = [];
    public $namefield; 

    public function loadList()
    {
        $path = storage_path('data/names.json');
                if (!file_exists($path)) {
                    throw new \Exception("File not found: {$path}");
                }

        $data = File::json($path);
        return $data;
    }

    public function mount()
    {
        $path = storage_path('data/names.json');

        if (!file_exists($path)) {
            throw new \Exception("File not found: {$path}");
        }

        $data = File::json($path);

        $this->allNames = $data['names'] ?? [];
        $this->nameList = $this->allNames;
    }

    public function updatedNamefield()
    {
        $search = Str::lower($this->namefield);

        $this->nameList = collect($this->allNames)
            ->filter(fn ($name) => Str::contains(Str::lower($name), $search))
            ->values()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.filter')
        ->layout('base');
    }
}
