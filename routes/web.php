<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\NewAccountForm;
use App\Http\Livewire\EditAccountForm;
use App\Http\Livewire\NewRoleForm;
use App\Http\Livewire\EditRoleForm;
use App\Http\Livewire\Chatroom;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Livewire\MayanChat;
use App\Http\Livewire\CWImporter;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified', 'checkuserstatus',])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth', 'checkuserstatus',]], function () 
{
    //User Accounts
    Route::get('/users/create', NewAccountForm::class)->name('user.create');
    Route::get('/users/{user}/edit', EditAccountForm::class)->name('user.edit');
    Route::post('/users/{user}', [\App\Http\Controllers\UserController::class, 'active'])->name('user.deactivate');
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::get('/users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('user.show');
    Route::delete('/users/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');
    //Roles and Permissions
    Route::get('/roles/create', NewRoleForm::class)->name('role.create');
    Route::get('/roles/{role}/edit', EditRoleForm::class)->name('role.edit');
    Route::get('/roles', [\App\Http\Controllers\RoleController::class, 'index'])->name('roles');
    Route::get('/roles/{role}', [\App\Http\Controllers\RoleController::class, 'show'])->name('role.show');
    Route::delete('/roles/{role}', [\App\Http\Controllers\RoleController::class, 'destroy'])->name('role.delete');
    //importer
    // Route::get('/import', CWImporter::class)->name('import');
    Route::get('/import/create', [\App\Http\Controllers\ImportController::class, 'create'])->name('new_import');
    Route::post('import/import', [\App\Http\Controllers\ImportController::class, 'import'])->name('import');
    
});