<?php

/**
 * Description of Posts.
 *
 * @author anb
 */
class Banner_model  extends CI_Model {

    protected $_table = 'ac_banners';
    protected $_table_languages = 'ac_languages';

    const CATEGORY_BANNER = 'banner';
    const CATEGORY_SLIDER = 'slider';

    const STATUS_TRUE = 1;
    const STATUS_FALSE = 0;

    /***
     * list of post (lastest news)
     */
    public function getAll(
        $category = '',
        $status = Banner_model::STATUS_TRUE,
        $order = 'desc',
        $limit = 10,
        $offset = '',
        $rows = false
    ) {
        $strRows = (int) $rows;
        $keyCache = __CLASS__ . __FUNCTION__ .'_'.$category.'_'.$status.'_'.$strRows.'_'.$order.$limit.'_'.$offset;

        if (true/*($rs = $this->cache->file->get($keyCache)) == false*/) {
            $this->db->select()->from($this->_table);
            if(!empty($category)) {
                $this->db->where('category', $category);
            }
            if(!empty($status)) {
                $this->db->where('status', $status);
            }
            $this->db->where('id_language', $this->id_lang);
            //$this->db->join($this->_table_languages, "{$this->_table_languages}.id = {$this->id_lang}");

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

}
