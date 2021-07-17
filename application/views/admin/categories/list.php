<?php
// Session 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
// Error
echo validation_errors('<div class="alert alert-success">', '</div>');

//set Array
$catX = array(
    'category' => array(),
    'parent_category' => array()
);

foreach ($categories as $categories1) {
    $catX['category'][$categories1['category_id']] = $categories1;
    //creates entry into parent_category array. parent_category array contains a list of all category with children
    $catX['parent_category'][$categories1['parent_category_id']][] = $categories1['category_id'];
}

function buildCatSelect($parent, $catArr, $i=1, $strDeep="") {
    $html = "";
    if (isset($catArr['parent_category'][$parent])) {
        foreach ($catArr['parent_category'][$parent] as $category_id) {

            $html .= '<option value="'.$catArr['category'][$category_id]['category_id'].'">'.$strDeep.$catArr['category'][$category_id]["category_name"].'</option>';
                
            if (isset($catArr['parent_category'][$category_id])) {
                if($strDeep==""){
                    $strDeep = "--";
                } else {
                    $strDeep .= str_repeat($strDeep,2);
                }
                $i++;
                $html .= buildCatSelect($category_id, $catArr, $i, $strDeep);
                $strDeep = "";
                $i++;
            } 
            $i++;
        }
    }
    return $html;
}

function buildCatGrid($parent, $catGridArr, $i=1, $strDeep="") {
    $html = "";
    if (isset($catGridArr['parent_category'][$parent])) {
        foreach ($catGridArr['parent_category'][$parent] as $category_id) {

            $html .= '<tr class="odd gradeX">';
            $html .= '  <td>'.$i.'</td>';
            $html .= '  <td>'.(($strDeep!="") ? $strDeep.">":$strDeep ).$catGridArr['category'][$category_id]['category_name'].'<br>';
            $html .= '      <a href="'.base_url('admin/blogs/categories/' . $catGridArr['category'][$category_id]['slug_category']).'">';
            $html .= '          '.$catGridArr['category'][$category_id]['slug_category'].'<sup><i class="fa fa-link"></i></sup>';
            $html .= '      </a>';
            $html .= '  </td>';
            $html .= '  <td>'.$catGridArr['category'][$category_id]['category_description'].'</td>';
            $html .= '  <td>'.$catGridArr['category'][$category_id]['order_category'].'</td>';
            $html .= '  <td>'.$catGridArr['category'][$category_id]['username'].'</td>';
            $html .= '  <td class="center">';
            $html .= '      <a href="'.base_url('admin/blogs/edit_category/' . $catGridArr['category'][$category_id]['category_id']).'" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>';
            $html .= '      <a href="'.base_url('admin/blogs/delete_category/' . $catGridArr['category'][$category_id]['category_id']).'" class="btn btn-danger" onClick="return confirm(\"Yakin ingin menghapus kategori ini?\")"><i class="fa fa-trash"></i> Delete</a>';
            $html .= '  </td>';
            $html .= '</tr>';   
            
            if (isset($catGridArr['parent_category'][$category_id])) {
                if($strDeep==""){
                    $strDeep = "--";
                } else {
                    $strDeep .= str_repeat($strDeep,2);
                }
                $i++;
                $html .= buildCatGrid($category_id, $catGridArr, $i, $strDeep);
                $strDeep = "";
                $i++;
            } 
            $i++;
        }
    }
    return $html;
}

?>

<!--  Modals-->
<div class="panel-body">
    <p><button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Create Category</button></p>

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Create Category</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/blogs/categories/') ?>" method="post">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input name="category_name" type="text" autofocus required class="form-control" placeholder="Category Name"  value="<?php echo set_value('category_name') ?>">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <div class="form-group">
                                <select name="parent_category_id" class="form-control"  placeholder="Parent Category Name">
                                    <option hidden >Parent Category Name</option>
                                    <?php
                                    echo buildCatSelect(0,$catX,1);
                                    ?>                         
                                </select>
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                            <input name="order_category" type="number" autofocus required class="form-control" placeholder="Order Category"  value="<?php echo set_value('order_category') ?>">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="text" name="button_title" class="form-control" placeholder="Title for transaction button"  value="<?php echo set_value('button_title') ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="category_description" rows="5" class="form-control" placeholder="Description"><?php echo set_value('category_description') ?></textarea>
                        </div>            
                        <div class="form-group">
                            <input type="submit" name="submit" value="Save" class="btn btn-primary btn-md">
                            <input type="reset" name="reset" value="Reset" class="btn btn-default btn-md">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modals-->

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Description</th>
            <th>Order</th>
            <th>Role</th>
            <th width="160px">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        echo buildCatGrid(0, $catX, 1, '');
        ?>
        
    </tbody>
</table>