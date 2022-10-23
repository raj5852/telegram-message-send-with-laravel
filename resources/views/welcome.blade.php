<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Message send  with Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>


    <div class="container">
    <h1>Telegram Message send  with Laravel</h1>

        <div class="card">
            <div class="card-body">
                <form action="/post" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Title</label>
                    <input type="text" placeholder="Title" class="form-control" name="title">
                    
                    <input type="submit" class="btn btn-success" value="Upload">
                </form>
            </div>
        </div>
    </div>
</body>

</html>