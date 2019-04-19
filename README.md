<!DOCTYPE html>
<html lang="pt-br">

<head>

			<!-- include alertify.css -->
		<link rel="stylesheet" href="alertifyjs/css/alertify.css">

		<!-- include boostrap theme  -->
		<link rel="stylesheet" href="alertifyjs/css/themes/bootstrap.css">

		<!-- include alertify script -->
		<script src="alertifyjs/alertify.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <title>Título da página</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.js"></script>
        <script src="js/pace.min.js"></script>
        <?php include("script.php"); ?>
</head>
<style>
    * {
        padding: 0: margin: 0;
    }
    
    body {
        background-color: #eee;
    }
    
    #fazer {
        background-color: #D64550;
        padding: 50px;
        float: right;
        width: 30%;
        text-align: center;
        margin-rigth: 5%;
        margin-top: 30px;
        color: #fff;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        box-shadow: 3px 7px 10px #000;
        -webkit-box-shadow: 3px 7px 10px #000;
        -moz-box-shadow: 3px 7px 10px #000;
    }
    
    #fazendo {
        background-color: #3066BE;
        float: right;
        padding: 50px;
        margin-left: 20px;
        width: 30%;
        text-align: center;
        margin-top: 30px;
        color: #fff;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        box-shadow: 3px 7px 10px #000;
        -webkit-box-shadow: 3px 7px 10px #000;
        -moz-box-shadow: 3px 7px 10px #000;
    }
    
    #feito {
        background-color: #62C370;
        margin-left: 20px;
        float: right;
        padding: 50px;
        width: 30%;
        text-align: center;
        margin-right: 4%;
        margin-top: 30px;
        color: #fff;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        box-shadow: 3px 7px 10px #000;
        -webkit-box-shadow: 3px 7px 10px #000;
        -moz-box-shadow: 3px 7px 10px #000;
    }
    
    #btn {
        margin-top: 500px;
    }
    
    #fazer_btn {
        width: 200px;
        margin-top: 100px;
    }
    #fazerbtn{
    	background-color: #D64550;
    	margin-top: 20px;
    }
    #fazendobtn{
    	background-color: #3066BE;
    	margin-top: 20px;
    	margin-left: 20px;
    	margin-right: 20px;
    }
    #feitobtn{
    	background-color: #62C370;
    	margin-top: 20px;
    }
		/* PRELOAD */
	.pace {
	  -webkit-pointer-events: none;
	  pointer-events: none;

	  -webkit-user-select: none;
	  -moz-user-select: none;
	  user-select: none;
	}

	.pace-inactive {
	  display: none;
	}

	.pace .pace-progress {
	  background: #ff0054;
	  position: fixed;
	  z-index: 2000;
	  top: 0;
	  right: 100%;
	  width: 100%;
	  height: 2px;
	}
</style>

<body id="body">
    <center>
        <h1>Gerenciamento de Trabalhos</h1>
        <hr>
    </center>
    <div id="globa">

        <div id="feito">
            <h2>Feito</h2>
            <br>
            <div id="feitoShow">
            	<table border="1" class="table table-dark">
	            	<thead>
						<tr>
							<th><i class="fas fa-briefcase"></i></th>
							<th>DEL</th>
							<th>EDIT</th>
						</tr>
					</thead>
					<tbody id="tfeito">

					</tbody>
				</table>
            </div>
            <br>
            <br>
        </div>

        <div id="fazendo">
            <h2>Fazendo</h2>
            <br>
            <div id="fazendoShow">
            	<table border="1" class="table table-dark">
	            	<thead>
						<tr>
							<th><i class="fas fa-briefcase"></i></th>
							<th>DEL</th>
							<th>EDIT</th>
							<th>EDIT</th>
						</tr>
					</thead>
					<tbody id="tfazendo">

					</tbody>
				</table>
            </div>
            <br>
            <br>
        </div>

        <div id="fazer">
            <h2>Fazer</h2>
            <br>
            <div id="fazerShow">
            	<table border="1" class="table table-dark">
	            	<thead>
						<tr>
							<th><i class="fas fa-briefcase"></i></th>
							<th>DEL</th>
							<th>EDIT</th>
						</tr>
					</thead>
					<tbody id="tfazer">

					</tbody>
				</table>
            </div>
            <br>
            <br>

        </div>
    </div>
    <center>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar Atividade</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div>
                            <label>Adicione uma atividade!</label>
                            <br>
                            <input type="text" name="atividade_input" id="atividade_input" placeholder="Ex: Concluir PI" class="form-control">
                            <br>
                            <br>

                            <label>Escolha em qual se encaixa</label>
                            <br>
                            <select name="tipo" id="tipo" class="form-control">
                                <option>Selecione</option>
                                <option value='1'>FAZER</option>
                                <option value='2'>FAZENDO</option>
                                <option value='3'>FEITO</option>
                            </select>
                         <button id="fazerbtn" class="btn btn-success">Fazer</button>
                        <button id="fazendobtn" class="btn btn-success">Fazendo</button>
                        <button id="feitobtn" class="btn btn-success">Feito</button>

                        </div>

                    </div>


                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" id="teste" data-dismiss="modal">Cancelar</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="fazer_btn">
            Adicionar
        </button>
    </center>
    <div id="xama">
	</div>

</body>
<script> 
</script>

</html>