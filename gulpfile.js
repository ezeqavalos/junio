var gulp    = require('gulp'),
	plugins = require('gulp-load-plugins')();

// Compilar CSS a partir de archivos Sass
gulp.task('styles', function () {

	gulp.src('./css/*.scss')
		.pipe(plugins.sass({ style: 'expanded', compass: true }))
		.pipe(plugins.autoprefixer('last 2 versions', 'ie 9', 'ios 6', 'android 4'))
		.pipe(gulp.dest('./'));
});

gulp.task('default', ['styles']);