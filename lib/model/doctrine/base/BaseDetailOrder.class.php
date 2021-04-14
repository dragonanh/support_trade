<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DetailOrder', 'doctrine');

/**
 * BaseDetailOrder
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $product_name
 * @property decimal $price
 * @property integer $quantity
 * 
 * @method integer     getOrderId()      Returns the current record's "order_id" value
 * @method integer     getProductId()    Returns the current record's "product_id" value
 * @method integer     getProductName()  Returns the current record's "product_name" value
 * @method decimal     getPrice()        Returns the current record's "price" value
 * @method integer     getQuantity()     Returns the current record's "quantity" value
 * @method DetailOrder setOrderId()      Sets the current record's "order_id" value
 * @method DetailOrder setProductId()    Sets the current record's "product_id" value
 * @method DetailOrder setProductName()  Sets the current record's "product_name" value
 * @method DetailOrder setPrice()        Sets the current record's "price" value
 * @method DetailOrder setQuantity()     Sets the current record's "quantity" value
 * 
 * @package    source
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDetailOrder extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('detail_order');
        $this->hasColumn('order_id', 'integer', null, array(
             'type' => 'integer',
             'comment' => 'So id don hang',
             ));
        $this->hasColumn('product_id', 'integer', null, array(
             'type' => 'integer',
             'comment' => 'id san pham',
             ));
        $this->hasColumn('product_name', 'integer', null, array(
             'type' => 'integer',
             'comment' => 'ten san pham',
             ));
        $this->hasColumn('price', 'decimal', null, array(
             'type' => 'decimal',
             'default' => 0,
             'comment' => 'Gia san pham',
             ));
        $this->hasColumn('quantity', 'integer', null, array(
             'type' => 'integer',
             'comment' => 'Số lượng',
             ));


        $this->index('sim_order_order_id_index', array(
             'fields' => 
             array(
              0 => 'order_id',
             ),
             ));
        $this->option('comment', 'Bang luu thong tin điện thoại thuoc don hang');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}