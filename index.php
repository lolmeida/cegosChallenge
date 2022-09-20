<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="content-type" content="text/plain; charset=UTF-8"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Document</title>
</head>

<body>

    <div class="app">
        <!-- Hash form -->
        <div>
            <?php include './templates/hash.php'; ?>
        </div>


        <!-- Input form -->



        <!-- Input form -->
        <div>
            <?php include './templates/table.php'; ?>
            <div>











            </div>

            <p id="html_element"></p>

            <script src="./assets/js/script.js"></script>
            <script src="./assets/js/TableCSVExporter.js"></script>


            <script>
                const dataTable = document.getElementById("table");
                const btnExportToCsv = document.getElementById("dwnl-excel");

                btnExportToCsv.addEventListener("click", () => {
                    const exporter = new TableCSVExporter(dataTable);
                    const csvOutput = exporter.convertToCSV();
                    const csvBlob = new Blob([csvOutput], {
                        type: "text/csv"
                    });
                    const blobUrl = URL.createObjectURL(csvBlob);
                    const anchorElement = document.createElement("a");

                    anchorElement.href = blobUrl;
                    anchorElement.download = "table-export.csv";
                    anchorElement.click();

                    setTimeout(() => {
                        URL.revokeObjectURL(blobUrl);
                    }, 500);
                });
            </script>


</body>

</html>