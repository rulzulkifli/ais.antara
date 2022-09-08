<?php
    class MasterDataModel{

        private $id;
        private $nama_pajak;
        private $tarif_pajak; 
        private $jenis_pajak;
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getDataPajak($data)
        {
            $this->db->query("call MASTERDATA_SemuaKategoriPajak");
            
            //$this->db->execute();
		    $result_set = $this->db->resultSet();
            $list_pajak = array();
            foreach($result_set as $row)
            {
                array_push($list_pajak, $row);
            }
            return $list_pajak;
        }
    }