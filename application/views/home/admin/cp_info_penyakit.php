<div class="card-panel card-2">
	<form id="update_home" action="<?php echo siteUrl(); ?>main/update_info_penyakit" method="post">
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="anemia_ibu_hamil" type="text" name="anemia_ibu_hamil" rows="2" class="materialize-textarea validate"><?php echo $data['anemia_ibu_hamil'] ?></textarea>
		      <label class="active" for="anemia_ibu_hamil">Anemia Ibu Hamil</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="selama_kehamilan" type="text" name="selama_kehamilan" rows="3" class="materialize-textarea validate"><?php echo $data['selama_kehamilan'] ?></textarea>
		      <label class="active" style"margin-bottom: 10px;" for="selama_kehamilan">Resiko Selama Kehamilan</label>
		    </div>
		</div>	
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="saat_nifas" type="text" name="saat_nifas" rows="2" class="materialize-textarea validate"><?php echo $data['saat_nifas'] ?></textarea>
		      <label class="active" for="saat_nifas">Resiko Saat Nifas</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="saat_persalinan" type="text" name="saat_persalinan" rows="3" class="materialize-textarea validate"><?php echo $data['saat_persalinan'] ?></textarea>
		      <label class="active" style"margin-bottom: 10px;" for="saat_persalinan">Resiko Saat Persalinan</label>
		    </div>
		</div>	
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="fetus_neonatus" type="text" name="fetus_neonatus" rows="2" class="materialize-textarea validate"><?php echo $data['fetus_neonatus'] ?></textarea>
		      <label class="active" for="fetus_neonatus">Fetus dan Neonatus</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="f_umur" type="text" name="f_umur" rows="3" class="materialize-textarea validate"><?php echo $data['f_umur'] ?></textarea>
		      <label class="active" style"margin-bottom: 10px;" for="f_umur">Faktor Umur Ibu</label>
		    </div>
		</div>	
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="f_paritas" type="text" name="f_paritas" rows="2" class="materialize-textarea validate"><?php echo $data['f_paritas'] ?></textarea>
		      <label class="active" for="f_paritas">Faktor Paritas</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="f_usia" type="text" name="f_usia" rows="3" class="materialize-textarea validate"><?php echo $data['f_usia'] ?></textarea>
		      <label class="active" style"margin-bottom: 10px;" for="f_usia">Faktor Usia Kehamilan</label>
		    </div>
		</div>	
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="penyebab" type="text" name="penyebab" rows="2" class="materialize-textarea validate"><?php echo $data['penyebab'] ?></textarea>
		      <label class="active" for="penyebab">Penyebab Anemia</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s12">
		      <textarea id="pencegahan" type="text" name="pencegahan" rows="3" class="materialize-textarea validate"><?php echo $data['pencegahan'] ?></textarea>
		      <label class="active" style"margin-bottom: 10px;" for="pencegahan">Pencegahan Anemia</label>
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