<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>Casamento Mô e Rafa - Contagem Regressiva</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="jquery.flipcountdown.js"></script>
		<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
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

			</style>
		</div>
        
        <?php
            $con = mysqli_connect("br52.hostgator.com.br","rafae415_user","admin","rafae415_rafaelmonica");
            $sql = "select * from depoimentos";
            $res = mysqli_query($con,$sql)->fetch_assoc();

        ?>

    <div style="width: 100%;">

        <?php
        foreach ($res as $key => $value) {
                echo '<div class="inner">
                        <div style="100%;height: 30px; border-bottom: 2px solid gray;"></div>
                    </div>';
            }
        ?>
    </div>

    <div class="clearfix"></div>
    <div style="text-align: center; margin-top: 50px">
        <input type="text" style="width: 300px;"/>
        <input type="button" value="Salvar"/>
    </div>
	</body>
</html>