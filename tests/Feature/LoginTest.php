<?php

use App\Livewire\Forms\User\LoginForm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Livewire;

uses(RefreshDatabase::class);

beforeAll(function () {

    class TestLoginComponent extends Component
    {
        public LoginForm $form;

        public function submit()
        {
            $this->form->validate();

            $credentials = [
        'email'    => $this->form->email,
        'password' => $this->form->password,
    ];

            if (Auth::attempt($credentials)) {
                return redirect()->intended('/activity');
            }

            $this->form->addError('password', 'Invalid credentials.');
        }

        public function render(): string
        {
            return '<div></div>';
        }
    }
});

describe('Test UserForm', function () {
    it('logins in as existing user', function () {
        // Arrange, Act & Assert
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        Livewire::test(TestLoginComponent::class)
            ->set('form.email', 'test@example.com')
            ->set('form.password', 'password123')
            ->call('submit');

        $this->assertAuthenticatedAs($user);
    });
});
