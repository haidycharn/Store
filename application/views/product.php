<!-- <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/buttons.dataTables.min.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/select.dataTables.min.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/dataTables.dateTime.min.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/editor.dataTables.min.css');?>" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.select.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.dateTime.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.editor.min.js');?>"></script> -->
<table id="prod_table" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Category</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($all_products as $prod){
            echo '<tr>';
            echo '<td>'.$prod['prod_id'].'</td>';
            echo '<td>'.$prod['prod_name'].'</td>';
            echo '<td>'.$prod['catg_name'].'</td>';
            echo '<td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>';
            echo '</tr>';
        }?>
    </tbody>
</table>
<?php
    $catg_list = '';
    foreach ($category as $catg) 
    {
        $catg_list .= '{"label":"' . trim($catg['catg_name'])  . '", "value":"'. $catg['catg_id'] .'"},';
    }
?>
<script>
    var editor; // use a global for the submit and return data rendering in the examples
    $(document).ready(function() {
  
     $('#prod_table').DataTable( {
         dom: "Bfrtip",
     } );


 } );
 </script>