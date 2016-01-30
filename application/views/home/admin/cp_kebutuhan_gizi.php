<div class="card-panel card-2">
	<form id="update_home" action="<?php echo siteUrl(); ?>main/update_kebutuhan_gizi" method="post">
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="trimester_1" type="text" name="trimester_1" rows="2" class="materialize-textarea validate"><?php echo $data['trimester_1'] ?></textarea>
		      <label class="active" for="trimester_1">Trimester I</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="trimester_2" type="text" name="trimester_2" rows="3" class="materialize-textarea validate"><?php echo $data['trimester_2'] ?></textarea>
		      <label class="active" style"margin-bottom: 10px;" for="trimester_2">Trimester II</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="trimester_3" type="text" name="trimester_3" rows="2" class="materialize-textarea validate"><?php echo $data['trimester_3'] ?></textarea>
		      <label class="active" for="trimester_3">Trimester III</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="faktor_pengaruh" type="text" name="faktor_pengaruh" rows="3" class="materialize-textarea validate"><?php echo $data['faktor_pengaruh'] ?></textarea>
		      <label class="active" style"margin-bottom: 10px;" for="faktor_pengaruh">Faktor Yang Mempengaruhi</label>
		    </div>
		</div>	
		<div class="row">	
			<button id="btn_update_home" type="submit" class="col s12 waves-effect waves-green btn center">Update</button>
		</div>
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("textarea").froalaEditor();
	});
</script>