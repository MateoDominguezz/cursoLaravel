<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";    

    public function agregarUsuario(){

        $datos= $this->validate([
            "name" => "required|min:5",
            "email" => "required|email|unique:users,email",
            "password" => "required"
        ]);

        User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => Hash::make($this->password)
        ]);

        $this->reset(["name","email","password"]);
    }

    public function with()
    {
        return [
            "users" => User::all()
        ];
    }
};
?>

<div>
    <p>Ingrese su nombre: </p>
    <input wire:model="name">
    <p>Ingrese su email</p>
    <input wire:model="email">
    <p>Ingrese su contraseña</p>
    <input wire:model="password">
    <br> <br>
    <button type="submit" wire:click="agregarUsuario">Enviar</button>

    @foreach ($users as $user )
        <h1>{{$user->name}}</h1>
        <h1>{{$user->email}}</h1>
    @endforeach
</div>