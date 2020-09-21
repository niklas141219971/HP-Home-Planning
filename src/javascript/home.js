function showCompany() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        var myObj = JSON.parse(this.responseText);
        for (var i = 0; i < myObj.length; i++) {
             content +=
                '<div class="card m-3">\n' +
                '  <div class="card-header">\n' +
                '    ' +myObj[i].service_company_name+
                '  </div>\n' +
                '  <div class="card-body">\n' +
                '    <h5 class="card-title">description</h5>\n' +
                '    <p class="card-text">'+ myObj[i].description+'</p>\n' +
                '    <a href="#" class="btn btn-primary">contact us </a>\n' +
                 '<span class="glyphicon">&#xe182;</span> </div>\n' + '</div> ';
        }
        document.getElementById('company').innerHTML =content;
        content="";
    };
    xhttp.open("GET", "../crud/serviceCompany.php", true);
    xhttp.send();
}
