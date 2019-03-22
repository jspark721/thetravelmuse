const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

//compile scss to css
function style() {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'))
    //stream changes to all browsers
    .pipe(browserSync.stream());
};

//watch for changes and update automatically

function watch() {
  browserSync.init({
    server: {
      baseDir: './'
    }
  });
  gulp.watch('./scss/**/*.scss', style);
  gulp.watch('./**/*.html').on('change', browserSync.reload);
  gulp.watch('./js/**/*.js').on('change', browserSync.reload);
};

exports.style = style;
exports.watch = watch;
