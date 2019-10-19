<html>
<head>
	<title>asdasd</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
</head>
<body>
	<input type="text" class="search-input">


	<script>
		jQuery(document).ready(function($) {
			var engine = new Bloodhound({
				remote: {
					url: 'searchPatientByName?name=%QUERY%',
					wildcard: '%QUERY%'
				},
				datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			$(".search-input").typeahead({
				hint: true,
				highlight: true,
				minLength: 1
			}, {
				source: engine.ttAdapter(),
				name: 'usersList',
				templates: {
					empty: [
					'<div class="list-group search-results-dropdown"><div class="list-group-item">Không có kết quả phù hợp.</div></div>'
					],
					header: [
					'<div class="list-group search-results-dropdown">'
					],
					suggestion: function (data) {
						return '<a href="' + data.id + '" class="list-group-item">' + data.name + '</a>'
					}
				}
			});
		});
	</script>
	
	
</body>
</html>