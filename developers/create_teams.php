

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$leader_id = "";


 $leader_id = $_POST['leader_id'];
 

 require '..\connection.php';
 $requete = "INSERT INTO developers_teams (leader_id)" .
 "VALUES($leader_id)";
$query=mysqli_query($connection,$requete);
if(isset($query)){
    echo"insere avec succes";
}
else{
    echo"erreur d insertion";
}

} else {
    echo "Form not submitted.";
}





?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h2>Add</h2>
        <form method="POST" >
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">leader_id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="leader_id"  $value="<?php echo $leader_id; ?>">
                </div>
            </div>
           
     

                <div class="row mb-3 p-3">
                    <div class="col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="/brief2/developers.php" role="button">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>