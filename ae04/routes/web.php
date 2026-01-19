<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\IngredienteController;

Route::get('/', [PizzaController::class, 'showAllPizzas'])->name('pizzas.showAllPizzas');
Route::get('/pizza/{id}',[PizzaController::class, 'showOnePizza'])->name('pizzas.showOnePizza');

Route::get('/', [PizzaController::class, 'create'])->name('pizzas.create');
Route::get('/', [PizzaController::class, 'edit'])->name('pizzas.edit');

Route::post('pizzas.store',[PizzaController::class, 'create'])->create('pizza.create');
Route::get('/ingredientes', [IngredienteController::class, 'showAllIngredientes'])-> name ('ingredientes.showAllIngredientes');
Route::post('/ingredientes', [IngredienteController::class, 'store'])-> name ('ingredientes.store');
Route::get('/ingredientes/create', [IngredienteController::class, 'create'])-> name ('ingredientes.create');
Route::get('/ingredientes/{id}', [IngredienteController::class, 'showOneIngredientes'])-> name ('ingredientes.showOneIngredientes');    
Route::get('/ingredientes/{id}/edit', [IngredienteController::class, 'edit'])-> name ('ingredientes.edit');
Route::put('/ingredientes/{id}', [IngredienteController::class, 'update'])-> name ('ingredientes.update');
Route::get('/ingredientes/confirmDelete/{ingrediente}', [IngredienteController::class, 'confirmDelete'])-> name ('ingredientes.confirmDelete');
Route::delete('/ingredientes/destroy/{ingrediente}', [IngredienteController::class, 'destroy'])-> name ('ingredientes.destroy');
?>