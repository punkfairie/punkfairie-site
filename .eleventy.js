const {minify} = require('terser')
const esbuild = require('esbuild')

module.exports = function (eleventyConfig) {
    // Process SCSS
    eleventyConfig.addPlugin(require('eleventy-sass'), {
        postcss: require('postcss')([
            require('postcss-preset-env'),
            require('cssnano'),
        ]),
    })

    // Copy CSS assets
    eleventyConfig.addPassthroughCopy('src/style/assets')

    // Process JS
    eleventyConfig.addTemplateFormats('js')
    eleventyConfig.addExtension('js', {
        outputFileExtension: 'js',
        compile: async (content, path) => {
            if (path !== './src/js/main.js') {
                return
            }

            return async () => {
                const output = await esbuild.build({
                    target: 'es2020',
                    entryPoints: [path],
                    minify: true,
                    bundle: true,
                    write: false,
                })

                return output.outputFiles[0].text
            }
        },
    })

    return {dir: {input: 'src', output: 'dist'}}
}
