// Function to convert HTML string to DOM element
function fromHTML( html, trim = true )
{
    html = trim ? html.trim() : html;

    if ( !html )
    {
        return null;
    }

    const tpl = document.createElement('template');
    tpl.innerHTML = html;

    const res = tpl.content.children;
    return res.length === 1 ? res[0] : res;
}

// Function to simplify AJAX calls (POST method only)
let xhr;
function ajaxCall( url, data = {}, callback = undefined ) 
{
    if ( !!xhr ) 
    {
        xhr.abort();
    }

    xhr = new XMLHttpRequest();
    xhr.open('POST', url);
    xhr.onload = function () 
    {
        if ( xhr.status === 200 ) 
        {
            if ( !!callback && typeof callback === 'function' ) 
            {
                callback.call(this);
            }
        }
    };
    xhr.send(data);
}