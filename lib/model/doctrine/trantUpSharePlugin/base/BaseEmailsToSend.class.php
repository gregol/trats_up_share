<?php

/**
 * BaseEmailsToSend
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $file_id
 * @property string $email_reciver
 * @property boolean $downloaded
 * @property FilesToShare $FilesToShare
 * 
 * @method integer      getFileId()        Returns the current record's "file_id" value
 * @method string       getEmailReciver()  Returns the current record's "email_reciver" value
 * @method boolean      getDownloaded()    Returns the current record's "downloaded" value
 * @method FilesToShare getFilesToShare()  Returns the current record's "FilesToShare" value
 * @method EmailsToSend setFileId()        Sets the current record's "file_id" value
 * @method EmailsToSend setEmailReciver()  Sets the current record's "email_reciver" value
 * @method EmailsToSend setDownloaded()    Sets the current record's "downloaded" value
 * @method EmailsToSend setFilesToShare()  Sets the current record's "FilesToShare" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmailsToSend extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('emails_to_send');
        $this->hasColumn('file_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('email_reciver', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('downloaded', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FilesToShare', array(
             'local' => 'file_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}