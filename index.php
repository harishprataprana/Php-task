<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <?php
include_once 'db.php';?>
</head>
<style>
    table,tr,th,td{
        border: 2px solid black;
    }
</style>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="https://pngimage.net/wp-content/uploads/2018/06/icone-pessoa-png-5.png" alt="MyOnlineMeal">
        </div>

        <ul>
            <li class="item"><a href="#client">Client</a></li>
            <li class="item"><a href="#add-project">Add Project</a></li>
            <li class="item"><a href="#view">View on-going Projects</a></li>
        </ul>

    </nav>
<div id="home">


    <section id="client">
        <h1 class="h-primary">Client XYZ</h1>
    </section>

    <hr>


    <section id="add-project">
        <div>
            <h1>Add Project</h1>
            <form action="update.php" method="POST">
                <div class="form-group">
                    <label for="name">Topic</label>
                    <input type="text" placeholder="Enter topic" name="topic">
                </div>
                <div class="form-group">
                    <label for="words">Number of words</label>
                    <input type="text" placeholder="Enter number of words" name="words">
                </div>
                <div class="form-group">
                    <label for="info">Additional Information</label>
                    <textarea name="info" cols="30" rows="4" placeholder="Start Writing Something..!!" name="info"></textarea>
                </div>
                <button class="btn">Submit</button>
            </form>
           
        </div>
    </section>
<hr>

    <section id="view">
        <div>
        <h1 class="h-primary">View On - Going Projects</h1>
        <br>
        <table>
            <tr>
                <th>Topic</th>
                <th>Number of wordds</th>
                <th>Instructions</th>
                <th>Scheduled Delivery Date</th>
            </tr>
                <?php 
            $result = mysqli_query($con, "SELECT * FROM harish");
            echo(mysqli_error($con));
            while($row = mysqli_fetch_array($result)){
                $topic = $row['topic'];
            $words = $row['words'];
            $info = $row['info'];
            $depdate = $row['depddate'];
                echo '
            <tr>
                <td>'.$topic.'</td>
                <td>'.$words.'</td>
                <td>'.$info.'</td>
                <td>'.$depdate.'</td>
            </tr>';
            }
            
            ?>
           
    </section>

</div>



  
</body>
</html>