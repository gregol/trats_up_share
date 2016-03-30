<?php

/**
 * PluginFilesToShare form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginFilesToShareForm extends BaseFilesToShareForm
{
    public function setup()
    {
      $this->setWidgets(array(
        'file_name_ob'       => new sfWidgetFormInputFile(array(), array("class"=>"form-control")),
        'email_sender'    => new sfWidgetFormInputText(array(), array("class"=>"form-control")),
        'message'         => new sfWidgetFormTextarea(array(), array("class"=>"form-control")),
        'user_id'         => new sfWidgetFormInputHidden
      ));

      $this->setValidators(array(
        'file_name_ob'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
        'email_sender'    => new sfValidatorEmail(array('max_length' => 255, 'required' => false)),
        'message'         => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
        'user_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      ));
      
     /* if($this->isNew()){
          $mails_to= new EmailsToSend();
          $mails_to->setFilesToShare($this->getObject());
          
          $mails_to_share= new EmailsToSendForm($mails_to);
          
          $this->embedForm('mails_to_share', $mails_to_share);
      }else{
          
      }*/
      
      
      $this->widgetSchema->setNameFormat('files_to_share[%s]');
    }
}
