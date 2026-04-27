<?php

namespace App\Livewire\Component\SearchBar;

use Livewire\Component;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SearchBar extends Component
{
    public array $allNames = [];
    public array $nameList = [];
    public string $namefield = '';
    public bool $showResults = false;

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

        $this->showResults = strlen($this->namefield) > 0 && count($this->nameList) > 0;
    }

    public function selectName($name)
    {
        $this->namefield = $name;
        $this->showResults = false;
    }

    public function hideResults()
    {
        // Delay hiding so click events still register
        $this->dispatch('hide-after-click');
    }

    public function render()
    {
        return view('livewire.component.search-bar');
    }
}
