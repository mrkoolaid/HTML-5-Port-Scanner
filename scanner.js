$(document).ready(function(data)
{
});

$(document).ajaxComplete(function()
{
	$("#ip_address").removeAttr("disabled");
});

function doAction(a)
{
	switch(a)
	{
		default:
			$.get("scanner.php?action=default", function(data)
			{
				$("#scan_results").html(data);
			});
		break;

		case "scan":
			var ip = $("#ip_address").val();
			var ports = [ 21, 22, 23, 25, 43, 69, 79, 80, 110, 113, 123, 137, 138, 139, 389, 563, 3074, 443, 465, 1725, 2302, 3124, 3128, 4333, 5500, 6112, 6665, 6666, 6667, 6679, 6697, 6699, 6881, 6999, 6970, 8080, 8081 ];

			for(var i=0;i<ports.length;i++)
			{
				if(i==0)
				{
					$("#scan_results").html("");
				}

				$.ajax(
				{
					url:"scanner.php?action=scan&ip="+ip+"&port="+ports[i],
					success:function(data)
					{
						cb(data);
					}
				});
			}
		break;
	}
}

function cb(ret)
{
	$("#scan_results").append(ret);
}
