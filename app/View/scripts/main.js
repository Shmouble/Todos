$(document).ready(function(){
   $('form').on('submit', function (e) {
       e.preventDefault();

       $.ajax({
           type: 'post',
           url: 'index.php?action=add',
           data: $('form').serialize()
       })
   })
});