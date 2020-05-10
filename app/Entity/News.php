<?php


namespace app\Entity;


use Doctrine\ORM\Mapping\ClassMetadata;

class News
{
    public static function loadMetadata(ClassMetadata $metadata)
    {
        $metadata->mapField(array(
            'id' => true,
            'fieldName' => 'id',
            'type' => 'integer'
        ));
        $metadata->mapField(array(
            'fieldName' => 'title', //字段名
            'type' => 'string', //字段类型
            'unique' => true, //是否唯一
            'length' => 32, //长度
            'nullable' => true, //是否为空
            'options' => array(
                'comment' => '新闻标题', //描述
                'default' => 0 //默认值
            )
        ));
        $metadata->mapField(array(
            'fieldName' => 'cover',
            'type' => 'string',
            'options' => array(
                'comment' => '新闻封面'
            )
        ));
        $metadata->mapField(array(
            'fieldName' => 'summary',
            'type' => 'text',
            'options' => array(
                'comment' => '新闻概要'
            )
        ));
        $metadata->mapField(array(
            'fieldName' => 'content',
            'type' => 'text',
            'options' => array(
                'comment' => '新闻内容'
            )
        ));
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $title = 0;

    /**
     * @var string
     */
    private $cover;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var string
     */
    private $content;


    /**
     * Set id.
     *
     * @param int $id
     *
     * @return News
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string|null $title
     *
     * @return News
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set cover.
     *
     * @param string $cover
     *
     * @return News
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover.
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set summary.
     *
     * @param string $summary
     *
     * @return News
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary.
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return News
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
