<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Banner', 'doctrine');

/**
 * BaseBanner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $image_path
 * @property integer $status
 * @property integer $priority
 * 
 * @method string  getTitle()       Returns the current record's "title" value
 * @method string  getDescription() Returns the current record's "description" value
 * @method string  getLink()        Returns the current record's "link" value
 * @method string  getImagePath()   Returns the current record's "image_path" value
 * @method integer getStatus()      Returns the current record's "status" value
 * @method integer getPriority()    Returns the current record's "priority" value
 * @method Banner  setTitle()       Sets the current record's "title" value
 * @method Banner  setDescription() Sets the current record's "description" value
 * @method Banner  setLink()        Sets the current record's "link" value
 * @method Banner  setImagePath()   Sets the current record's "image_path" value
 * @method Banner  setStatus()      Sets the current record's "status" value
 * @method Banner  setPriority()    Sets the current record's "priority" value
 * 
 * @package    source
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBanner extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('banner');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'comment' => 'Tieu de bai viet',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'comment' => 'Mô tả ngắn',
             'length' => 255,
             ));
        $this->hasColumn('link', 'string', 255, array(
             'type' => 'string',
             'comment' => 'Đường dẫn sang trang chi tiết',
             'length' => 255,
             ));
        $this->hasColumn('image_path', 'string', 255, array(
             'type' => 'string',
             'comment' => 'duong dan anh minh hoa bai viet',
             'length' => 255,
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'comment' => '0: khong hien thi, 1: hien thi',
             'length' => 1,
             ));
        $this->hasColumn('priority', 'integer', 5, array(
             'type' => 'integer',
             'default' => 10,
             'comment' => 'Do uu tien',
             'length' => 5,
             ));


        $this->index('banner_id_index', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->option('comment', 'Bang luu thong tin banner');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}