function homesite() {
    conten_div = document.getElementById('homeSite');
    content = '<h1 class="text-center">Welcome to home page</h1>' +
        '<h1 class="text-center">by us is easy</h1>';
    conten_div.innerHTML = content;
}

function createForm() {
    conten_div = document.getElementById('homeSite');
    content = '<div class="">\n' +
        '  <h2>Form control: input</h2>\n' +
        '  <p>The form below contains two input elements; one of type text and one of type password:</p>\n' +
        '  <form action="../crud/serviceCompany.php" method="post">\n' +
        '    <div class="form-group">\n' +
        '      <label for="service_company_name">service company name:</label>\n' +
        '      <input type="text" class="form-control" id="service_company_name" name="name">\n' +
        '    </div>\n' +
        '    <div class="form-group">\n' +
        '      <label for="phone_nr">Phone number</label>\n' +
        '      <input type="text" class="form-control" id="phone_nr" name="phone_number">\n' +
        '    </div><div class="form-group">\n' +
        '      <label for="email">email :</label>\n' +
        '      <input type="text" class="form-control" id="email " name="email">\n' +
        '    </div><div class="form-group">\n' +
        '      <label for="description">description:</label>\n' +
        '      <textarea  type="text" class="form-control" id="description" name="description" rows="5">Wir sind für Sie da, wenn es um Reinigung, Pflege und viele weitere Services rund um Wohnung, Haus und Büro geht. Informieren Sie sich über unsere Leistungen, suchen Sie hier Standort und Leistung und übersenden Sie uns anschließend Ihre Anfrage.  </textarea>\n' +
        '    </div>\n' +
        '    <button type="submit" class="btn btn-primary"name="createCommpany">save</button>\n' +
        '  </form>\n' +
        '</div>';
    conten_div.innerHTML = content;
}

function showCompany() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        var myObj = JSON.parse(this.responseText);
        for (var i = 0; i < myObj.length; i++) {
            content +=
                '<div class="card m-3">\n' +
                '  <div class="card-header">\n' +
                '    ' + myObj[i].service_company_name +
                '  </div>\n' +
                '  <div class="card-body">\n' +
                '    <h5 class="card-title">description</h5>\n' +
                '    <p class="card-text">' + myObj[i].description + '</p>\n' +
                '    <a href="#" class="btn btn-primary">contact us </a>\n' +
                '<span class="glyphicon">&#xe182;</span> </div>\n' + '</div> ';
        }
        document.getElementById('homeSite').innerHTML = content;
        content = "";
    };
    xhttp.open("GET", "../crud/serviceCompany.php", true);
    xhttp.send();
}
