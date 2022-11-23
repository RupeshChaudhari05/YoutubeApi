<div class="content-wrapper">
<section class="content-header">
  <div class="content-header-left">
    <h1>View Sub Category</h1>
  </div>
  <div class="content-header-right">
    <a href="<?php echo base_url(); ?>admin/subcategory_work" class="btn btn-primary btn-sm">Add Sub Category</a>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">

      <!-- SELECT `id`, `link`, `goto`, `date_time`, `status` FROM `slider` WHERE 1 -->
          
      <div class="box box-info">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>SL</th>
             <th>Category</th>
                <th>Title</th>
                <th>Date</th>
                <th>status</th>
              <!--   <th>Position</th> -->
                <th width="140">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php  foreach ($category as $key => $value){ ?>
               <tr>
                  <td><?php echo $value['id']; ?></td>
         <td><?php 
         $d= $this->db->query("SELECT * from category WHERE id='$value[c_id]' limit 1");
         $dd=$d->result();
         print_r($dd[0]->title); ?></td>
                  <td><?php echo $value['title']; ?></td>
                  <td><?php echo $value['date_time']; ?></td>
                  <td><?php echo $value['status']; ?></td>

                  <td>                    
                    <a href="<?php echo base_url(); ?>admin/subcategory_work/<?php echo $value['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
                    <a href="<?php echo base_url(); ?>admin/delete_subcategory/<?php echo $value['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
                  </td>
                </tr>
              <?php } ?>
          
                              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>    </div>

  </div>
