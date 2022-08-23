@extends('layouts/main')

@section('container')
<div class="card">
    <div class="card-body">
        <h4 class="card-title float-left" style="color: rgba(59, 174, 156, 1);">Absensi 1 Agustus 2022</h4>
        <ul class="nav float-right mb-4" style="gap: 1rem;">
            <li class="nav-item">
                <button type="button" class="btn text-white"
                    style="background: rgba(59, 174, 156, 1); border-radius: 2px;">Simpan</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-danger" style="border-radius: 2px;"><i class="bi bi-caret-left-fill"
                        style="font-size: .8rem"></i> Back</button>
            </li>
        </ul>
        <div class="row m-0" style="clear: both;">
            <div class="col-md-3 text-center">
                <img src="/images/dwi.png" alt="foto" class="img-thumbnail rounded" width="150" height="200" style="object-fit: cover">
            </div>
            <div class="col-md-5">
                <dl class="row h-100">
                    <dt class="col-sm-6 p-0 m-0" style="display: flex; align-items: center;">NISN</dt>
                    <dd class="col-sm-6 p-0 m-0" style="display: flex; align-items: center;">0123456789</dd>
                    <dt class="col-sm-6 p-0 m-0" style="display: flex; align-items: center;">Nama Lengkap</dt>
                    <dd class="col-sm-6 p-0 m-0" style="display: flex; align-items: center;">Dwi Nuryanto</dd>
                    <dt class="col-sm-6 p-0 m-0" style="display: flex; align-items: center;">Kelas</dt>
                    <dd class="col-sm-6 p-0 m-0" style="display: flex; align-items: center;">XII RPL 2</dd>
                    <dt class="col-sm-6 p-0 m-0" style="display: flex; align-items: center;">Jenis Kelamin</dt>
                    <dd class="col-sm-6 p-0 m-0" style="display: flex; align-items: center;">Laki-laki</dd>
                </dl>
            </div>
            <div class="col-md-4">
                <h4 class="card-title">Absensi</h4>
                <form action="#">
                    <input type="radio" name="absensi" id="">
                    <label for="" class="m-0 pb-3">Hadir</label><br>
                    <input type="radio" name="absensi" id="">
                    <label for="" class="m-0 pb-3">Alpha</label><br>
                    <input type="radio" name="absensi" id="">
                    <label for="" class="m-0 pb-3">Izin</label><br>
                    <input type="radio" name="absensi" id="">
                    <label for="" class="m-0 pb-3">Sakit</label><br>
                    <input type="radio" name="absensi" id="">
                    <label for="" class="m-0 pb-3">Terlambat</label><br>
                    <input type="radio" name="absensi" id="">
                    <label for="" class="m-0">Kegiatan Sekolah</label><br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
