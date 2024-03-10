<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <style>
        :root {
            --card-color:
                slateblue;
            --card-background:
                cornflowerblue;
            --capco-card:
                #414141;
            --capco-background:
                #313131;
        }

        html,
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: "Roboto";
            background-color:
                var(--capco-background);
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: right;
        }

        h3,
        h4 {
            color: white;
            padding-bottom: 0;
            margin-top: auto;
        }

        table {
            background-color: var(--capco-card);
            border-collapse: separate;
            padding: 25px;
            border-radius: 5%;
            box-shadow: 0 16px 12px 0 rgba(0, 0, 0, 0.2), 0 24px 80px 0 rgba(0, 0, 0, 0.19);
        }

        table tr td {
            background-color: rgb(241, 238, 207);
            padding: 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        table tr td free {
            background-color: rgb(241, 238, 207);
            width: 15px;
            border-radius: 5px;
        }

        table tr {
            border-radius: 20px;
        }

        table th {
            padding: 5px;
            color: white;
        }

        cards {
            display: flex;
            flex-direction: row;
            max-width: 700px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: -10px;
        }

        card {
            margin: auto;
            padding: 10px;
        }

        .highlight {
            background-color: rgb(243, 59, 59);
            color: white;
        }

        .free {
            padding: 0;
            text-align: center;
            color: white;
            background-color: rgb(243, 59, 59);
            font-size: 0.9rem;
        }

        logo {
            height: 150px;
            background-image: url(https://stagingtms.lucky8star.com:18043/uploads/avatar.png);
            width: 300px;

            background-repeat: no-repeat;
            filter: invert();
        }

        name {
            text-align: center;
        }

        #numcard {
            display: none;
        }

        #numround {
            padding: 0;
            padding-top: 0;
            margin-top: -10px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            loadTable();
            $("td").click(function() {
                $(this).toggleClass("highlight");
                saveTable();
            });
        });

        function saveTable() {
            var name = document.getElementById("cardHolder").innerHTML.split(":")[1];
            var numRound = document.getElementById("numround").innerHTML.split(" ")[1];
            var _table = name.split(" ")[1].trim() + "_" + name.split(" ")[2].trim() + " Round" + numRound;
            localStorage._firstUse = "no";
            localStorage[_table] = document.getElementById("cards").innerHTML;
            console.log("saved table for " + _table);
        }

        function loadTable() {
            var name = document.getElementById("cardHolder").innerHTML.split(":")[1];
            var numRound = document.getElementById("numround").innerHTML.split(" ")[1];
            var _table = name.split(" ")[1].trim() + "_" + name.split(" ")[2].trim() + " Round" + numRound;
            if (localStorage._firstUse == "no" && typeof localStorage[_table] !== "undefined") {
                console.log("previous Table for " + _table + " loaded");
                document.getElementById("cards").innerHTML = localStorage[_table];
            } else {
                console.log("first time loading");
            }
        }
    </script>
</head><?php
        $buzzwords = array(
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "10",
            "11",
            "12",
            "13",
            "14"

        );

        shuffle($buzzwords);

        //         $bingocard = "<table id='bingo'
        // summary='A random selection of 25 buzzwords
        // arranged in a bingo card'>";
        //         $bingocard = "<thead><tr>";
        //         $bingocard = "<th>B</th>
        //   <th>I</th><th>N</th>
        //   <th>G</th><th>O</th>";
        //         $bingocard = "</tr></thead>";
        //         $bingocard = "<tbody>";
        //         $bingocard = "<tr>";

        //         // here's the gap 

        //         $bingocard = "</tr>";
        //         $bingocard = "</tbody>";
        //         $bingocard = "</table>";


        for ($cell = 0; $cell < 14; $cell++) {
            $rowend = ($cell + 1) % 5;
            $bingocard =
                $buzzwords[$cell];
            if ($rowend == 0 && $cell < 24) {
                $bingocard;
            }
        }

        // echo "<table>ron</table>";
        ?>

<body>
    <logo></logo>
    <h3 id="cardHolder"> CardHolder: Sample Test<h4 id="numround">Round 3</h4>
        <cards id="cards">
            <card>
                <table id="table">
                    <tr>
                        <th>
                            <h1>B</h1>
                        </th>
                        <th>
                            <h1>I</h1>
                        </th>
                        <th>
                            <h1>N</h1>
                        </th>
                        <th>
                            <h1>G</h1>
                        </th>
                        <th>
                            <h1>O</h1>
                        </th>
                    </tr>
                    <tr>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>z`
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                    </tr>

                    <tr>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                    </tr>

                    <tr>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td class=" free">TESTING</td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                    </tr>

                    <tr>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                    </tr>

                    <tr>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                        <td> <?= rand(0, 10); ?></td>
                    </tr>

                </table>
            </card>

</html>
</cards>
</body>

</html>