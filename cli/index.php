<?php
    error_reporting(E_ALL);
    include ("header-logged-in.php");
?>

        <script type="text/javascript" src="js/index.js"></script>


<div class="container theme-showcase" role="main">

    <h2>Yobichain-cli</h2>
    <br>
    <div class="row">
        <div class="col-md-10">
            <section class="panel panel-primary">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    </div>

                    <h2 class="panel-title">Yobichain cli</h2>
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

    </div>

</div>

<?php
    include_once "footer.php";
?>
