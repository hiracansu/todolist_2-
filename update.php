<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv= "X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> UPDATE PAGE </title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<?php
$id = $_GET['ID'];
include "config.php";
$data1 = mysqli_query($con, "SELECT * FROM `tbltodo` WHERE Id = $id ");
$data = mysqli_fetch_array($data1);
?>


<body class = "bg-white">

<form action="update1.php"  method= "POST">

        <div class= "container">
            <div class= "row justify-content-center m-auto shadow mt-3 py-3">
                <h3 class= "text-center" style="color:crimson;" > UPDATE PAGE</h3>
                <div class= "col-9">
                    <input type = "text" value= "<?php echo $data['list'] ?>" name="list"class= "form-control" >
                </div>

                <div class= "col-2 ">
                    <button class= "btn btn-dark"> UPDATE </button>
                    <input type = "hidden" name = "id" value="<?php echo $data['Id'] ?>">
                </div>

            </div>
        </div>

    </form>
 
</body>

</html>