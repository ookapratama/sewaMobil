@extends('layouts.main_admin')

@section('adminpage')
<section class="section berkas">
    <div class="card">
        <div class="card-body">
       <div class="card-body pb-2 pt-4">
          <table class="table table-bordered">
            <thead>
                <tr>
                   <th scope="col">Document Name</th>
                   <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td><a href="/image/berkas/perizinan.jpeg" class="text-primary fw-bold">Perizinan Berusaha Berbasis Risiko  </a></td>
                   <td>Perizinan</td>
                </tr>
                <tr>
                   <td><a href="/image/berkas/Surat Pernyataan Usaha Mikro.jpeg" class="text-primary fw-bold">Pernyataan Usaha Mikro atau Usaha Kecil Terkait Tata Ruang</a></td>
                   <td>Perizinan</td>
                </tr>
                <tr>
                   <td><a href="/image/berkas/SPLL.jpeg" class="text-primary fw-bold">Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)</a></td>
                   <td>Perizinan</td>
                </tr>
                 <tr>
                    <td><a href="/image/berkas/npwp.jpeg" class="text-primary fw-bold"> CV. Sarfaraz Borneo Utama </a></td>
                    <td>NPWP</td>
                 </tr>
                 <tr>
                    <td><a href="/image/berkas/suketterdaftar.jpeg" class="text-primary fw-bold"> Keterangan Terdaftar </a></td>
                    <td>Surat</td>
                 </tr>
                 <tr>
                    <td><a href="/image/berkas/lampiransuratpernyataan.jpeg" class="text-primary fw-bold">Surat Pernyataan </a></td>
                    <td>Lampiran</td>
                 </tr>
            </tbody>
          </table>
       </div>
    </div>
</div>
</div>
</section>
</main>
@include('partials.footerAdmin')

@endsection
