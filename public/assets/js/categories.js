$(document).on('change',"select", function() {
        var id = $(this).children(":selected").attr("id");
        var level=$(this).parent().siblings(".level").val();
        $("input[name='subCategoryId"+level+"']").val(id);
        $(this).parent().parent();
         $.ajax({
         type: "POST",
         url:$(this).parent().parent().attr("action") , 
         data: $(this).parent().parent().serialize(),
         dataType: "text",  
         cache:false,
         success: 
              function(response){
                  
                $("#content").append(response);  //as a debugging message.
              }

     
        });
});
      
      
      
$(document).on("submit","#resetForm",function(e){
    e.preventDefault();
    $.ajax({
         type: "POST",
         url:$(this).attr("action") , 
         data: {},
         dataType: "text",  
         cache:false,
         success: 
              function(response){
                  
                $("#page").html(response);  //as a debugging message.
              }

     
        });
});
      
      