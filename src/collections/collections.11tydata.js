const {readdir} = require('node:fs/promises')
const {resolve} = require('node:path')

module.exports = async function () {
    const imagesDir = 'src/collections/images'
    let collections = {}
    const categories = await readdir(resolve(imagesDir))

    for (const category of categories) {
        collections[category] = await readdir(resolve(`${imagesDir}/${category}`))

        for (const source of collections[category]) {
            collections[category][source] =
                (await readdir(resolve(`${imagesDir}/${category}/${source}`), {withFileTypes: true}))
                    .map(item => item.name)
        }
    }

    return {collections: collections}
}
