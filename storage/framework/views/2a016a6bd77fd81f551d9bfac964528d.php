<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <!-- Styles -->

    </head>
    <body class="antialiased">
        <div id="app">
            <Example></Example>

           
        </div>
    </body>
</html>
<?php /**PATH /home/forge/devapi.cloud/resources/views/welcome.blade.php ENDPATH**/ ?>