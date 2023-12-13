<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
    <body style="background: rgb(247,243,243)">

    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <img src="<?php echo e(asset('storage/products/'.$products->image)); ?>" class="w-100 rounded">
            </hr>
            <h4><?php echo e($products->title); ?></h4>
            <p class="tmt-3">
                <?php echo $products->content; ?>

            </p>
            <a href="/products" class="btn btn-dark"> Back</a>
        </div>

    </div>
</body>
</html><?php /**PATH C:\laragon\www\coba2\resources\views/products/show.blade.php ENDPATH**/ ?>