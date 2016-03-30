<?php

/**
 * EmailsToSend form base class.
 *
 * @method EmailsToSend getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmailsToSendForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'file_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FilesToShare'), 'add_empty' => false)),
      'email_reciver' => new sfWidgetFormInputText(),
      'downloaded'    => new sfWidgetFormInputCheckbox(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'file_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FilesToShare'))),
      'email_reciver' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'downloaded'    => new sfValidatorBoolean(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('emails_to_send[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmailsToSend';
  }

}
