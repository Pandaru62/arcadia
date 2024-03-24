<?php 
require_once "header.php" ;
require_once "lib/pdo.php";

$user = "employee";
?>
    <div class="container-lg main-page"> 

        <?php require_once "lib/carousel.php" ?>

        <section id="services" class="my-4 py-3">
            <div class="container-lgpy-4 d-flex align-items-center justify-content-md-around justify-content-center flex-wrap">
                <div class="object-fit-md-contain rounded-5 bg-arc-mint-green p-md-3">
                    <h1 class="text-arc-dark text-center pb-2">Nos services</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, ad tenetur nulla in inventore aspernatur cumque deleniti aliquid magni neque accusantium amet aliquam ut quae eos. Doloribus eos adipisci consequuntur illum totam laborum minima natus placeat explicabo, asperiores illo sed! Similique quasi, expedita, ipsum eligendi est nemo alias odit perspiciatis quisquam saepe consequuntur adipisci non magnam porro eos fugit provident?
                    </p>
                </div>  
            </div>

            <div class="row text-center my-4">

                <?php
                function getServices(PDO $pdo, int $limit = null) {
                    $sql = 'SELECT * FROM services ORDER BY id ASC';
                    if ($limit) {
                        $sql .= ' LIMIT :limit';
                    }
                    $query = $pdo->prepare($sql);
                    if ($limit) {
                    $query->bindParam(':limit', $limit, PDO::PARAM_INT);
                    }
                    $query->execute();
                    return $query->fetchAll();
                }

                $services = getServices($pdo);

                function checkId($id) { // add an offset when the id is an odd number
                    if ($id % 2 == 0) {
                        echo 'col-md-6 offset-md-1 ';
                } else {
                    echo 'col-md-5 ';
                }
            }

                foreach($services as $key => $service): 
                    
                ?>
                
                <div class="<?php checkId($service['id'])?>bg-arc-mint-green rounded-5 py-3 my-3">
                    <img src="assets/services/<?=$service['image']?>" alt="train" class="service-img">
                    <h3 class="fw-normal"><?= $service['name']; ?></h3>
                    <p><?= $service['description']; ?></p>
                </div>

                <?php endforeach ;
                function getMaxId($pdo){
                    $sql = 'SELECT MAX(id) FROM services';
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    return $query->fetch();
                };

                $nextId = getMaxId($pdo)[0]+1;
        
                if($user = "employee"):?>
            
                    <div class="<?php checkId($nextId)?>py-3 my-3 d-flex align-items-center justify-content-center">
                    <a class="btn btn-arc-dark rounded-5 btn-lg" href="#">
                        <i class="bi bi-plus-circle-fill"></i> 
                        Ajouter un nouveau service
                    </a>
                    </div>
            
                <?php endif ; ?>

            </div>
        </section>

    </div>

    <?php require_once "footer.php"; ?>