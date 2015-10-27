<?php

/**
 * Description of Posts.
 *
 * @author anb
 */
class Post_model  extends CI_Model {

    protected $_name = 'ac_posts';
    protected $_table_languages = 'ac_languages';

    const TIPO_POST = 'post';
    const TIPO_PAGE = 'page';

    const CATEGORY_CIRUGIA = 'cirugia';
    const CATEGORY_TECNOLOGIA = 'tecnologia';
    const CATEGORY_EXAMENES = 'examenes';
    const CATEGORY_MAIN_MENU = 'main-menu';

    const STATUS_TRUE = 1;
    const STATUS_FALSE = 0;

    public function __construct() {
    //    parent::__construct();

    }

    /***
     * list of post (lastest news)
     */
    public function getAll(
        $post_type = Post_model::TIPO_POST,
        $category = '',
        $status = '',
        $order = 'desc',
        $limit = 10,
        $offset = '',
        $rows = false
    ) {
        $str_post_type = str_replace('-', '_', $post_type);
        $strRows = (int) $rows;
        $keyCache = __CLASS__ . __FUNCTION__ .'_'. $str_post_type.$category.'_'.$status.'_'.$strRows.'_'.$order.$limit.'_'.$offset;

        if (true/*($rs = $this->cache->file->get($keyCache)) == false*/) {
            $this->db->select()->from($this->_name);
            $this->db->where('post_type', $post_type);
            if(!empty($category)) {
                $this->db->where('category', $category);
            }
            if(!empty($status)) {
                $this->db->where('status', $status);
            }
            $this->db->join($this->_table_languages, "{$this->_table_languages}.id = {$this->id_lang}");

            // -------- init
            if (!empty($limit) && !empty ($offset)) {
                $this->db->limit($limit, $offset);
            } elseif (!empty($limit)) {
                $this->db->limit($limit);
            }
            //order
            if (!empty($order)) {
                $this->db->order_by('created_at', $order);
            }
            //$this->db->limit($limit, $offset);
            $query = $this->db->get();
            if ($rows == true) {
                $rs = $query->num_rows();
            } else {
               $rs = $query->result_array();
            }
            // -------- end
            $this->cache->file->save($keyCache, $rs, MY_Controller::CACHE_TIME);
        }

        return $rs;
    }


    public function getByTitle($title)
    {
        $keyCache = __CLASS__ . __FUNCTION__ .'_'. $title;
        if (true/*($rs = $this->cache->file->get($keyCache)) == false*/) {
            $this->db->select()->from($this->_name);
            $this->db->join($this->_table_languages, "{$this->_table_languages}.id = {$this->id_lang}");
            $this->db->like('title_seo', $title);
            $this->db->where('post_type', Post_model::TIPO_POST);
            $this->db->where('status', Post_model::STATUS_TRUE);
            $this->db->limit(1);

            $query = $this->db->get();
            $response = $query->result_array();
            $rs = ($response == false) ? null : $response[0];
            $this->cache->file->save($keyCache, $rs, MY_Controller::CACHE_TIME);
        }

        return $rs;
    }

    /**
     *
     * @param Integer $id
     * @return Array data Element.
     */
    public function get($id, $post_type = Post_model::TIPO_POST, $status='')
    {
        $keyCache = __CLASS__ . __FUNCTION__ .'_'. $id.'_'.$post_type.'_'.$status;

        if (($rs = $this->cache->file->get($keyCache)) == false) {
            $this->db->select()->from($this->_name);
            $this->db->where('id', $id);
            $this->db->where('post_type', $post_type);
            if(!empty($status)) {
                $this->db->where('status', $status);
            }
            $this->db->limit(1);
            $query = $this->db->get();
            $response = $query->result_array();
            $rs = ($response == false) ? null : $response[0];
            $this->cache->file->save($keyCache, $rs, 600);
        }
        return $rs;
    }

    /**
     *
     * @param Integer $id
     * @param String $post_type
     */
    public function getPage($id, $post_type = Post_model::TIPO_PAGE) {

        $keyCache = __CLASS__ . __FUNCTION__ .'_'. $id.$post_type;

        if (($rs = $this->cache->file->get($keyCache)) == false) {
            $this->db->select()->from($this->_name);
            $this->db->where('id', $id);
            $this->db->where('post_type', $post_type);
            $this->db->where('status', 1);
            $this->db->limit(1);
            $query = $this->db->get();
            $response = $query->result_array();
            $rs = ($response == false) ? null : $response[0];
            $this->cache->file->save($keyCache, $rs, 600);
        }
        return $rs;
    }

}
