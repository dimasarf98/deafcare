<template>
    <div>
        <p class="font-weight-bold">Jadwal</p>
        <div class="card mb-3" v-for="jadwal in jadwals">
            <div class="card-body">
                <div class="form-group">
                    <label for="hari">Hari</label>
                    <select v-model="jadwal.hari" class="form-control" data-live-search="true" name="hari[]" id="hari">
                        <option selected disabled value="">Pilih Hari</option>
                        <option>Minggu</option>
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input v-model="jadwal.jam" type="text" class="form-control" name="jam[]" id="jam" placeholder="cth: 17:00 - 18:30">
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
        'jadwalSekarang',
    ],
    data() {
        return {
            jadwals: [
                {
                    hari: '',
                    jam: '',
                }
            ]
        }
    },
    mounted() {
        if(this.jadwalSekarang != null){
            let jadwalSaatIni = [];
            for(let i = 0; i < this.jadwalSekarang.length; i++){
                jadwalSaatIni.push({
                    hari: this.jadwalSekarang[i].hari,
                    jam: this.jadwalSekarang[i].jam,
                });
            }
            this.jadwals = jadwalSaatIni;
        }
    },
    methods:{
        tambahJadwal(){
            this.jadwals.push({
                hari: '',
                jam: '',
            });
        }
    }
}
</script>
