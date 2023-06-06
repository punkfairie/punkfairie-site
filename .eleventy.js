const {minify} = require('terser');

module.exports = function (eleventyConfig) {
    // Process SCSS
    eleventyConfig.addPlugin(require('eleventy-sass'), {
        postcss: require('postcss')([
            require('postcss-preset-env'),
            require('cssnano')
        ])
    });

    // Minify and inline JS
    eleventyConfig.addLiquidFilter('jsMin', async function (code, callback) {
        try {
            const minified = await minify(code);
            callback(null, minified.code);
        } catch (e) {
            console.error(`Terser error: ${e}`);
            callback(null, code);
        }
    });

    return {dir: {input: 'src', output: 'dist'}};
}
