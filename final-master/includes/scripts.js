$(document).ready(function () {
    
    // getting stationID to parameter
    function findGetParameter(parameterName) {
        var result = null,
            tmp = [];
        location.search
            .substr(1)
            .split("&")
            .forEach(function (item) {
                tmp = item.split("=");
                if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
            });
        return result;
    }

    let stationID = findGetParameter('stationID');

    var json_data = []
    $.getJSON("data/dogDATA.json", function (data) {
        json_data = data

        var i;
        for (i = 0; i < json_data.length; ++i) {
            if (json_data[i].StationId == stationID) {
                $('#StationID').attr('value', json_data[i].StationId)
                $('#StationName').attr('value', json_data[i].StationName)
                $('#Dogname').attr('value', json_data[i].Dogname)
                $('#Time').attr('value', json_data[i].Time)
                $('#Care').attr('value', json_data[i].Care)
                $('#Latitude').attr('value', json_data[i].Latitude)
                $('#Longitude').attr('value', json_data[i].Longitude)
                $('#Comment').attr('value', json_data[i].Comment)

                if (json_data[i].Care.SmartScreen == 'True')
                    $('input[name=Care1').prop('checked', true)
                if (json_data[i].Care.Conditioner == 'True')
                    $('input[name=Care2').prop('checked', true)
                if (json_data[i].Care.Light == 'True')
                    $('input[name=Care3').prop('checked', true)
                if (json_data[i].Care.Wifi == 'True')
                    $('input[name=Smart4').prop('checked', true)
                break;
            }
        }
    });

    var json_data = []
    $.getJSON("data/dogDATA.json", function (data) {
        var flag = 0;
        json_data = data
        for (var row of data) {
            var table_row = $(
                '<tr>' +
                '<td>' + row.StationId + '</td>' +
                '<td>' + row.StationName + '</td>' +
                '<td>' + row.Dogname + '</td>' +
                '<td>' + row.Time + '</td>' +
                '<td>' + row.Care + '</td>' +
                '<td>' + row.Care.Wifi + '</td>' +
                '<td>' + row.Comment + '</td>' +
                '<td>' + '<input type="submit" name="stationID" class="btn btn-success btn-circle" value=' + row.StationId + "></input></td>" +
                '</tr>'
            )

            children = Dogname.childNodes;
            for (var i = 3; i < children.length; i++) {
                var option = children[i]
                var district = option.textContent;
                if (district == row.Dogname)
                    flag = 1;
            }

            if (flag == 0) {
                var optionDist = $('<option>' + row.Dogname + '</option>')
            }

            $('#Dogname').append(optionDist)
            $('tbody').append(table_row)
            flag = 0;

            children = Time.childNodes
            for (var i = 3; i < children.length; i++) {
                var option = children[i]
                var city = option.textContent;
                if (city == row.Time)
                    flag = 1;
            }

            if (flag == 0) {
                var optionCity = $(
                    '<option>' + row.Time + '</option>')
            }
            $('#Time').append(optionCity)
            $('tbody').append(table_row)
            flag = 0;
        }

    });

    function UpdateTable(value, match, parameter = '', parameter2 = '') {
        for (var row of json_data) {
            let tmp
            if (parameter2 == '') {
                tmp = row[parameter]
            } else {
                tmp = row[parameter][parameter2]
            }
            if (tmp == value || value == "all")
                match +=
                '<tr>' +
                '<td scope="row">' + row.StationId + '</td>' +
                '<td>' + row.StationName + '</td>' +
                '<td>' + row.Dogname + '</td>' +
                '<td>' + row.Time + '</td>' +
                '<td>' + row.Care + '</td>' +
                '<td>' + row.Care.Wifi + '</td>' +
                '<td>' + row.Comment + '</td>' +
                '<td>' + '<input type="submit" name="stationID" class="btn btn-success btn-circle" value=' + row.StationId + "></input></td>" +
                '</tr>'
        }
        $('tbody').html(match)
    }

    $('#Dogname').on('change', function (e) {
        UpdateTable(e.target.value, '', 'Dogname');
    })

    $('#Time').on('change', function (e) {
        UpdateTable(e.target.value, '', 'Time');
    })

    $('#Care').on('change', function (e) {
        UpdateTable(e.target.value, '', 'Care', 'Wifi');
    })

    var optionBool = $(
        '<option>' + 'טופל' + '</option>' +
        '<option>' + 'לא טופל' + '</option>'
    )
    $('#Care').append(optionBool)

});