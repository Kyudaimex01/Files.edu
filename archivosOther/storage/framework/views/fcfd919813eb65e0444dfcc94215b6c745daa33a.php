<?php $__env->startSection('content'); ?>

<div class="row" style="margin-left: 5%; margin-right: 5%">
    <h2>Listado de Noticias</h2>
</div>
<div class="row" style="margin-left: 5%; margin-right: 5%">
    <a class="btn btn-primary" href="notices/create" style="margin-bottom: 15px;">Crear Noticia</a>

    <?php if(Session::has('message')): ?>
    <div class="alert-success">
        <p>&nbsp;&nbsp;<?php echo Session('message'); ?></p>
    </div>
    <?php endif; ?>
</div>
<div class="row" style="margin-left: 5%; margin-right: 5%">

    <table id="data" class="display table table-striped table-bordered" style="width:100%">
        <!--class="table table-bordered"-->
        <thead>
        <tr>
            <th style="padding-left: 15px;">#</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th width="110px;">Accion</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="padding-left: 15px;"><?php echo $notice->id_new; ?></td>
                <td><?php echo $notice->title; ?></td>
                <td><?php echo $notice->description; ?></td>
                <td><?php echo $notice->posted_by; ?></td>
                <td><?php echo $notice->created_at; ?></td>
                <td>
                    <a class="btn btn-success btn-sm" href="notices/<?php echo $notice->id_new; ?>/edit" title="Editar">
                        <i class="zmdi zmdi-edit"></i>&nbsp;Edit</a>

                    <a class="btn btn-danger btn-sm" href="/notices/<?php echo $notice->id_new; ?>" onclick="event.preventDefault();
                        document.getElementById('deleteForm').submit();" title="Eliminar"><i class="zmdi zmdi-delete"></i>&nbsp;Delete</a>

                    <?php echo Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/notices/' . $notice->id_new]); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm','style'=> 'display:none']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>