<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display donar details</title>
    <style>
        body{
            height: 100%;
            width: 100%;

        }
        .container
        {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            
        }
        h1{
            font-family: 'Times New Roman', Times, serif;
        letter-spacing: 1px;
         color:rgb(9, 95, 142);
         
        }
       
        form ,tr,table {
            padding: 2%;
           
        }
        table
        {
           
            
            height:auto;
            width:500px;
            background-color: gold;
            border:black 3px solid ;
        }
        input,button
        {
            align-self: center;
        }
    </style>
</head>

<body>
    <div class="container">
       
    <form action="" method="post">
    <center>
            <h1>Donar details</h1>

        </center><br>
       <br>

        <input type="text" name="id" id="" placeholder="enter id no." required>
        <br>
        <br><button type="submit" name="search_by_id">search</button><br><br>
    
    <?php

    $conn = mysqli_connect("localhost", "root", "", "test");
    if (isset($_POST['search_by_id'])) {
        $bdid = $_POST["id"];
        $query = "select * from regblooddonate where id='$bdid' ";
        $result = mysqli_query($conn, $query);






        ?>

       <br>
            <table>
                <thead>
                    <tr>
                        
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Blood group</th>

                    </tr>

                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                               
                                <td>
                                    <?php echo $row["fullname"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["address"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["email"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["bloodgroup"]; ?>
                                </td>
                            </tr>
                            <?php

                        }
                    } else {
                        ?>
                        
                            <td colspan="4"> No data available for this </td>

                        
                        <?php
                    }
                    ?>
                </tbody>
            </table>
    </form>
        </div>
    <?php

    }
    ?>
</body>

</html>