<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event_model extends CI_Model
{

    public $table = 'tbl_event';
    public $id = 'event_id';
    public $order = 'DESC';
    public $slug  = 'event_slug';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get by slug
    function get_by_slug($slug = false)
    {
        if ($slug === false) {
            $this->get_all();
        }
        $this->db->where($this->slug, $slug);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('event_id', $q);
        $this->db->or_like('event_judul', $q);
        $this->db->or_like('event_isi', $q);
        $this->db->or_like('event_slug', $q);
        $this->db->or_like('event_tanggal', $q);
        $this->db->or_like('event_lokasi', $q);
        $this->db->or_like('event_foto', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('event_id', $q);
        $this->db->or_like('event_judul', $q);
        $this->db->or_like('event_isi', $q);
        $this->db->or_like('event_slug', $q);
        $this->db->or_like('event_tanggal', $q);
        $this->db->or_like('event_lokasi', $q);
        $this->db->or_like('event_foto', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function count_all_event()
    {
        $query = $this->db->get($this->table)->num_rows();
        return $query;
    }

    function get_event_list($limit, $start)
    {
        $query = $this->db->get($this->table, $limit, $start)->result();
        return $query;
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Event_model.php */
/* Location: ./application/models/Event_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-10-09 09:29:47 */
/* http://harviacode.com */
