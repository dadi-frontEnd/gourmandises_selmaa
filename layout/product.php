<?php 
 if(!isset($_SESSION)){
    //si non demarer la session
    session_start();
 }
if(!isset($_SESSION['panier'])){
    $_SESSION['panier']=[];
}
require_once('include/connection.php');

$cat=[
1=>"traditionel",
2=>"prestige",
3=>"wedding cake",
4=>"birthday cake",
5=>"mini cake"
];


?>

  <style>
        .card-img-top {
            max-height: 300px;
            object-fit:cover;
        }
        
    </style>


<div class="container mt-4 ">
    <?php foreach($cat as $id_cat => $nom_cat){ 
        
$sql = "SELECT id_prod,nom_prd, prix_prod, my_work FROM produit WHERE id_cat = $id_cat ORDER BY id_prod DESC";
$result = mysqli_query($connect, $sql); 
  ?>
    <h2 class="title py-4 ">gateaux <?php echo $nom_cat; ?></h2>
    
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                ?>
                <div class="col-sm-12 col-md-3 mb-4 d-flex justify-content-center prod">
                    <div class="card "   style="max-width: 18rem;">
                        <img src="<?php echo $data['my_work']; ?>" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nom_prd']; ?></h5>
                            <p class="card-text"><?php echo $data['prix_prod']; ?> DA</p>
                        </div>
                        <div>
                         <a href="ajouter_panier.php?id=<?=$data['id_prod']?>" class="btn m-3">Ajouter au Panier</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<div class='col-12 no-products'>No products found in this category.</div>";
        }
        ?>
    </div>
    <?php }?>
</div>

<?php $connect->close(); ?>
