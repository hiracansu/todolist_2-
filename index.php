<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv= "X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> TODO </title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>









<body class = "bg-light">                               
    <form action="insert.php"  method= "POST">

        <div class= "container">
            <div class= "row justify-content-center m-auto shadow mt-3 py-3">
                <h3 class= "text-center" style="color:crimson;" >TO DO LIST UPGRADE</h3>
                <div class= "col-9">
                    <input type = "text" name="list"class= "form-control" >
                </div>

                <div class= "col-2 ">
                    <button class= "btn btn-dark"> ADD </button>
                </div>

            </div>
        </div>

    </form>




    <?php
        include "config.php";
        $rawData= mysqli_query($con, "SELECT * FROM `tbltodo`")
    ?>




    <div class= "container">
        <div class= "col-10 bg-white m-auto mt-3">

        <table CLASS = "table">
            <tbody>
                <?php 
                    while($row = mysqli_fetch_array($rawData)){
                ?>

                <tr>
                    
                    <td><?php echo $row['list'] ?> </td>

                    <td style= "width: 10%;"><a href= "delete.php? ID= <?php echo $row['Id'] ?>"class= "btn btn-outline-danger">delete</a></td>
                    <td style= "width: 5%;"><a href= "update.php? ID= <?php echo $row['Id'] ?>" class= "btn btn-outline-primary">update</a></td>
                </tr>

                <?php
                    }
                ?>

            </tbody>
        </table>

        </div>
    </div>




</body>

</html>