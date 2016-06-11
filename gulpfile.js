var gulp    = require('gulp'),
	plugins = require('gulp-load-plugins')();

gulp.task('styles', function () {

	gulp.src('./css/*.scss')
		.pipe(plugins.sass())
		.pipe(gulp.dest('./'));
});

gulp.task('default', ['styles']);