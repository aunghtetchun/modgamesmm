<?php $__env->startSection("title"); ?> Game & Software Zone Myanmar <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-2">
        <div class="col-12 p-0 pt-5 d-flex flex-wrap align-items-center">
            <div class="col-12 pb-5 pt-lg-5 pt-md-5 pt-sm-3 my-lg-5 my-md-5 my-sm-0 text-center col-md-8 mr-auto text-white border border-dark" style="background: rgba(11,15,18,0.6)">
                <p class="my-5 " style="font-size: 40px; line-height: 57px">
                    Welcome From Game and Software Zone Myanmar
                </p>
                <h3 style="line-height: 49px">( You Can Download All Mod Games Here )</h3>
                <h4 class="mt-4" style="line-height: 40px">First Myanmar Mod Games Website </h4>
            </div>
            <h2 class="col-12 my-5 text-center pb-4 pt-3 text-white border border-dark" style="background: rgba(11,15,18,0.6);">Popular Games</h2>

            <form class="text-white w-100 mx-2 mt-2 mb-3" action="<?php echo e(route('game.gameSearch')); ?>" method="get" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-row align-items-end justify-content-center">
                    <div class="form-group col-md-5">
                        <label for="name" class="h5 mb-3">Game Search</label>
                        <input required type="text" class="form-control rounded-0 <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" id="name" value="<?php echo e(old('name')); ?>" placeholder="Enter Game Name">
                    </div>
                    <div class="form-group col-md-2 text-left">
                        <button type="submit" class="btn rounded-0  btn-primary px-3 pb-2"> Search</button>
                    </div>
                </div>
            </form>

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 col-md-3 col-lg-2 my-3">
                    <div class="card game_card rounded-0"   style="cursor: pointer;">
                        <img class="card-img-top" src="<?php echo e(asset("/storage/logo/".$post->logo)); ?>" onclick="location.href='<?php echo e(route('game.singleGameList',$post->id)); ?>'" alt="Card image cap" style="width: 100%; height: 125px; padding: 13px;">
                        <div class="card-body pt-1 pb-2" style="padding: 13px" onclick="location.href='<?php echo e(route('game.singleGameList',$post->id)); ?>'">
                            <span class="card-title w-100" style="font-size: 14px;"><?php echo e(\App\Custom::toShort($post->name,15)); ?></span>
                            <p class="card-text text-muted " style="font-size: 12px;"><?php echo e(\App\Custom::toShort($post->developer,15)); ?></p>
                        </div>
                        <div class="card-footer px-0 text-center">
                            <h6 class="text-center m-0 p-0 " style="font-size: 12px"><i class="feather-eye"></i> <?php echo e(\App\Viewer::where('post_id',$post->id)->count() * 3); ?></h6>
                            <small class="text-muted" style="font-size: 11px"> Version <?php echo e($post->version); ?> </small>
                            <div class="star" data-toggle="modal" data-target="#exampleModal<?php echo e($post->id); ?>">
                                <?php for($i=1; $i<=5; $i++): ?>
                                    <?php if($i<=floor(collect($post->getRating->pluck('rating'))->avg()) ): ?>
                                        <i class="fas fa-star fa-fw"></i>
                                    <?php else: ?>
                                        <i class="far fa-star fa-fw"></i>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                            
                            <div class="modal fade" id="exampleModal<?php echo e($post->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal<?php echo e($post->id); ?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered " role="document">
                                    <div class="modal-content" style="background-color: #a81d1d !important;">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white" id="exampleModal<?php echo e($post->id); ?>Label">How much you like <?php echo e($post->name); ?> ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('addRating.storeRating')); ?>" method="post" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group my-3">
                                                    <div class="rating">
                                                        <label>
                                                            <input type="radio" name="rating" value="1" />
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="2" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="3" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="4" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="5" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                    </div>
                                                    <?php if ($errors->has('rating')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('rating'); ?>
                                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                                        <?php echo e($message); ?>

                                                    </small>
                                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                    <input type="hidden" value="<?php echo e($post->id); ?>" name="post_id">
                                                </div>
                                                <input type="hidden" value="<?php echo e($post->id); ?>" name="wedding_package_id">
                                                <button type="submit" class="btn text-white px-3 py-2"  style="background-color: #080c0d;" ><i class="fas fa-plus-square mr-1"></i> Rating</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 text-center mt-4">
                <a href="<?php echo e(route('game.gameList')); ?>" class="btn px-4  text-light font-weight-bold py-2 rounded-0" style="background-color: #a81d1d;"> See More <i class="feather-arrow-right"></i></a>
            </div>


        </div>
    </div>



<?php $__env->stopSection(); ?>





<?php echo $__env->make('dashboard.game_ui', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ahc/Desktop/idea (7)/resources/views/welcome.blade.php ENDPATH**/ ?>