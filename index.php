<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>Casamento Mô e Rafa - Contagem Regressiva</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="jquery.flipcountdown.js"></script>
		<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

                .inner{

                    float: left;
                    width: 100%;

                    width: 400px;
                    height: 200px;
                    background-color: white;
                    margin-left: 50px;
                    margin-top: 15px;
                    border-radius: 10px;
                    border: 1px solid gray;
                }

                @media (min-width:100%){
                    .inner{
                        width: 50%;
                    }


                    .box {
                        margin: 15px;
                        padding: 15px;
                        transform: rotateZ(1deg);
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
        
        <?php
            $con = mysqli_connect("br52.hostgator.com.br","rafae415_user","admin","rafae415_rafaelmonica");
            $sql = "select * from depoimentos";
            $res = mysqli_query($con,$sql)->fetch_assoc();

        ?>

        <div class="container branco">
            <div class="row">


        <?php
        foreach ($res as $key => $value) { ?>
            <div class="col-md-3 box card-1 animated fadeIn">
                <img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/pin-icon.png" class="pin" alt="">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto a <mark>maiores</mark> omnis ipsum. Voluptatum earum reiciendis animi magni nam numquam architecto repudiandae ducimus quod aspernatur. Quaerat amet placeat molestiae laborum.</div>
            </div>
            <?php }
        ?>
            </div>
        </div>

    <div class="clearfix"></div>
    <div style="text-align: center; margin-top: 50px">
        <input type="text" style="width: 300px;"/>
        <input type="button" value="Salvar"/>
    </div>
	</body>
</html>