<?php

$con=mysqli_connect('localhost','root','','my store');
if(!$con) {
    die(mysqli_erro($con));
    if(isset($_POST['insert_cat'])){
       $category_title-$_POST['cat_title'];
       $insert_query="insert into 'categories'(category_title) values ('$category_title')";
       $result=mysqli_query($con,$insert_query);
       if($result){
        echo "<script>prompt('Category has been inserted successfully');[ b</script>";
       }
    }
}
?>
<form action=""method="POST" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1">
    <i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat-title" placeholder="Insert Categories"
   aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
 
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat"
   value="Insert Categories"> 
  
</div>

</form>