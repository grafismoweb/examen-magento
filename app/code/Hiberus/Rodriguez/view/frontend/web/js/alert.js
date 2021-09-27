define(['jquery'], function($){
    "use strict";
    return function alertNotaAlta(btn)
    {
        $(btn).click(function(){
            alert('La mayor nota del curso fue un ' + maxNote);
        })
    }
});
