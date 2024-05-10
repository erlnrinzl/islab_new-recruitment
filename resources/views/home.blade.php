<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin: auto">
                        <a class="navbar-brand" style="color: #ffffff; font-size: 24px"><strong>NEXUS</strong></a>
                    </div>
                    <div class="col-md-8" style="margin: auto">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-md-2" style="margin: auto; text-align: right">
                        <a class="btn btn-outline-primary" href="{{ url('/add-new-content') }}" style="width: 100%";><strong>+</strong> Add New Content</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="padding-top: 20px; padding-left: 100px; padding-right: 100px">
        <div class="row">
            <div class="col-md-4" style="margin-bottom: 20px">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">How to</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">PM</h6>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laborum quaerat quos totam suscipit fuga magnam non eveniet id placeat pariatur iste nostrum, ratione, magni cumque harum facere provident repudiandae?</p>
                      <a href="#" class="card-link">See More</a>
                      <a href="#" class="card-link">Not Interest</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4" style="margin-bottom: 20px">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">How to</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">PM</h6>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laborum quaerat quos totam suscipit fuga magnam non eveniet id placeat pariatur iste nostrum, ratione, magni cumque harum facere provident repudiandae?</p>
                      <a href="#" class="card-link">See More</a>
                      <a href="#" class="card-link">Not Interest</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4" style="margin-bottom: 20px">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">How to</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">PM</h6>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laborum quaerat quos totam suscipit fuga magnam non eveniet id placeat pariatur iste nostrum, ratione, magni cumque harum facere provident repudiandae?</p>
                      <a href="#" class="card-link">See More</a>
                      <a href="#" class="card-link">Not Interest</a>
                    </div>
                  </div>
            </div>
                {{-- content --}}
                @foreach ($test as $item)
                <div class="col-md-4" style="margin-bottom: 20px">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">{{ $item["title"] }}</h5>
                          <h6 class="card-subtitle mb-2 text-body-secondary">PM</h6>
                          <p class="card-text">{{ $item["content"] }}</p>
                          <a href="#" class="card-link">See More</a>
                        </div>
                      </div>
                </div>
                @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
