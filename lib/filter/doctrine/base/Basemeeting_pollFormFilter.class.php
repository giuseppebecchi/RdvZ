<?php

/**
 * meeting_poll filter form base class.
 *
 * @package    rdvz
 * @subpackage filter
 * @author     Romain Deveaud <romain.deveaud@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class Basemeeting_pollFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'date_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('meeting_date'), 'add_empty' => true)),
      'poll'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uid'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('user'), 'add_empty' => true)),
      'comment'          => new sfWidgetFormFilterInput(),
      'participant_name' => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'date_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('meeting_date'), 'column' => 'id')),
      'poll'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'uid'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('user'), 'column' => 'id')),
      'comment'          => new sfValidatorPass(array('required' => false)),
      'participant_name' => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('meeting_poll_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'meeting_poll';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'date_id'          => 'ForeignKey',
      'poll'             => 'Number',
      'uid'              => 'ForeignKey',
      'comment'          => 'Text',
      'participant_name' => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
