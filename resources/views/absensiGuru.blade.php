@extends('layouts/main')

@section('container')
<div class="card">
    <div class="card-body">
        <h4 class="card-title float-left">Data Siswa</h4>
        <ul class="nav float-right mb-4" style="gap: 1rem;">
            <li class="nav-item">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Bulan</option>
                        <option value="1">Januari</option>
                    </select>
                </div>
            </li>
            <li class="nav-item">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        placeholder="Search" style="height: 29px;">
                </div>
            </li>
        </ul>
        <ul class="nav mb-4 justify-content-end" style="gap: 1rem; clear: right !important;">
            <li class="nav-item">
                <span class="badge badge-pill badge-success" style="color: rgba(0, 0, 0, 0)">1</span>
                Hadir
            </li>
            <li class="nav-item">
                <span class="badge badge-pill" style="background: rgba(226, 138, 7, 1); color: rgba(0, 0, 0, 0)">1</span>
                Sakit
            </li>
            <li class="nav-item">
                <span class="badge badge-pill" style="background: rgba(243, 248, 10, 1); color: rgba(0, 0, 0, 0)">1</span>
                Izin
            </li>
            <li class="nav-item">
                <span class="badge badge-pill badge-danger" style="color: rgba(0, 0, 0, 0)">1</span>
                Alpha
            </li>
            <li class="nav-item">
                <span class="badge badge-pill" style="background: rgba(235, 0, 255, 1); color: rgba(0, 0, 0, 0)">1</span>
                Terlambat
            </li>
            <li class="nav-item">
                <span class="badge badge-pill" style="background: rgba(15, 210, 237, 1); color: rgba(0, 0, 0, 0)">1</span>
                Kegiatan Sekolah
            </li>
            <li class="nav-item">
                <span class="badge badge-pill badge-secondary" style="color: rgba(0, 0, 0, 0)">1</span>
                Libur
            </li>
        </ul>
        <div class="table-responsive">
            <table class="table text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" rowspan="2" style="vertical-align: middle;">No</th>
                        <th scope="col" rowspan="2" style="vertical-align: middle;">Nama</th>
                        <th scope="col" colspan="10">Agustus</th>
                    </tr>
                    <tr>
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                        <th scope="col">4</th>
                        <th scope="col">5</th>
                        <th scope="col">6</th>
                        <th scope="col">7</th>
                        <th scope="col">8</th>
                        <th scope="col">9</th>
                        <th scope="col">10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" rowspan="2" style="vertical-align: middle;">1</th>
                        <td rowspan="2" style="vertical-align: middle;">Rudi Sugianto</td>
                        <td class="bg-success">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;">06.45</a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-success">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;">12.20</a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>
                        <td class="bg-danger">
                            <a href="detailAbsensiGuru" style="color: white; text-decoration:none;"></a>
                        </td>   
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
