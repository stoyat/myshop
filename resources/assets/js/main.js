$('#currency').change(function(){
    window.location = 'test/?curr=' + $(this).val();
});