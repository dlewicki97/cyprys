<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_m extends CI_Model  
{
    public function get_all($table, $order = '') {
        if($order) $this->db->order_by($order, 'asc');
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_all_where($table, $field, $value, $order = '') {
        if($order) $this->db->order_by($order, 'asc');
        $this->db->where([$field => $value]);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_with_limit($table,$limit,$sort = null) {
        $this->db->limit($limit);
        if($sort != null){
            $this->db->order_by('created',$sort);
        }
        $query = $this->db->get($table);
        return $query->result();
    }
    

    public function get_one($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_prefixes(){
        $query = $this->db->get('jezyki');
        $query = $query->result();
        $prefixes = [];
        $i =0;
        foreach($query as $q){
            $prefixes[$i] = $q->prefix;
            $i++;
        }    
        return $prefixes;
    }


    public function get_subpage($page) {
        $this->db->where(['page' => $page]);
        $query = $this->db->get('subpages');
        return $query->row();
    }

    public function get_subpage_by_table_name($table_name){
        $this->db->where(['table_name' => $table_name]);
        $query = $this->db->get('subpages');
        return $query->row();
    }
    
    public function get_api_photos(){
        $this->db->where(['is_photo' => 1]);
        $query = $this->db->get('media');
        return $query->result();
    }

    public function get_images($table, $table_name, $id) {
            $this->db->where([
            'item_id' => $id,
            'table_name' => $table_name,
            ]);

        $query = $this->db->get($table);
        return $query->result();
    }

    public function insert($table, $data) {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function update($table, $data, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function delete($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->delete($table);
        return $query;
    }
}