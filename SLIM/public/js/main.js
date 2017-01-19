$(document).ready(function(){
    $.get('http://slim/api/posts', function(data){
        var output = '<ul>';
            $.each(JSON.parse(data), function(index, post){
                output += '<li>' +post.title+'</li>';
            });
            output += '</ul>';

            $('#posts').html(output);
        });

    $.get('http://slim/api/categories', function(data){
        var output = '<ul>';
            $.each(JSON.parse(data), function(index, categorie){
                output += '<li>' +categorie.name+'</li>';
            });
            output += '</ul>';

            $('#categories').html(output);
        });

    $.get('http://slim/api/categories', function(data){
        var output = '<select id="categorie_id">';
            $.each(JSON.parse(data), function(index, categorie){
                output += '<option value="'+categorie.id+'">'+categorie.name+'</option>';
            });
            output += '</select>';

            $('#categorie_list').html(output);
        });
        
    $('#postForm').submit(function(e){
        e.preventDefault(); 

        var title = $('#title').val();
        var categorie_id = $('#categorie_id').val();
        var body = $('#body').val();

        $.post('http://slim/api/post/add', {
            title: title,
            categorie_id: categorie_id,
            body: body
        }).done(function(data){
            alert("Data loaded: " + data);
        });
    }); 
});

