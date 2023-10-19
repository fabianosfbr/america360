<?php

namespace App\Livewire\Home;

use App\Models\Account;
use Livewire\Component;
use App\Models\Contact;
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

        $contact = Contact::create([
            'first_name' => $this->fist_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'lead_source' => 1,
            'pipeline_stage' => 1,
        ]);

        if ($contact) {
            session()->flash('status', 'Os dados foram enviados com sucesso!');
            $this->name = $this->email = $this->phone = null;
        }
    }
}
