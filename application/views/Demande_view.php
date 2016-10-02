<div class="container">

	<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" id="formContact" action="" method="post">
          <fieldset>
            <legend class="text-center">Formulaire de contact</legend>
            <?php echo form_open('Demande_controller/creer_demande'); ?>
           	<!-- Sujet input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="sujet">Sujet (obligatoire)</label>
              <div class="col-md-9">
                <input id="sujet" name="sujet" minlength="2" type="text" placeholder="le sujet" class="form-control" required>


              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email"> E-mail (obligatoire)</label>
              <div class="col-md-9">
                <input id="email" name="email" type="email" placeholder="Votre email" class="form-control" required>
              </div>
            </div>
    
            <!-- Description body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Description (ne pas dépasser 200 caractères)</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message"  maxlength="200" placeholder="description..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>

<?php	echo form_close();?>

<!--Affichage du message de confirmation-->
<?php echo $this->session->flashdata('email_sent');?>

<!-- usage du jquery validation engine-->
<script>
$().ready(function() {
		// validate the comment form when it is submitted
		$("#formContact").validate();
</script>


</div>