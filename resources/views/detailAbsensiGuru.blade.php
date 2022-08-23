@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-body">
            <div class="atas mb-5">
                <h4 class="card-title float-left" style="color: #3bae9c">Absensi </h4>
                <div class="d-flex float-right" style="gap: 5px">
                    <a href="absensi-guru" class="btn btn-sm font-weight-bold bg-danger text-white float-right" style="border-radius: 5px;">Kembali</a>
                    <a href="absensi-guru" class="btn btn-sm font-weight-bold text-white float-right" style="border-radius: 5px; background-color: #3bae9c">Simpan</a>
                </div>
            </div>
            <div class="bawah d-flex justify-content-start" style="margin-top: 100px; gap:1rem">
                <div>
                    <img src="img/Profile.png" alt="image" style="width: 100px; border-radius:10px">
                </div>
                <div class="d-flex">
                    <ul style="list-style: none">
                        <li class="font-weight-bold">NIP</li>
                        <li class="font-weight-bold">NAMA LENGKAP</li>
                        <li class="font-weight-bold">BIDANG</li>
                        <li class="font-weight-bold">JENIS KELAMIN</li>
                    </ul>
                    <ul style="list-style: none">
                        <li class="font-weight-bold">:</li>
                        <li class="font-weight-bold">:</li>
                        <li class="font-weight-bold">:</li>
                        <li class="font-weight-bold">:</li>
                    </ul>
                    <ul style="list-style: none">
                        <li class="font-weight-bold">0123456789</li>
                        <li class="font-weight-bold">PUGUH RISMADI</li>
                        <li class="font-weight-bold">KEPALA PROGRAM REKAYASA PERANGKAT LUNAK (RPL)</li>
                        <li class="font-weight-bold">LAKI-LAKI</li>
                    </ul>
                </div>
                <div class="garis-vertical" style="border-left: 1px solid black; height:150px;"></div>
                <div>
                    <h4 class="font-weight-bold">Absensi</h4>
                    <ul style="list-style: none">
                        <li><input type="radio" name="keterangan" id="hadir"> Hadir</li>
                        <li><input type="radio" name="keterangan" id="alpha"> Alpha</li>
                        <li><input type="radio" name="keterangan" id="izin"> Izin</li>
                        <li><input type="radio" name="keterangan" id="terlambat"> Terlambat</li>
                        <li><input type="radio" name="keterangan" id="kegiatansekolah"> Kegiatan Sekolah</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection