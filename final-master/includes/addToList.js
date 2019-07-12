$(document).ready(function () {
    var json_data=[];
    $.getJSON("data/dogsBreed.json", function (data) {
    console.log(data)
    json_data = data;
    for (var i of data) {
    var option=$('<option>' + i.dogs + '</option>');
    $("#breed").append(option) ;
}
   
    });
   });