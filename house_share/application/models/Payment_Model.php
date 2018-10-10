<?php
   class Payment_Model extends CI_Model {

      function __construct() {
         parent::__construct();
      }

      public function insert($data) {
         if ($this->db->insert("payment", $data)) {
            return true;
         }
      }

      public function delete($paymentid) {
         if ($this->db->delete("payment", "Pid = ".$paymentid)) {
            return true;
         }
      }

      public function update($data,$paymentid) {
        $this->db->where("Pid", $paymentid);
        $this->db->update("payment", $data);
     }


   }
?>
