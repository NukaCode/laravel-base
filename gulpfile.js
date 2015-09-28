var elixir = require('laravel-elixir');

var bower_dir = 'vendor/bower_components/';
var node_dir = 'node_modules/';

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
    mix.sass('app.scss', 'resources/assets/css/')

        // Java script
        .copy(bower_dir + 'jquery/dist/jquery.min.js', 'resources/assets/js/vendor/jquery.js')
        .copy(node_dir  + 'bootstrap-sass/assets/javascripts/bootstrap.js', 'resources/assets/js/vendor/bootstrap.js')
        .copy(bower_dir + 'messenger/build/js/messenger.min.js', 'resources/assets/js/vendor/messenger.js')
        .copy(bower_dir + 'messenger/build/js/messenger-theme-future.js', 'resources/assets/js/vendor/messenger-theme-future.js')
        .copy(bower_dir + 'bootbox/bootbox.js', 'resources/assets/js/vendor/bootbox.js')
        .copy(bower_dir + 'vue/dist/vue.js', 'resources/assets/js/vendor/vue.js')
        .copy(bower_dir + 'vue-resource/dist/vue-resource.js', 'resources/assets/js/vendor/vue-resource.js')
        .copy(bower_dir + 'algoliasearch/dist/algoliasearch.jquery.js', 'resources/assets/js/vendor/algoliasearch.js')
        .copy(bower_dir + 'typeahead.js/dist/typeahead.jquery.js', 'resources/assets/js/vendor/typeahead.js')
        .copy(bower_dir + 'pusher/dist/pusher.js', 'resources/assets/js/vendor/pusher.js')
        .copy(bower_dir + 'socket.io-client/socket.io.js', 'resources/assets/js/vendor/socket.io.js')
        .scripts(
        [
            'vendor/jquery.js',
            'vendor/bootstrap.js',
            'vendor/messenger.js',
            'vendor/messenger-theme-future.js',
            'vendor/bootbox.js',
            'vendor/vue.js',
            'vendor/vue-resource.js',
            'vendor/typeahead.js',
            'vendor/pusher.js',
            'vendor/socket.io.js',
            'vendor/algoliasearch.js',
            'custom/algolia.js',
        ], 'public/js/all.js')
        .scripts(
        [
            'vendor/jquery.js',
            'vendor/messenger.js',
            'vendor/messenger-theme-future.js',
        ], 'public/js/admin-all.js')

        // CSS
        .copy(bower_dir + 'font-awesome/css/font-awesome.min.css', 'resources/assets/css/vendor/font-awesome.css')
        .copy(bower_dir + 'messenger/build/css/messenger.css', 'resources/assets/css/vendor/messenger.css')
        .copy(bower_dir + 'messenger/build/css/messenger-theme-future.css', 'resources/assets/css/vendor/messenger-theme-future.css')
        .copy(bower_dir + 'nukacode-admin/css/admin.css', 'resources/assets/css/vendor/admin.css')
        .styles(
        [
            'app.css',
            'vendor/font-awesome.css',
            'vendor/messenger.css',
            'vendor/messenger-theme-future.css',
        ], 'public/css/all.css')
        .styles(
        [
            'vendor/admin.css',
            'vendor/font-awesome.css',
            'vendor/messenger.css',
            'vendor/messenger-theme-future.css',
        ], 'public/css/admin-all.css')

        // Extras
        .copy(bower_dir + 'font-awesome/fonts', 'public/fonts')
});
