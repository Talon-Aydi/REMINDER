<?php

use App\Livewire\Forms\UserForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Component;
use Livewire\Livewire;

uses(RefreshDatabase::class);

beforeAll(function () {
    class TestRegisterComponent extends Component
    {
        public UserForm $form;

        public function save(): void
        {
            $this->form->save();
        }

        public function render(): string
        {
            return '<div></div>';
        }
    }
});
describe('Test UserForm', function () {
    it('creates a new user', function () {
        // Arrange, Act & Assert
        Livewire::test(TestRegisterComponent::class)
            ->set('form.name', 'John')
            ->set('form.email', 'john@example.com')
            ->set('form.password', 'eightletters')
            ->set('form.password_confirmation', 'eightletters')
            ->call('save');

        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);
    });

    it('generates an error when passwords don´t match', function () {
        // Arrange, Act & Assert
        Livewire::test(TestRegisterComponent::class)
            ->set('form.name', 'John')
            ->set('form.email', 'john@example.com')
            ->set('form.password', 'eightletters')
            ->set('form.password_confirmation', 'eightletter')
            ->call('save')
            ->assertHasErrors(['form.password' => 'confirmed']);
    });

    it('generates errors if required fields omitted', function () {
        // Arrange, Act & Assert
        Livewire::test(TestRegisterComponent::class)
            ->call('save')
            ->assertHasErrors(['form.name' => 'required'])
            ->assertHasErrors(['form.email' => 'required'])
            ->assertHasErrors(['form.password' => 'required']);
    });

    it('generates errors if email is not unique', function () {
        // Arrange, Act & Assert
        Livewire::test(TestRegisterComponent::class)
            ->set('form.name', 'John')
            ->set('form.email', 'john@example.com')
            ->set('form.password', 'eightletters')
            ->set('form.password_confirmation', 'eightletters')
            ->call('save')
            ->assertHasNoErrors();

        Livewire::test(TestRegisterComponent::class)
            ->set('form.name', 'John')
            ->set('form.email', 'john@example.com')
            ->set('form.password', 'eightletters')
            ->set('form.password_confirmation', 'eightletters')
            ->call('save')
            ->assertHasErrors(['form.email' => 'unique']);

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);
    });
});
