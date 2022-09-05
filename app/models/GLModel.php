<?php
    class GLModel{

        private $id;
        private $tanggal_jurnal;
        private $kode_jurnal; 
        private $keterangan;
        private $mata_uang;
        private $total;
        private $debet;
        private $kredit;
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getDataJurnal($data)
        {
            $this->db->query("call GL_Lihat_Daftar_Jurnal(:_jenis, :_kode_jurnal, :_keterangan, :_limits, :_offsets)");
            $this->db->bind("_jenis",$data["jenis"]);
            $this->db->bind("_kode_jurnal",$data["kode_jurnal"]);
            $this->db->bind("_keterangan",$data["keterangan"]);
            $this->db->bind("_limits",$data["length"]);
            $this->db->bind("_offsets",$data["start"]);
            //$this->db->execute();
		    $result_set = $this->db->resultSet();
            $list_jurnal = array();
            foreach($result_set as $row)
            {
                array_push($list_jurnal, $row);
            }
            return $list_jurnal;
        }

        public function getJumlahJurnal($data)
        {
            $this->db->query("call GL_Jumlah_Data_Jurnal(:_jenis, :_kode_jurnal, :_keterangan)");
            $this->db->bind("_jenis",$data["jenis"]);
            $this->db->bind("_kode_jurnal",$data["kode_jurnal"]);
            $this->db->bind("_keterangan",$data["keterangan"]);
            //$this->db->execute();
		    $result_set = $this->db->single();
            
            return $result_set['jumlah'];
        }
    }