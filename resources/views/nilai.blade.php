<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/tahapan.css"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <title>Tahapan</title>
</head>
<body>
    {{-- Navbar --}}
    {{-- <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="{{ asset('image/logo-SIS-PNG-white.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-5">
                    <li class="nav-item me-lg-3">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown me-lg-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Part-Time Assistant
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Periode</a></li>
                            <li><a class="dropdown-item" href="#">Eligibitas IPK</a></li>
                            <li><a class="dropdown-item" href="#">Eligibitas Mata Kuliah</a></li>
                            <li><a class="dropdown-item" href="#">Pendaftar</a></li>
                            <li><a class="dropdown-item" href="#">Tahapan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-lg-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ISCSC
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Periode</a></li>
                            <li><a class="dropdown-item" href="#">Eligibitas IPK</a></li>
                            <li><a class="dropdown-item" href="#">Pendaftar</a></li>
                            <li><a class="dropdown-item" href="#">Tahapan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-lg-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ISPM
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Periode</a></li>
                            <li><a class="dropdown-item" href="#">Eligibitas IPK</a></li>
                            <li><a class="dropdown-item" href="#">Eligibitas Mata Kuliah</a></li>
                            <li><a class="dropdown-item" href="#">Pendaftar</a></li>
                            <li><a class="dropdown-item" href="#">Tahapan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-lg-3">
                        <a class="nav-link" aria-current="page" href="#">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-lg-6" aria-current="page" href="loginPage">Sign-Out
                            <img class="icon-signin" src="/image/icon-signin.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
    @include('partials.navbar-admin')
    
    {{-- Navbar --}}

    {{-- section --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex mt-2 text-center">
                <div class="col">
                    <h3>Eligibitas IPK</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-responsive table-hover table-progress">
                        <thead>
                          <tr>
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </th>
                            <th scope="col">File Name</th>
                            <th scope="col">File Type</th>
                            <th scope="col">File SIze</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </td>
                            <td>IPK Matthew.xlsx</td>
                            <td>xlsx</td>
                            <td>1.26 Mb</td>
                          </tr>
                          <tr>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </td>
                            <td>IPK Matthew.xlsx</td>
                            <td>xlsx</td>
                            <td>1.26 Mb</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button data-bs-target="#addModal" data-bs-toggle="modal" class="btn btn-detail">Add</button>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <label class="mb-2" for="status-form">Status</label>
                    <select id="status-form" class="form-select dropdown-filter" aria-label="Default select example">
                        <option selected>Lulus</option>
                        <option value="1">Gagal</option>
                    </select>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col d-flex justify-content-center">
                    <button data-bs-target="#submitModal" class="btn btn-detail" data-bs-toggle="modal">Submit</button>
                </div>
            </div>
        </div>
    </section>
    {{-- section --}}

    {{-- Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-center">
              <button type="button" class="btn-close custom" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="container">
                    <div class="mb-3">
                        <h3>File Name:</h3>
                            <p class="preview-file-name">file name...</p> 
                            <div class="dropzone-wrapper">
                                <div class="dropzone-desc">
                                    <img height="50px" src="image/document-icon.png" alt="">
                                    <p>Drag and drop choose file to upload your files. </br>
                                    pdf, xlsx types are supported</p>
                                </div>
                                <input type="file" name="img_logo" class="dropzone">
                        </div>   
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-reset btn-secondary">Reset</button>
              <button type="button" class="btn btn-primary">Upload</button>
            </div>
          </div>
        </div>
      </div>
    {{-- Modal --}}

    {{-- Modal --}}
    <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-center">
              <button type="button" class="btn-close custom" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="container">
                    <div class="mb-3 text-center">
                        <h3>Are you sure want to submit this document ?</h3>
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-reset btn-secondary" data-bs-dismiss="modal" >Cancel</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
    {{-- Modal --}}
    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>