<?php
	error_reporting(E_ALL);
	include_once ("header-logged-in.php");
	require_once 'resources.php';
?>

		<script type="text/javascript" src="js/index.js"></script>


<div class="container theme-showcase" role="main">

	<h2>CLI</h2>
	<br>
	<div class="row">
		<div class="col-md-8">
			<section class="panel panel-primary">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					</div>

					<h2 class="panel-title">CLI</h2>
				</header>
				<div class="panel-body">
					<div class="mt-repeater-input col-lg-8">
						<label class="control-label"><strong>Command</strong></label>
						<input type="text" id="command" name="command" placeholder="" class="form-control" /> 
					</div><br/>

					<div data-repeater-item class="mt-repeater-item">
						<button class="btn btn-info" onclick="execute(this, command, output);">Execute</button><br/>
					</div><br/>

					<div data-repeater-item class="mt-repeater-item">
						<label id="progressLabel" for="progress"></label>
						<progress id="progress" value="0" hidden></progress>
					</div>

					<div data-repeater-item class="mt-repeater-item">
						<div id="output" style="overflow-wrap:break-word;">
						</div>
					</div><br/>
				</div>
			</section>
		</div>

		<!-- <div class="col-lg-4">
			<div class="alert alert-warning">
			<span>You may use the following commands to interact with the blockchain. To get more information on a command execute <code>help <i>&lt;command_name&gt;</i></code></span><br><br>
			<?php
			
				echo "<ul>";
				foreach (Literals::MULTICHAIN_COMMANDS as $command) 
				{
					echo "<li>".$command."</li>";
				}
				echo "</ul>";
			?>
			</div>
		</div>	 -->

	</div>

</div>

<?php
	include_once "footer.php";
?>
