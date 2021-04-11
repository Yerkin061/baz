<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <from action="{{route('addimage')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <lable>Name</lable>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <lable>Surname</lable>
                        <input type="text" name="surname" class="form-control" placeholder="Enter Surname">
                    </div>
                    <div class="form-group">
                        <lable>Email</lable>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email ID">
                    </div>
                    <div class="input-file">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" >
                            <lable class="custom-file-label">Choose file</label>
                        </div>    
                    </div>
                    <br><br>
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Save Data</button>
            </form>
        </div>
    </div>
</body>
</html>