<template>
    <div>
        <main class="px-3 pt-3">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex mb-3" v-for="(cart, index) in carts" :key="index">
                        <img class="rounded mr-3" src="/img/dummy.jpg" alt="..." style="width: 96px; height:96px; object-fit:cover">
                        <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                            <div>
                                <p class="font-weight-bold mb-1" style="line-height:1rem">{{cart.name}}</p>
                                <p class="mb-0">
                                    <small>
                                        <i class="fas fa-store mr-1"></i> Media Dengar
                                    </small>
                                </p>
                                <p class="mb-0">
                                    Rp. {{cart.price}}
                                </p>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a class="btn btn-outline-danger btn-sm px-2 py-1 mr-3" v-on:click="removeCart(cart)">
                                    <i class="fa fa-minus"></i>
                                </a>
                                {{cart.qty}}
                                <a class="btn btn-danger btn-sm px-2 py-1 ml-3" v-on:click="addCart(cart)">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right" v-if="carts.length">
                        <a href="/belanja" class="text-danger">+ Tambah Barang</a>
                    </div>
                    <div class="text-center" v-else>
                        <p class="mb-2">
                            Tidak ada barang di dalam keranjang.
                        </p>
                        <a href="/belanja" class="text-danger">Belanja Sekarang</a>
                    </div>
                </div>
            </div>
        </main>
        <div class="position-fixed w-100" style="bottom: 0; max-width:480px">
            <div class="bg-white shadow p-3 d-flex justify-content-between">
                <div>
                    <small>Total</small>
                    <h4 class="font-weight-bold mb-0">Rp. {{totalPrice}}</h4>
                </div>
                <div class="d-flex align-items-end">
                    <button class="btn btn-danger">Lanjutkan</button>
                </div>
            </div>  
        </div>
    </div>
</template>

<script>
export default {
    mounted(){
        if(localStorage.carts){
            this.carts = JSON.parse(localStorage.carts);
        }
    },
    data() {
        return {
            carts: []
        }
    },
    computed: {
        totalPrice(){
            let subTotals = this.carts.map(cart => cart.qty * cart.price);
            let total = subTotals.reduce(((sum, now) => sum + now), 0);
            return total;
        }
    },
    methods: {
        addCart(cart){
            cart.qty++;
            this.updateLocalStorate();
        },
        removeCart(cart){
            cart.qty--;
            if(!cart.qty){
                this.carts = this.carts.filter(item => cart.id != item.id);
            }
            this.updateLocalStorate();
        },
        updateLocalStorate(){
            localStorage.carts = JSON.stringify(this.carts);
        }
    }
}
</script>