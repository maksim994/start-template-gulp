export const copyResources = () => {
	return app.gulp.src(app.path.src.system)
		.pipe(app.gulp.dest(app.path.build.system))
}