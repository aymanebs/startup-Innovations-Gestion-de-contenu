

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$libel = "";
$category= "";
$price = "";
$team_id="";
$client_id = "";

 $libel = $_POST['libel'];
 $category = $_POST['category'];
 $price = $_POST['price'];
 $team_id = $_POST['team_id'];
 $client_id=$_POST['client_id'];

 require '..\connection.php';
 $requete = "INSERT INTO services (libel,category,price,team_id,client_id)" .
 "VALUES('$libel','$category','$price','$team_id','$client_id')";
$query=mysqli_query($connection,$requete);
if(isset($query)){
    echo"developeur insere avec succes";
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
                <label class="col-sm-3 col-form-label">Label</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="libel"  $value="<?php echo $libel; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="category" $value="<?php echo $category; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" $value="<?php echo $price; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Team</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="team_id" $value="<?php echo $team_id; ?>">
                </div>
                <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Client_id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="client_id" $value="<?php echo $client_id; ?>">
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="/brief2/index.php" role="button">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>