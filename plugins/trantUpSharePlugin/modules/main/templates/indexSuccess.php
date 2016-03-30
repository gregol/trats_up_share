

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Envia los archivos a tus amigos
            <small>panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Compartir archivos</h3>
                  <p>comparte con tus amigos los archivos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-file"></i>
                </div>
                <a href="<?php echo url_for('add'); ?>" class="small-box-footer">Compartir <i class="fa fa-arrow-circle-right"></i></a>
              </div>
        </div>
        <div class="col-lg-12 col-xs-12">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Mensaje</th>
                      <th>Descargado?</th>
                      <th>Cadtidad de descargas</th>
                      <th>Actions</th> 
                    </tr>
                    <?php foreach ($files as $file => $objFile): ?>
                    <tr>
                      <td><?php echo $objFile->id; ?></td>
                      <td><?php echo $objFile->file_name; ?></td>
                      <td><?php echo $objFile->message; ?></td>
                      <td><?php echo $objFile->times_downloads; ?></td>
                      <td><span class="badge bg-red">editar</span></td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </table>
            </div>
        </div>
    </div>
</div>
