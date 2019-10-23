<div class="container">
    <div class="row">
        @component(
        'admin.dashboard.menu_item',
        [
        'name' => 'Services',
        'link' => '/services',
        'icon' => 'fab fa-buffer'
        ])
        @endcomponent

        @component(
        'admin.dashboard.menu_item',
        [
        'name' => 'Clients',
        'link' => '/clients',
        'icon' => 'fas fa-address-book'
        ])
        @endcomponent

        @component(
        'admin.dashboard.menu_item',
        [
        'name' => 'Projects',
        'link' => '/projects',
        'icon' => 'fas fa-tasks'
        ])
        @endcomponent

        @component(
        'admin.dashboard.menu_item',
        [
        'name' => 'Slides',
        'link' => '/slides',
        'icon' => 'fas fa-images'
        ])
        @endcomponent

        @component(
        'admin.dashboard.menu_item',
        [
        'name' => 'Certificates',
        'link' => '/certificates',
        'icon' => 'fas fa-award'
        ])
        @endcomponent

        @component(
        'admin.dashboard.menu_item',
        [
        'name' => 'Settings',
        'link' => '/settings',
        'icon' => 'fas fa-cogs'
        ])
        @endcomponent
    </div>
</div>