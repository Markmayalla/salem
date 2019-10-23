<?php

use App\Client;
use App\Service;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function($trail) {
    $trail->push('Dashboard', route('home'));
});

Breadcrumbs::for('services.index', function($trail) {
    $trail->parent('home');
    $trail->push('Services', route('services.index'));
});

Breadcrumbs::for('services.show', function($trail, Service $service) {
    $trail->parent('services.index');
    $trail->push('Show', route('services.show', $service));
});

Breadcrumbs::for('services.create', function($trail) {
    $trail->parent('services.index');
    $trail->push('Create', route('services.create'));
});

Breadcrumbs::for('services.edit', function($trail, Service $service) {
    $trail->parent('services.index');
    $trail->push('Edit', route('services.edit', $service));
});

Breadcrumbs::for('clients.index', function($trail) {
    $trail->parent('home');
    $trail->push('clients', route('clients.index'));
});

Breadcrumbs::for('clients.show', function($trail, Client $client) {
    $trail->parent('clients.index');
    $trail->push('Show', route('clients.show', $client));
});

Breadcrumbs::for('clients.create', function($trail) {
    $trail->parent('clients.index');
    $trail->push('Create', route('clients.create'));
});

Breadcrumbs::for('clients.edit', function($trail, Client $client) {
    $trail->parent('clients.index');
    $trail->push('Edit', route('clients.edit', $client));
});

?>