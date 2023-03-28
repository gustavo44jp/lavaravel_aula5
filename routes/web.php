<?php

use App\Models\agendamentos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dados', function () {
    $agendamentos = new agendamentos();
    $agendamentos->nome = "Rodrigo Alves";
    $agendamentos->telefone = "(11)98522-9966";
    $agendamentos->origem = "Whatsapp";
    $agendamentos->data_contato = "2023-03-28";
    $agendamentos->observacao = "Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10";
    $agendamentos->save();
    return view('welcome');
});
