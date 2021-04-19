<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST) ) {
     $name = $_POST['inputName1'];
     $email = $_POST['inputEmail1'];
     $phone = $_POST['inputPhone1'];
     $subject = $_POST['inputSubject1'];
     $message = $_POST['inputMessage1'];

} else {
     // Change location to index.php and put errorback as true to show toast
     header('Location: index.php/?errorback=true');
     exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Informações do Preenchimento</title>
          <!-- Bootstrap import CSS file -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
     <body>
          <div class="containner">
               <div class="row">
                    <div class="col-sm"></div>
                    <div calss="col-sm-6">
                         <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action active">
                                   <p class="mb-1">Nome:</p>
                                   <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?php echo $name ?></h5>
                                   </div>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                   <p class="mb-1">Email:</p>
                                   <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?php echo $email ?></h5>
                                   </div>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                   <p class="mb-1">Telefone:</p>
                                   <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?php echo $phone ?></h5>
                                   </div>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                   <p class="mb-1">Assunto:</p>
                                   <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?php echo $subject ?></h5>
                                   </div>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                   <p class="mb-1">Mensagem:</p>
                                   <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?php echo $message ?></h5>
                                   </div>
                              </a>
                         </div>
                    <br />
                    <button type="button" class="btn btn-dark" onclick="location.href = '/index.php';">Voltar para o Fomulário</button>
                    </div>
                    <div class="col-sm"></div>
               </div>
          </div>

          <!-- Error Toasts -->
          <div class="toast align-items-center text-white bg-secondary border-0" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
               <div class="d-flex">
                    <div class="toast-body">
                         <div class="spinner-border" role="status" style="width: 0.8rem; height: 0.8rem;">
                              <span class="sr-only">Fechamento automático...</span>
                         </div>
                         A página foi acessada sem informações do formulário, favor preenche-las corretamente.
                    </div>
               </div>
          </div>


          <!-- Bootstrap import JS files -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </body>
</html>