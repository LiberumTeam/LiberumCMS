$('#nav a').tipsy({gravity: 'w'});
$('.buttons a').tipsy({gravity: 's'});
$('.tooltip').tipsy({gravity: 's'});
$(".editor").markItUp(mySettings);
$('#fformatting').change(
	function()
	{
		var val = $('#fformatting').val();
		if(val == 'html')
		{
            $("#fcontent").attr("disabled", "disabled");
            $("#fcontent2").removeAttr("disabled");
			$("#fcontentd").hide();
			$("#fcontent2").show();
		}
		else if(val == 'bbcode')
		{
            $("#fcontent2").attr("disabled", "disabled");
            $("#fcontent").removeAttr("disabled");
			$("#fcontentd").show();
			$("#fcontent2").hide();
		}
	}
);