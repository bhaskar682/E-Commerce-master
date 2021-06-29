<script type="text/javascript">
	$(document).ready(function(){
		
		$.ajax({
			url:'CategoryCode.php',
			type:'POST',
			beforeSend:function()
			{
				$('.loader').show();
			},
			success:function(responsedata)
			{
				setTimeout(function(){
					$('.loader').hide();
				},1000);
				$('#category').html(responsedata);
			}
		});
	});
	
      $('#form-data').submit(function(event){
              event.preventDefault()
        var formdata = new FormData(document.getElementById('form-data'));
                $.ajax({
                  url:"SignupCode.php",
                  type:"post",
                  cache:false,
                  contentType:false,
                  processData:false,
                  data:formdata,
                  success: function(html){
                  $('#message').html(html);
                setTimeout(function(){ 
                      window.location.reload();
                    }, 3000)

                }
                });
       });

      
         $('#login-data').submit(function(event){
              event.preventDefault()
            var formdata = new FormData(document.getElementById('login-data'));
          $.ajax({
            url:'loginCode.php',
            type:'post',
            contentType:false,
            cache:false,
            processData:false,
            data:formdata,
            success:function(html)
            {
              $("#show").html(html);
              
            }
          });
      
      });

      


  </script>
		
	
</script>

</body>
</html>