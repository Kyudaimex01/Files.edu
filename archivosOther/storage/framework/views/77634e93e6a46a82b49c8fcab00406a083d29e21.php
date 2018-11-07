<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <h2>Modificar Noticia</h2>
    </div>
    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <a class="btn btn-primary" href="/notices" style="margin-bottom: 15px;">Listado</a>
    </div>

    <div class="row" style="margin-left: 5%; margin-right: 5%">

        <?php echo Form::open( $form_options ); ?>

        <div class="form-group">
            <?php echo Form::label('title', 'Titulo');; ?>

            <?php echo Form::text('title', $new->title , ['placeholder' => 'Ingresar Titulo', 'class' => 'form-control']);; ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('description', 'Descripcion'); ?>

            <?php echo Form::text('description', $new->description, ['placeholder' => 'Ingresar Descripcion', 'class' => 'form-control']);; ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('posted_by', 'Autor');; ?>

            <?php echo Form::text('posted_by', $new->posted_by, ['placeholder' => 'Autor', 'class' => 'form-control']);; ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('img_route','imagen');; ?>

            <?php echo Form::file('img_route', null, ['placeholder' => $new->img_route, 'class' => 'form-control']);; ?>

        </div>
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right']);; ?>


        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>