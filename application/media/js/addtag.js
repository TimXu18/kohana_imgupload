function createCookie(name, value, expires, path, domain)
{
    var cookie = name + '=' + escape(value) + ';';
    if(expires)
    {
       if(expires instanceof Date)
       {
           if(isNaN(expires.getTime()))
             expires = new Date();
       }
       else
       {
         expires = new Date(new Date().getTime() + 
             parseInt(expires)*1000*60*60*24);
       }
        cookie += "expires=" + expires.toUTCString() + ';';
    }
     if(path)
       cookie += "path=" + path + ";";
     if(domain)
       cookie += "domain=" + domain + ";";
   
     document.cookie = cookie;
}


function getCookie(name)
{
    var regexp = new RegExp("(?:^"+name+"|;\\s"+name+")=(.*?)(?:;|$)", "g");
    var result = regexp.exec(document.cookie);
    return (result === null) ? null:result[1];
}

function eraseCookie(name)
{
    createCookie(name,'',-1);
}

