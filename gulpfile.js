'use strict';
var gulp       = require('gulp'),
  sass         = require('gulp-sass'),
  autoprefixer = require('gulp-autoprefixer'),
  browserSync  = require('browser-sync'),
  cssnano = require('gulp-cssnano');


gulp.task('sass', function() {
  return gulp.src('./sass/**/custom.scss')
    .pipe(sass({
      includePaths: ['./bower_components/breakpoint-sass/stylesheets']
    }).on('error', sass.logError))
    .pipe(autoprefixer({
        browsers: ['last 4 versions'],
        cascade: false
      }))
    .pipe(cssnano())
    .pipe(gulp.dest('./app/css'))
    .pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function() {
  browserSync({
    server:{
      baseDir: 'app'
    },
    notify: false
  });
});


gulp.task('watch', ['browser-sync', 'sass'], function(){
  gulp.watch('./app/*.html', browserSync.reload);
  gulp.watch('./sass/**/*.scss', ['sass']);

});

