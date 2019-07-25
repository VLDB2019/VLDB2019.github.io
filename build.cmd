@echo off
copy /y /b font\font.css+css\main.css+css\carousel.css+css\gallery.css+css\sponsors.css+css\accepted.css+css\talks.css+css\program-schedule.css+css\program-structure.css css\prod-7.min.css
cmd /c postcss css\prod-7.min.css -u cssnano -r --no-map
cmd /c uglifyjs js/polyfills.js js/carousel.js js/menu.js js/router.js js/accepted.js js/talks.js js/program-schedule.js -c -m -o js/prod-7.min.js
echo Done.