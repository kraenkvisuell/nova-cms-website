# Installation

---

- [Installation](#installation)
  - [Install Laravel Nova](#install-laravel-nova)
  - [Install Nova CMS](#install-nova-cms)
  - [Media](#media)
  - [Storage Link](#storage-link)
  - [Migrations](#migrations)
  - [Add tools](#add-tools)

<a name="install-laravel-nova"></a>
## Install Laravel Nova

[Go to the Laravel Nova site](https://nova.laravel.com/docs/3.0/installation.html#installing-nova) and follow the installation instructions.

<a name="install-nova-cms"></a>
## Install Nova CMS

Install via composer:

``` php
composer require kraenkvisuell/nova-cms
```

<a name="media"></a>
## Media

We use the [Nova Media Library](https://github.com/classic-o/nova-media-library) for our media, so it is needed to publish their files:

``` php
php artisan vendor:publish --provider="ClassicO\NovaMediaLibrary\ToolServiceProvider"
```

<a name="storage-link"></a>
## Storage Link

If you haven't done this when installing Laravel, now you need to symlink your storage public folder:

``` php
php artisan storage:link
```

<a name="migrations"></a>
## Migrations

Now run all the migrations:

``` php
php artisan migrate
```

<a name="add-tools"></a>
## Add tools

Nova CMS uses some third party packages. You will need to add these tools to your `NovaServiceProvider.php`.
``` php
public function tools()
{
    return [
        // other tools
        new \OptimistDigital\MenuBuilder\MenuBuilder,
        new \ClassicO\NovaMediaLibrary\NovaMediaLibrary,
        new \OptimistDigital\NovaSettings\NovaSettings,
    ];
}
```
