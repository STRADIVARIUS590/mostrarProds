 
<!DOCTYPE html>
<html lang="en">
<head>
 
    <?php include 'layouts/head.template.php' ?>
    <?php include 'layouts/scripts.template.php'?>
<style>
    .col{
        border: 1px solid red;
    }
</style>
    <title>Document</title>
</head>
<body>


    <div class="container-fluid ">
        <div class="row justify-content-center">

            <div class="col-md-6">  
                <form action="app/AuthController.php"  method="POST">

                    <fieldset>
                        <legend>Datos</legend>
                        <label class="form-outline mb-1">Name</label>
                        <input  name= 'name'type="text" class="form-control mb-4" placeholder="nombre" value="crve_19@alu.uabcs.mx">
                        <label class="form-outline mb-1">Password</label>
                        <input name='pass' type="password" class="form-control mb-4" placeholder="Password" value="A9*27rh6%#271N">
                        <button type="submit" class="btn btn-danger">Ok</button>
                        <input type="hidden" name='action'action='access' value="access">
                    </fieldset>
                </form>
            </div>
        </div>
    </div> 

<!--     <div class="container">
        <section>
            <div class="row">
                <div class="col">
                    Col
                </div>
                <div class="col">
                    Col
                </div>
                <div class="col">
                    col
                </div>
            </div>
        </section>
    </div>
 -->
<!--     <h1>Acceso al panel</h1>
    <div class="container mx-auto justify-center flex   ">
        
            <form action="">
                <fieldset>
                    <div class="columns-1">
                        <legend>
                            Datos
                        </legend>
                 
                        <input
                        type="text"
                        class="w-full bg-white  border border-solid py-1"
                        id=""
                        placeholder="Email"
                      />
                      <br>
                      <br>
                        
                        
                  
                        <input type="text" 
                        class="w-full border border-solid bg-white py-1"
                        name="" id=""
                        placeholder="Password">
                        <button type="button"  class="px-12 py-2 bg-green-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                        >Ok</button>
                      
                       
                    </div>
            </fieldset>
        </form>
    
    </div> -->
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> 
</body>
</html>