import concat from "gulp-concat";
import sourcemaps from "gulp-sourcemaps";
import { uglify } from 'rollup-plugin-uglify';
import uglifyJs from 'gulp-uglify';
import babel from 'gulp-babel';


export const js = () => {
  return app.gulp.src([
		`${app.path.src.js}/functions/**.js`,
		`${app.path.src.js}/components/**.js`,
		`${app.path.src.js}/main.js`
	])
	.pipe(sourcemaps.init())
	.pipe(concat('main.js'))
	.pipe(sourcemaps.write())
	.pipe(app.gulp.dest(app.path.build.js))
	.pipe(app.plugins.browsersync.stream());
}

export const jsVendors = () => {
	// return app.gulp.src(`${app.path.src.js}/vendors.js`)
	// 	.pipe(babel())
	// 	.pipe(uglifyJs())
	// 	.pipe(app.gulp.dest(app.path.build.js))
	// 	.pipe(app.plugins.browsersync.stream());
	return app.gulp.src(`${app.path.src.js}/vendor/**.js`)
		.pipe(sourcemaps.init())
		.pipe(concat('vendor.js'))
		.pipe(sourcemaps.write())
		.pipe(app.gulp.dest(app.path.build.js))
		.pipe(app.plugins.browsersync.stream());
}