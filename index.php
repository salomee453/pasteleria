<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pasteleria bellarose</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body  class="bg-dark">


    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <img src="img/dona.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            pasteleria bellarose
  </a>
    
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logica.php">Logica</a>
      </li>
    
        </div>
    </form>
  </div>
</nav>
  </div>
</nav>

     </header>
     <main>
       
       <div class="container text-white">
       <div class="row justify-content-center mt-4">
       <div class= "col-4">
       <form action="index.php" method="POST">
       <h3 class="text center mb-4">factura de compra</h3>
       <div class="row mb-3">
    <div class="col">
         <input type="text" class="form-control" placeholder="producto1" name="producto1">
            </div>
             <div class="col">
                   <input type="number" class="form-control" placeholder="precio($)"name="precio1">
               </div>
               </div>
               <div class="row mb-3">
    <div class="col">
         <input type="text" class="form-control" placeholder="producto2" name="producto2">
            </div>
             <div class="col">
                   <input type="number" class="form-control" placeholder="precio($)" name="precio2">
               </div>
               </div>
               <div class="row mb-3">
    <div class="col">
         <input type="text" class="form-control" placeholder="producto3" name="producto3">
            </div>
             <div class="col">
                   <input type="number" class="form-control" placeholder="precio($)" name="precio3">
               </div>
               </div>
               <div class="row mb-3">
    <div class="col">
         <input type="text" class="form-control" placeholder="producto4" name="producto4">
            </div>
             <div class="col">
                   <input type="number" class="form-control" placeholder="precio($)" name="precio4">
               </div>
               </div>
               <div class="row mb-3">
    <div class="col">
         <input type="text" class="form-control" placeholder="producto5" name="producto5">
            </div>
             <div class="col">
                   <input type="number" class="form-control" placeholder="precio($)" name="precio5">
               </div>
               </div>
               <button type="submit" class="btn btn-primary btn-block" name="botoncalcular">calcular</button>

            </form>
          </forms>
       </div>
   
         



     </div>
    <?php if(isset($_POST["botoncalcular"])): ?>
        <div class="border bg-dark mt-3 text-while pl-3">
        <h5> factura de la compra n°1</h5>
          <h6> 
          
       <?php 
            $precio1=$_POST["precio1"];
            $producto1=$_POST["producto1"];

            $precio2=$_POST["precio2"];
            $producto2=$_POST["producto2"];

            $total=$precio1+$precio2;

            echo("el producto 1 es un:".$producto1."----($) ".$precio1); 
            echo("<br>");
            echo("el producto 2 es un:".$producto2."----($) ".$precio2);
            echo("<br>");
            echo("<br>");
            echo("*************");
            echo("el total de la compra fue de:".$total);
           
        ?>
        
          </h6>

         
         <?php endif   ?>
     

     <div class="row mt-4">
     <h4 class="display-1">
     </h4>

     
     </div>



     </main>
     <footer>
     
     
     
     </footer>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>