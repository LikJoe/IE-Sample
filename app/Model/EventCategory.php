<?php
/**
 * Created by JetBrains PhpStorm.
 * User: PCPC
 * Date: 13-4-30
 * Time: 下午5:46
 * To change this template use File | Settings | File Templates.
 */

class EventCategory extends AppModel {

    public $name = "EventCategory";
    public $belongsTo = array('Event');
    public $primaryKey = 'event_id';
    public $displayField = 'event_category_name';
}