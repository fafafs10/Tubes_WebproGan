<?php

class Camera_model extends CI_Model
{
    public function getAllCamera()
    {
        return $this->db->get('camera')->result_array();
    }

    public function insertDataCamera()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "tipe" => $this->input->post('tipe', true),
            "harga" => $this->input->post('harga', true)
        ];

        $this->db->insert('camera', $data);
    }

    public function getCameraById($id)
    {
        return $this->db->get_where("camera", ["id_camera" => $id])->row_array();
    }

    public function editDataCamera()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "tipe" => $this->input->post('tipe', true),
            "harga" => $this->input->post('harga', true)
        ];

        $this->db->where('id_camera', $this->input->post('id_camera'));
        $this->db->update('camera', $data);
    }

    public function deleteDataCamera($id)
    {
        return $this->db->delete("camera", ["id_camera" => $id]);
    }

    public function searchDataCamera()
    {
        $keyword = $_POST['keyword'];
        $this->db->like('nama', $keyword);
        $this->db->or_like('tipe', $keyword);
        return $this->db->get('camera')->result_array();
    }
}
