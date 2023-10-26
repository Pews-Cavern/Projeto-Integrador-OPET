<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiselect Dropdown</title>

</head>
<style>
    .mt-100 {
        margin-top: 100px
    }

    body {
        background: #00B4DB;
        background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
        background: linear-gradient(to right, #0083B0, #00B4DB);
        color: #514B64;
        min-height: 100vh
    }
</style>

<body>



    <script>
        $(document).ready(function () {

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 5,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });


        });
    </script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <div class="row d-flex justify-content-center mt-100">
        <div class="col-md-6"> <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" multiple>
                <option value="HTML">HTML</option>
                <option value="Jquery">Jquery</option>
                <option value="CSS">CSS</option>
                <option value="Bootstrap 3">Bootstrap 3</option>
                <option value="Bootstrap 4">Bootstrap 4</option>
                <option value="Java">Java</option>
                <option value="Javascript">Javascript</option>
                <option value="Angular">Angular</option>
                <option value="Python">Python</option>
                <option value="Hybris">Hybris</option>
                <option value="SQL">SQL</option>
                <option value="NOSQL">NOSQL</option>
                <option value="NodeJS">NodeJS</option>
            </select> </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

</body>

</html>