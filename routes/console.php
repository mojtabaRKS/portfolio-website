<?php

use Illuminate\Foundation\Inspiring;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('makeRoles', function () {
    $mainAccess = new Permission();
    $mainAccess->name = 'adminAccess';
    $mainAccess->save();


    $userAccess = new Permission();
    $userAccess->name = 'userAccess';
    $userAccess->save();

    $admin = new Role();
    $admin->name = 'admin';
    $admin->save();

    $user = new Role();
    $user->name = 'user';
    $user->save();

    $admin->attachPermissions(array($mainAccess));
    $user->attachPermissions(array($userAccess));

    $user = User::findOrFail(1);
    $user->attachRole($admin);
})->describe('make all roles and admin');