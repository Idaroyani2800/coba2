<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact Message</h1>
    <p>Name: <?php echo e($contact['nama']); ?> </p>
    <p>Email: <?php echo e($contact['email']); ?> </p>
    <p>Message: <?php echo e($contact['message']); ?> </p>
</body>
</html><?php /**PATH C:\laragon\www\coba2\resources\views/SendContact/contact.blade.php ENDPATH**/ ?>