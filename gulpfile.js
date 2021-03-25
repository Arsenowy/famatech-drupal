const gulp = require('gulp');
const sass = require('gulp-sass');
//const browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');

function style() {
    return gulp.src('./themes/custom/barrio_custom/sass/main.scss')
        .pipe(sourcemaps.init())
        //2 pass that file through sass compiler
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        //3 build sorce maps
        .pipe(sourcemaps.write('.'))
        //4 where do i save the complied css?
        .pipe(gulp.dest('./themes/custom/barrio_custom/css/'))
        //5 stream changed to all browsers
        //.pipe(browserSync.stream())

}

function watch() {
   /*  browserSync.init({
        server: {
            baseDir: './'
        }
    }); */
    gulp.watch('./themes/custom/barrio_custom/sass/**/*.scss', style);
    // gulp.watch('./themes/custom/barrio_custom/templates/**/*.twig').on('change', browserSync.reload);
    // gulp.watch('./themes/custom/barrio_custom/js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;