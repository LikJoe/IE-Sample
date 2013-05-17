<?php

App::uses('AppModel', 'Model');

/**
 * Item Model
 *
 */
class Item extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'item';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'item_id';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'item_name';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'item_name' => array(
            'rule' => 'alphaNumeric',
            'message' => 'Please specify a valid item name.'
        ),
        'item_code' => array(
            'rule' => 'alphaNumeric',
            'message' => 'Please specify the item code.'
        ),
        'item_unit_size' => array(
            'rule' => 'numeric',
            'message' => 'Please specify the unit size.',
        ),
        'item_measure_type' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the measurement type.'
        ),
        'item_carton_size' => array(
            'rule' => 'alphaNumeric',
            'message' => 'Please specify the carton size.',
        ),
        'item_sell_price' => array(
            'rule' => array('decimal', 2),
            'message' => 'Please specify the item price.',
        ),
        'item_category' => array(
            'rule' => 'notEmpty',
            'message' => 'Please specify the item type.'
        )
    );

}
