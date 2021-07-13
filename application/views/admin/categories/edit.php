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

function buildCatSelect($parent, $catArr, $i = 1, $strDeep = "") {
    $html = "";
    if (isset($catArr['parent_category'][$parent])) {
        foreach ($catArr['parent_category'][$parent] as $category_id) {

            $html .= '<option value="' . $catArr['category'][$category_id]['category_id'] . '">' . $strDeep . $catArr['category'][$category_id]["category_name"] . '</option>';

            if (isset($catArr['parent_category'][$category_id])) {
                if ($strDeep == "") {
                    $strDeep = "--";
                } else {
                    $strDeep .= str_repeat($strDeep, 2);
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
?>

<form action="<?php echo base_url('admin/blogs/edit_category/' . $category['category_id']) ?>" method="post">  
    <div class="col-md-8">
        <div class="form-group">
            <label>Category Name</label>      
            <input type="text" name="category_name" class="form-control" placeholder="Nama Kategori" required  value="<?php echo $category['category_name'] ?>">
        </div>
    </div>  
    <div class="col-md-4">
        <div class="form-group">
            <label>Order Category</label>      
            <input type="number" name="order_category" class="form-control" placeholder="Order Category" required  value="<?php echo $category['order_category'] ?>">
        </div>
    </div>  
    <div class="col-md-8">
        <div class="form-group">
            <select name="parent_category_id" class="form-control"  placeholder="Parent Category Name">
                <option hidden >Parent Category Name</option>
                <?php
                echo buildCatSelect(0, $catX, 1);
                ?>                         
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Description</label>
            <textarea name="category_description" placeholder="Description Category" class="form-control"><?php echo $category['category_description'] ?></textarea>
        </div>
    </div>  
    <div class="col-md-6">
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-primary btn-md">
        </div>
    </div>
</form>