@extends('layouts.main')

@section('title', 'Desa')

@section('content')
<div class="wrapper">
    <div class="demo-header demo-header-image">
            <div class="motto">
                <h1 class="title-uppercase">Desa</h1>
                <h3>Tentram, Aman, Damai, Asri</h3>
            </div>
    </div>

    <div class="main">
        <div class="section">
         <div class="container tim-container">
            <div class="tim-title">
                <h2>Desa</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b>Bambang Utoyo</b><br>
                    <p>Desa merupakan tempat sebagian besar penduduk yang bermata pencarian di bidang pertanian dan menghasilkan bahan makanan</p>
                    <b>R. Bintarto</b>
                    <p>Desa adalah perwujudan geografis yang ditimbulkan oleh unsur-unsur fisiografis, sosial, ekonomis politik, kultural setempat dalam hubungan dan pengaruh timbal balik dengan daerah lain</p>
                    <b>Sutarjo Kartohadikusumo</b>
                    <p>Desa merupakan kesatuan hukum tempat tinggal suatu masyarakat yang berhak menyelenggarakan rumah tangganya sendiri merupakan pemerintahan terendah di bawah camat</p>
                    <b>William Ogburn dan MF Nimkoff</b>
                    <p>Desa adalah kesatuan organisasi kehidupan sosial di dalam daerah terbatas.</p>
                    <b>S.D. Misra</b>
                    <p>Desa adalah suatu kumpulan tempat tinggal dan kumpulan daerah pertanian dengan batas-batas tertentu yang luasnya antara 50 – 1.000 are.</p>
                    <b>Paul H Landis</b>
                    <p>
                        Desa adalah suatu wilayah yang jumlah penduduknya kurang dari 2.500 jiwa dengan cirri-ciri sebagai berikut:
                        <ol>
                            <li>Mempunyai pergaulan hidup yang saling kenal mengenal antra ribuan jiwa</li>
                            <li>Ada pertalian perasaan yang sama tentang kesukuaan terhadap kebiasaan</li>
                            <li>Cara berusaha (ekonomi) ialah agraris yang paling umum yang sangat dipengaruhi alam sekitar seperti iklim, keadaan alam, kekayaan alam, sedangkan pekerjaan yang bukan agraris adalah bersifat sambilan.</li>
                        </ol>
                    </p>
                    <b>UU no. 22 tahun 1999</b>
                    <p>Desa adalah kesatuan masyarakat hukum yang memiliki kewenangan untuk mengatur dan mengurus kepentingan masyarakat setempat berdasarkan asal usul dan adat istiadat setempat yang diakui dalam sistem pemerintahan Nasional dan berada di daerah Kabupaten</p>
                    <b>UU no. 5 tahun 1979</b>
                    <p>Desa adalah suatu wilayah yang ditempati oleh sejumlah penduduk sebagai kesatuan masyarakat termasuk di dalamnya kesatuan masyarakat hukum yang mempunyai organisasi pemerintahan terendah langsung di bawah Camat dan berhak menyelenggarakan rumah tangganya sendiri dalam ikatan Negara Kesatuan Republik Indonesia</p>
                    <b>UU no. 6 tahun 2014</b>
                    <p>Desa adalah desa dan desa adat atau yang disebut dengan nama lain, selanjutnya disebut Desa, adalah kesatuan masyarakat hukum yang memiliki batas wilayah yang berwenang untuk mengatur dan mengurus urusan pemerintahan, kepentingan masyarakat setempat berdasarkan prakarsa masyarakat, hak asal usul, dan/atau hak tradisional yang diakui dan dihormati dalam sistem pemerintahan Negara Kesatuan Republik Indonesia.</p>
                </div>
            </div>
         </div>
        </div>
    </div>

    <div class="section section-light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="tim-title">
                        <h3>Butuh Pengajuan Surat?</h3>
                    </div>
                    <p>Bisa daftar dulu di sini!!</p>
                    <a href="{{ route('surat') }}" class="btn btn-fill btn-danger">Pengajuan Surat</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection