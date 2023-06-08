<?php
    include_once("connect.php");

    $sql="SELECT *FROM book";

    $result=$con->query($sql);

    if(isset($result)&&$result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo $row["ISBN"]."이 ISBN!"."<br>";
            echo $row["title"]."이 제목!"."<br>";
            echo $row["author"]."이 지은이!"."<br>";
            echo $row["publisher"]."이 출판사!"."<br>";
            echo $row["pub_date"]."이 출판일!"."<br>";
            echo $row["discount"]."이 가격!"."<br>";
            echo $row["description"]."이 설명!"."<br>";
        }
    } else echo "검색된 데이터가 없다."
?>