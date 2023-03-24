
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Primary Meta Tags -->
    
    <meta name="title" content="Welcome From Mod Games Myanmar">
    <meta name="description" content="Welcome from Mod games myanmar. You can download all mod games here.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="Welcome from Mod games myanmar. You can download all mod games here.">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('meta_title','Welcome from Mod games myanmar. You can download all mod games here.'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description','Welcome from Mod games myanmar. You can download all mod games here.'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('meta_image', asset(\App\Custom::$info['c-logo']) ); ?>">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo e(url()->current()); ?>">
    <meta property="twitter:title" content="Welcome from Mod games myanmar. You can download all mod games here.">
    <meta property="twitter:description" content="Welcome from Mod games myanmar. You can download all mod games here.">
    <meta property="twitter:image" content="<?php echo e(asset(\App\Custom::$info['c-logo'])); ?>">
    <meta name="viewport" content="width=device-width, wedding-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" href="<?php echo e(asset(\App\Custom::$info['c-logo'])); ?>">
    <link rel="stylesheet" href="<?php echo e(asset(\App\Custom::$info['main_css'])); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/feather-icons-web/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/font-awesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/font-awesome/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/animate_it/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/summernote/summernote.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/css/game_ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/slick/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/slick/slick-theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/vendor/venobox/venobox.css')); ?>">

    <?php echo $__env->yieldContent('head'); ?>

</head>
<body>
<div class="container-fluid" style="background:  #f7efe9">
    <div class="row">
        
        <div class="col-12 p-0 position-sticky" style=" top: 0; z-index: 16; background: #0d0d0d">
            <div class="container ">
                <div class="row">
                    <div class="col-12 p-0 py-2 ">
                        <nav class="navbar navbar-expand-md navbar-dark ">
                            <label class="logo px-0" onclick="location.href='<?php echo e(route('game.gameList')); ?>'"  style="cursor: pointer">
                                <img src="<?php echo e(asset(\App\Custom::$info['c-logo'])); ?>"  style="width: 65px">
                            </label>
                            <span class="h3 pl-2 text-white gsmm" onclick="location.href='<?php echo e(route('game.gameList')); ?>'"  style="cursor: pointer">Mod</span>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link "  href="<?php echo e(asset('/')); ?>">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Category
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item border rounded-0" href="<?php echo e(route('game.gameList')); ?>" >All</a>
                                            <?php $__currentLoopData = \App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a class="dropdown-item py-0 py-0 border rounded-0" href="<?php echo e(route('game.gameListFilter',$cat->id)); ?>"><?php echo e($cat->title); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?php echo e(route('requestGame.createRequest')); ?>">Request Game</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?php echo e(route('suggestGame.createSuggest')); ?>">Suggest Website</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?php echo e(route('adGame')); ?>">Ad Service</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>

        </div>
        <div class="fb-quote"></div>
        <?php echo $__env->yieldContent('download'); ?>
        <div class="content_body col-12 p-0">
            <?php echo $__env->yieldContent("content"); ?>


            
            
            
            
            
            
            
            
            
            
            <div class="footer text-dark text-center pb-3 py-3 font-weight-bolder " style="background-color: rgba(255,255,255,0.8); line-height: 30px">
            <span class="px-3">Copyright ©2021 All rights reserved | This Website is Created  by <a href="https://www.facebook.com/profile.php?id=100069553492400">Aung Htet Chon</a>
            </span>
            </div>
        </div>

    </div>
</div>


<!-- Scripts -->
<script src="<?php echo e(asset('dashboard/js/jquery.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('dashboard/js/bootstrap.js')); ?>"></script>

<script src="<?php echo e(asset('dashboard/vendor/data_table/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/vendor/summernote/summernote.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/vendor/venobox/venobox.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/vendor/slick/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/vendor/font-awesome/js/all.min.js')); ?>"></script>



<script>
    $(window).load(function() {
// Animate loader off screen
        $(".se-pre-con").fadeOut(500);
    });
    $(document).ready(function(){
        $('.venobox').venobox({                      // default: ''
            frameheight: '600px',                            // default: ''
            bgcolor    : '#5dff5e',                          // default: '#fff'
            titleattr  : 'data-title',                       // default: 'title'
            numeratio  : true,                               // default: false
            infinigall : true,                               // default: false
        });
    });
</script>
<?php echo $__env->yieldContent('foot'); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->

</body>
</html>
<?php /**PATH /home/ahc/Desktop/idea (7)/resources/views/dashboard/game_ui.blade.php ENDPATH**/ ?>