const mix = require('laravel-mix');
require('laravel-mix-purgecss')

mix
  .js('resources/js/app.js', 'public/js')
  // .styles('resources/css/components/fonts.css', 'public/css/fonts.css')
  .postCss('resources/css/app.css', 'public/css')

mix
  .options({
    postCss: [
      require('postcss-import')(),
      require('tailwindcss')('./tailwind.js'),
      require('postcss-nested')(),
    ],
    autoprefixer: true,
    processCssUrls: false,
  })

if (!mix.inProduction()) {
  mix
    .browserSync({
      open: JSON.parse(process.env.MIX_BS_OPEN),
      proxy: process.env.MIX_BS_LOCAL_URL,
      browser: process.env.MIX_BS_BROWSER,
    })
}

if (mix.inProduction()) {
  mix
    .purgeCss()
    .version()
}
