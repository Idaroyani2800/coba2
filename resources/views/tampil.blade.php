
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pertanian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="css/style.css">
</head>
<body style="background: lightgray">
    <div class="tampil">
    <div class="container mt-5">
  
         <div>
             <h3 class="text-center my-4">HALAMAN USER</h3>
             <hr>
    </div>

   
                <form action="tampil/search" method="GET">
                <div class="row mb-3">
                    <label for="search" class="col-sm-2 col-form-label btn btn-secondary">Cari Data</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" value="" placeholder="Pleace Input key for search data.." name="search" autofocus value="{{ old('search') }}"> 
                
        </div>
     </div>
  </form>


    <div class="card border-0 shadow-sm rounded">
     <div class="card-body">
            <table class="table table-bordered">
             <thead>
                 <tr>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">CONTENT</th>
                    <!-- <th scope="col">AKSI</th> -->
                 </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr>
                        <td class="text-center">
                        <img src="{{asset('/storage/products/'.$product->image) }}" class="rounded" style="width:150px">
                        </td>
                        <td>{{ $product->title }}</td>
                        <td>{!! $product->content !!}</td>
                     </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Product belum Tersedia.
                    </div>
                @endforelse
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
</div>
</div>
</div>
<div class="container mt-3">

<div class="footer">
    <footer class="d-flex flex-wrap justify-content-between align-items-center ">
        <p class="col-md-12 mb-5 text-muted"> @2023 Copyright Vegetables.com </p>
    </footer>
</div>
</div>

</body>
</html>
