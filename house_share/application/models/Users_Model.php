<?php
   class Users_Model extends CI_Model {

      function __construct() {
         parent::__construct();
      }

       function user_insert($data) {
         $this->db->insert("users", $data);
      }
   }
?>
