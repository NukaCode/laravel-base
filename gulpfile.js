var elixir = require('laravel-elixir');

var bower_dir = 'vendor/bower_components/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as copying vendor resources.
 |
 */

elixir(function (mix) {
    mix.less('app.less', 'resources/css/')

        // Java script
        .copy(bower_dir + 'jquery/dist/jquery.min.js', 'resources/js/vendor/jquery.js')
        .copy(bower_dir + 'jquery-ui/jquery-ui.min.js', 'resources/js/vendor/jquery-ui.js')
        .copy(bower_dir + 'bootstrap/dist/js/bootstrap.min.js', 'resources/js/vendor/bootstrap.js')
        .copy(bower_dir + 'messenger/build/js/messenger.min.js', 'resources/js/vendor/messenger.js')
        .copy(bower_dir + 'messenger/build/js/messenger-theme-future.js', 'resources/js/vendor/messenger-theme-future.js')
        .copy(bower_dir + 'bootbox/bootbox.js', 'resources/js/vendor/bootbox.js')
        .copy(bower_dir + 'select2/select2.min.js', 'resources/js/vendor/select2.js')
        .copy(bower_dir + 'metisMenu/dist/metisMenu.min.js', 'resources/js/vendor/metisMenu.js')
        .copy(bower_dir + 'mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js', 'resources/js/vendor/bootstrap-colorpicker.js')
        .copy(bower_dir + 'jasny-bootstrap/dist/js/jasny-bootstrap.min.js', 'resources/js/vendor/jasny-bootstrap.js')
        .scripts(
        [
            'resources/js/vendor/jquery.js',
            'resources/js/vendor/bootstrap.js',
            'resources/js/vendor/messenger.js',
            'resources/js/vendor/messenger-theme-future.js',
            'resources/js/vendor/bootbox.js',
            'resources/js/vendor/select2.js',
        ], 'public/js/all.js')
        .scripts(
        [
            'resources/js/vendor/jquery.js',
            'resources/js/vendor/bootstrap.js',
            'resources/js/vendor/messenger.js',
            'resources/js/vendor/messenger-theme-future.js',
            'resources/js/vendor/bootbox.js',
            'resources/js/vendor/select2.js',
            'resources/js/vendor/metisMenu.js'
        ], 'public/js/admin-all.js')

        // CSS
        .copy(bower_dir + 'font-awesome/css/font-awesome.min.css', 'resources/css/vendor/font-awesome.css')
        .copy(bower_dir + 'messenger/build/css/messenger.css', 'resources/css/vendor/messenger.css')
        .copy(bower_dir + 'messenger/build/css/messenger-theme-future.css', 'resources/css/vendor/messenger-theme-future.css')
        .copy(bower_dir + 'select2/select2.css', 'resources/css/vendor/select2.css')
        .copy(bower_dir + 'select2-bootstrap3-css/select2-bootstrap.css', 'resources/css/vendor/select2-bootstrap.css')
        .copy(bower_dir + 'jasny-bootstrap/dist/css/jasny-bootstrap.min.css', 'resources/css/vendor/jasny-bootstrap.min.css')
        .copy(bower_dir + 'mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css', 'resources/css/vendor/colorpicker/css/bootstrap-colorpicker.min.css')
        .copy(bower_dir + 'metisMenu/dist/css/metisMenu.css', 'resources/css/vendor/metisMenu.css')
        .copy(bower_dir + 'nukacode-admin/css/admin.css', 'resources/css/vendor/admin.css')
        .styles(
        [
            'app.css',
            'vendor/font-awesome.css',
            'vendor/messenger.css',
            'vendor/messenger-theme-future.css',
            'vendor/select2.css',
            'vendor/select2-bootstrap.css',
        ], 'public/css/all.css')
        .styles(
        [
            'resources/css/vendor/admin.css',
            'resources/css/vendor/font-awesome.css',
            'resources/css/vendor/messenger.css',
            'resources/css/vendor/messenger-theme-future.css',
            'resources/css/vendor/select2.css',
            'resources/css/vendor/select2-bootstrap.css',
            'resources/css/vendor/metisMenu.css'
        ], 'public/css/admin-all.css')

        // Extras
        .copy(bower_dir + 'font-awesome/fonts', 'public/fonts')
        .copy(bower_dir + 'mjolnic-bootstrap-colorpicker/dist/img', 'public/css/vendor/colorpicker/img')
});
