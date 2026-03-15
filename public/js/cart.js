document.addEventListener('alpine:init', () => {
    Alpine.store('cart', {
        items: JSON.parse(localStorage.getItem('cart') || '[]'),

        save() {
            localStorage.setItem('cart', JSON.stringify(this.items))
        },

        addItem(product) {
            let existing = this.items.find(i => i.id === product.id)
            if(existing){
                existing.quantity += product.quantity
            } else {
                this.items.push(product)
            }
            this.save()
        },

        removeItem(id){
            this.items = this.items.filter(i => i.id !== id)
            this.save()
        },

        updateQty(id, qty){
            let item = this.items.find(i => i.id === id)
            if(item){
                item.quantity = qty
                this.save()
            }
        },

        cartSubTotal(){
            return this.items.reduce((sum,i)=>sum + i.price * i.quantity, 0)
        },

        cartTotalQty(){
            return this.items.reduce((sum,i)=>sum + i.quantity, 0)
        },

        cartTotal(discount=0){
            let total = this.cartSubTotal()
            if(this.cartTotalQty() > 9) total = total * (1 - discount / 100)
            return total.toFixed(2)
        }
    })
})
