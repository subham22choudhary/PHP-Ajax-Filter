<?php
require_once("b2cdb.php");
?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <title>B2C Website</title>
</head>

<body>
    <!-- Advertisement Fold -->
    <style>
        .section {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .b2c-first-fold-3 {
            max-height: 20rem;
            max-width: 100%;
        }

        button {
            border: 2px solid #e6987c;
            background: #c0f0b7;
            color: #1f1b1b;
            text-transform: uppercase;
            font-weight: 600;
        }

        button:hover {
            background: #1f1b1b;
            color: #c0f0b7;
        }
    </style>

    <section class="b2c-first-fold-1 section">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-12 mt-3">
                    <div class="b2c-first-fold-2 text-center">
                        <img src="images/womens-section.jpg" class="img-fluid b2c-first-fold-3">
                        <div class="b2c-first-fold-4 mt-3">
                            <h4>Women</h4>
                            <a href="#"><button>Shop Now</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <div class="b2c-first-fold-2 text-center">
                        <img src="images/mens-section.jpg" class="img-fluid b2c-first-fold-3">
                        <div class="b2c-first-fold-4 mt-3">
                            <h4>Men</h4>
                            <a href="#"><button>Shop Now</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Products feature Fold -->
    <style>
        .b2c-second-fold-4 {
            min-width: 100%;
            min-height: 100%;
            max-width: 20rem;
            max-height: 14rem;
        }
    </style>

        <?php	
            $pdo_statement = $pdo_conn->prepare("SELECT * FROM productfilter ORDER BY id DESC");
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
        ?>

    <section class="section-space d-flex justify-content-center my-3">
            <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="text-center">

                <!-- DropDown Filter -->
                <!-- <label for="filterdata">Choose a Items:</label>
                <select name="filterdata" id="filterdata" onchange="filterData(this.value);">
                    <option value="all">All</option>
                    <option value="cat_one">Shoes</option>
                    <option value="cat_two">Clothes</option>
                    <option value="cat_three">Furniture</option>
                </select> -->


                <!-- Button Filter -->
                    <button class="button" onClick="return filterData('all');">All</button>
                    <button class="button" onClick="return filterData('cat_one');">Shoes</button>
                    <button class="button" onClick="return filterData('cat_two');">Clothes</button>
                    <button class="button" onClick="return filterData('cat_three');">Furniture</button>
                </div>
            </div>
        </div>
    </section>

    <section class="b2c-second-fold-1">
        <div class="container">
            <div class="row cardParentDiv">


                <?php
                    if(!empty($result)) { 
                        foreach($result as $row) {
                ?>

                <div class="col-md-4 col-12 mt-3">
                    <div class="b2c-second-fold-2 text-center">
                        <img src="<?php echo $row["image"]; ?>" class="img-fluid b2c-second-fold-4" alt="images">
                        <div class="b2c-second-fold-3 mt-3">
                            <div class="d-flex justify-content-around">
                                <h4 class="mx-3"><?php echo $row["product"]; ?></h4>
                                <h4 class="mx-3"><?php echo $row["price"]; ?>/-</h4>
                            </div>
                        </div>
                    </div>
                </div>               
                
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </section>




</body>

</html>

<script>
function filterData(catname){
    
    jQuery.ajax({
        type:"POST",
        url:"ajax.php",
        data:{'action':'datafilter','cat':catname},
        success:function(response){
            console.log(response);
            if(response !== ""){
                $(".cardParentDiv").html("");
                $(".cardParentDiv").html(response);
            }
        },
        error:function(err){
            console.log(err);
        }
    })

}
</script>