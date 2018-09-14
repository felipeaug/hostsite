<script>

	function valida_form(){
		if (document.getElementById("emailBancoMkt").value.length < 3){
			alert('Favor inserir algum e-mail');
			document.getElementById("emailBancoMkt").focus();
			return false;
		}
		else {
			alert('E-mail cadastrado com sucesso!');
		}
	}

</script>
<form method="post" action="salvar-email-banco-mkt.php" onsubmit="return valida_form(this)">
	<div class="form-group">
		<label for="exampleFormControlInput1">Receba nossas promoções</label>
		<input type="email" class="form-control" id="emailBancoMkt" name="emailBancoMkt" placeholder="seunome@seuemail.com.br" aria-describedby="emailHelp">
		<button type="submit" class="btn btn-success">
			Receber promoções
		</button>
	</div>
</form>