<?php
    include("../../connect.php");
    $tenSP = $_POST['product_name'];
    $gia =$_POST['price'];
    $discount =$_POST['discount'];
    $soluong =$_POST['quantity'];
    $mota = $_POST['description'];
    $maDM = $_POST['id_category'];
    $maNSX = $_POST['id_manufacturer'];
    $path = "../../assets/images/products/";
	$file = $path.basename($_FILES['img']['name']);
	if(!file_exists($file)){
		$rs = move_uploaded_file($_FILES['img']['tmp_name'], $file);
	}
    $anh = $file;
    $sql = "insert into products (name,price,discount,quantity,image,description,id_category,id_manufacturer)
            values('$tenSP','$gia','$discount','$soluong','$anh','$mota','$maDM','$maNSX')";    
    $rs1 = mysqli_query($connect,$sql); 
    if($rs1){
        echo '<script>alert("Thêm thành công!");
        location.href = "http://localhost/15_php_2022-main/admin/product/add_product.php";
        </script>';
    }    
?>