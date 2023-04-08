# Laravel SB Admin Template

Laravel SB Admin Template is a package that provides an easy way to integrate the popular SB Admin Template into your Laravel project.

## Installation

You can install the package via composer:

```bash
composer require kykurniawan/laravel-sb-admin-template
```

After installation, publish the package's assets:

```bash
php artisan vendor:publish --provider="KyKurniawan\LaravelSBAdminTemplate\ServiceProvider" --tag="sb-admin-assets"
```

This will copy the necessary assets (CSS, JS, images, fonts) to your public directory.

## Usage

After successfully install the package, we can use the pre-built dashboard layout, simply extend the sb-admin layout in your view:

```html
@extends('laravel-sb-admin-template::layouts')

@section('title', 'Hello World!')

@section('content')
<!-- Your content here -->
@endsection
```

You may want to add something on your template's head

```html
@extends('laravel-sb-admin-template::layouts')

@section('head')
@parent
<!-- add something here: metatag, css link, etc -->
@endsection @section('content')
<!-- Your content here -->
@endsection
```

You can also add something on your template's foot (before body closing tag)

```html
@extends('laravel-sb-admin-template::layouts')

@section('foot')
@parent
<!-- add something here: scripts,etc -->
@endsection @section('content')
<!-- Your content here -->
@endsection
```

**Note:**
The `@parent` directive is keeps default element being loaded (template style, template script).
If you don't add this directive, you need to include template's style or template's script manually
```html
<!-- for head -->
@section('head')
    @include('laravel-sb-admin-template::partials.style')
    <!-- something here -->
@endsection

<!-- for foot -->
@section('foot')
    @include('laravel-sb-admin-template::partials.script')
    <!-- something here -->
@endsection
```

## Configuration

The package's configuration file is located at config/sb-admin.php. Here you can customize various aspects of the template, such as the sidebar menu items, navbar, footer copyright, etc.

To customizing the config, you need to publish package's config first:

```bash
php artisan vendor:publish --provider="KyKurniawan\LaravelSBAdminTemplate\ServiceProvider" --tag="sb-admin-config"
```

## Overriding Entire Template

This package has been made in such a way that you only need to extend the layout. However, if you want more specific needs, you can copy the template's views into your project and make any modifications you want.

To do that, you have to publish the views:

```bash
php artisan vendor:publish --provider="KyKurniawan\LaravelSBAdminTemplate\ServiceProvider" --tag="sb-admin-views"
```

## Credits

This package was inspired by the SB Admin Template by Start Bootstrap. Special thanks to [David Miller](https://github.com/davidtmiller) for creating this awesome template.

## License

The Laravel SB Admin Template package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
