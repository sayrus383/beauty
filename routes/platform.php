<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Profile'), route('platform.profile'));
    });

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit');

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('Create'), route('platform.systems.users.create'));
    });

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Users'), route('platform.systems.users'));
    });

// Platform > System > Roles > Role
Route::screen('roles/{roles}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(function (Trail $trail, $role) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Role'), route('platform.systems.roles.edit', $role));
    });

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Create'), route('platform.systems.roles.create'));
    });

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Roles'), route('platform.systems.roles'));
    });

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Example screen'));
    });

// translations
Route::screen('translations/{translation}/edit', \App\Orchid\Screens\Translation\FormScreen::class)
    ->name('platform.translations.edit');
Route::screen('translations/create', \App\Orchid\Screens\Translation\FormScreen::class)
    ->name('platform.translations.create');
Route::screen('translations', \App\Orchid\Screens\Translation\ListScreen::class)
    ->name('platform.translations.list');

//services
Route::screen('/services', \App\Orchid\Screens\Service\ListScreen::class)
    ->name('platform.services.list');
Route::screen('/services/form', \App\Orchid\Screens\Service\FormScreen::class)
    ->name('platform.services.create');
Route::screen('/services/form/{service}', \App\Orchid\Screens\Service\FormScreen::class)
    ->name('platform.services.edit');

//categories
Route::screen('/categories', \App\Orchid\Screens\Category\ListScreen::class)
    ->name('platform.categories.list');
Route::screen('/categories/form', \App\Orchid\Screens\Category\FormScreen::class)
    ->name('platform.categories.create');
Route::screen('/categories/form/{category}', \App\Orchid\Screens\Category\FormScreen::class)
    ->name('platform.categories.edit');

//employees
Route::screen('/employees', \App\Orchid\Screens\Employee\ListScreen::class)
    ->name('platform.employees.list');
Route::screen('/employees/form', \App\Orchid\Screens\Employee\FormScreen::class)
    ->name('platform.employees.create');
Route::screen('/employees/form/{employee}', \App\Orchid\Screens\Employee\FormScreen::class)
    ->name('platform.employees.edit');

//Variables
Route::screen('variable/settings/edit', \App\Orchid\Screens\Variable\SettingScreen::class)
    ->name('platform.settings.form');
