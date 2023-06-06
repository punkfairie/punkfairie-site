import Alpine from 'alpinejs'

Alpine.store('subNav', {
    open: false,
    current: null,

    toggle(menu) {
        this.current = !this.current ? menu : null
        this.open = !!this.current
        console.log(this.current, this.open)
    },
})

Alpine.start()
