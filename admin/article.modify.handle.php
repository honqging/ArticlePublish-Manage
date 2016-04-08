<?php
    require_once('../connect.php');
//	print_r($_POST);

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateline = time();

    $sql = "update article set title = '$title', author = '$author', description = '$description', content = '$content',
              dateline = $dateline where id = $id";
//    echo $sql;
    if(mysql_query($sql)){
        echo "<script> alert('修改成功'); window.location.href = 'article.modify.php'; </script>";
    }else{
        echo "<script> alert('修改失败'); window.location.href = 'article.modify.php'; </script>";
    }

?>