var gulp    = require('gulp'),
	plugins = require('gulp-load-plugins')();

// Compilar CSS a partir de archivos Sass
gulp.task('styles', function () {

	gulp.src('./assets/styles/**/*.scss')
		.pipe(plugins.sass({ style: 'expanded', compass: true }))
		.pipe(plugins.autoprefixer({ browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4'] }))
		.pipe(gulp.dest('./assets/styles/build'))
		.pipe(plugins.minifyCss({ keepSpecialComments: 1 }))
		.pipe(gulp.dest('./'))
		.pipe(plugins.notify({ message: 'Styles tarea completa' }));
});

// Reducir la calidad de las imagenes
gulp.task('images', function () {
	return gulp.src('assets/images/**/*.{png,jpg,gif,ico}')
	.pipe(plugins.cache(plugins.imagemin({ optimizationLevel: 7, progressive: true, interlaced: true })))
	.pipe(gulp.dest('./images'))
	.pipe(plugins.notify({ message: 'Images tarea completa' }));
});

gulp.task('default', ['styles', 'images']); 