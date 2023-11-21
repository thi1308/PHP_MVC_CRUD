<?php
//đây là index trong controller
if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action="";

}
switch ($action){
    case"add";
    if (isset($_POST['submit'])) {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        if (empty($name)|| empty($email)||empty($phone)){
            $error="not null";
        }else{
            $db->action("INSERT INTO student(name,email,phone) VALUES ('$name','$email','$phone')");
            header("location:index.php?controller=student");
        }
    }
    //logic
        require_once "view/add.php";
        break;
        case "edit";
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            foreach ($db->getData("SELECT*FROM student WHERE id='$id'") as $row){
                $name=isset($row['name'])?$row['name']:'';
                $email=isset($row['email'])?$row['email']:'';
                $phone=isset($row['phone'])?$row['phone']:'';
            }
            //đã có thông tin chỉnh sửa
            //xử lí update
            if(isset($_POST['submit'])){
                $name_new=$_POST['name'];
                $email_new=$_POST['email'];
                $phone_new=$_POST['phone'];
                if (empty($name)|| empty($email)||empty($phone)) {
                    $error = "not null";
                }else{
                    $db->action("UPDATE student SET name='$name_new', email='$email_new', phone='$phone_new' WHERE id='$id'");
                    header("location:index.php?controller=student");
                }
            }
        }
        //logic
        require_once "view/edit.php";
        break;
        case "delete";
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $db->action("DELETE FROM student WHERE id ='$id'");
            header("location:index.php?controller=student");

        }
        //logic
        break;
        default;
            //get data ra table
            $data=$db->getData("SELECT*FROM student");
            require_once "view/index.php";

        break;


}