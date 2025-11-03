<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_dealership extends CI_Model
{
    private $table;
    function __construct()
    {
        parent::__construct();
        $this->table = "dealership";
    }
    function view_data($where=null,$select="*")
    {
        $this->db->select($select);
        if($where) 
            $this->db->where($where);
        $this->db->where('status',0);
        $this->db->order_by('c_id',"desc");
        return $this->db->get( $this->table);
    }
    function add_data($data)
    {
        $a=$this->db->insert($this->table,$data);
        return $this->db->affected_rows($a);
    }
    
}