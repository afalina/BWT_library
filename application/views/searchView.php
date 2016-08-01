<div class="jumbotron search">
    <div class="header">
        <h1>Найди, что искал</h1>
        <h2>среди всего жизненного разнообразия</h2>
    </div>
</div>

<form action="" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="inputText" id="inputText" placeholder="Введите ваш поисковый запрос">
    </div>
</form>
<h3>Результаты поиска</h3>
<div class="panel panel-default" id="content">
</div>

<script type="text/javascript">

$(function(){
  $("#inputText").on('input', function(){
     var inputText = $("#inputText").val();
     $.ajax({
       type: "POST",
       url: '',
       data: {"inputText": inputText},
       success: function(response){
          $("#content").html(response);
       }
     });
   });
});
</script>