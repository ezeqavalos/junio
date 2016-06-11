var gulp    = require('gulp'),
	plugins = require('gulp-load-plugins')();

// Compilar CSS a partir de archivos Sass
gulp.task('styles', function () {

	gulp.src('./assets/styles/**/*.scss')
		.pipe(plugins.sass({ style: 'expanded', compass: true }))
		.pipe(plugins.autoprefixer({ browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4'] }))
		.pipe(gulp.dest('./assets/styles/build'))
		.pipe(plugins.minifyCss({ keepSpecialComments: 1 }))
		.pipe(gulp.dest('./'));
});

gulp.task('default', ['styles']); 