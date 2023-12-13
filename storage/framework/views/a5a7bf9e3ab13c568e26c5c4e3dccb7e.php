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

<div class="sidebar">
<a class="active" href="#home">Dashboard</a>
<a href="<?php echo e(route('products.index')); ?>">Product</a>
<form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" type="submit">Logout</button>
                </form>
</div>

    <div class="content">
    <div class="container mt-5">
   
      <div class="row">
        <div class="col-md-12">
         <div>
             <h3 class="text-center my-4">HALAMAN ADMIN</h3>
             <hr>
    </div>
    
    <form action="tampil/search" method="GET">
                <div class="row mb-3">
                    <label for="search" class="col-sm-2 col-form-label btn btn-secondary">Cari Data</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" value="" placeholder="Pleace Input key for search data.." name="search" autofocus value="<?php echo e(old('search')); ?>"> 
                
        </div>
     </div>
  </form>
    <div class="card border-0 shadow-sm rounded">
     <div class="card-body">
         <a href="<?php echo e(route('products.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH PRODUCT</a>
            <table class="table table-bordered">
             <thead>
                 <tr>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">CONTENT</th>
                    <th scope="col">AKSI</th>
                 </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                        <td class="text-center">
                        <img src="<?php echo e(asset('/storage/products/'.$product->image)); ?>" class="rounded" style="width:150px">
                        </td>
                        <td><?php echo e($product->title); ?></td>
                        <td><?php echo $product->content; ?></td>
                        <td class="text-center">
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" 
                          action="<?php echo e(route('products.destroy', $product->id)); ?>"
                           method="POST">
                           <a href="<?php echo e(route('products.show',$product->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                           <a href="<?php echo e(route('products.edit',$product->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                           <?php echo csrf_field(); ?>
                           <?php echo method_field('DELETE'); ?>
                           <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                     </form>
                        </td>
                     </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="alert alert-danger">
                        Data Product belum Tersedia.
                    </div>
                <?php endif; ?>
            </tbody>
        </table>
        <?php echo e($products->links()); ?>

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
</html><?php /**PATH C:\laragon\www\coba2\resources\views/products/index.blade.php ENDPATH**/ ?>