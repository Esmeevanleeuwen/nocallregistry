let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue()
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .options({
       hmrOptions: {
           host: 'localhost',
           port: 8080
       }
   })
   .browserSync({
       proxy: 'localhost:8000',
       files: [
           'app/**/*.php',
           'resources/views/**/*.blade.php',
           'resources/js/**/*.vue',
           'public/js/**/*.js',
           'public/css/**/*.css'
       ]
   });

if (mix.inProduction()) {
    mix.version();
}
