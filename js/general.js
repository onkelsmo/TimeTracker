function valueChanger()
{
    if ($('button').html() == 'Start')
    {
        var post = $.post('#', { btn01: "start"});
    
        post.done(function( data )
        {
            $('body').empty().html(data);
        
            $('button').html('Stop');
        });    
    }
    else
    {
        var post = $.post('#', { btn01: "stop"});
    
        post.done(function( data )
        {
            $('body').empty().html(data);
        
            $('button').html('Start');
        }); 
    }
}
