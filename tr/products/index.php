<?php 
       include '..\app\ProductsController.php';
      $p = new ProductsController();
      $data = $p->getAll();
    $objetos = json_decode($data)->data;
    //  print_r($data);
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
<?php  include '../layouts/head.template.php'?>
    <title>Document</title>
</head>
<body>
<?php  include '../layouts/scripts.template.php'?>
<?php  include '../layouts/nav.template.php'?>

    

    

        <div class="container-fluid">
          <div class="row">
            <button class="btn btn-primary">Agregar</button>
            <?php  include '../layouts/sidebar.template.php'?>
            <div class="col-lg-10 col-sm-12">
            diandae voluptatibus molestias voluptates aut vel sint soluta ea aspernatur! Tenetur ex, inventore excepturi fugiat mollitia voluptas.
            <div class="row">
                  <?php  foreach ($objetos as $producto):?>
                    <div class="col md-4">

                      <div class='card'style='width: 18rem;'>
                        <img src="<?php  echo $producto->cover;?>" class='card-img-top' alt='...'>
                        <div class='card-body'>
                          <h5 class='card-title'><?php echo $producto->name; ?></h5>
                          <p class='card-text'><?php echo $producto->description; ?>
                          </p>
                          <div class='row'>
                          <a href='#' class='btn btn-primary col-md-6' data-bs-toggle="modal" data-bs-target="#exampleModal">Go somewhere</a>
                          <a href='details.php' class='btn btn-warning col-md-6' >Ver detalles</a>
                          <a href='#' class='btn btn-danger col-md-12' onclick="delet(this)">Eliminar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php endforeach;?>
                </div>
            </div>



        </div>

        



      <!--       <div class="col-lg-10 col-sm-12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum magnam, veritatis illo adipisci possimus nisi quisquam qui, praesentium perferendis ipsa culpa doloremque deleniti in ut repellendus necessitatibus dolores blanditiis aperiam?
            </div> -->



    <!--   <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-none d-sm-block">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
<!--     <h1>
              
        qweqweq
    </h1> -->
</body>

<script>
    const delet = function(arg){
    swal({
      title: 'desea eleminar',
      text : 'asdasd',
      icon: 'warning',
      buttons: true,
      dangetMode : true,

    }).then((willDelete)=>{
      if(willDelete){
        swal('eliminado',{
          icon:'delete'
        })
      }
    })
  }
</script>
</html>