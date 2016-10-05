<!doctype html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <style>
            th , td{
                padding: 10px;
                background: chocolate;
            }
            .aa{
                text-decoration: none;
                padding: 15px;
                background: orangered; 
            }
        </style>
    </head>
    <body>
       <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="imgInp"><br>
        <img id="blah" src="#" alt="your image" />
        <input type="submit" name="submit" value="update">

    </form>
    <!-- <form id="form1" runat="server" method="post" enctype="multipart/form-data">
        <input type='file' id="imgInp" />
        <img id="blah" src="#" alt="your image" />
    </form> -->

       
      
        <?php 
        include "conf.php";
            if (isset($_POST['submit'])) {
            @$file = $_FILE['file']['name'];
            $picture_filename = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
            $so = basename($_FILES["file"]["name"]);
            $sql = "INSERT INTO `exam1`(`src`) VALUES ('$so')";
            $sql2 = "SELECT    `src` FROM `exam1` order by id desc limit 1";
            $query = mysqli_query($conn, $sql);
            $query2 = mysqli_query($conn, $sql2);
            
            if ($query) {
                header("Location:show.php");
            }else{
                echo "query islemir";
            }
        }
        
        ?>
        
       
       <script >
           function readURL(input) {

                if (true) {
                    var reader = new FileReader();
                
                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this);
            });
       </script>
    </body>
</html>