<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addmeetingdate extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('meeting_date', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'mid' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'date' => 
             array(
              'type' => 'timestamp',
              'notnull' => true,
              'length' => 25,
             ),
             'comment' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('meeting_date');
    }
}