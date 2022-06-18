<?php
    include("../../connect.php");
    $id = trim($_POST['id']);
    $tenSP =trim($_POST['name']);
    $tempTenSP =trim($_POST['tempTenSP']);
    $gia =$_POST['price'];
    $discount =$_POST['discount'];
    $soluong =$_POST['quantity'];
    $mota = trim($_POST['description']);
    $maDM = $_POST['id_category'];
    $maNSX = $_POST['id_manufacturer'];
    $path = "../../assets/images/products/";
	$file = $path.basename($_FILES['img']['name']);
	if(!file_exists($file)){
		$rs = move_uploaded_file($_FILES['img']['tmp_name'], $file);
	}
    $anh = $file;
    $sql2 = "SELECT * FROM products WHERE name = '$tenSP'";
    $rs3 = mysqli_query($connect,$sql2);
    $nbr = mysqli_num_rows($rs3);
    if($tenSP == $tempTenSP || $nbr == 0){
        $sql="UPDATE products 
        SET name = '$tenSP',price = '$gia',discount = '$discount' ,quantity = '$soluong',image ='$anh',description = '$mota',id_category = '$maDM',id_manufacturer = '$maNSX'
        WHERE id = $id";
        $rs2 = mysqli_query($connect,$sql);
        if($rs2){
        echo '<script>alert("Sửa thành công!");
        location.href = "http://localhost/15_php_2022-main/admin/product/index.php";
        </script>';  
        }  
    }
    else{
        echo "<script>alert('Tên sản phẩm này đã tồn tại!')
        location.href = 'http://localhost/15_php_2022-main/admin/product/edit_product_again.php?id=$id&&tempTenSP=$tempTenSP&&maDM=$maDM&&maNSX=$maNSX&&tenSP=$tenSP&&gia=$gia&&discount=$discount&&soluong=$soluong&&mota=$mota&&anh=$file';
        </script>";
    }
?>