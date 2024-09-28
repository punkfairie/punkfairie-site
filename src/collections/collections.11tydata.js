const { readdir } = require("node:fs/promises");
const { resolve } = require("node:path");

const credits = {
  key: "https://keysklubhouse.neocities.org/",
  GIFCollection: "https://cyber.dabamos.de/88x31/",
  cinni: "https://cinni.net/",
  fairytrash: "https://fairytrash.neocities.org/portal/oldweb.html",
  "webcore-galore": "https://www.deviantart.com/webcore-galore",
  "molly-stamps": "https://www.deviantart.com/molly-stamps",
  murderawrz: "https://www.deviantart.com/murderawrz",
  "minecr-aft": "https://www.deviantart.com/minecr-aft",
  gaarumageddon: "https://www.deviantart.com/gaarumageddon",
  morecentipedes: "https://www.deviantart.com/morecentipedes/",
  gendercute: "https://www.deviantart.com/gendercute",
  uzkost: "https://www.deviantart.com/uzkost",
  fawntoy: "https://www.deviantart.com/fawntoy",
  antikrist: "https://antikrist.neocities.org/",
  panstarry: "https://www.deviantart.com/panstarry",
  "rogue-ranger": "https://www.deviantart.com/rogue-ranger",
  "virus-xenon": "https://www.deviantart.com/virus-xenon",
  kittyjewelpet78: "https://www.deviantart.com/kittyjewelpet78",
  dustyhyena: "https://www.deviantart.com/dustyhyena",
  "sugary-stardust": "https://www.deviantart.com/sugary-stardust",
  tamriei: "https://www.deviantart.com/tamriei",
  "100hosts": "https://www.deviantart.com/100ghosts",
  dameinatrix: "https://www.deviantart.com/dameinatrix",
  nyanfuw: "https://www.deviantart.com/nyanfuw",
  skystamps: "https://www.deviantart.com/skystamps",
  "hyper--drunk": "https://www.deviantart.com/hyper--drunk",
  stampmakerlkj: "https://www.deviantart.com/stampmakerlkj",
  beepudding: "https://www.deviantart.com/beepudding",
  princessskyler: "https://www.deviantart.com/princessskyler",
  buniis: "https://www.deviantart.com/buniis",
  goredoq: "https://www.deviantart.com/goredoq",
  ufocatchers: "https://www.deviantart.com/ufocatchers",
  stitchlovergirl96: "https://www.deviantart.com/stitchlovergirl96",
  midousujii: "https://www.deviantart.com/midousujii",
  glittersludge: "https://www.deviantart.com/glittersludge",
  amekin: "https://www.deviantart.com/amekin",
  stratosqueer: "https://www.deviantart.com/stratosqueer",
  puppystamps: "https://www.deviantart.com/puppystamps",
  turbuggy: "https://www.deviantart.com/turbuggy",
  aestheticstamps: "https://www.deviantart.com/aestheticstamps",
  kittyjewelpet74: "https://www.deviantart.com/kittyjewelpet74",
  "king-lulu-deer": "https://www.deviantart.com/king-lulu-deer",
  "r0se-designs": "https://www.deviantart.com/r0se-designs",
  aomiarmster: "https://www.deviantart.com/aomiarmster",
  "nerdy-pixel-girl": "https://www.deviantart.com/nerdy-pixel-girl",
  crystalstamps: "https://www.deviantart.com/crystalstamps",
  gardenofmadeline: "https://thegardenofmadeline.neocities.org/",
  "99gifshop": "https://99gifshop.neocities.org/",
};

module.exports = async function () {
  const imagesDir = "src/collections/images";
  let collections = {};
  const categories = await readdir(resolve(imagesDir));

  for (const category of categories) {
    collections[category] = {};

    const sources = await readdir(resolve(`${imagesDir}/${category}`));

    for (const source of sources) {
      collections[category][source] = (
        await readdir(resolve(`${imagesDir}/${category}/${source}`), {
          withFileTypes: true,
        })
      ).map((item) => item.name);
    }
  }

  collections.credits = credits;

  return collections;
};
