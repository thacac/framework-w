<?php $this->layout('layout_back', [
	'title' 			=> 'Accueil',
	'description'	=> '',
]);?>

<?php $this->start('main_content');?>
	<h2>Admin accueil.</h2>
	<div class="row">
    <div class="col s3">
      <div class="card-panel teal">
        <span class="white-text">I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
        </span>
      </div>
	</div>
	<div class="col s9">
      <div class="card-panel teal">
        <span class="white-text">I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
        </span>
      </div>
    </div>
    </div>
	<div class="row">
    <div class="col s12">
      <div class="card-panel teal">
        <span class="white-text">I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
        </span>
      </div>
    </div>
  </div>

<?php $this->stop('main_content');?>
