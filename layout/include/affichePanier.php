 <div class="panier">
    <div>
        <a href="index.php" class="btn m-3">Boutique</a>

    </div>
 <section>
        <table>
            <tr>
                <th>image</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
             <?php 
             if(!isset($_SESSION['panier'])){
                                              
                         echo ('panier vide');}
                 else {
                          
                            // liste des produits
                            //récupérer les clés du tableau session
                            $ids = array_keys($_SESSION['panier']);
                            // print_r ($ids);
                            if(!empty($ids)){
                                                 foreach ($ids as $i => $id) {
                                                    //si oui 
                                                    $sql= mysqli_query($connect, "SELECT * FROM produit WHERE id_prod =$id") ;
                                                    $products[$i]=mysqli_fetch_array($sql,MYSQLI_ASSOC);
                                                    ?>
                                                    <tr>
                                                    <td><img src="<?=$products[$i]['my_work']?>"></td>
                                                    <td><?=$products[$i]['nom_prd']?></td>
                                                    <td><?=$products[$i]['prix_prod']?>DA</td>
                                                    <td> <form id="qty_form" >
                                                         <input type="hidden" id="id_p" name="id" value="<?= $id ?>">
                                                         <input type="number" name="qty" id="qty_p" min="1" value="<?= $_SESSION['panier'][$id] ?>" onchange="mettreAJourQuantite(<?= $id ?>, this.value)">
                                                         </form>
                                                         <td><a href="panier.php?del=<?=$id?>"><i class="fa-solid fa-trash " style="color:red;cursor:pointer"></i></a></td>
                                                     
                                                </tr>
                                    <?php
                                              }
              
                }
            }
            ?>
             <tr class="total">
               <td> <th>Total : <?=isset($_SESSION['total_panier'])?$_SESSION['total_panier']:0;?>DA</th></td>
            </tr>
            
        </table>
        
    </section>

  