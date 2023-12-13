

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body> -->

<?php $__env->startSection('content'); ?>

<section class="mb-4">

  <div class="container">
    <h3 class="text-center mt-3 mb-3">Contact Us</h3>
    <p class="text-center w-responsive mx-auto mb-5">Hubungi Kami Disini</p>

    <?php if($message=Session::get('sukses')): ?>
    <div class=" text-center">
     <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"><?php echo e($message); ?></h4>
     </div>  
    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('contact.send')); ?>"  method="POST">
    <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" name="nama">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Message</label>
        <textarea type="text" class="form-control" name="message" rows="5"></textarea>
      </div>
      
      <button type="submit" class="btn btn-secondary">Send</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\coba2\resources\views/contact.blade.php ENDPATH**/ ?>