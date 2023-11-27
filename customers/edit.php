<?php 

    // Affichage des informations dans les input formulaire
    require '../connection.php';
    if(isset($_GET["id"])){
    $id=$_GET['id'];
    $requete="SELECT *  FROM utilisateurs WHERE id='$id' ";
    $query=mysqli_query($connection,$requete);
    $row=mysqli_fetch_assoc($query);
    $name = $row["name"];
    $company_name = $row["company_name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $adress = $row["adress"];
    
    }
    
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $id= $_POST["id"];
    $name = $_POST["name"];
    $company_name = $_POST["company_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];

    $requete ="UPDATE utilisateurs 
        SET name='$name',company_name='$company_name',email='$email',phone='$phone',adress='$adress'  
        WHERE id='$id'";
    $query=mysqli_query($connection,$requete);


    header("location:index.php");

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
        <h2>Modification</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' 'data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }


        ?>
        <form method="post" action="edit.php">

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Company Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="company_name" value="<?php echo $company_name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Adress</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="adress" value="<?php echo $adress; ?>">
                </div>

                <?php
                if (!empty($successMessage)) {
                    echo "
            <div class='row mb-3'>
              <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' 'data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
              </div>
            </div>
            ";
                }


                ?>

                <div class="row mb-3 p-3">
                    <div class="col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="index.php" role="button">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>