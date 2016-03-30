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
            <form action="<?php echo url_for("share_file"); ?>" method="post" enctype="multipart/form-data" >
                <fieldset>
                    <?php echo $form; ?>
                </fieldset>
                
                <hr>
                <input type="submit" name="Enviar" />
            </form>
            
        </div>
    </div>
</div>