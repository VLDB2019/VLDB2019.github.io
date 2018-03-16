@echo off
copy /y /b font\font.css+css\main.css css\prod.min.css
cmd /c postcss css\prod.min.css -u cssnano -r --no-map
cmd /c uglifyjs js/polyfills.js js/carousel.js js/menu.js js/router.js -c -m -o js/prod.min.js