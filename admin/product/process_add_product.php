<?php
    include("../../connect.php");
    $tenSP = trim($_POST['product_name']);
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
    $rs2 = mysqli_query($connect,$sql2);
    $nbr = mysqli_num_rows($rs2);
    if($nbr != 0){
        echo "<script>alert('Sản phẩm này đã tồn tại!');
        location.href = 'http://localhost/15_php_2022-main/admin/product/add_product_again.php?maDM=$maDM&&maNSX=$maNSX&&tenSP=$tenSP&&gia=$gia&&discount=$discount&&soluong=$soluong&&mota=$mota&&anh=$anh';
        </script>";
    }
    else{
        $sql = "insert into products (name,price,discount,quantity,image,description,id_category,id_manufacturer)
                values('$tenSP','$gia','$discount','$soluong','$anh','$mota','$maDM','$maNSX')";    
        $rs1 = mysqli_query($connect,$sql); 
        if($rs1){
            echo '<script>alert("Thêm thành công!");
            location.href = "http://localhost/15_php_2022-main/admin/product/add_product.php";
            </script>';
        }    
    }
?>