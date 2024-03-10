<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <h1> Hour: <p class="hour">0</p>
        MINUTE<p class="minute">0</p>SECOND

        <p id="second"><?php $rand = rand(0, 10);

                        $sesdata = array(


                            'getrand'    => $rand


                        );
                        $this->session->set_userdata($sesdata);

                        $ses =  $this->session->userdata('getrand');
                        var_dump($ses);

                        if ($ses === 9) {
                            echo '<input type="text" name="userId" id="userId" value="' . $ses . '">';
                        }

                        ?></p>
    </h1>

    <input type="text" id="hdnSession" value="<?php echo $ses ?>" />
    <button class="md-trigger" id="modal" data-modal="modal">test</button>

    <input type="text" id="result" value="">

    <script type="text/javascript">
        $(document).ready(function() {

            var test = $('#hdnSession').val();
            console.log(test);

            setInterval(function() {
                refresh();

                if (test === 6) {

                    console.log("3");


                } else if (test === 4) {

                    console.log("4");

                }


                // var sessionValue = $("#hdnSession").val();
                // var hidden_fields = ;
                // Filter those which have a specific type
                // hidden_fields.attr('text');
                // $data = (this).attr("type");
                // console.log(sessionValue);

            }, 1000);
        });

        // Functions
        // window.onload = function(){
        //  window.open(url, "_blank"); // will open new tab on window.onload
        // }

        function refresh() {
            $('#second').load(location.href + " #second");



        }
    </script>



</body>

</html>