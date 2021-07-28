<?php

require_once ("db.php");
require_once ("component.php");

$con = Createdb();

// create button click
if(isset($_POST['create'])){
    createData();
}

// if(isset($_POST['update'])){
//     UpdateData();
// }

// if(isset($_POST['delete'])){
//     deleteRecord();
// }

// if(isset($_POST['deleteall'])){
//     deleteAll();

// }

function createData(){
    $did = textboxValue("did");
    $dname = textboxValue("dname");
    $addr = textboxValue("addr");
    $dob = textboxValue("dob");
    $spl = textboxValue("spl");
    $email = textboxValue("email");
    $ph = textboxValue("ph");
    $expr = textboxValue("expr");
    $sal = textboxValue("sal");

    if($did && $dname && $addr && $dob && $spl && $email && $ph && $expr && $sal){

        $sql = "INSERT INTO doctor (did, dname, addr, dob, spl, email, ph, expr, sal) 
                        VALUES ('$did','$dname','$addr','$dob','$spl','$email','$ph','$expr','$sal')";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Record Successfully Inserted...!");
        }else{
            echo "Error";
        }

    }else{
            TextNode("error", "Provide Data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// get data from mysql database
function getData(){
    $sql = "SELECT * FROM doctor";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// // update dat
// function UpdateData(){
//     $bookid = textboxValue("book_id");
//     $bookname = textboxValue("book_name");
//     $bookpublisher = textboxValue("book_publisher");
//     $bookprice = textboxValue("book_price");

//     if($bookname && $bookpublisher && $bookprice){
//         $sql = "
//                     UPDATE books SET book_name='$bookname', book_publisher = '$bookpublisher', book_price = '$bookprice' WHERE id='$bookid';                    
//         ";

//         if(mysqli_query($GLOBALS['con'], $sql)){
//             TextNode("success", "Data Successfully Updated");
//         }else{
//             TextNode("error", "Enable to Update Data");
//         }

//     }else{
//         TextNode("error", "Select Data Using Edit Icon");
//     }


// }


// function deleteRecord(){
//     $bookid = (int)textboxValue("book_id");

//     $sql = "DELETE FROM books WHERE id=$bookid";

//     if(mysqli_query($GLOBALS['con'], $sql)){
//         TextNode("success","Record Deleted Successfully...!");
//     }else{
//         TextNode("error","Enable to Delete Record...!");
//     }

// }


// function deleteBtn(){
//     $result = getData();
//     $i = 0;
//     if($result){
//         while ($row = mysqli_fetch_assoc($result)){
//             $i++;
//             if($i > 3){
//                 buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "");
//                 return;
//             }
//         }
//     }
// }


// function deleteAll(){
//     $sql = "DROP TABLE books";

//     if(mysqli_query($GLOBALS['con'], $sql)){
//         TextNode("success","All Record deleted Successfully...!");
//         Createdb();
//     }else{
//         TextNode("error","Something Went Wrong Record cannot deleted...!");
//     }
// }


// set id to textbox
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['did'];
        }
    }
    return ($id + 1);
}








