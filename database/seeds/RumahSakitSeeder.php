<?php

use App\RumahSakit;
use Illuminate\Database\Seeder;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rumah_sakits')->insert([
            [
                'nama'=> 'Siloam Hospitals Yogyakarta',
                'alamat' => 'Jl. Laksda Adisucipto No.32-34, Gondokusuman, Demangan, Daerah Istimewa Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603855914/rumah%20sakit/Asri-1_yrygoo.jpg'
            ],
            [
                'nama'=> 'RS JIH Yogyakarta',
                'alamat' => 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858415/rumah%20sakit/1_b08kxd.jpg'
            ],
            [
                'nama'=> 'RS PKU Muhammadiyah Gamping',
                'alamat' => 'Jl. RS PKU Gamping, Bodeh, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Jogja',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858440/rumah%20sakit/8cca5e35b66f_rs_20pku_20gamping_201.png_ru41n9.png'
            ],
            [
                'nama'=> 'RS PKU Muhammadiyah Yogyakarta',
                'alamat' => 'Jl. KH. Ahmad Dahlan No.20, Ngupasan, Kec. Gondomanan, Kota Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858456/rumah%20sakit/727a71c91085_RS_20_20PKU_20Muhammadiyah_20Yogyakarta_20Gedung.jpg_avb0wi.jpg'
            ],
            [
                'nama'=> 'RS Nur Hidayah Bantul',
                'alamat' => 'Jl. Imogiri Tim. No.Km 11, RW.5, Bembem, Trimulyo, Kec. Jetis, Bantul',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858909/rumah%20sakit/IMG_0689edit_u85dm6.jpg'
            ],
            [
                'nama'=> 'RS Bhayangkara POLDA D.I. Yogyakarta',
                'alamat' => 'Jl. Raya Yogya - Solo KM 14, Glondong, Tirtomartani, Kec. Kalasan, Kabupaten Sleman',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858932/rumah%20sakit/0bbd81374031_RS_20Bhayangkara_20POLDA_20DIY_20-_20Alodokter.png_k5qgpw.png'
            ],
            [
                'nama'=> 'RSU Panti Baktiningsih',
                'alamat' => 'Jl. Godean-Gedongan, Klepu, Sendangmulyo, Kec. Minggir, Kabupaten Sleman',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858998/rumah%20sakit/703826_24-3-2020_14-52-24_oe8coy.jpg'
            ],
            [
                'nama'=> 'RS Islam Yogyakarta PDHI',
                'alamat' => 'Jl. Ringroad Barat No.118, Mlangi, Nogotirto, Kec. Gamping, Kabupaten Sleman',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859012/rumah%20sakit/220px-Ugd_rae4oz.jpg'
            ],
            [
                'nama'=> 'RS Ludira Husada Tama',
                'alamat' => 'Jalan Wiratama No. 4, Tegalrejo, Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859068/rumah%20sakit/rs-ludira-husada-tama-HCFH00000841_xmcgci.jpg'
            ],
            [
                'nama'=> 'RS Panti Rapih',
                'alamat' => 'Jalan Cik Di Tiro No. 30, Gondokusuman, Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859120/rumah%20sakit/1rspr_sh1wjp.jpg'
            ],
            [
                'nama'=> 'RS Panti Rahayu',
                'alamat' => 'Jalan Wonosari Ponjong KM 7, Karangmojo, Gunung Kidul',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859147/rumah%20sakit/15469_Rumah_Sakit_Panti_Rahayu_athhiv.jpg'
            ],
            [
                'nama'=> 'RS Universitas Islam Indonesia',
                'alamat' => 'Jl. Srandakan Km 5,5, Gedongsari, Wijirejo, Kec. Pandak, Bantul, Jogja',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859297/rumah%20sakit/rs-universitas-islam-indonesia-HCFH00001389_vt1f6q.jpg'
            ],
            [
                'nama'=> 'RS Sakina Idaman',
                'alamat' => 'Jl. Blunyah Gede No.60, Kutu Dukuh, Sinduadi, Kec. Mlati, Kabupaten Sleman, Jogja',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859349/rumah%20sakit/785249_25-4-2020_18-42-52_erfldo.jpg'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. KHA Dahlan 20 Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858456/rumah%20sakit/727a71c91085_RS_20_20PKU_20Muhammadiyah_20Yogyakarta_20Gedung.jpg_avb0wi.jpg'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. Prambanan-Piyungan Km.7 Delegan, Sumberharjo, Prambanan, Sleman',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859694/rumah%20sakit/lebaran-fasilitas-kesehatan-di-sleman-siaga-24-jam-LvTkue0TPo_ra1fvo.jpg'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858909/rumah%20sakit/IMG_0689edit_u85dm6.jpg'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. Kabupaten (Ring Road), Kronggahan, Trihanggo, Gamping, Sleman, Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859525/rumah%20sakit/rs--bethesda_wec95y.jpg'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. Kesehatan No.1, Senolowo, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859349/rumah%20sakit/785249_25-4-2020_18-42-52_erfldo.jpg'
            ],
            [
                'nama'=> 'RSUD Jogja',
                'alamat' => 'Jl. Ki Ageng Pemanahan No.1, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859486/rumah%20sakit/rsud-wirosaban-yogyakarta_uopv1s.jpg'
            ],
            [
                'nama'=> 'RS Bethesda Jogja',
                'alamat' => 'Jl. Jend. Sudirman No. 70 Kotabaru Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859525/rumah%20sakit/rs--bethesda_wec95y.jpg'
            ],
            [
                'nama'=> 'RS Islam Yogyakarta PDHI',
                'alamat' => 'Jl. Jogja - Solo No.KM.12,5, Kringinan, Tirtomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859012/rumah%20sakit/220px-Ugd_rae4oz.jpg'
            ],
            [
                'nama'=> 'RS Akademik UGM Yogyakarta',
                'alamat' => 'Jl. Kabupaten (Ring Road), Kronggahan, Trihanggo, Gamping, Sleman, Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859525/rumah%20sakit/rs--bethesda_wec95y.jpg'
            ],
            [
                'nama'=> 'RSU Rajawali Citra',
                'alamat' => 'Jl. Pleret Km 2.5 dusun Banjardadap, Potorono, Banguntapan, Bantul',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859633/rumah%20sakit/75113_Rumah_Sakit_Rajawali_Citra_ugkb7h.jpg'
            ],
            [
                'nama'=> 'RSUD Prambanan Yogyakarta',
                'alamat' => 'Jl. Prambanan-Piyungan Km.7 Delegan, Sumberharjo, Prambanan, Sleman',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859694/rumah%20sakit/lebaran-fasilitas-kesehatan-di-sleman-siaga-24-jam-LvTkue0TPo_ra1fvo.jpg'
            ],
            [
                'nama'=> 'RS Hermina Yogyakarta',
                'alamat' => 'Jl. Selokan Mataram, RT.06/RW.50, Meguwo, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859775/rumah%20sakit/hermina-jogja_nmfcaa.jpg'
            ],
            [
                'nama'=> 'RSKIA Rachmi Yogyakarta',
                'alamat' => 'Jalan Wachid Hasyim Nomor 47 Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859827/rumah%20sakit/f64ba4e2a98d_RSKIA_20Rachmi_20Gedung.jpg_jzf7rn.jpg'
            ],
            [
                'nama'=> 'RS Puri Husada Yogyakarta',
                'alamat' => 'Ngaglik, Sleman, Yogyakarta',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859876/rumah%20sakit/rs-puri-husada-HCFH00000604_xrx9bh.jpg'
            ],
            [
                'nama'=> 'RSKIA Sadewa',
                'alamat' => 'Jl. Babarsari Blok TB 16 No.13B, Caturtunggal, Kec. Depok, Kabupaten Sleman',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859921/rumah%20sakit/7e293fdb74c2_RSKIA_20Sadewa_20-_20Alodokter.png_v88x9f.png'
            ],
            [
                'nama'=> 'Rumah Sakit Umum Queen Latifa',
                'alamat' => 'Jl. Ringroad Barat No.118, Mlangi, Nogotirto, Kec. Gamping, Kabupaten Sleman',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859962/rumah%20sakit/5467_f4bb7185f8d7f2fa62997efc89c57fc1_jepepg.jpg'
            ],
        ]);
    }
}
