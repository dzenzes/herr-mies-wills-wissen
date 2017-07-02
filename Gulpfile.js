var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('fonts', function() {
  return gulp.src('node_modules/font-awesome/fonts/*')
    .pipe(gulp.dest('./fonts'))
});

gulp.task('styles', ['fonts'], function() {
    gulp.src('less/**/*.less')
        .pipe(less())
        .pipe(gulp.dest('./css'))
});


//Watch task
gulp.task('default',function() {
    gulp.watch('less/**/*.less',['styles']);
});