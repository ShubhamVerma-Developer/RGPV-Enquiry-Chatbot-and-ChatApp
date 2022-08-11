<?php
include_once "need.php";

if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);

                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $unique_id.$name.$img_name;

                            if(move_uploaded_file($tmp_name, "../image/".$new_img_name)){
                            $sql1=mysqli_query($con, "UPDATE `usertable` SET img='$new_img_name' WHERE unique_id={$unique_id};");
                            $sql2=mysqli_query($con, "UPDATE `admin` SET img='$new_img_name' WHERE unique_id={$unique_id};");
                            if($sql1){
                          echo ("<script LANGUAGE='JavaScript'>

                              window.location.href='dashboard.php';

                              </script>");
                            }
                            else{
                             echo "Something went wrong. Please try again!";
                            }

                            }
                            else{
                            echo "Please upload an image file - jpeg, png, jpg";
                            }
                            }
                            }
                            }



?>