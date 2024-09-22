const esbuild = require("esbuild");

module.exports = function (eleventyConfig) {
  // Process SCSS
  eleventyConfig.addPlugin(require("eleventy-sass"), {
    postcss: require("postcss")([
      require("postcss-preset-env"),
      require("cssnano"),
    ]),
  });

  // Add noopener to links
  eleventyConfig.addPlugin(require("eleventy-plugin-automatic-noopener"), {
    noreferrer: true,
  });

  // Copy CSS assets
  eleventyConfig.addPassthroughCopy("src/style/assets");

  // Copy collections & links
  eleventyConfig.addPassthroughCopy("src/collections/images/**/*");
  eleventyConfig.addPassthroughCopy("src/images");

  // start page
  eleventyConfig.addPassthroughCopy("src/start/index.html");
  eleventyConfig.addPassthroughCopy("src/start/style.css");
  eleventyConfig.addPassthroughCopy("src/favicon.png");

  // Process JS
  eleventyConfig.addTemplateFormats("js");
  eleventyConfig.addExtension("js", {
    outputFileExtension: "js",
    compile: async (content, path) => {
      if (path !== "./src/js/main.js") {
        return;
      }

      return async () => {
        const output = await esbuild.build({
          target: "es2020",
          entryPoints: [path],
          minify: true,
          bundle: true,
          write: false,
        });

        return output.outputFiles[0].text;
      };
    },
  });

  // Convert img filename to alt text
  eleventyConfig.addFilter("toAlt", (text) => {
    const basename = text.split(".");
    return basename[0].replace(/-/g, " ");
  });

  // Convert diary date path to slug
  eleventyConfig.addFilter("datePathSlugify", (path) => {
    const folders = path.split("/");
    const file = folders.pop().split(".");
    return `${folders[3]}/${folders[4]}/${file[0]}`;
  });

  // RSS
  eleventyConfig.addPlugin(require("@11ty/eleventy-plugin-rss"));

  return { dir: { input: "src", output: "dist" } };
};
