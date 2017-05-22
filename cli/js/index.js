
function execute(button, command, output)
{
	var xmlhttp = new XMLHttpRequest();

	try {

		if (button != null) {
			button.disabled = true;
		}
		
		xmlhttp.onreadystatechange = function () {
			 if (xmlhttp.readyState == 4) {
				if (button != null) {
					button.disabled = false;
				}
				if (xmlhttp.status == 200) {
					output.innerHTML = xmlhttp.responseText;
				}
			}
		};
		
		xmlhttp.open("POST", "processor.php", true);
		var formData = new FormData();
		formData.append("command", command.value);
		xmlhttp.send(formData);
	}
	catch(ex){
		button.disabled = false;
		alert("Error: " + xmlhttp.statusText + ex.description);
	}
}