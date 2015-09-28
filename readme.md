# Installation

## Clone

`git clone git@github.com:NukaCode/laravel-base.git ./`

## Dependencies

```
composer install
npm install
bower install
```

> **Quick Notes**
>
> * npm may require sudo access.
> * bower will run gulp automatically when it finishes install.

# What it comes with

## Log viewer

This can be viewed at `/logs` out of the box.  Feel free to change this, secure it, however you like.

## NukaCode

This is part of the NukaCode group of packages.  It comes with [Core](https://github.com/NukaCode/core) and
[Menu](https://github.com/NukaCode/menu) by default.  Feel free to check out [all the packages we offer](https://github.com/NukaCode).

## Esensi

This is primarily used for the [Loaders](https://github.com/esensi/loaders) package.  More bits may be added in the future.

# Gotchas

As usual with laravel projects, there are a few things you will want to make sure of.

* `public` and `public/index.php` are set to 755.
* `storage` and `bootstrap/cache` are set to 777.
