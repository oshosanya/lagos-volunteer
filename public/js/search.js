var timer;
var keywords;
var searchparam
function up()
{
	timer = setTimeout(function()
	{
		searchparam = $('#searchparam').val();
		keywords = $('#searchinput').val();
		if(keywords.length>0&&searchparam!='searchby')
		{
			$.post('http://localhost:8000/search', 
				{keywords: keywords, searchparam: searchparam}, function(markup) 
					{
						$('#search-results').html(markup)
			});
		}
		else {
			$('#search-results').html('Please select a search parameter');
		}
	})
}

function down()
{
	clearTimeout(timer);
}