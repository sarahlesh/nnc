var gulp   = require('gulp'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload,
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    imageMin = require('gulp-imagemin'),
    minifyCSS = require('gulp-minify-css'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify');

gulp.task('bs', function() {
    browserSync.init({
        proxy: 'http://localhost:8888'
    });
});

gulp.task('styles', function() {
    return gulp.src('sass/*.scss')
        .pipe(plumber({
          errorHandler: notify.onError("Error: <%= error.message %>")
        }))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(autoprefixer('last 5 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./'))
        .pipe(reload({ stream: true }));
});


gulp.task('watch', function() {
    gulp.watch('sass/*.scss', ['styles']);
    gulp.watch('*.php', reload);
});

//gulp.task('default', ['styles', 'scripts', 'images', 'watch']);

gulp.task('default', ['styles', 'bs', 'watch']);