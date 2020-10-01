<template>
    <div>
        <header class="sticky-top">
            <div class="w-100 bg-white px-3 py-3 shadow-sm">
                <h4 class="mb-0 font-weight-bold text-truncate d-flex align-items-center justify-content-between">
                    <div>
                        <a href="home" class="mr-2 text-dark">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        Belanja
                    </div>
                    <a href="belanja/keranjang" class="link-style-none">
                        <i class="fas fa-shopping-cart"></i>
                        <span v-if="carts.length" class="badge badge-danger py-1 rounded-lg position-absolute mr-1 mt-1" style="top:0; right:0;">
                            <small>
                                {{carts.length}}
                            </small>
                        </span>
                    </a>
                </h4>
            </div>
        </header>
        <main class="px-3 pt-3">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari barang" aria-label="Cari barang" aria-describedby="btn-search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="btn-search">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3" v-for="(item, index) in items" :key="index">
                    <div class="card rounded-xl">
                        <div class="card-body text-center">
                            <img class="rounded mr-3 w-100 mb-3" src="/img/dummy.jpg" alt="..." style="object-fit:cover">
                            <p class="font-weight-bold mb-1" style="line-height:1rem">{{item.name}}</p>
                            <p class="mb-1">
                                <small><i class="fas fa-store mr-1"></i> {{item.shop}}</small>
                            </p>
                            <p class="mb-1">Rp. {{item.price}}</p>
                            <a v-if="item.qty == 0" class="btn btn-danger btn-sm px-3 py-1 rounded-pill" type="button" v-on:click="addItem(item)">Belanja</a>
                            <div v-else>
                                <a class="btn btn-outline-danger btn-sm px-2 py-1 mr-2" v-on:click="removeItem(item)">
                                    <i class="fa fa-minus"></i>
                                </a>
                                {{item.qty}}
                                <a class="btn btn-danger btn-sm px-2 py-1 ml-2" v-on:click="addItem(item)">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
    export default {
        mounted(){
            if(localStorage.carts){
                this.carts = JSON.parse(localStorage.carts);
            }
        },
        data(){
            return {
                items: [
                    {
                        id: 1,
                        name: 'Alat Bantu Dengar Tanpa Kabel',
                        price: 200000,
                        shop: 'Media Dengar',
                        qty: 0
                    },
                    {
                        id: 2,
                        name: 'Mainan Edukatif Media Terapi',
                        price: 40000,
                        shop: 'Media Dengar',
                        qty: 0
                    },
                    {
                        id: 3,
                        name: 'Hearing and Brush',
                        price: 30000,
                        shop: 'Media Dengar',
                        qty: 0
                    },
                    {
                        id: 4,
                        name: 'Buku Cerita Anak Berkebutuhan Khusus',
                        price: 50000,
                        shop: 'Media Dengar',
                        qty: 0
                    },
                    {
                        id: 5,
                        name: 'Buku Cerita Anak Berkebutuhan Khusus',
                        price: 50000,
                        shop: 'Media Dengar',
                        qty: 0
                    },
                ].map((item) => {
                    if(!localStorage.carts){
                        return item;
                    }
                    let localcarts = JSON.parse(localStorage.carts);
                    let isAvailable = localcarts.find(cart => cart.id == item.id);
                    if(isAvailable){
                        return localcarts.find(cart => cart.id == item.id);
                    }
                    return item;
                }),
                carts: []
            }
        },
        methods: {
            addItem(item){
                item.qty++;
                this.updateCarts();
                this.updateLocalStorate();
            },
            removeItem(item){
                item.qty--;
                this.updateCarts();
                this.updateLocalStorate();
            },
            updateCarts(){
                this.carts = this.items.filter(function(item) {
                    return item.qty;
                })
            },
            updateLocalStorate(){
                localStorage.carts = JSON.stringify(this.carts);
            }
        }
    }
</script>
