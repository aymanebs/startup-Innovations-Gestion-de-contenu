<?php 

    // Affichage des informations dans les input formulaire
    require '../connection.php';
    if(isset($_GET["id"])){
    $id=$_GET['id'];
    $requete="SELECT services.id,services.libel,services.category,services.price,services.TEAM_ID,services.CLIENT_ID,services.delivery_date,utilisateurs.name,utilisateurs.company_name 
    FROM services
    JOIN utilisateurs
    ON utilisateurs.id=services.CLIENT_ID 
    WHERE services.id='$id' ";
    $query=mysqli_query($connection,$requete);
    $row=mysqli_fetch_assoc($query);
    $libel = $row["libel"];
    $category = $row["category"];
    $price = $row["price"];
    $TEAM_ID = $row["TEAM_ID"];
    $CLIENT_ID = $row["CLIENT_ID"];
    $name = $row["name"];
    $company_name = $row["company_name"];

    
    }
    
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $libel= $_POST["libel"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $TEAM_ID = $_POST["TEAM_ID"];
    $name = $_POST["name"];
    $company_name = $_POST["company_name"];
   

    $requete = "UPDATE services
             JOIN utilisateurs ON utilisateurs.id = services.CLIENT_ID
            SET services.libel = '$libel',
                services.category = '$category',
                services.price = '$price',
                services.TEAM_ID = '$TEAM_ID',
                services.CLIENT_ID = '$CLIENT_ID',
                utilisateurs.name = '$name',
                utilisateurs.company_name = '$company_name'
            WHERE services.id = '$id'";

$query = mysqli_query($connection, $requete);


 header("location:./provided.php");

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
        <form method="post" action="">

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Libel</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="libel" value="<?php echo $libel; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="category" value="<?php echo $category; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" value="<?php echo $price; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">TEAM_ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="TEAM_ID" value="<?php echo $TEAM_ID; ?>">
                </div>
            </div>    
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">CLIENT_ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="CLIENT_ID" value="<?php echo $CLIENT_ID; ?>">
                </div>
            </div>    
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>    
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">company_name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="company_name" value="<?php echo $company_name; ?>">
                </div>
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

                <div class="row mb-3">
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