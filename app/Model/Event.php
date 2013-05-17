<?php

/**
 * Created by JetBrains PhpStorm.
 * User: PCPC
 * Date: 13-4-21
 * Time: 下午9:40
 * To change this template use File | Settings | File Templates.
 */
class Event extends AppModel {

    public $name = "Event";
    //public $primaryKey = 'e_id';
    public $hasOne = array(
        'EventCategory' => array(
            'className' => 'EventCategory',
            'dependent' => false
        )
    );
    public $validate = array(
        'e_order_num' => array(
            'rule' => 'numeric',
            'message' => 'Please supply a valid order number.'
        ),
        'e_week' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify a week.'
        ),
        'e_date' => array(
            'rule' => 'date',
            'message' => 'Please specify the event date.'
        ),
        'e_num_males_attend' => array(
            'rule' => 'numeric',
            'message' => 'Please specify the number of males attending.'
        ),
        'e_num_females_attend' => array(
            'rule' => 'numeric',
            'message' => 'Please specify the number of females attending.'
        ),
        'e_time_arrive_WH_start' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the time of arrive warehouse start.'
        ),
        'e_time_depart_WH_start' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the time depart warehouse start.'
        ),
        'e_time_arrive_venue' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the time arrive venue.'
        ),
        'e_time_depart_venue' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the depart venue.'
        ),
        'e_time_start_service' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the time start service.'
        ),
        'e_time_end_service' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the time end service.'
        ),
        'e_time_arrive_WH_end' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the time arrive warehouse end.'
        ),
        'e_time_depart_WH_end' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the time depart warehouse end.'
        ),
        'e_drinks_package' => array(
            'rule' => '/^[a-zA-Z0-9]{1,}$/i',
            'message' => 'Please specify the drinks package.'
        ),
        'e_address' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the event address.'
        ),
        'e_contact_person' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the contact person.'
        ),
        'e_contact_phone' => array(
            'rule1' => array(
                'rule' => array('minLength', 8),
                'message' => 'Please input a valid phone number.'
            ),
            'rule2' => array(
                'rule' => array('maxLength', 10),
                'message' => 'Please input a valid phone number.'
            )
        ),
        'e_invoice_name' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the invoice name.'
        ),
        'e_invoice_address' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the invoice address.'
        )
    );

}