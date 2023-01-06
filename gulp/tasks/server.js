export const server = (done) => {
	app.plugins.browsersync.init({
		// server: {
		// 	baseDir: `${app.path.build.html}`
		// },
		proxy: 'http://new-gulp:8887/',
		// notify: false,
		// port: 8887,
	});
}