import Alpine from 'alpinejs'

Alpine.store('subNav', {
    open: false,
    current: null,

    toggle(menu) {
        this.open = !this.open
        this.current = this.open ? menu : null
    },
})

Alpine.start()
