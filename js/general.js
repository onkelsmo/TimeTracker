function valueChanger()
{
    if ($('button').html() == 'Start')
    {
        var post = $.post('postHandler.php', { btn01: "start"});
    
        post.done(function( data )
        {
            //$('body').empty().html(data);
            $('.output').html(data);
        
            $('button').html('Stop');
        });    
    }
    else
    {
        var post = $.post('postHandler.php', { btn01: "stop"});
    
        post.done(function( data )
        {
            //$('body').empty().html(data);
            $('.output').html(data);
        
            $('button').html('Start');
        }); 
    }
}
