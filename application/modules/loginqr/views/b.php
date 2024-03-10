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
            padding: 17px;
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
            background-image: url(https://upload.wikimedia.org/wikipedia/commons/7/76/Capco_wiki_logo.png);
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
</head>

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
                        <td>07</td>
                        <td>16</td>
                        <td>43</td>
                        <td>50</td>
                        <td>68</td>
                    </tr>

                    <tr>
                        <td>04</td>
                        <td>29</td>
                        <td>45</td>
                        <td>57</td>
                        <td>66</td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>18</td>
                        <td class=" free">CAPCO</td>
                        <td>52</td>
                        <td>61</td>
                    </tr>

                    <tr>
                        <td>09</td>
                        <td>24</td>
                        <td>41</td>
                        <td>54</td>
                        <td>63</td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>25</td>
                        <td>42</td>
                        <td>49</td>
                        <td>65</td>
                    </tr>

                </table>
            </card>

</html>
</cards>
</body>

</html>