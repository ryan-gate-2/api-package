## Handy Links

https://www.arlekincasino.com/games/pragmaticexternal/BuffaloKing/54986


## Installation

Add to composer following:

```    "repositories": [
    {
        "type": "path",
        "url": "../westreels/westreels-main"
    }
    ],
```
```
    "westreels/westreels-main": "*"
```
```
    "post-autoload-dump": [
        "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
        "@php artisan package:discover --ansi",
        "@php artisan vendor:publish --force --tag=westreels:westreels-main --ansi"
    ],
```

## Migrations

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="westreels-main-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="westreels-main-config"
```

### Working with a config file

To register a config file, you should create a php file with your package name in the `config` directory of your package. In this example it should be at `<package root>/config/your-package-name.php`.

If your package name starts with `laravel-`, we expect that your config file does not contain that prefix. So if your package name is `laravel-cool-package`, the config file should be named `cool-package.php`.

To register that config file, call `hasConfigFile()` on `$package` in the `configurePackage` method.

```php
$package
    ->name('your-package-name')
    ->hasConfigFile();
```

The `hasConfigFile` method will also make the config file publishable. Users of your package will be able to publish the config file with this command.

```bash
php artisan vendor:publish --tag=your-package-name-config
```

Should your package have multiple config files, you can pass their names as an array to `hasConfigFile`

```php
$package
    ->name('your-package-name')
    ->hasConfigFile(['my-config-file', 'another-config-file']);
```

This will register your views with Laravel.

If you have a view `<package root>/resources/views/myView.blade.php`, you can use it like this: `view('your-package-name::myView')`. Of course, you can also use subdirectories to organise your views. A view located at `<package root>/resources/views/subdirectory/myOtherView.blade.php` can be used with `view('your-package-name::subdirectory.myOtherView')`.

#### Using a custom view namespace

You can pass a custom view namespace to the `hasViews` method.

```php
$package
    ->name('your-package-name')
    ->hasViews('custom-view-namespace');
```

You can now use the views of the package like this:

```php
view('custom-view-namespace::myView');
```

#### Publishing the views

Calling `hasViews` will also make views publishable. Users of your package will be able to publish the views with this command:

```bash
php artisan vendor:publish --tag=your-package-name-views
```

### Sharing global data with views

You can share data with all views using the `sharesDataWithAllViews` method.  This will make the shared variable available to all views.

```php
$package
    ->name('your-package-name')
    ->sharesDataWithAllViews('companyName', 'Spatie');
```

### Working with Blade view components

Any Blade view components that your package provides should be placed in the `<package root>/src/Components` directory.

You can register these views with the `hasViewComponents` command.

```php
$package
    ->name('your-package-name')
    ->hasViewComponents('spatie', Alert::class);
```

This will register your view components with Laravel.  In the case of `Alert::class`, it can be referenced in views as `<x-spatie-alert />`, where `spatie` is the prefix you provided during registration.

Calling `hasViewComponents` will also make view components publishable, and will be published to `app/Views/Components/vendor/<package name>`. 

Users of your package will be able to publish the view components with this command:

```bash
php artisan vendor:publish --tag=your-package-name-components
```

### Working with view composers

You can register any view composers that your project uses with the `hasViewComposers` method.  You may also register a callback that receives a `$view` argument instead of a classname.

To register a view composer with all views, use an asterisk as the view name `'*'`.

```php
$package
    ->name('your-package-name')
    ->hasViewComposer('viewName', MyViewComposer::class)
    ->hasViewComposer('*', function($view) { 
        $view->with('sharedVariable', 123); 
    });
```

### Working with assets

Any assets your package provides, should be placed in the `<package root>/resources/dist/` directory.

You can make these assets publishable the `hasAssets` method.

```php
$package
    ->name('your-package-name')
    ->hasAssets();
```

Users of your package will be able to publish the assets with this command:

```bash
php artisan vendor:publish --tag=your-package-name-assets
```

This will copy over the assets to the `public/vendor/<your-package-name>` directory in the app where your package is installed in.

### Working with migrations

The `PackageServiceProvider` assumes that any migrations are placed in this directory: `<package root>/database/migrations`. Inside that directory you can put any migrations.

To register your migration, you should pass its name without the extension to the `hasMigration` table. 

If your migration file is called `create_my_package_tables.php.stub` you can register them like this:

```php
$package
    ->name('your-package-name')
    ->hasMigration('create_my_package_tables');
```

Should your package contain multiple migration files, you can just call `hasMigration` multiple times or use `hasMigrations`.

```php
$package
    ->name('your-package-name')
    ->hasMigrations(['my_package_tables', 'some_other_migration']);
```

Calling `hasMigration` will also make migrations publishable. Users of your package will be able to publish the migrations with this command:

```bash
php artisan vendor:publish --tag=your-package-name-migrations
```

Like you might expect, published migration files will be prefixed with the current datetime.

### Registering commands

You can register any command you package provides with the `hasCommand` function.

```php
$package
    ->name('your-package-name')
    ->hasCommand(YourCoolPackageCommand::class);
````

If your package provides multiple commands, you can either use `hasCommand` multiple times, or pass an array to `hasCommands`

```php
$package
    ->name('your-package-name')
    ->hasCommands([
        YourCoolPackageCommand::class,
        YourOtherCoolPackageCommand::class,
    ]);
```
