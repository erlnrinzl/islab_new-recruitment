<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/tahapan.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Tahapan</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="{{ asset('image/logo-SIS-PNG-white.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5">
                    <a class="nav-link ms-lg-4" aria-current="page" href="#">Home</a>
                    <a class="nav-link ms-lg-4" aria-current="page" href="#">Part-Time Assistant</a>
                    <a class="nav-link ms-lg-4" aria-current="page" href="#">ISCSC</a>
                    <a class="nav-link ms-lg-4" aria-current="page" href="#">ISPM</a>
                    <a class="nav-link ms-lg-4" aria-current="page" href="#">Laporan</a>
                    <a class="nav-link ms-lg-6" aria-current="page" href="loginPage">Sign-Out
                    <img class="icon-signin" src="/image/icon-signin.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    {{-- Navbar --}}

    {{-- Content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex mt-2 text-center">
                <div class="col btn-divider ">
                    <h3>Tahapan [Part-Time Assistant]</h3>
                </div>
                <div class="ms-5 col">
                    <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#updateModal">Update Status</button>
                    <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#inputNilaiModal">Input Nilai</button>
                </div>
            </div>
            {{-- <div class="row">
                
            </div> --}}
            <div class="row text-center mt-4">
                <div class="col">
                    <div class="dropdown dropdown-filter ">
                        <button class="btn dropdown-toggle btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/image/periode.png" alt="">
                          Periode
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown dropdown-filter ">
                        <button class="btn dropdown-toggle btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/image/jurusan.png" alt="">
                          Jurusan
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown dropdown-filter">
                        <button class="btn dropdown-toggle btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/image/status.png" alt="">
                          Status
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown dropdown-filter">
                        <button class="btn  dropdown-toggle btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/image/kampus.png" alt="">
                          Kampus
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col dropdown-filter">
                    <button class="btn btn-outline-secondary">Search</button>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-progress">
                        <thead>
                          <tr>
                            <th scope="col">Nama Periode</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">IPK</th>
                            <th scope="col">Kampus Area</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">Tahapan 1</th>
                            <th scope="col">Tahapan 2</th>
                            <th scope="col">Tahapan 3</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>Semester Ganjil 20204</th>
                            <td>2602106055</td>
                            <td>BIT</td>
                            <td>PTA</td>
                            <td>3.7</td>
                            <td>Bekasi</td>
                            <td>88</td>
                            <td>75</td>
                            <td>75</td>
                            <td>75</td>
                            <td>Accepted</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Update Status --}}
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Status</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="nimField" class="col-form-label">NIM</label>
                <input type="text" class="form-control" id="nimField">
              </div>
              <div class="mb-3">
                <label for="statusOpt" class="col-form-label">Update Status</label>
                <select class="form-select" aria-label="Default select example" id="statusOpt">
                  <option selected>In Review</option>
                  <option value="1">Tolak Seleksi Berkas</option>
                  <option value="2">Lolos Seleksi Berkas</option>
                  <option value="3">Tolak Tes Tertulis</option>
                  <option value="4">Tolak Simulasi Mengajar</option>
                  <option value="5">Lolos Simulasi Mengajar</option>
                  <option value="6">Tolak Interview</option>
                  <option value="7">Lolos Interview</option>
                  <option value="8">Tolak Presentasi</option>
                  <option value="9">Lolos Presentasi</option>
                  <option value="10">Tolak Tes Programming</option>
                  <option value="11">Diterima PTA</option>
                  <option value="12">Diterima ISCSC</option>
                  <option value="13">Diterima ISPM</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
    {{-- Modal --}}

    {{-- Modal Input Nilai --}}
    <div class="modal fade" id="inputNilaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Nilai</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="nimField" class="col-form-label">NIM</label>
                <input type="text" class="form-control" id="nimField">
              </div>
              <div class="mb-3">
                <label for="tahapan1Field" class="col-form-label">Tahapan 1:</label>
                <input type="text" class="form-control" id="tahapan1Field">
              </div>
              <div class="mb-3">
                <label for="tahapan2Field" class="col-form-label">Tahapan 2:</label>
                <input type="text" class="form-control" id="tahapan2Field">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Input Nilai</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>