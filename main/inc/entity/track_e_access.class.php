<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class TrackEAccess extends \Entity
{
    /**
     * @return \Entity\Repository\TrackEAccessRepository
     */
     public static function repository(){
        return \Entity\Repository\TrackEAccessRepository::instance();
    }

    /**
     * @return \Entity\TrackEAccess
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $access_id
     */
    protected $access_id;

    /**
     * @var integer $access_user_id
     */
    protected $access_user_id;

    /**
     * @var datetime $access_date
     */
    protected $access_date;

    /**
     * @var string $access_cours_code
     */
    protected $access_cours_code;

    /**
     * @var string $access_tool
     */
    protected $access_tool;

    /**
     * @var integer $access_session_id
     */
    protected $access_session_id;


    /**
     * Get access_id
     *
     * @return integer 
     */
    public function get_access_id()
    {
        return $this->access_id;
    }

    /**
     * Set access_user_id
     *
     * @param integer $value
     * @return TrackEAccess
     */
    public function set_access_user_id($value)
    {
        $this->access_user_id = $value;
        return $this;
    }

    /**
     * Get access_user_id
     *
     * @return integer 
     */
    public function get_access_user_id()
    {
        return $this->access_user_id;
    }

    /**
     * Set access_date
     *
     * @param datetime $value
     * @return TrackEAccess
     */
    public function set_access_date($value)
    {
        $this->access_date = $value;
        return $this;
    }

    /**
     * Get access_date
     *
     * @return datetime 
     */
    public function get_access_date()
    {
        return $this->access_date;
    }

    /**
     * Set access_cours_code
     *
     * @param string $value
     * @return TrackEAccess
     */
    public function set_access_cours_code($value)
    {
        $this->access_cours_code = $value;
        return $this;
    }

    /**
     * Get access_cours_code
     *
     * @return string 
     */
    public function get_access_cours_code()
    {
        return $this->access_cours_code;
    }

    /**
     * Set access_tool
     *
     * @param string $value
     * @return TrackEAccess
     */
    public function set_access_tool($value)
    {
        $this->access_tool = $value;
        return $this;
    }

    /**
     * Get access_tool
     *
     * @return string 
     */
    public function get_access_tool()
    {
        return $this->access_tool;
    }

    /**
     * Set access_session_id
     *
     * @param integer $value
     * @return TrackEAccess
     */
    public function set_access_session_id($value)
    {
        $this->access_session_id = $value;
        return $this;
    }

    /**
     * Get access_session_id
     *
     * @return integer 
     */
    public function get_access_session_id()
    {
        return $this->access_session_id;
    }
}