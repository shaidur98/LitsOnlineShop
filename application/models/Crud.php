<?php 
    class Crud extends CI_Model {

        function __construct()
        {
            parent::__construct();
        }

        function check_access($ap) {
            $id = $this->session->userdata('oit_bmda_uid');
            $is_access = $this->db->get_where('user_access',array('id'=>$id))->row()->$ap;
            if($is_access == '')
                return false;
            else
                return true;
        }

        function save_data($table, $data) {
            if(!$this->db->insert($table, $data)) {
                die('Something error in inserting data!');
            }
            else {
                return $this->db->insert_id();
            }
        }

        function delete_row($table, $id) {
            $is_exist = $this->db->get_where($table, array('id'=>$id))->num_rows();
            if($is_exist > 0) {
                $this->db->where('id',$id);
                if(!$this->db->delete($table)) {
                    die('Something error in deleting data!');
                }
                $this->session->set_flashdata('msg','Item has been deleted successfully!');
            }
            else {
                redirect('bsss/not_found');
            }
            
        }

        function delete_file($folder, $file) {
            $loc = './uploads/'.$folder.'/'.$file;
            chmod($loc,0755);
            if(is_file($loc)){
                unlink($loc);
                //echo 'File '.$file.' has been deleted';
              } else {
                echo 'Could not delete '.$file.', file does not exist';
              }
        }

        function update_row($table, $id, $data) {
            $is_exist = $this->db->get_where($table, array('id'=>$id))->num_rows();
            if($is_exist > 0) {
                $this->db->where('id',$id);
                $data['modified_at'] = date("Y-m-d H:i:s");
                if(!$this->db->update($table, $data)) {
                    die('Something error in updating data!');
                }
                $this->session->set_flashdata('msg','Item has been updated successfully!');
            }
            else {
                redirect('bsss/not_found');
            }
            
        }

        function get_one($table, $id)
        {
            $is_exist = $this->db->get_where($table, array('id'=>$id))->num_rows();
            if($is_exist > 0) {
                $result = $this->db->get_where($table, array('id'=>$id))->row();
                return $result;
            }
            else {
                redirect('bsss/not_found'); 
            }
        }
        
        function upload_img($folder, $fname) {
            $config['upload_path'] = './uploads/'.$folder.'/';
            $config['allowed_types']        = 'jpg|png|gif';
            //$config['max_size']             = 100;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload($fname))
            {
                $error = array('error' => $this->upload->display_errors());
                die($error['error']);
            }
            else {
                return $this->upload->data()['file_name'];
            }
        }

        function get_all($table)
        {
            //$this->db->order_by('id','desc');
            $result = $this->db->get($table)->result();
            return $result;
        }

        function get_all_by_order($table, $field, $order)
        {
            $this->db->order_by($field,$order);
            $result = $this->db->get($table)->result();
            return $result;
        }

        function get_all_reverse($table)
        {
            $this->db->order_by('id','desc');
            $result = $this->db->get($table)->result();
            return $result;
        }

        function get_with_condition($table, $field, $val) {
            $result = $this->db->get_where($table, array($field => $val))->result();
            return $result;
        }

        function get_last($table,$limit) {
            $this->db->limit($limit);
            $this->db->order_by('id','desc');
            $result = $this->db->get($table)->result();
            return $result;
        }

        function get_all_random($table) {
            $this->db->order_by('id','RANDOM');
            $result = $this->db->get($table)->result();
            return $result;
        }

        function get_all_bydate($table, $recent=NULL) {
            $this->db->select('*');
            if($recent == NULL) {
                $this->db->order_by('event_date','asc');
            }
            else {
                $this->db->limit(3);
                $this->db->order_by('event_date','asc');
                $this->db->where('event_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 90 DAY)');
            }
            return $this->db->get($table)->result();
        }

        function get_name_by_id($table, $field, $id) {
            $result = $this->db->get_where($table, array('id'=>$id));
            if($result->num_rows() > 0) {
                return $result->row()->$field;
            }
            else {
                return '--';
            } 

        }

        function set_encid($table, $id) {
            $this->db->where('id',$id);
            $data = array(
                'encid' => md5($id)
            );
            $this->db->update($table, $data);
        }
		
        function increment($table, $id, $fld) {
            $count = $this->db->get_where($table, array('id'=>$id))->row()->$fld;
            $data = array(
                $fld => $count+1
            );
            $this->db->where('id',$id);
            $this->db->update($table,$data);
        }

        function change_status($table, $id, $fld) {
            $status = $this->db->get_where($table, array('id'=>$id))->row()->$fld;
            if($status == 0)
                $status = 1;
            else
                $status = 0;
            $data = array(
                $fld => $status
            );
            $this->db->where('id',$id);
            $this->db->update($table,$data);
        }

}
?>