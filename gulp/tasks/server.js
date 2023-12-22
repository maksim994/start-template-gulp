export const server = (done) => {
	app.plugins.browsersync.init({
		proxy: 'http://legrand-lamken:8887/',
	});
}