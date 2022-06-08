const mix = require('laravel-mix');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    resolve: {
        fallback: {
            // "fs": require.resolve('fallback-fs'),
            "fs": false,
            "child_process": false,
            "os": require.resolve('os-browserify/browser'),
            "path": require.resolve('path-browserify'),
            "constants": require.resolve("constants-browserify"),
            "domain": require.resolve("domain-browser"),
            "crypto": false
        }
    }
});

mix.options({
    legacyNodePolyfills: true
});

mix.autoload({
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
});

mix.js('resources/js/app.js', 'public/js');

mix.styles('resources/css/*.css', 'public/css/style.css');
mix.copyDirectory('resources/fonts', 'public/fonts')

// module.exports = {
//     module: {
//         rules: [
//             {
//                 test: /\.css$/,
//                 use: [
//                     'style-loader',
//                     'css-loader',
//                 ]
//             }
//         ],
//     }
// }
