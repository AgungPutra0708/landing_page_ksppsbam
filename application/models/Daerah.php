<?php
Class Daerah extends CI_Model
{
  function Ambilkota()
    {
        $this->db->order_by('id_kota', 'ASC');
        return $this->db->from('t_kota')
          ->get()
          ->result();
    }

    function Ambilkecamatan($kode_kota)
    {
        $this->db->where('kode_kota', $kode_kota);
        $this->db->order_by('id_kec', 'ASC');
        return $this->db->from('t_kecamatan')
            ->get()
            ->result();
    }
    function Ambilkelurahan($kode_kec)
    {
        $this->db->where('kode_kec', $kode_kec);
        $this->db->order_by('id_kel', 'ASC');
        return $this->db->from('t_kelurahan')
            ->get()
            ->result();
    }
    function Ambilrempug($kode_cab)
    {
        $this->db->where('kode_cabang', $kode_cab);
        $this->db->order_by('id_rempug', 'ASC');
        return $this->db->from('t_rempug')
            ->get()
            ->result();
    }

}
?>