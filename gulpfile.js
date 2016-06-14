var gulp    = require('gulp'),
	plugins = require('gulp-load-plugins')();

// Compilar CSS a partir de archivos Sass
gulp.task('styles', function () {

	gulp.src('./assets/styles/**/*.scss')
		.pipe(plugins.sass({ style: 'expanded', compass: true }))
		.pipe(gulp.dest('./assets/styles/build'))
		.pipe(plugins.autoprefixer({
			browsers: [
				'> 1%',
				'last 2 versions',
				'firefox >= 4',
				'safari 7',
				'safari 8',
				'IE 8',
				'IE 9',
				'IE 10',
				'IE 11'
			],
			cascade: false
            })
		)
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

// Monitorear los cambios de los .scss y las imagenes
gulp.task('watch', function () {

	// Watch .scss
	gulp.watch('./assets/styles/**/*.scss', ['styles']);

	// Watch images
	gulp.watch('assets/images/**/*', ['images']);

});

gulp.task('default', ['styles', 'images', 'watch']); 