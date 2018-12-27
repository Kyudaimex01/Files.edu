<?php $__env->startSection('notice'); ?>
<style>
    img.news {
        width: 50%;
        height: 90%;
    }
</style>

    <div class="container-fluid col-md-12" style="padding-top:0.5%;padding-bottom:1%; background-color:whitesmoke; width: 99%; height: fit-content;">

        <div id="my-news" class="carousel slide" data-ride="carousel"
             style="width:99%;margin-left: 0.4%;margin-right: 0.4%;background-color: none;"> <!--whitesmoke-->
            <div>
            <!-- Indicators -->
                <ol class="carousel-indicators" style="padding-top: 5%">
                    <?php for($i=0;$i < $size;$i++): ?>
                        <li style="border-color: #1b6d85" data-target="#my-news" data-slide-to=<?php echo e($i); ?>

                        <?php if( $i =='0'): ?> class="active" <?php endif; ?> >
                    <?php endfor; ?>
                </ol>
            </div>
            <div style="height: 400px;background-color: whitesmoke" class="carousel-inner" role="listbox">
                    <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div <?php if($notice->id_new=='1'): ?> class="item active" <?php else: ?> class="item" <?php endif; ?> >
                            <h4 class=" media-heading">
                                <small style="color: #8a6d3b"><?php echo e($notice->created_at); ?></small>
                                <small><?php echo e($notice->posted_by); ?></small>
                            </h4>
                                <div>
                                    <h4 class=" media-heading"> <?php echo e($notice->title); ?> </h4>
                                </div>
                                <div style="color: #002a80">
                                    <?php echo $notice->description; ?>

                                </div>
                                <div>
                                    <img class="news" src="/storage/news/<?php echo $notice->img_route; ?>" href="#">
                                </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div>
                    <!-- Previous/Next controls -->
                    <a class="left carousel-control" href="#my-news" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#my-news" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<!-- Initialize Bootstrap functionality -->
<script>
    // Initialize tooltip component
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
<style>
    .carousel-indicators .active{
        background-color: #002a80;
    }
</style>
