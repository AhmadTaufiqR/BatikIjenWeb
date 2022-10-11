<!DOCTYPE html>
<html lang="en">
<head>
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />

<div class="container">
    <button id="exportButton" class="btn btn-lg btn-danger clearfix"><span class="fa fa-file-pdf-o"></span> Export to PDF</button>

    <table id="exportTable" class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sue Sharpe</td>
                <td>36</td>
                <td>suesharpe@mitroc.com</td>
            </tr>
            <tr>
                <td>Nieves Hubbard</td>
                <td>45</td>
                <td>nieveshubbard@syntac.com</td>
            </tr>
            <tr>
                <td>Anastasia Underwood</td>
                <td>29</td>
                <td>anastasiaunderwood@gallaxia.com</td>
            </tr>
            <tr>
                <td>Maxine Haley</td>
                <td>32</td>
                <td>maxinehaley@songbird.com</td>
            </tr>
            <tr>
                <td>Bennett Alvarez</td>
                <td>44</td>
                <td>bennettalvarez@marvane.com</td>
            </tr>
            <tr>
                <td>Myrna Ellison</td>
                <td>30</td>
                <td>myrnaellison@zoxy.com</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- you need to include the shieldui css and js assets in order for the components to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTable",
                schema: {
                    type: "table",
                    fields: {
                        Name: { type: String },
                        Age: { type: Number },
                        Email: { type: String }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "Name", title: "Person Name", width: 200 },
                        { field: "Age", title: "Age", width: 50 },
                        { field: "Email", title: "Email Address", width: 200 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "PrepBootstrapPDF"
                });
            });
        });
    });
</script>

<style>
    #exportButton {
        border-radius: 0;
    }
</style>
</body>
</html>