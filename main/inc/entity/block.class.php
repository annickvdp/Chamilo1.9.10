<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class Block extends \Entity
{
    /**
     * @return \Entity\Repository\BlockRepository
     */
     public static function repository(){
        return \Entity\Repository\BlockRepository::instance();
    }

    /**
     * @return \Entity\Block
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var text $description
     */
    protected $description;

    /**
     * @var string $path
     */
    protected $path;

    /**
     * @var string $controller
     */
    protected $controller;

    /**
     * @var boolean $active
     */
    protected $active;


    /**
     * Get id
     *
     * @return integer 
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $value
     * @return Block
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param text $value
     * @return Block
     */
    public function set_description($value)
    {
        $this->description = $value;
        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function get_description()
    {
        return $this->description;
    }

    /**
     * Set path
     *
     * @param string $value
     * @return Block
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function get_path()
    {
        return $this->path;
    }

    /**
     * Set controller
     *
     * @param string $value
     * @return Block
     */
    public function set_controller($value)
    {
        $this->controller = $value;
        return $this;
    }

    /**
     * Get controller
     *
     * @return string 
     */
    public function get_controller()
    {
        return $this->controller;
    }

    /**
     * Set active
     *
     * @param boolean $value
     * @return Block
     */
    public function set_active($value)
    {
        $this->active = $value;
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function get_active()
    {
        return $this->active;
    }
}