<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="{{asset('bootstrap/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Gallery js file -->
		<script src="{{asset('bootstrap/js/jquery.picEyes.js')}}"></script>
		<script>
			$(function(){
			//picturesEyes($('.demo li'));
			$('.demo li').picEyes();
			});
		</script>