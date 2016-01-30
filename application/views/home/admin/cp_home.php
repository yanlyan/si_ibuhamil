<div class="card-panel card-2">
	<form id="update_home" action="<?php echo siteUrl(); ?>main/update_home" method="post">
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="welcome_text" type="text" name="welcome_text" rows="2" class="materialize-textarea validate"><?php echo $data['welcome_text'] ?></textarea>
		      <label class="active" for="welcome_text">Welcome Text</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="anemia_text" type="text" name="anemia_text" rows="3" class="materialize-textarea validate"><?php echo $data['anemia'] ?></textarea>
		      <label class="active" style"margin-bottom: 10px;" for="anemia_text">Pengertian Anemia</label>
		    </div>
		</div>	
		<div class="row">	
			<button id="btn_update_home" type="submit" class="col s12 waves-effect waves-green btn center">Update</button>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#anemia_text").froalaEditor();
	});
</script>