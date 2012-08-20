<?php
include("header.php");
?>
	<form method="post" id="sign_in">
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="login">Логин</label>
				<div class="controls error">
					<input type="text" class="input-xlarge" id="login" name="login">
				</div> 
			</div> 
			<div class="control-group">        	
				<label class="control-label" for="password">Пароль</label>
				<div class="controls">
					<input type="password" class="input-xlarge" id="password" name="password">
	            </div>
			</div> 
			<button type="button" class="btn btn-primary sign_in_click">Войти</button>
			</div>
		</fieldset>
	</form>
<?php
include("footer.php");
?>