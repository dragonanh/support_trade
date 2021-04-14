<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ArticleGroup', 'doctrine');

/**
 * BaseArticleGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property boolean $is_active
 * @property string $position
 * @property Doctrine_Collection $Article
 * 
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method boolean             getIsActive()    Returns the current record's "is_active" value
 * @method string              getPosition()    Returns the current record's "position" value
 * @method Doctrine_Collection getArticle()     Returns the current record's "Article" collection
 * @method ArticleGroup        setName()        Sets the current record's "name" value
 * @method ArticleGroup        setDescription() Sets the current record's "description" value
 * @method ArticleGroup        setIsActive()    Sets the current record's "is_active" value
 * @method ArticleGroup        setPosition()    Sets the current record's "position" value
 * @method ArticleGroup        setArticle()     Sets the current record's "Article" collection
 * 
 * @package    source
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticleGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('article_group');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Ten nhom',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 500, array(
             'type' => 'string',
             'comment' => 'Mo ta',
             'length' => 500,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'comment' => 'false: Khong kich hoat - true: Kich hoat',
             ));
        $this->hasColumn('position', 'string', 255, array(
             'type' => 'string',
             'comment' => 'vi tri hien thi',
             'length' => 255,
             ));

        $this->option('comment', 'Bang luu thong tin nhom bai viet');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Article', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}