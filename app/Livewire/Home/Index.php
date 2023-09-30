<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Index extends Component
{
    #[Rule('required|min:3', as: 'Nome', message: 'O nome é obrigatório')]
    public $name;

    #[Rule('required|email', as: 'E-mail', message: 'O email é obrigatório')]
    public $email;

    #[Rule('required', as: 'Telefone', message: 'O telefone é obrigatório')]
    public $phone;


    public function render()
    {

        return view('livewire.home.index');
    }

    public function submit()
    {
        $this->validate();

        session()->flash('status', 'Os dados foram enviados com sucesso!');

        $this->name = $this->email = $this->phone = null;

        //dd($this->name, $this->email, $this->phone);
    }
}
