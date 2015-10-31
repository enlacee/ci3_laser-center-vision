<?php

/**
 * Description
 *
 * @author anb
 */
class MetaData_model  extends CI_Model {

    protected $_table = 'ac_metadata';

    /***
     * get all data
     */
    public function getAll($metaKey, $limit = 10, $offset = '', $rows = false) {
        $strRows = (int) $rows;
        $keyCache = __CLASS__ . __FUNCTION__ . $metaKey.'_'.$strRows
            . '_' . $limit . '_' . $offset . '_' . $this->id_lang;
        $rs = $this->cache->file->get($keyCache);

        if ($rs == false) {
            $this->db->select('meta_value')->from($this->_table);
            if(!empty($metaKey)) {
                $this->db->where('meta_key', $metaKey);
            }
            $this->db->where('id_language', $this->id_lang);

            // -------- init
            if (!empty($limit) && !empty ($offset)) {
                $this->db->limit($limit, $offset);
            } elseif (!empty($limit)) {
                $this->db->limit($limit);
            }

            $query = $this->db->get();
            if (is_object($query)) {
                if ($rows == true)
                    $rs = $query->num_rows();
                else
                    $rs = $query->result_array();
            } else {
                $rs = false;
            }
            // -------- end
            $this->cache->file->save($keyCache, $rs, MY_Controller::CACHE_TIME);
        }

        return $rs;
    }

}
