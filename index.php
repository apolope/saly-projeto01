<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulário de Cadastro</title>
    <!-- Bootstrap import CSS file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="containner">
        <div class="row">
            <div class="col-md-3"></div>
            <div calss="container-fluid">
                <form class="needs-validation" action="/show.php" method="post" novalidate>
                    <div class="form-group">
                        <label for="inputName">Nome</label>
                        <input type="text" class="form-control" id="inputName1" name="inputName1" aria-describedby="nameHelp" placeholder="Digite o seu nome" required>
                        <small id="nameHelp" class="form-text text-muted">Você deve digitar o seu nome completo neste campo, sem abreviações.</small>
                        <div class="invalid-feedback">
                            Você precisa realmente nós dizer quem você é, é para isto que serve esse formulário, para que possamos te escutar. :) 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail1" name="inputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu email" required>
                        <small id="emailHelp" class="form-text text-muted">Você deve digitar o seu email, não se preocupe, não compartilharemos o seu email com mais ninguém.</small>
                        <div class="invalid-feedback">
                            Se você nós contar seu email nós juramos que será mantido em segurança máxima... 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone">Telefone</label>
                        <input type="tel" class="form-control" id="inputPhone1" name="inputPhone1" aria-describedby="phoneHelp" placeholder="Digite o seu telefone" required>
                        <small id="phoneHelp" class="form-text text-muted">Você deve digitar o número do seu telefone, não se preocupe, não compartilharemos o seu telefone com mais ninguém.</small>
                        <div class="invalid-feedback">
                            Não se preocupe, não ficaremos te ligando importunamente com aqueles números de DDD 11. 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Assunto</label>
                        <input type="text" class="form-control" id="inputSubject1" name="inputSubject1" aria-describedby="subjectHelp" placeholder="Digite o assunto desejado" required>
                        <small id="subjectHelp" class="form-text text-muted">Você deve digitar o assunto que deseja abordar.</small>
                        <div class="invalid-feedback">
                            Tente ser mais claro com isso! Prometo que será muito mais fácil se você contar para nós. 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Mensagem</label>
                        <textarea class="form-control" rows="5" id="inputMessage1" name="inputMessage1" required></textarea>
                        <div class="invalid-feedback">
                            Assim eu não te ouço. ^^ 
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-3"></div>
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
    <script>
        // Validation Script Bootstrap
        // Disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()

        // Show toast if $_GET errorback = true
        $(document).ready(function(){
            let getParams = window.location.search.substr(1)
            let splited = getParams.split("=")
            if(splited[1])
            {
                $('.toast').toast('show');
            }
        });

    </script>
</body>
</html>