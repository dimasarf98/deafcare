<template>
    <div>
        <p class="font-weight-bold">Jadwal</p>
        <div class="card mb-3" v-for="jadwal in jadwals">
            <div class="card-body">
                <div class="form-group">
                    <label for="rumahsakit">Rumah Sakit</label>
                    <select v-model="jadwal.rumahSakit" class="form-control" data-live-search="true" name="rumahsakit[]" id="rumahsakit">
                        <option value="" disabled selected>Pilih rumah sakit</option>
                        <option v-for="rumahsakit in rumahSakits" :value="rumahsakit.id">{{rumahsakit.nama}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input v-model="jadwal.jam" type="text" class="form-control" name="jam[]" id="jam" placeholder="cth: 17:00 - 18:30">
                </div>
                <div class="form-group">
                    <label for="tarif_konsultasi">Tarif Konsultasi</label>
                    <input v-model="jadwal.tarifKonsultasi" type="text" class="form-control" name="tarif_konsultasi[]" id="tarif_konsultasi" placeholder="cth: 175000">
                </div>
                <div class="form-group">
                    <label for="tarif_buat_janji">Tarif Buat Janji</label>
                    <input v-model="jadwal.tarifBuatJanji" type="text" class="form-control" name="tarif_buat_janji[]" id="tarif_buat_janji" placeholder="cth: 50000">
                </div>
            </div>
        </div>
        <div class="w-100 text-right mb-3">
            <a href="" v-on:click.prevent="tambahJadwal()" class="text-danger">+ Tambah Jadwal</a>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'rumahSakits',
        'jadwalSekarang',
    ],
    data() {
        return {
            jadwals: [
                {
                    rumahSakit: '',
                    jam: '',
                    tarifKonsultasi: null,
                    tarifBuatJanji: null,
                }
            ]
        }
    },
    mounted() {
        if(this.jadwalSekarang != null){
            let jadwalSaatIni = [];
            for(let i = 0; i < this.jadwalSekarang.length; i++){
                jadwalSaatIni.push({
                    rumahSakit: this.jadwalSekarang[i].id,
                    jam: this.jadwalSekarang[i].pivot.jam,
                    tarifKonsultasi: this.jadwalSekarang[i].pivot.tarif_konsultasi,
                    tarifBuatJanji: this.jadwalSekarang[i].pivot.tarif_buat_janji
                });
            }
            this.jadwals = jadwalSaatIni;
        }
    },
    methods:{
        tambahJadwal(){
            this.jadwals.push({
                rumahSakit: '',
                jam: '',
                tarifKonsultasi: null,
                tarifBuatJanji: null,
            });
        }
    }
}
</script>
