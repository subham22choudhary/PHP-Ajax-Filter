<?php
//ajaxfilter.php


require_once("b2cdb.php");

if(isset($_POST['action']) && ($_POST['action'] == "datafilter")){
  $catname = $_POST['cat'];
  
  $returnString = "";
  

  if($catname == "all"){
    $pdo_statement = $pdo_conn->query("SELECT * FROM productfilter");
  }else{
    $pdo_statement = $pdo_conn->prepare("SELECT * FROM productfilter WHERE cat_type = '".$catname."' ");    
  }
  
    $pdo_statement->execute();
    $results = $pdo_statement->fetchAll();

  
    foreach ($results as $row) {

      $returnString .= '<div class="col-md-4 col-12 mt-3">
                            <div class="b2c-second-fold-2 text-center">
                                <img src='. $row["image"] .' class="img-fluid b2c-second-fold-4" alt="images">
                                <div class="b2c-second-fold-3 mt-3">
                                    <div class="d-flex justify-content-around">
                                        <h4 class="mx-3">' . $row["product"] . '</h4>
                                        <h4 class="mx-3">' . $row["price"] . '/-</h4>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        
  }
  echo $returnString;
  die;
}

?>