<?php

/**
 * PluginEmailsToSend form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginEmailsToSendForm extends BaseEmailsToSendForm
{
    public function setup()
    {
      $this->setWidgets(array(
        'file_id'       => new sfWidgetFormInputHidden(),
        'email_reciver' => new sfWidgetFormInputText(),
      ));

      $this->setValidators(array(
        'file_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FilesToShare'))),
        'email_reciver' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      ));

      $this->widgetSchema->setNameFormat('emails_to_send[%s]');
      }
}
