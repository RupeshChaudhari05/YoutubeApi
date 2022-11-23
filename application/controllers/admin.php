<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->model('Imp');
        //echo"this is test";die;
        //if ($this->Admin_model->verifyUser()) {
        //$this->load->view('admin/header');
        $this->load->view('admin/dashbord');
        //  $this->load->view('admin/footer');
        //  }
        
    }
    public function profile()
    {

        $this
            ->load
            ->view('admin/profile');

    }

    public function setting()
    {
    $t =$this->db->query("SELECT * FROM setting WHERE `status`='Active'");
      $res= $t->result();
      $data['setting']=$res;
      //print_r($data);die;
        $this
            ->load
            ->view('admin/setting',$data);

    }


    public function category()
    {
      $t =$this->db->query("SELECT * FROM category  WHERE `status`='Active'");
      $res= $t->result_array();
      $data['category']=$res;
        $this
            ->load
            ->view('admin/include/header');
        $this
            ->load
            ->view('admin/include/sidebar');
        $this
            ->load
            ->view('admin/category/c_dash',$data);
        $this
            ->load
            ->view('admin/include/footer');

    }

    public function category_work($id=0)
    {
        
        extract($_REQUEST);
        $a = $this
            ->db
            ->query("SELECT * FROM category where id='$id'");
        $result = $a->row();
        $data['edit_category'] = $result;

        $this
            ->load
            ->view('admin/include/header');
        $this
            ->load
            ->view('admin/include/sidebar');
        $this
            ->load
            ->view('admin/category/c_add',$data);
        $this
            ->load
            ->view('admin/include/footer');
    }


    public function add_category()
    {
        extract($_REQUEST);
       // print_r($_REQUEST);die;
        $this
            ->form_validation
            ->set_error_delimiters('<div class="error">', '</div>');
        $this
            ->form_validation
            ->set_rules('title', 'Title', 'required');

        if ($this
            ->form_validation
            ->run() == false)
        {

            $this
                ->load
                ->view('admin/include/header');
            $this
                ->load
                ->view('admin/include/sidebar');
            $this
                ->load
                ->view('admin/category/c_add');
            $this
                ->load
                ->view('admin/include/footer');
        }
        else
        {
            if ($id == "" || $id=="0")
            {
               $q = str_replace(' ', '-', $title);
               // $json= json_encode($this->Imp->getdata_api($q),true);
               // $insertField = $json;
               
                 //    echo "INSERT INTO `slider` (`image`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `position`) VALUES ('$filename','$heading','$content','$button1_text','$button1_url','$button2_text','$button2_url','$position')";die;
                $this
                    ->db
                    ->query("INSERT INTO `category` (`title`,`date_time`,`json`) VALUES ('$title',NOW(),'$q')");
                    // print_r("INSERT INTO `category` (`title`,`date_time`,`json`) VALUES ('$title',NOW(),'$q')");die;
              
            }
            else
            {
               
                    $this
                        ->db
                        ->query("UPDATE `category` SET  `title`='$title' WHERE `id` = '$id';");

             

            }

            redirect('admin/category');

            exit;
        }

    }

    public function delete_category($id)
    {
       $v=$this->db->query("DELETE FROM `category` WHERE id='$id'");
       if($v)
       {
         redirect('admin/category');
       }

    }


// sub cateegory



    public function subcategory()
    {
      $t =$this->db->query("SELECT * FROM sub_category");
      $res= $t->result_array();
      $data['category']=$res;
        $this
            ->load
            ->view('admin/include/header');
        $this
            ->load
            ->view('admin/include/sidebar');
        $this
            ->load
            ->view('admin/subcategory/s_dash',$data);
        $this
            ->load
            ->view('admin/include/footer');

    }

    public function subcategory_work($id=0)
    {
        
        extract($_REQUEST);
        $a = $this
            ->db
            ->query("SELECT * FROM sub_category where id='$id'");
        $result = $a->row();
        $data['edit_category'] = $result;

        $this
            ->load
            ->view('admin/include/header');
        $this
            ->load
            ->view('admin/include/sidebar');
        $this
            ->load
            ->view('admin/subcategory/s_add',$data);
        $this
            ->load
            ->view('admin/include/footer');
    }


    public function add_subcategory()
    {
        extract($_REQUEST);
       // print_r($_REQUEST);die;
        $this
            ->form_validation
            ->set_error_delimiters('<div class="error">', '</div>');
        $this
            ->form_validation
            ->set_rules('title', 'Title', 'required');

        if ($this
            ->form_validation
            ->run() == false)
        {

            $this
                ->load
                ->view('admin/include/header');
            $this
                ->load
                ->view('admin/include/sidebar');
            $this
                ->load
                ->view('admin/subcategory/c_add');
            $this
                ->load
                ->view('admin/include/footer');
        }
        else
        {
            if ($id == "" || $id=="0")
            {
               $q = str_replace(' ', '-', $title);
            $json= json_encode($this->Imp->getdata_api($q),true);
               // $insertField = $json;
               
                 //    echo "INSERT INTO `slider` (`image`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `position`) VALUES ('$filename','$heading','$content','$button1_text','$button1_url','$button2_text','$button2_url','$position')";die;
                $this
                    ->db
                    ->query("INSERT INTO `sub_category` (`c_id`,`title`,`date_time`,`json`) VALUES ('$cat','$title',NOW(),'$q')");
                    // print_r("INSERT INTO `category` (`title`,`date_time`,`json`) VALUES ('$title',NOW(),'$q')");die;
              
            }
            else
            {
                 $q = str_replace(' ', '-', $title);
                 $json= json_encode($this->Imp->getdata_api($q),true);
               
                    $this
                        ->db
                        ->query("UPDATE `sub_category` SET  `title`='$title',`c_id`='$cat',`json`='$q' WHERE `id` = '$id';");

             

            }

            redirect('admin/subcategory');

            exit;
        }

    }

    public function delete_subcategory($id)
    {
       $v=$this->db->query("DELETE FROM `sub_category` WHERE id='$id'");
       if($v)
       {
         redirect('admin/subcategory');
       }

    }


public function moredata()
{
    extract($_REQUEST);
    //$th=$this->db->query("UPDATE `setting` SET `sitename`='',`privacy`='',`term`='',`dmca`='',`contactus`='',`vartion`='' WHERE 1");
    $th=$this->db->query("UPDATE `setting` SET `privacy`='$policy',`term`='$terms',`dmca`='$dmca',`contactus`='$contact' WHERE 1");
    if($th)
       {
         redirect('admin/setting');
       }
}

   

}

