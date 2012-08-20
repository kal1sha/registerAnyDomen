<?php
include("header.php");
?>
	<form method="post" id="sign_up">
		<fieldset>
			<div class="control-group"> 
				<label class="control-label" for="login">Логин</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="login" name="login">
				</div>   
			</div>
			<div class="control-group">        	
				<label class="control-label" for="email">Почта</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="email" name="email">
				</div>
			</div>
			<div class="control-group"> 
				<label class="control-label" for="password">Пароль</label>
				<div class="controls">
					<input type="password" class="input-xlarge" id="password" name="password">
	            </div>
			</div>
            <div class="control-group"> 
				<label class="control-label" for="password_confirm">Повторить пароль</label>
				<div class="controls">
					<input type="password" class="input-xlarge" id="password_confirm" name="password_confirm">
	            </div>
	        </div>
            <br/>
			<button type="button" class="btn btn-primary sign_up_click">Зарегестрироваться</button>
			</div>
		</fieldset>
	</form>
<?php
include("footer.php");
?>