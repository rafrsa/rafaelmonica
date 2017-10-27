<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>Casamento Mô e Rafa - Contagem Regressiva</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="jquery.flipcountdown.js"></script>
		<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />

<!--        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />



		<script>
			jQuery(function($){
				var i = 1000;
				$('#retroclockbox1').flipcountdown();
				var i = 1;
				$('#retroclockbox_counter').flipcountdown({
					tick:function(){
						return i++;
					}
				});
				$('#retroclockbox2').flipcountdown({showHour:false,showMinute:false,showSecond:true});
				$('#retroclockbox3').flipcountdown({tzoneOffset:3,showSecond:false});
				$('#retroclockbox4').flipcountdown({am:true});
				$('#retroclockbox5').flipcountdown({speedFlip:50});
				$('#retroclockbox6').flipcountdown({tick:function(){
					return new Date('05/12/2018 18:00:00');
				}});
			})
		</script>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine"/>
	</head>
	<body>
		<div id="main">
                        <h2 class="aviso">Casamento Mô e Rafa<br>Faltam...</h2>
                        
                        
                            <table id="contagem" style="border:0px;">
                                    <tr>
                                            <td style="width:105px;text-align:center;" class="dias">Dias</td>
                                            <td style="width:95px;text-align:center;" class="dias">Horas</td>
                                            <td style="width:58px;text-align:center;" class="dias">Minutos</td> 
                                            <td style="width:95px;text-align:center;float:left" class="dias">Segundos</td>
                                    </tr>
                                    <tr>
                                            <td colspan="4"><span id="new_year"></span></td>
                                    </tr>
                            </table>
                        
			
			<script>
				jQuery(function($){
					$('#new_year').flipcountdown({
						size:'md',
						beforeDateTime:'05/12/2018 18:00:00'			
					});
				});

				function SalvaDepoimento()
                {
                    var nome = $("#txtNome").val();
                    var depo = $("#txtDepo").val();

                    $.ajax({
                        method: "POST",
                        url: "salvadb.php",
                        data: { depo: depo, nome:nome }
                    })
                        .done(function( msg ) {
                            if(msg)
                            {
                                alert("Depoimento salvo com sucesso!");
                                location.reload();
                            }
                            else
                            {
                                alert("Ocorreu um erro tente novamente!");
                            }
                        });
                }

			</script>
			
			<style>
				body{
					margin:0px; padding:0px;
					background-image: url("back1.png");
				}

				.aviso{
					font-family: 'Tangerine', serif;
					font-size: 48px;
					text-shadow: 4px 4px 4px #aaa;
					font-size: 50px;
                                        width: 100%;
                                        text-align: center;
				}

				.dias{
					font-size: 12px;
				}

				#main{
					margin:0px auto; 
					padding:0px; 	
					width: 420px;
					position: relative;
				}					
                                
                #contagem
                {
                    margin: 0px auto;
                }

                .box {
                    margin: 15px;
                    padding: 15px;
                    transform: rotateZ(2deg);
                    background-color: whitesmoke;
                }

                .box2 {
                    margin: 15px;
                    padding: 15px;
                    transform: rotateZ(-2deg);
                    background-color: whitesmoke;
                }

                .pin {
                    max-width: 20%;
                    position: absolute;
                    transform: translate(-50px, -50px) rotateY(180deg);
                }

                .branco {
                    margin-top: 40px;
                }

                .card-1 {
                    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
                }

                .card-1:hover {
                    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
                }
            </style>
		</div>
        <hr>

        <h2 class="aviso">Deixe uma mensagem para os noivos!</h2>
        
        <?php
            $con = mysqli_connect("br52.hostgator.com.br","rafae415_user","admin","rafae415_rafaelmonica");
            $sql = "select * from depoimentos";
            $res = mysqli_query($con,$sql);
        ?>

        <div class="container branco">
            <div class="row">


        <?php

        $contador = 1;

        while($depo = $res->fetch_assoc()) {

            if($contador%2==0)
            {
                echo '<div class="col-md-3 box card-1 animated FadeIn">';
            }
            else
            {
                echo '<div class="col-md-3 box2 card-1 animated FadeIn">';
            }
            $contador++;
            ?>
<!--                <img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/pin-icon.png" class="pin" alt="">-->
                <div style="background-color: #fff4ed; border: 1px solid #ffe6d1; width: 100%; height: 30px; padding: 3px 0px 0px 5px"><?php echo $depo['nome']; ?></div>
                <div><?php echo $depo['depoimento']; ?></div>
            </div>
            <?php }
        ?>
            </div>
        </div>

    <div class="clearfix"></div>
    <div style="text-align: center; margin-top: 50px">
        <table align="center">
            <tr><td><input type="text" id="txtNome" style="width: 300px" placeholder="Seu nome"/></td></tr>
            <tr><td><textarea id="txtDepo" style="width: 300px; height: 100px" placeholder="Seu depoimento"></textarea></td></tr>
            <tr><td><input type="button" onclick="SalvaDepoimento();" id="btnSalvar" class="btn btn-info" value="Salvar" style=""/></td></tr>
        </table>
    </div>
	</body>
</html>