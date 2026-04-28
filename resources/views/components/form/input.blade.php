<?php

use Livewire\Component;

new class extends Component {
    public ?string $placeholder = null;
    public string $type;

    public function mount(?string $placeholder = null, $type = 'text')
    {
        $this->placeholder = $placeholder;
        $this->type = $type;
    }
};
?>

<div>
    <input type="{{ $type }}" class="border-b outline-none w-full" placeholder="{{ $placeholder }}">
</div>
