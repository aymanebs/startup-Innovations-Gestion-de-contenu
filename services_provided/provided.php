<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-3 pb-5">
                <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">YI</span><span class="text-white">Yourinterface</span></h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text white"><i class="fa-solid fa-bars-staggered"></i></button>
            </div>
            <ul class="list-unstyled px-2 p-3">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block "><i class="fa-solid fa-house"></i>   Dashboard</a></li>
                <li class=""><a href="../customers/index.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user"></i>   Customers</a></li>
                <li class=""><a href="../developers/developers.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-people-group"></i>  Dev teams</a></li>
                <li class=""><a href="../services_provided/provided.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-wrench"></i>   Services</a></li>
                
            </ul>
            <hr class="h-color mx-2">
            
        </div>
        <div class="content">
    <div class="container my-5" >
        <h2>List of services provided</h2>
        <br>
        <a class="btn btn-success" href="./create.php" role="button">Add service </a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    
                    <th>libel</th>
                    <th>category</th>
                    <th>price</th>
                    <th>delivery_date</th>
                    <th>team_id</th>
                    <th>client_id</th>
                    <th>client_name</th>
                    <th>company_name</th>
                    <th>action</th>
                   
                </tr>
            </thead>
            <tbody>
            <?php 
            require '../connection.php';
            $requete="SELECT services.id,services.libel,services.category,services.price,services.TEAM_ID,services.CLIENT_ID,services.delivery_date,utilisateurs.name,utilisateurs.company_name 
            FROM services
             JOIN utilisateurs
            ON utilisateurs.id=services.CLIENT_ID";
            $query=mysqli_query($connection,$requete);
            // read data of each row
            while($row = mysqli_fetch_assoc($query)){
               
                $editUrl="edit.php?id=$row[id]";
                $deletUrl="delete.php?id=$row[id]";
                echo"
                <tr>
                <td>$row[id]</td>
                
                <td>$row[libel]</td>
                <td>$row[category]</td>
                <td>$row[price]</td>
                <td>$row[delivery_date]</td>
                <td>$row[TEAM_ID]</td>
                <td>$row[CLIENT_ID]</td>
              
                <td>$row[name]</td>
                <td>$row[company_name]</td>
              
                <td>
                    <a class='btn btn-primary btn-sm' href='$editUrl'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='$deletUrl'>Delet</a>
                </td>
            </tr>
            ";
            }
            ?>
            
           </tbody>
        </table>
    </div>
        </div>
    </div>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script>
        $(".sidebar ul li").on('click', function(){
            $(".sidebar ul li.active").removeclass('active');
            $(this).addClass('active');
        })
    </script> -->
</body>
</html>