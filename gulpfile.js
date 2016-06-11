var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function () {

	gulp.src('./css/*.scss')
		.pipe(sass())
		.pipe(gulp.dest('./'));
});

gulp.task('default', ['styles']);