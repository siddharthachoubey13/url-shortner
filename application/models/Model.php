<?php

class Model extends CI_Model
{
    /**
     * @param str $url
     * @return int last inserted Id
     */

    public function insertData($url)
    {
        if (!empty($url)) {

            $data['url'] = $url;
            $this->db->insert('url_hash', $data);
            return $this->db->insert_id();
        }
    }

    /**
     * @return str URL wrt to ID
     */
    public function getUrl($id)
    {
        $this->db->select('url');
        $this->db->from('url_hash');
        $this->db->where('id', $id);

        return $this->db->get()->row()->url;
    }

    public function getAllUrls()
    {
        $query = "SELECT url, id, click_count FROM url_hash";
        $result = $this->db->query($query);
        return $result->result_array();
    }

    // records click count
    public function trackOpen($id)
    {
        $query = "UPDATE url_hash SET click_count = click_count + 1 WHERE id = $id";
        $this->db->query($query);
    }
}
