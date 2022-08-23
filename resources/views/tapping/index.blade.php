<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tapping</title>
  </head>
  <body>
        <div class="header" style="background-color: #3bae9c; height:150px; width:100%;">
            <div class="title" style="padding:20px; text-align:center; color:white">
                <h1>ABSENSI</h1>
                <h1>SMKS TARUNA BHAKTI DEPOK</h1>
            </div>
        </div>
        <div class="content1" style="margin-top: 100px">
          <h1 class="text-center">SILAHKAN TEMPELKAN KARTU SMART PRESENSI ANDA</h1>
            <div class="foto" style="border: 2px solid rgb(203, 203, 203); height:400px; width:300px; margin:auto; margin-top:50px">
                <img src="img/contactless-payment-credit-card-hand-tap-pay-wave-logo-vector-wireless-nfc-pass-icon-161259873-38930.png" alt="image" style="width: 296px">
            </div>
            <div style="text-align: center">
                <span>Dwi Nuryanto</span> <br>
                <span>XII RPL 2</span> <br>
                <span>30 Desember 2022</span> | 23:59:59
            </div>
        </div>
        <div class="content2" style="padding:50px; margin-top:50px">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              {{-- content1 --}}
              <div class="carousel-item active">
                <div class="table-responsive" style="width: 91vw; height:80vh;">
                  <table class="table table-bordered border-secondary text-center">
                    <thead>
                      <tr class="text-white" style="background-color: #3bae9c">
                        <th scope="col" colspan="2" rowspan="2">HARI/ KELAS</th>
                        <th scope="col" colspan="4">SENIN</th>
                      </tr>
                      <tr class="text-white" style="background-color: #3bae9c">
                        <th colspan="4">XII RPL 2</th>
                      </tr>
                      <tr style="background-color: #7de2d1">
                        <th scope="row">JAM-KE</th>
                        <th>WAKTU</th>
                        <th>MAPEL</th>
                        <th>GURU</th>
                        <th colspan="2">RUANG</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row">1</td>
                        <td>07.15-08.00</td>
                        <td>PBO</td>
                        <td>PUGUH RISMADI</td>
                        <td colspan="2" rowspan="9">23</td>
                      </tr>
                      <tr>
                        <td scope="row">2</td>
                        <td>08.00-08.45</td>
                        <td>PBO</td>
                        <td>PUGUH RISMADI</td>
                      </tr>
                      <tr>
                        <td scope="row">3</td>
                        <td>08.45-09.25</td>
                        <td>PBO</td>
                        <td>PUGUH RISMADI</td>
                      </tr>
                      <tr>
                        <td scope="row">4</td>
                        <td>09.25-10.00</td>
                        <td>PBO</td>
                        <td>PUGUH RISMADI</td>
                      </tr>
                      <tr style="background-color: #023436">
                        <td scope="row" style="color: transparent">b</td>
                        <th class="text-white">10.00-10.20</th>
                        <th class="text-white" colspan="2">ISTIRAHAT</th>
                      </tr>
                      <tr>
                        <td scope="row">5</td>
                        <td>10.20-10.55</td>
                        <td>PBO</td>
                        <td>PUGUH RISMADI</td>
                      </tr>
                      <tr>
                        <td scope="row">6</td>
                        <td>10.55-11.30</td>
                        <td>PBO</td>
                        <td>PUGUH RISMADI</td>
                      </tr>
                      <tr>
                        <td scope="row">7</td>
                        <td>11.30-12.05</td>
                        <td>PBO</td>
                        <td>PUGUH RISMADI</td>
                      </tr>
                      <tr>
                        <td scope="row">8</td>
                        <td>12.05-12.40</td>
                        <td>PBO</td>
                        <td>PUGUH RISMADI</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              {{-- content1 --}}

              {{-- content2 --}}
              <div class="carousel-item">
                <div class="contentslide" style="width: 91vw; height:80vh;">
                  <div class="isi" style="background-color:red; width: 91vw; height:76vh;">
                    
                  </div>
                </div>
              </div>
              {{-- content2 --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>

          
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


