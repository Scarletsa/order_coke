<script language="JavaScript">
		var asyncRequest;

		function banner()
		{
			try
			{
				asyncRequest = new XMLHttpRequest();

				asyncRequest.addEventListener("readystatechange", stateChange, false);

				asyncRequest.open("GET", "images.php", true);

				asyncRequest.send(null);
			}
			catch ( exception )
			{
				alert ("Request failed ...");
        asyncRequest.abort();
			}

		}

		function stateChange()
		{
			if (asyncRequest.readyState == 4 && asyncRequest.status == 200)
			{
				document.getElementById("banner").innerHTML = asyncRequest.responseText;
			}

		}

		window.onload = banner;
</script>
