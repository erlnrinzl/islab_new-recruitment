<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add New Content</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    </head>
    <body>
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <a class="navbar-brand" style="color: #ffffff; font-size: 24px"><strong>ISPM</strong></a>
                        </div>
                        <div class="col-md-8" style="text-align: center">
                            <a style="color: #ffffff; font-size: 24px; text-align: center">Add New Content</a>
                        </div>
                        <div class="col-md-2" style="text-align: right">
                            <a class="btn btn-outline-primary" href="{{ url('/') }}"><strong>&larr;</strong> Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form>
                        <div class="mt-4 mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Content Title" required>
                        </div>
                        <div class="mb-4">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="10" placeholder="Write your content here..." required></textarea>
                        </div>
                        <div class="mb-4 center">
                            <button type="submit" class="btn btn-primary" name="addNewContent">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>