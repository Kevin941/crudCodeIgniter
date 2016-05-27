<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

        private $table="t_users";
        private $_data = array();

        public function __construct(){
            parent:: __construct();

        }

        function index($limit){
            $offset =$this->uri->segment(3);
            return $this->db->limit($limit, $offset)->get($this->table);
        }
        function count(){
            return $this->db->count_all_results($this->table);
        }


         function insert($param){
            $field = array(
                'username'=>$param['username'],
                'surname'=>$param['surname'],
                'password'=>$param['password'],
                'country'=>$param['country'],
                'email'=>$param['email'],                
                'role'=>$param['role']
            );
            $this->db->insert($this->table, $field);
        }

        function delete($param){
            $this->db->delete($this->table, $param['condition']);
        }


          function view($param){
            $query =$this->db->get_where($this->table, $param['condition']);
            return $query->row_array();
        }

        function update($param){
            $fiels = array(
                'id'=>$param['id'],
                'username'=>$param['username'],
                'surname'=>$param['surname'],
                'password'=>$param['password'],
                'country'=>$param['country'],
                'email'=>$param['email'],                
                'role'=>$param['role']
            );
            
            $condition =array('id'=> $param['id']);

            $query =$this->db->get_where($this->table, $condition);
            $result = $query->result_array();
            if(!empty($result)){
                $this->db->where($condition);
                $this->db->update($this->table, $fiels);
            }
        }

         function search($limit, $key){
            $offset =$this->uri->segment(3);
            return $this->db->like('email', $key)->or_like('username', $key)->limit($limit, $offset)->get($this->table);
          
        }

        function login($email, $password) 
        {

            $this -> db -> select('id, email, password, username, role');
            $this -> db -> from('t_users');
            $this -> db -> where('email', $email);
            $this -> db -> where('password', $password);
            $this -> db -> limit(1);
             
            $query = $this -> db -> get();
             
            if($query -> num_rows() == 1)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }   

         function count_search($key){
            return $this->db->like('email', $key)->count_all_results($this->table);
        } 
}