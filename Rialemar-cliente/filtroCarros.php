<script type="text/javascript" src="<?=ROOTURL?>JS/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="<?=ROOTURL?>JS/validation.min.js"></script>
<script type="text/javascript" src="<?=ROOTURL?>JS/form_scriptRegister.js"></script>
<script type="text/javascript" src="<?=ROOTURL?>JS/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=ROOTURL?>JS/range.js"></script>

<link href="<?=CSS?>bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?=CSS?>bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

<style>  
    .filtro{
        height:auto; 
         width: 100%; 
    }
    form{
        display: flex;
        justify-content: space-around;
        align-items: top;
        height:5vh; 
        position: absolute; 
        z-index: 1;
        padding-top:13vh; 
        width: 100%; 
       
        color: #fff; 
        padding-left: 15px;
    }
</style>
<div class="filtro">
	<form method="post">
		<div>
			<label for="color_carro">Color del carro:</label>
			<input type="text" style="background:#959595; border:none;" name="color_carro" />
		</div>
		<div>
		<label for="marca_carro">Marca del carro:</label>
			<input type="text" style="background:#959595; border:none;" name="marca_carro" />
		</div>
		<div>
			<label for="precio_carro"></label>
			<input id="rango" type="range" style="width: 70%;" min=100000 max=16000000 step=10000 value=16000000 name="precio_carro"/>
       </div>
        <div>
			<label for="valor">Precio:</label>
			<input id="valor" type="text" style="background:#959595; border:none;" name="valor" value=""/>
        
		</div>
		<button type="submit"  style="background:#959595; border:none;" name="btn-filter">Filtrar</button>
	</form>
</div>
