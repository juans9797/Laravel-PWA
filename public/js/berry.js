function getBerryInfo(url)
{
    let token = document.getElementById('token').value;
    let content = document.getElementById('berrydata');
    let data = new FormData();
    data.append('url',url);
    let req = new XMLHttpRequest();
    req.open("POST", berryDetailsURL, true);
    req.setRequestHeader('X-CSRF-TOKEN', token);
    req.onload = function(){
        content.innerHTML = req.responseText;
    }
    req.send(data);

}


function pagination(url)
{
    let token = document.getElementById('token').value;
    let content = document.getElementById('berrydata');
    let data = new FormData();
    data.append('url',url);
    let req = new XMLHttpRequest();
    req.open("POST", berryPaginationURL, true);
    req.setRequestHeader('X-CSRF-TOKEN', token);
    req.onload = function(){
        content.innerHTML = req.responseText;
    }
    req.send(data);
}
