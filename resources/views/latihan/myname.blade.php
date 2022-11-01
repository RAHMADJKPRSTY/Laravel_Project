<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nami Kulo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

    <div class="container mt-3"> 
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <img  
                    src="https://c.pxhere.com/images/0d/18/4fa31701d2cfa087836d807967f3-1447663.jpg!d" 
                    class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">
                      
                      {{ $data['name'] }}  <br>
                      {{ $data['age'] }} 
                      </h5>
                      <p class="card-text">
                      {{ $data['address'] }} 
                    </p>
                    <a href="#" class="btn btn-primary"> Ayo Mlebet </a>
                      </div>
                </div>
            </div>
            <div class="col"></div>
    </div>
    </div>
     

    {{-- {{ $data['name'] }} <br>
    {{ $data['age'] }} <br>
    {{ $data['address'] }} <br> 

    <br>

    <p><b>Memanggil Data dengan Foreach </b></p>
   
    @foreach ($data as $val)
        {{ $val }} <br>
        
    @endforeach   --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>