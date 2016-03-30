<?php use_helper('I18N') ?>

<div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Ingresa</b> Trats Up</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
          <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
      </div>
</div>
