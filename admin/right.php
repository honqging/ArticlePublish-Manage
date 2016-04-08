<?php
    require_once('../connect.php');
    $sql = "select * from article order by dateline desc";
    $query = mysql_query($sql);
    if($query && mysql_num_rows($query)){
        while($row = mysql_fetch_assoc($query)){
            $data[] = $row;
        }
    }else{
        $data = array();
    }

    print_r($data);
?>

<html>
    <head>

    </head>
    <body>
        <input type="text">
        <h2>hello</h2>
        <table border="1">
            <tr>
                <td align="center" colspan="4">文章管理列表</td>
            </tr>
            <tr>
                <td width="50">标题</td>
                <td width="100">作者</td>
                <td width="200">简介</td>
                <td width="100">操作</td>
            </tr>
            <?php
                if(!empty($data)){
                    foreach ($data as $value){
            ?>
                        <tr>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['author'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td>
                                <a href = "article.del.handle.php?id=<?php echo $value['id'] ?>">删除</a>
                                <a href="article.modify.php?id=<?php echo $value['id'] ?>">修改</a>
                            </td>
                        </tr>

            <?php
                    }
                }
            ?>



        </table>

    </body>
</html>