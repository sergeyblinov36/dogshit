
$(document).ready(function(){
    $.ajax({
    //crossDomain: true,
    header:("Access-Control-Allow-Origin: *"),
    dataType:"Json",
    type: 'GET',
    url: 'dbindex.php',
    success: function(data){
    var count=1;
    console.log(data);

 
    $.each(data, function(key, val) { 
        var container = document.createElement("div");
        container.className = "container";
        var small_container = document.createElement("div");
        small_container.className = "small_container";
        var img = document.createElement("img");
        var heart_lg = document.createElement('img');
        heart_lg.id = "heart_logo";
        heart_lg.className = "small_logos";
        var p1 = document.createElement("p");
        p1.innerHTML = val.description;
        var link = document.createElement('a');
        link.innerHTML = '<a href="#?itemId='+val.name+'">'+val.name+'</a>'
        img.setAttribute("src",val.picture);
        count++;

        container.appendChild(img);
        container.appendChild(link);
        container.appendChild(heart_lg);
        container.appendChild(small_container);
        small_container.appendChild(p1);
        var wrap = document.getElementById("wrapper");
        wrap.append(container);
        });
}
})
})
