$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#grid_post .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#grid_post .item').removeClass('list-group-item');$('#grid_post .item').addClass('grid-group-item');});
});