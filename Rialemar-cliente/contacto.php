<style>
	.container{
		width: 100%;
		height: 90vh;
		display: flex;
        
	}
    
    .contact_form{
        background: #4e4e4e;
        opacity: 0.9;  
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        width: 60%;
        padding: 30px;
        margin-top: 10vh;
    }
	/*LEFT*/
	.left_container{
		height: 100%;
		width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        
	}
	.left_container .top_container{
		width: 70%;
		height: 20%;
        display: flex;
        justify-content: center;
	}
	.top_container .message{
		color: white;
		height: 50px;
		width: 70%;
		text-align: center;
		line-height: 23px;
		font-size: 1.2em;
	}
	
	input[type="text"], textarea{
		height: 35px;
		width: 70%;
		display: block;
		margin: 10px auto;
		box-sizing: border-box;
        background: #aaaaaa;
        border:none;
	}
	input[type="submit"]{
        background: #101010;
        box-shadow:  0 0 0 3px #fff;
        border-radius: 5px;
        height: 50px;
        width: 100px;
        border:none !important;
        color: #fff;
	}
    input[type="submit"]:hover{
        cursor: pointer;
    }
	/*RIGHT*/
	.right_container{
		height: 100%;
		width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
	}
    .containerContact{
        margin-top: 10vh;
        color: #fff;
        opacity: 0.9;
        background: #4e4e4e;
        
    }
	.right_container .top_container .message{
		
		color: white;
		height: 23px;
		width: 300px;
		margin: 5px auto;
		text-align: center;
		line-height: 23px;
		font-size: 1.2em;
	}
	.data_container{
		text-align: center;
		padding-bottom: 40px;
		width: 100%;
	}
	.data_container .pics{
		width: 100%;
		display: flex;
	}
	.pics .pic_1, .pic_2{
		width: 49%;
	}
	.pic_1 img{
		display: block;
		width: 60px;
		height: 60px;
		margin: 0 auto;
	}
	.pic_2 img{
		display: block;
		width: 40px;
		height: 40px;
		margin: 10px auto;
	}
</style>
<div class="container" style="background-image: url('<?=ROOTURLSERVIDOR?>Images/bg-home7.png'); background-repeat: no-repeat; background-position:center; background-size: 100%;">
	<div class="left_container">
		
		<form class="contact_form">
		<div class="top_container">
			<div class="message">¿Te sientes formal? ¡Cont&aacute;ctanos!</div>
		</div>
			<input type="text" placeholder="Nombre"></input>
			<input type="text" placeholder="Apellidos"></input>
			<input type="text" placeholder="Email"></input>
			<input type="text" placeholder="Asunto"></input>
			<textarea placeholder="Comentario"></textarea>
			<input type="submit"></input>
		</form>
	</div>
	<div class="right_container">
	  <div class="containerContact">
	      
		<div class="top_container">
			<div class="message">¿Prefieres otros métodos?</div>
		</div>
		<div class="data_container">
			<p><b>Mandanos un correo a:</b></p>cheezeburger80@gmail.com
		</div>
		<div class="data_container">
			<p><b>Usa nuestras redes sociales:</b></p>
			<div class="pics">
				<div class="pic_1">
					<img src="<?=ROOTURLSERVIDOR?>Images/fb.png">
				</div>
				<div class="pic_2">
					<img src="<?=ROOTURLSERVIDOR?>Images/tw.png">
				</div>
			</div>
		</div>
		<div class="data_container">
		</div>
	  </div>
	</div>
</div>