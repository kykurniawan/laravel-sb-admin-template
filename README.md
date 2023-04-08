# Laravel SB Admin Template

Laravel SB Admin Template is a package that provides an easy way to integrate the popular SB Admin Template into your Laravel project.

## Installation

You can install the package via composer:

```bash
composer require kykurniawan/laravel-sb-admin-template
```

Install the template:

```bash
php artisan laravel-sb-admin-template:install
```

This will copy the necessary assets (CSS, JS, images, fonts) to your public directory, and configuration file to your config directiory.

## Usage

After successfully install the package, we can use the pre-built dashboard layout, simply extend the sb-admin layout in your view:

```html
@extends('laravel-sb-admin-template::admin')

@section('title', 'Hello World!')

@section('content')
<!-- Your content here -->
@endsection
```

You may want to add something on your template's head

```html
@extends('laravel-sb-admin-template::admin')

@section('head')
@parent
<!-- add something here: metatag, css link, etc -->
@endsection

@section('content')
<!-- Your content here -->
@endsection
```

You can also add something on your template's foot (before body closing tag)

```html
@extends('laravel-sb-admin-template::admin')

@section('foot')
@parent
<!-- add something here: scripts,etc -->
@endsection

@section('content')
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

The package's configuration file is located at config/laravel-sb-admin-template.php. Here you can customize various aspects of the template, such as the template views, section name, etc.

## Template Customization

To customize the template for your project, you can do it in the boot method on the AppServiceProvider using the Facade template provided by this package.

Import template facade and template components:

```php
use KyKurniawan\LaravelSBAdminTemplate\Facades\Template;
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Footer;
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Navbar;
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\NavbarDropDownItem;
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Sidebar;
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\SidebarFooter;
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\SidebarItem;
```

then, in the boot method on your app service provider:

```php
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Template::navbar(
            Navbar::make()
                ->brandTitle('This is awesome')
                ->brandHref('/')
                ->dropDownItems([
                    NavbarDropDownItem::make()->text('Drop Down Link 1'),
                    NavbarDropDownItem::make()->type('divider'),
                    NavbarDropDownItem::make()->text('Drop Down Link 2'),
                ])
        );

        Template::sidebar(
            Sidebar::make()
                ->sidebarItems([
                    SidebarItem::make()->type('heading')->text('Main'),
                    SidebarItem::make()
                        ->text('Link 1')
                        ->children([
                            SidebarItem::make()->text('Link 1.1'),
                            SidebarItem::make()->text('Link 1.2'),
                        ]),
                    SidebarItem::make()->type('heading')->text('Config'),
                    SidebarItem::make()
                        ->text('Link 2'),
                    SidebarItem::make()
                        ->text('Link 3'),
                ])
                ->sidebarFooter(
                    SidebarFooter::make()
                        ->text('Halo Footer')
                )
        );

        Template::footer(
            Footer::make()
                ->copyright('Hello World')
                ->visible(true)
        );
    }
}
```

### Template Components Class

#### Navbar

```php
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Navbar;
```

**`make()`**

Initialize the component. This is static method. You need to call this method when create the component.

**`brandTitle(string|callable)`**

Set navbar brand title. Accept string or function that returns string.

**`brandHref(string|callable)`**

Set navbar brand href link. Accept string or function that returns string.

**`dropDownIcon(string|callable)`**

Set navbar dropdown icon. Accept string or function that returns string.

**`dropDownItems([])`**

Set the navbar dropdown item. Accept array of `NavbarDropDownItem` component.

#### NavbarDropDownItem

```php
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\NavbarDropDownItem;
```

**`make()`**

Initialize the component. This is static method. You need to call this method when create the component.

**`type(string)`**

Set item type. Allowed types: [link, divider, view].

**`text(string|callable)`**

Set item text. Only work when item type is link. Accept string or function that returns string.

**`href(sring|callable)`**

Set item href link. Only work when item type is link. Accept string or function that returns string.

**`target(sring|callable)`**

Set item target link. Only work when item type is link. Accept string or function that returns string.

**`visible(bool|callable)`**

Set item visibility. Accept boolean or function that returns boolean.

**`view(string|callable)`**

Set item blade view name (from your view folder). Only work if item type is view. Accept string or function that returns string.

#### Sidebar

```php
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Sidebar;
```

**`make()`**

Initialize the component. This is static method. You need to call this method when create the component.

**`sidebarItems([])`**

Set sidebar menu items. Accept array of `SidebarItem` component.

**`sidebarFooter(SidebarFooter)`**

Set sidebar footer component. Accept object of `SidebarItem` component.

#### SidebarItem

```php
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\SidebarItem;
```

**`make()`**

Initialize the component. This is static method. You need to call this method when create the component.

**`type(string)`**

Set item type. Allowed types: [link, heading].

**`text(string|callable)`**

Set item text. Accept string or function that returns string.

**`href(sring|callable)`**

Set item href link. Only work when item type is link.

**`target(sring|callable)`**

Set item target link. Only work when item type is link. Accept string or function that returns string.

**`visible(bool|callable)`**

Set item visibility. Accept boolean or function that returns boolean.

**`icon(string|callable)`**

Set item icon. Only work when item type is link. Accept string or function that returns string.

**`active(bool|callable)`**

Set item active state. Accept boolean or function that returns boolean. Only work when item type is link.

**`children([])`**
Set item children (nested item). Accept array of `SidebarItem` component. Only work if item type is link.

#### SidebarFooter

```php
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\SidebarFooter;
```

**`make()`**

Initialize the component. This is static method. You need to call this method when create the component.

**`text(string|callable)`**

Set sidebar footer text. Accept string or function that returns string.

**`visible(bool|callable)`**

Set sidebar footer visibility. Accept boolean or function that returns boolean.

#### Footer

```php
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Footer;
```

**`make()`**

Initialize the component. This is static method. You need to call this method when create the component.

**`copyright(string|callable)`**

Set footer copyright text. Accept string or function that returns string.

**`visible(bool|callable)`**

Set footer visibility. Accept boolean or function that returns boolean.

---
**Note:** request object are passed to all callable functions. Example:
```php
Footer::make()->copyright(function($request) {
    return $request->query('copyright');
})
```
---

## Overriding Template

This package has been made in such a way that you only need to extend the layout. However, if you want more specific needs, you can copy the template's views into your project and make any modifications you want.

To do that, you have to publish the views:

```bash
php artisan vendor:publish --provider="KyKurniawan\LaravelSBAdminTemplate\ServiceProvider" --tag="sb-admin-views"
```

After overriding the template view, you must tell the package to use the view you created instead of the default template view. You can do this through the config file.

## Credits

This package was inspired by the SB Admin Template by Start Bootstrap. Special thanks to [David Miller](https://github.com/davidtmiller) for creating this awesome template.

## License

The Laravel SB Admin Template package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
