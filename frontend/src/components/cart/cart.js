/**
 * Корзина.
 *
 * item {
 *     id: 1,
 *     name: "iPhone 11",
 *     price: 3000
 * }
 */
export default {
    products: [],
    count: 0,
    total: 0,
    add(item) {
        this.load()
        this.products.push(item)
        this.count++
        this.total += item.price
        this.save()
    },
    remove(item) {
        this.load()
        for (let i = 0; i < this.products.length; i++) {
            if (this.products[i].id === item.id) {
                this.products.splice(i, 1)
                break
            }
        }
        this.count--
        this.total -= item.price
        this.save()
    },
    save() {
        localStorage.setItem('cart', JSON.stringify({
            products: this.products,
            count: this.count,
            total: this.total
        }))
    },
    load() {
        let data = localStorage.getItem('cart')
        if (data !== null) {
            data = JSON.parse(data)
            this.products = data.products
            this.count = data.count
            this.total = data.total
        }
    }
}