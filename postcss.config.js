/** @type {import('postcss-load-config').Config} */
module.exports = {
    plugins: [
        require('@csstools/postcss-sass'),
        require('postcss-preset-env'),
        require('cssnano')
    ]
}
