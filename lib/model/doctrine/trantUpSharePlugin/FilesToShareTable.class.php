<?php

/**
 * FilesToShareTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FilesToShareTable extends PluginFilesToShareTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object FilesToShareTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('FilesToShare');
    }
}