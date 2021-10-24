<?php
    @session_start();

    function get_publish_work(){
        $datas = array();

        $sql = "SELECT * FROM `work` WHERE `publish` = 1;";
        $query = mysqli_query($_SESSION['link'], $sql);

        if($query){
            if(mysqli_num_rows($query)>0){
                while ($row = mysqli_fetch_assoc($query))
                {
                  $datas[] = $row;
                }
            }
            mysqli_free_result($query);
            //echo "{$sql} 執行正確：" . mysqli_error($_SESSION['link']);
        }else{
            echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
        }
        return $datas;
    }
    function get_publish_data($category){
        $datas = array();

        $sql = "SELECT * FROM `data` WHERE `publish` = 1 AND`category`='$category'";
        $query = mysqli_query($_SESSION['link'], $sql);

        if($query){
            if(mysqli_num_rows($query)>0){
                while ($row = mysqli_fetch_assoc($query))
                {
                  $datas[] = $row;
                }
            }
            mysqli_free_result($query);
            //echo "{$sql} 執行正確：" . mysqli_error($_SESSION['link']);
        }else{
            echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
        }
        return $datas;
    }
    function get_publish_subdata($rootid){
        $datas = array();

        $sql = "SELECT * FROM `subdata` WHERE `publish` = 1 AND `root_id` = $rootid";
        $query = mysqli_query($_SESSION['link'], $sql);

        if($query){
            if(mysqli_num_rows($query)>0){
                while ($row = mysqli_fetch_assoc($query))
                {
                  $datas[] = $row;
                }
            }
            mysqli_free_result($query);
            //echo "{$sql} 執行正確：" . mysqli_error($_SESSION['link']);
        }else{
            echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
        }
        return $datas;
    }

    function get_work($id){
        $result = null;

        $sql = "SELECT * FROM `work` WHERE　`publish` = 1 AND `id` ={$id};";
        $query = mysqli_query($_SESSION['link'], $sql);
        
        if($query){
            if(mysqli_num_rows($query)==1){
                $result = mysqli_fetch_assoc($query);
            }
            mysqli_free_result($query);
            //echo "{$result}";
        }else{
            echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
        }
        return $result;
    }
    
?>