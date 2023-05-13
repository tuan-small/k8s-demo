
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XINCHAOF</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center ">

            <div class="col-md-5 p-5 shadow-sm border rounded-5 border-primary bg-white">
                <h2 class="text-center mb-4 text-primary">NHẬP TÊN</h2>
                <form action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">TÊN CỦA BẠN LÀ</label>
                        <input type="text" class="form-control @error( 'name') is-invalid @enderror border border-primary" name='name' value="{{old('name')}}">
                    </div>
                    
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form> 

                <form action="" >
                    @csrf
                    <div class="mb-3">
                        <h2 class="text-center mb-4 text-primary">DANH SÁCH</h2>
                        
                        <ol reversed>
                        @foreach($datas as $data)
                            <li style="font-size: 23px">    {{$data->name}}</li>
                        @endforeach
                      </ol>

                    </div>

                </form> 
            </div>


            

        </div>
    </body>

</html>